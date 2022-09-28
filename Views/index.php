<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<<<<<<< Updated upstream
    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
=======
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
          integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/home.css">
    <link rel="stylesheet" href="public/css/owl-carousel.css">
    <script src="public/js/build-jquery.js"></script>
>>>>>>> Stashed changes
    <title>Document</title>
</head>
<body>
<style>

<<<<<<< Updated upstream
    .dropbtn {
        background-color: #04AA6D;
        color: white;
        padding: 16px;
        font-size: 16px;
        border: none;
    }
=======
<div class="body-container">
    <?php require_once("directional.php") ?>
</div>
>>>>>>> Stashed changes

    .dropdown {
        position: relative;
        display: inline-block;
    }

<<<<<<< Updated upstream
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
=======
<script src="https://kit.fontawesome.com/4ea6e3ab0b.js" crossorigin="anonymous"></script>
<script src="public/js/bootstrap.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
      integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--<script src="../public/js/bootstrap.bundle.min.js"></script>-->
<script>
    $('.owl-gbr-home').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            375: {
                items: 2
            },
            767: {
                items: 3
            },
            890: {
                items: 4
            },
            1080: {
                items: 5
            },
            1280: {
                items: 6
            }
        }
    });

    $('.owl-gbr-hot').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            375: {
                items: 2
            },
            767: {
                items: 3
            },
            890: {
                items: 4
            },
            1280: {
                items: 5
            }
        }
    });

</script>


<script type="text/javascript">
    $('.dropdown.keep-open').on({
        "shown.bs.dropdown": function () {
            $(this).data('closable', false);
        },
        "click": function () {
            $(this).data('closable', false);
        },
        "hide.bs.dropdown": function () {
            return $(this).data('closable');
        }
    });
</script>
<script type='text/javascript'>
    $(document).ready(function () {
        $('#nav').affix({
            offset: {
//top: $('header').height()
                top: 1
            }
        });

    });
</script>


<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">
    window.___gcfg = {lang: 'vi'};
    (function () {
        var po = document.createElement('script');
        po.type = 'text/javascript';
        po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(po, s);
    })();
</script>
<style>
    .body-container {
        margin-top: 94px !important;
        padding: 28px 4rem;
        background-color: #F5F5F5;
>>>>>>> Stashed changes
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
    <?php require_once ("header/header.php")?>

    <?php require_once ("footer/footer.php")?>
    <script src="https://kit.fontawesome.com/4ea6e3ab0b.js" crossorigin="anonymous"></script>
    <script src="../public/js/bootstrap.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>