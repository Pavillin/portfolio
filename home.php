<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Home";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

    <div class="home">
        <div class="home-wrap">
            <div class="col-md-8">
                <div class="img mb-4" style="background-image: url(images/me.jpg);"></div>
                <div class="desc">
                    <hr>
                    <h2 class="subheading">Hello I'm</h2>
                    <h1 class="mb-4 heading">Dylan Sprague</h1>
                    <p class="mb-4 bio">Hailing from Halifax, Nova Scotia, I'm a soon to be graduate of the Computer Programmer Diploma program at Georgian College! I'm a huge gamer and actively compete for <a href="https://twitter.com/frontside_gg" style="color: #ff9800">FrontSide Esports</a> on their Rocket League roster. When I'm not hitting the books or playing games you can catch me adventuring with my dog Oskar or spending time with friends. I'm an openminded individual with a huge love for everything tech and hope to be on the frontlines pushing the boundaries for what's possible with new technology!</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>