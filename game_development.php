<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Game Development";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

    <!-- Popup Window -->
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Whoa! I haven't finished this page yet. Don't worry it's coming soon!
    </div>
    <!-- Popup Window END -->

    <?php include 'footer.php'; ?>