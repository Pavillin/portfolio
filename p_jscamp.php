<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "JavaScript Camp Projects";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<!-- Projects -->
<div class="projectBox">
        <div class="project" style="background-image: url(http://i.imgur.com/b9r5sEL.jpg);">
                <h3 class="projectName">Drum Kit</h3>
                <a href="javascriptCamp/Drumkit/index.html"><input class="projectBtn" type="submit" value="View"/></a>
                <p>An interactive drum kit using JavaScript</p>
        </div>
</div>

<div class="projectBox">
        <div class="project" style="background-image: url(http://unsplash.it/1500/1000?image=881&blur=50);">
                <h3 class="projectName">Clock</h3>
                <a href="javascriptCamp/Clock/index.html"><input class="projectBtn" type="submit" value="View"/></a>
                <p>A clock build with CSS and JavaScript.</p>
        </div>
</div>

<div class="projectBox">
        <div class="project" style="background-image: url(https://source.unsplash.com/7bwQXzbF6KE/800x500);">
                <h3 class="projectName">CSS Variables</h3>
                <a href="javascriptCamp/CSS-Variables/index.html"><input class="projectBtn" type="submit" value="View"/></a>
                <p>Learning how to use CSS variables with JavaScript.</p>
        </div>
</div>

<div class="projectBox">
        <div class="project" style="background-image: url(images/array.jpg);">
                <h3 class="projectName">Arrays</h3>
                <a href="javascriptCamp/Arrays/index.html"><input class="projectBtn" type="submit" value="View"/></a>
                <p>Everything to do with arrays in JavaScript.</p>
        </div>
</div>
  
<?php include 'footer.php'; ?>