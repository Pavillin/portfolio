
$(document).ready(function(){
    //Contact Form START
    try{
        $('#characterLeft').text('140 characters left');
        $('#message').keydown(function () {
            var max = 140;
            var len = $(this).val().length;
            if (len >= max) {
                $('#characterLeft').text('You have reached the limit');
                $('#characterLeft').addClass('red');
                $('#btnSubmit').addClass('disabled');
            }
            else {
                var ch = max - len;
                $('#characterLeft').text(ch + ' characters left');
                $('#btnSubmit').removeClass('disabled');
                $('#characterLeft').removeClass('red');
            }
        });
    }
    catch(e){}
    //Contact Form END

    //Copy to clipboard START
    try{
        var clipboard = new ClipboardJS('.btn');
        clipboard.on('success', function(e) {
            console.log(e);
        });
        clipboard.on('error', function(e) {
            console.log(e);
        });
    }
    catch(e){}
    //Copy to clipboard END

    //typed.js START
    try{
        var options = {
            strings: [
                "Hello and welcome to my portfolio!",
                "My name is Dylan aka Drix.",
                "I'm a coder, gamer, and designer.",
                "Enjoy your stay!"
            ],
            typeSpeed: 60,
            backSpeed: 30,
            backDelay: 2000,
            loop:true
        }
        var typed = new Typed(".typing", options);
    }
    catch(e){}
    //typed.js END

    //required graphic form START
    try{
        $("#paymentType").on('change', function(){
            const paymentType = this.value;
            if(paymentType == 'PayPal'){
                $("#gEmail").prop('required', true);
            }else{
                $("#gEmail").prop('required', false);
            }
        });
    }
    catch(e){}
    //required graphic form END

    //BaguetteBox START
    try {
        baguetteBox.run('.tz-gallery');
    } catch (e) {}
    //BaguetteBox END
});
