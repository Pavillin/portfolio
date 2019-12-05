<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Contact";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

    <!-- Contact Form START -->
    <div class="container">
        <div class="col-md-5" style="margin: auto;">
            <div class="form-area">
                <form role="form" class="contact-form" action="process/contact_form.php" method="post" onSubmit="alert('Email sent.');">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Me!</h3>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required >
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required >
                    </div>
                    <div class="form-group">
                        <input type="tel" pattern="[0-9]{10}" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number (Optional)" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required >
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" name="message" id="message" placeholder="Message" maxlength="140" rows="7" ></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-submit">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Form END -->

    <?php include 'footer.php'; ?>