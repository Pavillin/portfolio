<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Page Template";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<div class="container">
    <div class="col-md-10" style="margin: auto;">
        <div class="faq">
            <hr>
                <p class="question"><b>Why do I need to fill out a form?</b></p>
                    <p>The form system helps keep things organized. The form will also act as a quote, meaning you must submit a form for me to tell you have much your project will cost.</p>
            <hr>
                <p class="question"><b>How much will it cost?</b></p>
                    <p>Each project is different and prices vary per project. Properly filling out the form will help me decide a price for your project.</p>
            <hr>
            <p class="question"><b>Can I see some of your previous work?</b></p>
                <p>Of course! Click <a href="p_gdesign.php" style="color: #ff9800"><b>here</b></a> to see my previous work!</p>
            <hr>
                <p class="question"><b>What Rocket League items do you accept?</b></p>
                <p>I only accept the following items:</p>
                <p>Keys</p>
                <p>Black Market items</p>
                <p>Painted wheels</p>
                <p>Painted boost</p>
                <p>Painted toppers (<b>ONLY</b> Halo or Wildcat ears)</p>
            <hr>
            <p class="question"><b>My keys are on cooldown, can I pay you once they're done cooldown?</b></p>
                <p>Yes! This is fine with me, however I won't begin work on your project until I recieve payment.</p>
            <hr>
            <p class="question"><b>How long will you take to finish my project?</b></p>
                <p>I strive to have something to show within 7 days. If for some reason that isn't the case I will contact you and let you know why.</p>
            <hr>
            <p class="question"><b>What if I'm not happy with what you made?</b></p>
                <p>Don't worry! I will make changes to the project until you're satisfied.</p>
            <hr>
            <p class="question"><b>Will you keep me updated on the project?</b></p>
                <p>Yes! I try to keep you as involved as possible through the whole process to make sure I'm making exactly what you want!</p>
            <hr>
            <p class="question"><b>What is the whole process?</b></p>
                <p>First, you submit a form detailing what you want created and what your vision is. Next I'll contact you and tell you how much it'll cost. Once I recieve payment I begin working on your project, once I have a polished product you'll see it. After that you either accept what I made and I will send you all the files, or I will make changes you want to the project. This will repeat until you're happy and accept the project.</p>
            <hr>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>