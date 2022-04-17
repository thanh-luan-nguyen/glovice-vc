<?php $link_switch = '../qna.php';
include_once("head.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Glovice VC</title>
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/sub.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/common.js"></script>


    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P7GZ6G5');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Title -->
    <title>GLOVICE FX</title>
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/sub.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/common.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/flag-icon.css">
    <style>
        .neonText {
            font-weight: bold;
        }

        #wrap {
            padding-top: 0px;
        }

        .tradingview-widget-container {
            margin: auto;
        }

        .spot-metals .content-color-text {
            margin-bottom: 25px;
            font-weight: 600;
        }

        .content-title.color-title {
            font-weight: 600;
        }

        .content-store .inner-title {
            font-weight: 600;
        }

        .visual-metals-i1 {
            padding-left: 706px;
        }

        .spot-metals .content-02 {
            padding: 60px 0 70px;
        }

        .content-info-part .text {
            font-weight: 600;
        }

        .spot-metals .visual {
            background-image: url(../img/aboutus/contactus/contact-us.jpg);
        }

        .visual-title {
            padding-left: 0px;
        }

        .visual-metals-i1 {
            padding-bottom: 474px;
        }

        .spot-metals .content-01 {
            padding-bottom: 25px;
            padding: 40px 0 0;
        }

        .content-info-part .title {
            padding-top: 10px;
            margin-bottom: 15px;
            color: #08492d
        }

        /*div của Long lờ*/
        #contact {
            width: 1400px;
            margin: auto;
            overflow: hidden;
            padding-top: 40px;
            padding-bottom: 30px;
            font-weight: 600;
            padding-left: 375px;
        }

        #contact .email-us {
            width: 30%;
            float: left;
        }

        #contact .email-us a {
            font-size: 20px;
            text-decoration: none;
            margin-right: 20px;
            color: #053017;
        }

        #contact .our-com {
            width: 70%;
        }

        #contact .contact-text1 {
            font-size: 20px;
            font-weight: bold;
            color: #ffffff;
        }

        #contact .contact-text2 {
            font-size: 30px;
            font-weight: bold;
            color: #08492d;
            padding-left: 15px;
            padding-bottom: 15px;
            font-weight: 600;
        }

        .icon-letter {
            margin: 0 15px;
            padding-top: 5px;
            margin-bottom: 15px;
        }

        #contact .our-com .icon-our {
            margin: 5px 10px;
            float: left;
        }
    </style>
</head>

<body>

    <button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
    <!-- allMenu -->
    <?php
    $link_switch = 'vi/contactus.php';
    include_once('menumobile.php');
    ?>
    <!-- // allMenu -->

    <div id="wrap">
        <div id="header">
            <div class="inner">
                <h1 class="header-logo"><a href="index.php"><img src="../img/main/header-logo-vc.png" alt=""></a></h1>
                <?php
                include_once('menu.php');
                ?>

                <div class="header-user">
                    <a href="https://my.kj-glovicevc.com/login">Đăng Nhập</a>
                    <a href="https://my.kj-glovicevc.com/register">Tạo Tài Khoản Live</a>
                </div><!-- // header-user -->

                <div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register">Demo</a></div><!-- // header-demo -->
                <div class="header-lang">
                    <button type="button">VIETNAM</button>
                    <ul class="list">
                        <li><a href="../contactus.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
                        <li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
                    </ul>
                </div>

            </div>
        </div><!-- // header -->
        <!-- container -->
        <div class="container spot-metals">

            <!-- visual -->
            <div class="visual">
                <div class="inner motion">
                    <div class="visual-title ani-right delay10 neonText">HỖ TRỢ</div>
                    <div class="visual-metals-i1 ani-top delay5">
                        <!-- <img src="img/aboutus/contactus/contact-us.jpg"> -->
                    </div>
                </div>
            </div>
            <!-- // visual -->

            <div class="content content-01">
                <div class="inner" style="width: 90%;">
                    <div class="content-info">
                        <div class="content-info-part">
                            <div class="title" style="font-weight: bold;" >Chúng tôi ở đây vì bạn</div>
                        </div>
                    </div>

                    <div class="content-color-text" style="font-weight: bold;">
                        Vui lòng liên hệ với đội ngũ chăm sóc khách hàng tận tâm của chúng tôi!
                    </div>
                    <!-- <div class="content-color-button"><a href="https://my.kj-glovicevc.com/register">Start Trading Now</a></div> -->
                    <div>

                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.1569901916755!2d-61.225082084729124!3d13.152495614440689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c4751501a16f1a7%3A0x852ca13a834a3fd9!2sFirst%20St%20Vincent%20Bank!5e0!3m2!1sen!2sjp!4v1643593642101!5m2!1sen!2sjp" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div><!-- // content -->

            <!-- Lại là cái div của Long lờ -->
            <div id="contact">
                <div class="email-us">
                    <p class="contact-text2">Liên hệ qua email</p>

                    <a href="mailto:info@kj-glovicevc.com"><img class="icon-letter" src="../img/aboutus/contactus/letter.png" alt="letter">Yêu cầu chung</a>
                    <br>
                    <a href="mailto:support@kj-glovicevc.com"><img class="icon-letter" src="../img/aboutus/contactus/letter.png" alt="letter">Hỗ trợ khách hàng</a>
                    <br>xpe
                    <!-- <a href="#"><img class="icon-letter" src="img/aboutus/contactus/letter.png" alt="letter">Backoffice</a> -->
                </div>
                <div class="our-com">
                    <p class="contact-text2">Cộng đồng của chúng tôi</p>
                    <a class="icon-our" href="#"><img src="../img/aboutus/contactus/yt.png" alt="youtube"></a>
                    <a class="icon-our" href="#"><img src="../img/aboutus/contactus/tl.png" alt="telegram"></a>
                    <a class="icon-our" href="#"><img src="../img/aboutus/contactus/fb.png" alt="facebook"></a>
                    <a class="icon-our" href="#"><img src="../img/aboutus/contactus/in.png" alt="instagram"></a>
                </div>
            </div>
            <!-- Hết cái div của Long lờ -->

        </div>
        <!-- // container -->
        <div id="footer">
            <div class="inner">
                <?php
                include('menufooter.php');
                include("footer-infor.php");
                // <!-- include_once('footer-infor.php'); -->
                ?>
            </div>
            <div class="footer-bottom">
                <div class="inner">
                    <ul class="footer_sns">
                        <li class="item-01"><a href="#"><img src="../img/main/footer_bottom_item_01.png" alt=""></a></li>
                        <li class="item-02"><a href="#"><img src="../img/main/footer_bottom_item_02.png" alt=""></a></li>
                        <li class="item-03"><a href="#"><img src="../img/main/footer_bottom_item_03.png" alt=""></a></li>
                        <li class="item-04"><a href="#"><img src="../img/main/footer_bottom_item_04.png" alt=""></a></li>
                    </ul>
                </div>
            </div><!-- // footer-bottom -->
        </div><!-- // footer -->
    </div>
    <!-- // wrap -->
    <div class="dim"></div>
    <script type="text/javascript">
        var $zoho = $zoho || {};
        $zoho.salesiq = $zoho.salesiq || {
            widgetcode: "b7a46b3af646b4df11935b71b2b89f7e30f497d5f73387e6e6122c8faf48121e",
            values: {},
            ready: function() {}
        };
        var d = document;
        s = d.createElement("script");
        s.type = "text/javascript";
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.com/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
        d.write("<div id='zsiqwidget'></div>");
    </script>
</body>

</html>