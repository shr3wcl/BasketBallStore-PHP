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
    $("#form-login").on("submit", (e) => {
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
                } else {
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

$(document).ready(function () {
    $("#button-update-info").click(function (event) {
        event.preventDefault();
        // const password = prompt("Nhập mật khẩu để xác nhận");
        $.post(
            "Middlewares/changeInfo.php", {
                firstname: $("#reg-firstname").val(),
                lastname: $("#reg-lastname").val(),
                gender: $('input[name="gender"]:checked').val(),
                email: $("#reg-email").val(),
                phone: $("#reg-phone").val(),
                address: $("#reg-address").val(),
            },
            function (data) {
                console.log(data);
                let check = true;
                let msg;
                if (typeof data !== "String") {
                    msg = JSON.parse(data);
                    for (const each in msg) {
                        if (msg[each]) {
                            check = false;
                        }
                    }
                }
                if (!check) {
                    $("#register-container .msg-check-fn").html(msg?.msgFn);
                    $("#register-container .msg-check-ln").html(msg?.msgLn);
                    $("#register-container .msg-check-gender").html(msg?.msgGender);
                    $("#register-container .msg-check-email").html(msg?.msgEmail);
                    $("#register-container .msg-check-phone").html(msg?.msgPhone);
                    $("#register-container .msg-check-address").html(msg?.msgAddress);
                } else {
                    alert("Cập nhập thông tin thành công");
                    window.location = "?page=profile";
                }
            }
        );
    });
});

$(document).ready(function () {
    $("#button-change-password").click(function (event) {
        event.preventDefault();
        $.post(
            "Middlewares/changePassword.php", {
                oldPassword: $("#old-password").val(),
                newPassword: $("#new-password").val(),
                confirmPassword: $("#confirm-password").val()
            },
            function (data) {
                let check = true;
                let msg;
                console.log(data);
                if (typeof data !== "String") {
                    msg = JSON.parse(data);
                    for (const each in msg) {
                        if (msg[each] && each !== "msgCheckOld") {
                            check = false;
                            console.log(each);
                        }
                    }
                }
                if (!check) {
                    $("#register-container .msg-check-old-password").html(msg?.msgOldPw);
                    $("#register-container .msg-check-pass").html(msg?.msgCheckConfirm);
                    // $("#register-container .msg-check-retype-pass").html(msg?.msgCheckConfirm);
                } else if (check && msg?.msgCheckOld) {
                    alert("Sai mật khẩu");
                } else {
                    alert("Thay đổi mật khẩu thành công, vui lòng đăng nhập lại");
                    window.location = "?page=logout";
                }


            }
        );
    });
});

$(document).ready(function () {
    $("#submit-buy").click(function (event) {
        $.post(
            "Middlewares/addCart.php", {
                size: $("#size-selected").val(),
                quantity: $("#quantity-cart").val(),
                typeSize: $("#type-product").val(),
                id: $("#id-product").val(),
                restQuantity: $("#quantity-product").text()
            },
            function (data) {
                if (!data) {
                    $('#alert-cart').html("Vui lòng chọn size");
                    setTimeout(() => $('#alert-cart').html(""), 5000);
                } else {
                    alert("Đã thêm vào giỏ hàng");
                }
            }
        )
    })
})

$(document).ready(function () {
    $(".button-delete-item").click(function (event) {
        $.post(
            "Middlewares/deleteCartSession.php", {
                id: $(this).val()
            },
            function (data) {
                if (data) {
                    alert("Xoá thành công");
                    window.location = "?page=cart";
                }
            }
        )
    })
})

$(document).ready(function () {
    $(".btn-update-cart").click(function (e) {
        const id = $(this).attr('id').split('-')[1];
        const size = $(this).attr('id').split('-')[2];
        const type = $(this).attr('id').split('-')[0];
        $.post(
            "Middlewares/updateCart.php", {
                id: id,
                size: size,
                type: type
            },
            function (data) {
                $(`#total-cost-product`).html(Intl.NumberFormat().format(data-30000) + " đ");
                $("#total-cost").html(Intl.NumberFormat().format(data) + " đ");
            }
        )
    })
})