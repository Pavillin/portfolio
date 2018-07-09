<?php include 'header.php'; ?>

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
                <h3 style="margin-bottom: 25px; text-align: center;">Design Form!</h3>
                <p style="margin-bottom: 25px; text-align: center;">If you would like to request graphic design work from me,
                    please fill out the form below and DM me on Discord! <b>@Drix#8197</b>.
                    Also, you can check out the work I've done before
                    <a href="p_gdesign.html">here</a>!
                </p>
                <div class="form-group">
                    <div class="form-control" id="textToCopy">
                        Name:
                        <br><br>
                        Payment (PayPal or Rocket League Items):
                        <br><br>
                        Email (Only if payment type is PayPal):
                        <br><br>
                        Design Type(Logo, Banner, etc):
                        <br><br>
                        Details about what you want:
                        <br><br>
                        Extra requirements (Optional):
                    </div>
                </div>


                <button class="btn btn-primary btn-submit" data-clipboard-action="copy" data-clipboard-target="#textToCopy">Copy Form</button>
            </form>
        </div>
    </div>
</div>
<!-- Contact Form END -->

<?php include 'footer.php'; ?>