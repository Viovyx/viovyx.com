import eventlet

eventlet.monkey_patch()
import os, requests, flask_login
from dotenv import load_dotenv
from flask import Flask, render_template, redirect, abort, request
from flask_socketio import SocketIO
from flask_bcrypt import Bcrypt


# Config
app = Flask(__name__)

load_dotenv()
app.config["SECRET_KEY"] = os.getenv("SECRET_KEY")
socketio = SocketIO(app, cors_allowed_origins="*")

api_base_url = os.getenv("API_URL")
headers = {"X-API-KEY": os.getenv("API_KEY")}

login_manager = flask_login.LoginManager()
login_manager.init_app(app)
bcrypt = Bcrypt(app)


# Helper functions
def get_element(element_id):
    try:
        with open(f"templates/elements/{element_id}.html") as file:
            html_content = file.read()
        return html_content
    except FileNotFoundError:
        return f"Error: {element_id}.html not found", 404


def get_user_data(username):
    api_url = api_base_url + f"users?filter=Username,eq,{username}"
    response = requests.get(api_url, headers=headers)
    response = response.json()["records"]
    return response if len(response) else False


# Flask Login
class User(flask_login.UserMixin):
    pass


@login_manager.user_loader
def user_loader(username):
    if not get_user_data(username):
        return

    user = User()
    user.id = username
    return user


@login_manager.request_loader
def request_loader(request):
    username = request.form.get("username")
    if username == None:
        return

    if not get_user_data(username):
        return

    user = User()
    user.id = username
    return user


@login_manager.unauthorized_handler
def unauthorized_handler():
    return redirect("/")


# Error Handling
@app.errorhandler(404)
def page_not_found(e):
    return render_template(
        "404.html", header=get_element("header"), footer=get_element("footer")
    )


# Routes
@app.route("/")
def home():
    return render_template(
        "home.html", header=get_element("header"), footer=get_element("footer")
    )


@app.route("/socials")
def socials():
    return render_template(
        "socials.html", header=get_element("header"), footer=get_element("footer")
    )


# SocketIO
@socketio.on("connect")
def connect():
    print("Client connected")


@socketio.on("disconnect")
def disconnect():
    print("Client disconnected", request.sid)


# App
if __name__ == "__main__":
    socketio.run(app, host="0.0.0.0", port=5002, debug=True, use_reloader=False)
