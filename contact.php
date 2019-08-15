<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Contact";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

    <!-- Popup Window START -->
    <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        Whoa! I haven't finished this page yet, just email me at:
        <a href="mailto:contact@deadfyre.com?" target="_top" style="color: white;"><strong>contact@deadfyre.com</strong></a>
        Or you can slide into my DMs on discord @<b>Drix#8197</b> 😉
    </div>
    <!-- Popup Window END -->

    <!-- Contact Form START -->
    <div class="container">
        <div class="col-md-5" style="margin: auto;">
            <div class="form-area">
                <form role="form">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Me!</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number (Optional)" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required disabled>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7" disabled></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-submit" disabled>Submit Form</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Form END -->

    <?php include 'footer.php'; ?>