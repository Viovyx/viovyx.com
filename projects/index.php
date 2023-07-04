<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Head -->
        <?php include(dirname(__FILE__)."/../templates/head.php");?>
    </head>

    <body>
        <div class="body">
            <h1 class="body-text">My Projects:</h1>
            <p class="body-text">Don't be suprised if you see a lot of projects that never get finished.</p>
            <h2 class="project-title">Beat Saber Maps</h2>
            <div class="project-canvas">
                <!-- Done -->
                <a href="https://beatsaver.com/maps/33902" target="_blank" class="project-item">
                    <img src="/images/bs_maps/Hate.jpg" width="300px" height="auto">
                    <p class="project-item-text" id="song-time" >2:17</p>
                    <div class="song-info">
                        <h2 class="project-item-text" id="song-title" >Hate.</h2>
                        <h3 class="project-item-text" id="song-artist" >ThxSoMch</h3>
                    </div>
                    <h4 class="project-status">status <span class="status-done"></span></h4>
                </a>

                <!-- wip -->
                <a class="project-item">
                    <img src="/images/bs_maps/Friesenjung (Sped Up).jpg" width="300px" height="auto">
                    <p class="project-item-text" id="song-time" >2:07</p>
                    <div class="song-info">
                        <h2 class="project-item-text" id="song-title" >Friesenjung (Sped Up)</h2>
                        <h3 class="project-item-text" id="song-artist" >Vieze Asbak, Joost, Ski Aggu</h3>
                    </div>
                    <h4 class="project-status">status <span class="status-wip"></span></h4>
                </a>

                <a class="project-item">
                    <img src="/images/bs_maps/ERROR.jpg" width="300px" height="auto">
                    <p class="project-item-text" id="song-time" >2:45</p>
                    <div class="song-info">
                        <h2 class="project-item-text" id="song-title" >ERROR</h2>
                        <h3 class="project-item-text" id="song-artist" >ROMANTICA</h3>
                    </div>
                    <h4 class="project-status">status <span class="status-wip"></span></h4>
                </a>

                <a class="project-item">
                    <img src="/images/bs_maps/Meltdown.jpg" width="300px" height="auto">
                    <p class="project-item-text" id="song-time" >2:33</p>
                    <div class="song-info">
                        <h2 class="project-item-text" id="song-title" >Meltdown</h2>
                        <h3 class="project-item-text" id="song-artist" >Niall Horan</h3>
                    </div>
                    <h4 class="project-status">status <span class="status-wip"></span></h4>
                </a>

                <!-- Dropped -->
                <a class="project-item">
                    <img src="/images/bs_maps/Kiss You.jpg" width="300px" height="auto">
                    <p class="project-item-text" id="song-time" >2:40</p>
                    <div class="song-info">
                        <h2 class="project-item-text" id="song-title" >Kiss You</h2>
                        <h3 class="project-item-text" id="song-artist" >Nightcore Berlin, Nicco & Josh</h3>
                    </div>
                    <h4 class="project-status">status <span class="status-dropped"></span></h4>
                </a>

                <a class="project-item">
                    <img src="/images/bs_maps/VTUBERS.jpg" width="300px" height="auto">
                    <p class="project-item-text" id="song-time" >2:45</p>
                    <div class="song-info">
                        <h2 class="project-item-text" id="song-title" >VTUBERS</h2>
                        <h3 class="project-item-text" id="song-artist" >Constera</h3>
                    </div>
                    <h4 class="project-status">status <span class="status-dropped"></span></h4>
                </a>
            </div>

            <h2 class="project-title">Websites</h2>
            <div class="project-canvas">
                <!-- wip -->
                <a href="https://github.com/Viovyx/viovyx.com" target="_blank" class="project-item">
                    <img src="/images/Viovyx logo.png" width="300px" height="auto">
                    <div class="song-info">
                        <h2 class="project-item-text" id="website-title" >viovyx.com</h2>
                        <h3 class="project-item-text" id="song-artist" >My main website that you're on right now.</h3>
                    </div>
                    <h4 class="project-status">status <span class="status-wip"></span></h4>
                </a>
            </div>
        </div>
    </body>
    
    <footer>
        <!-- Footer -->
        <?php include(dirname(__FILE__)."/../templates/footer.php");?>
    </footer>
</html>