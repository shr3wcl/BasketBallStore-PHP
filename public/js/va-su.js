$(document).ready(() => {
    $("#login-container input").on("keyup", (event) => {
        $(event.currentTarget).parent().children("label").children("span").html("");
        $(event.currentTarget).parent().parent().children(".msg-check-login").html("");
    })
})

$(document).ready(function () {
    $("#register-container input").on("keyup", function () {
        $(this).parent().children("h6").children("span").html("");
    });
    $('#register-container input[name="gender"]').change(() => {
        $('#register-container input[name="gender"]').parent().parent().children("h6").children("span").html("");
    });
})

$(document).ready(() => {
    $("#form-login").on("submit", (e)=>{
        e.preventDefault();
        $.post(
            "Middlewares/login.php",
            {
                username: $("#input-username-login").val(),
                password: $("#input-password-login").val()
            },
            (data) => {
                const msg = JSON.parse(data);
                console.log(msg);

                let check = true;
                for (const each in msg) {
                    if (msg[each]) {
                        check = false;
                    }
                }
                if (!check) {
                    $("#login-container .msg-check-username").html(msg?.msgUsername);
                    $("#login-container .msg-check-password").html(msg?.msgPassword);
                    $("#login-container .msg-check-login").html(msg?.msgLogin);
                }
                else{
                    console.log(1);
                    window.location = "?page=home";
                }
            })
    })
})

$(document).ready(function () {
    $("#button-register").click(function (event) {
        event.preventDefault();
        $.post(
            "Middlewares/register.php", {
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
                for (const each in msg) {
                    if (msg[each]) {
                        check = false;
                    }
                }
                if (!check) {
                    $("#register-container .msg-check-fn").html(msg?.msgFn);
                    $("#register-container .msg-check-ln").html(msg?.msgLn);
                    $("#register-container .msg-check-gender").html(msg?.msgGender);
                    $("#register-container .msg-check-username").html(msg?.msgUsername);
                    $("#register-container .msg-check-pass").html(msg?.msgPassword);
                    $("#register-container .msg-check-email").html(msg?.msgEmail);
                    $("#register-container .msg-check-phone").html(msg?.msgPhone);
                } else {
                    window.location = "?page=login";
                }
            }
        );
    });
});