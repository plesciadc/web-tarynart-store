function SubmitFormData() {
    var email = $("#widget-subscribe-form-email").val();
    if(validateEmail(email)) {
        $.post("../include/comingsoon.php", { email: email},
        function(data) {
         //$('#results').html(data);
         $('#widget-subscribe-form')[0].reset();
        });
    }
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}