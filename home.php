<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Home";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<p style="color: #fff; text-align: center; margin-top: 20px;">Soon&trade;</p>

<?php include 'footer.php'; ?>