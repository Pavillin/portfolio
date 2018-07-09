<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Portfolio";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

    <!-- Projects START -->
    <div class="projectBox">
        <div class="project" style="background-image: url(images/strangerThings.jpg);">
            <h3 class="projectName">Stranger Things Alphabet</h3>
            <a href="https://trello.com/b/VKnxLetn"><input class="projectBtn" type="submit" value="View"/></a>
            <p>Physical stranger things alphabet powered with an Arduino board.</p>
        </div>
    </div>

    <div class="projectBox">
        <div class="project" style="background-color: #EE7700;">
            <h3 class="projectName">The DeadFyre Project</h3>
            <a href="https://deadfyre.com"><input class="projectBtn" type="submit" value="View"/></a>
            <p>A landing page that's still a mystery, shhh!</p>
        </div>
    </div>

    <div class="projectBox">
        <div class="project" style="background-image: url(images/a2.jpg);">
            <h3 class="projectName">Arma2 DayZ Game Servers</h3>
            <a href="http://deadfyre.com/dayz/index.html"><input class="projectBtn" type="submit" value="View"/></a>
            <p>Build from the ground up to provide the best playing experience.</p>
        </div>
    </div>

    <div class="projectBox">
        <div class="project" style="background-image: url(images/jscamp.jpg);">
            <h3 class="projectName">JavaScript Camp Projects</h3>
            <a href="p_jscamp.php"><input class="projectBtn" type="submit" value="View"/></a>
            <p>Everything from an animated clock to a interactive drumkit.</p>
        </div>
    </div>

    <div class="projectBox">
        <div class="project" style="background-image: url(images/graphicdesign.jpg);">
            <h3 class="projectName">Graphic Design Work</h3>
            <a href="p_gdesign.php"><input class="projectBtn" type="submit" value="View"/></a>
            <p>Some of my work from Photoshop and Cinema 4D.</p>
        </div>
    </div>

    <div class="projectBox" target="comingSoon">
        <div class="project" style="background-image: url(images/a3.jpg);">
            <h3 class="projectName">Arma3 Exile Game Servers</h3>
            <a href="a3exile"><input class="projectBtn" type="submit" value="Coming Soon"/></a>
            <p>Build from the ground up to provide the best playing experience.</p>
        </div>
    </div>

    <div class="projectBox" target="comingSoon">
        <div class="project" style="background-image: url(images/rocketleague.jpg);">
            <h3 class="projectName">Rocket League Mods</h3>
            <a href="rlmods"><input class="projectBtn" type="submit" value="Coming Soon"/></a>
            <p>Custom maps, modes, skins, and more!</p>
        </div>
    </div>
    <!-- Projects END -->

<?php include 'footer.php'; ?>