function preventDefault(e) {
    e.preventDefault();
}

$(document).ready(function () {
    $("#button-register").click(function (event) {
        event.preventDefault();
        $.post(
            "Middlewares/login.php", {
                firstname: $("#reg-firstname").val(),
                lastname: $("#reg-lastname").val(),
                gender: $('input[name="gender"]:checked').val(),
                user: $("#reg-username").val(),
                pass: $("#reg-password").val(),
                repass: $("#reg-re-password").val(),
                email: $("#reg-email").val(),
                phone: $("#reg-phone").val()
            },
            function (data) {
                const msg = JSON.parse(data);
                let check = true;
                for (const each in msg){
                    if(msg[each]){
                        check=false;
                    }
                }
                if (!check) {
                    // $("#register-container .msg-check-username").css("display", "inline-block");
                    // $("#register-container .msg-check-username").slideDown("slow");
                    $("#register-container .msg-check-username").html(msg?.msgUsername);
                    console.log(msg);
                }
                else{

                }
            }
        );
    });
});