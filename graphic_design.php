<?php
    ob_start();
    include("header.php");
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Graphic Design";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;
?>

<!-- Popup Window START -->
<div class="alert">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
    If Discord isn't your thing, just email me at:
    <a href="mailto:contact@deadfyre.com?" target="_top" style="color: white;"><strong>contact@deadfyre.com</strong></a>
</div>
<!-- Popup Window END -->

<!-- Contact Form START -->
<div class="container">
        <div class="col-md-5" style="margin: auto;">
            <div class="form-area">
                <form role="form" method="POST" action="process/graphic_design_form.php" id="cntform" onSubmit="alert('Form submitted.');">
                    <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Design Form!</h3>
                    <p style="margin-bottom: 25px; text-align: center;">If you would like to request graphic design work from me,
                        please fill out the form below and I'll contact you on Discord!
                        Also, you can check out the work I've done before
                        <a href="p_gdesign.php">here</a>!

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                    </div>
                    <div class="form-group">
                            <input type="text" class="form-control" id="discord" name="discord" placeholder="Discord (Drix#8197)" required>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="paymentType" name="paymentType" required>
                                <option value=""hidden>Select Payment Type</option>
                                <option value="PayPal">PayPal</option>
                                <option value="Rocket League Items">Rocket League Items</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="gEmail" name="gEmail" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="designType" name="designType" placeholder="Design Type(Logo, Banner, etc)" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" type="textarea" id="details" name="details" placeholder="Details about what you want"
                         maxlength="750" rows="7" form="cntform" required></textarea>
                    </div>
                    <div class="form-group">
                            <textarea class="form-control" type="textarea" id="extra" name="extra" placeholder="Extra requirements (Optional)"
                             maxlength="200" rows="7" form="cntform"></textarea>
                        </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary btn-submit">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Contact Form END -->

<?php include 'footer.php'; ?>