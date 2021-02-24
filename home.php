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
                <div class="img mb-4" style="background-image: url(Images/me2.jpg)"></div>
                <div class="desc">
                    <hr>
                    <h2 class="subheading">Hello I'm</h2>
                    <h1 class="mb-4 heading">Dylan 'spragouu' Sprague</h1>
                    <p class="mb-4 bio">Hailing from Halifax, Nova Scotia, I'm a recent graduate of the Computer Programmer Co-op Diploma program at Georgian College and a fulltime Programmer Analyst for <a href="https://www.greatideaz.com/" style="color: #ff9800">GreatIdeaz</a>. I'm a huge gamer and actively Coach/Substitute for <a href="https://wyvernrealm.uk/immenz-esports/" style="color: #ff9800">Immenz Esports</a> Rocket League roster. When I'm not working or playing games you can catch me adventuring with my dog Oskar or spending time with friends. I'm an open-minded individual with a huge love for everything tech and hope to be on the frontlines pushing the boundaries for what's possible with new technology!</p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>