<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Head -->
        <?php include(dirname(__FILE__)."/../templates/head.php");?>
        <script src="/scripts/projects.js"></script>
    </head>

    <body>
        <div class="body">
            <h1 class="body-text">My Projects:</h1>
            <p class="body-text">Don't be suprised if you see a lot of projects that never get published, especially Beat Saber maps.</p>
            <p class="body-text"><a href="#beat-saber">Beat Saber Maps</a> | <a href="#wallpaper-engine">Wallpaper Engine</a> | <a href="#websites">Websites</a> | <a href="#other">Other</a></p>
            
            <h2 class="project-title" id="beat-saber">Beat Saber Maps</h2>
            <div class="project-canvas beat-saber">
                <!-- Individual items will be populated here by JavaScript -->
            </div>

            <h2 class="project-title" id="wallpaper-engine">Wallpaper Engine</h2>
            <div class="project-canvas wallpapers">
                <!-- Individual items will be populated here by JavaScript -->
            </div>

            <h2 class="project-title" id="websites">Websites</h2>
            <div class="project-canvas websites">
                <!-- Individual items will be populated here by JavaScript -->
            </div>

            <h2 class="project-title" id="other">Other</h2>
            <div class="project-canvas other">
                <!-- Individual items will be populated here by JavaScript -->
            </div>
        </div>
    </body>
    
    <footer>
        <!-- Footer -->
        <?php include(dirname(__FILE__)."/../templates/footer.php");?>
    </footer>
</html>