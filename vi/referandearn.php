<?php $link_switch = '../referandearn.php';
include_once("head.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/logo.ico" type="image/gif">
    <!-- Title -->
    <title>GLOVICE VC</title>
    <link rel="stylesheet" href="../css/slick.css" />
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/common.css">
    <link rel="stylesheet" href="../css/sub.css">
    <link rel="stylesheet" href="../css/3buoc.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/jquery.easing.1.3.min.js"></script>
    <script src="js/slick.js"></script>
    <script src="js/common.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/flag-icon.css">
    <style>
        @media screen and (max-width: 450px) {
            .tradingview-widget-container {
                display: none;
            }
        }

        #wrap {
            padding-top: 0px;
        }

        .timeline {
            text-align: left;
            width: 60%;
        }

        .tradingview-widget-container {
            margin: 0 auto;
            padding: 0 auto;
        }

        @media screen and (max-width: 1200px) {
            .tradingview-widget-container {
                display: none;
            }
        }

        .neonText-RE {
            font-weight: bold;
            color: #fff;
        }

        .forex .content-02 .content-title {
            font-weight: 600;
        }

        .forex .content-03 {
            padding-top: 0px;
            padding-bottom: 40px;
        }

        .forex .content-01 {
            padding-top: 50px;
            padding-bottom: 20px;
        }

        .forex .content-01 .content-text {
            margin-bottom: 0px;
            font-size: 30px;
            color: #08492d;
        }

        .forex .content-03 .content-title {
            color: #000;
            font-weight: 600;
            font-size: 30px;
            margin-bottom: 40px;
            margin-top: 40px;
        }

        .forex .content-03 .content-list .title {
            color: #08492d;
        }

        .forex .content-04 .content-title {
            margin-bottom: 0px;
            font-weight: 600;
        }

        .forex .content-04 .content-part .title {
            font-weight: 600;
        }

        .forex .content-02 .content-title {
            font-size: 30px;
        }

        .forex .content-05 {
            padding-top: 10px;
            background-color: #9d9b9b3d;
        }

        .forex .content-04 {
            padding-top: 50px;
        }

        .forex .content-04 .content-part .text {
            font-weight: 600;
            line-height: 1.33;
        }

        .visual-title {
            padding-left: 0px;
            padding-top: 186px;
            padding-bottom: 200px;
        }

        #visual-up {
            background: url(../img/promotion/refer/anhbia.jpg) top center / cover no-repeat;
        }

        .forex .content-05 .content-list li {
            font-size: 20px;
            line-height: 40px;
        }

        .forex .content-05 .content-text {
            margin-bottom: 22px;
        }

        .forex .content-05 .content-title {
            text-align: center;
        }

        #visual-down .visual-title {
            width: 100%;
            background: url(../img/promotion/refer/anhbanner.jpg) top center/ cover no-repeat;
            height: 500px;
        }

        .forex .content-05 .content-title {
            padding-top: 60px;
        }

        .forex .content-05 .inner {
            background: url();
            min-height: 220px;
            padding-left: 0px;
            padding-bottom: 60px;
            padding-top: 50px;
        }

        .timeline .box .container .cards .card {
            width: 100%;
            padding-right: 20px;
        }

        .timeline .box .bottom {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .timeline .box .bottom .btn {
            margin-left: 0px;
        }

        .timeline h3 {
            line-height: 5px;
        }

        .content-color-image {
            width: 100%;
            background-color: blueviolet;
        }

        .content-color-image>.content-image {
            width: 30%;
            padding-left: 11%;
            float: left;
            /* border: 0.1px solid; */
            height: auto;
        }

        .content-image>img {
            width: 70px;
            height: 70px;
        }

        .content-image>p {
            font-size: 20px;
            font-weight: 600;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
    <!-- allMenu -->
    <?php
    $link_switch = 'vi/referandearn.php';
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
                    <a href="https://my.kj-glovicevc.com/login" target="_blank">Đăng Nhập</a>
                    <a href="https://my.kj-glovicevc.com/register" target="_blank">Tạo Tài Khoản Live</a>
                </div><!-- // header-user -->
                <div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register" target="_blank">Demo</a></div><!-- // header-demo -->
                <div class="header-lang">
                    <button type="button">VIETNAM</button>
                    <ul class="list">
                        <li><a href="../referandearn.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
                        <li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- // header -->

        <!-- container -->
        <div class="container forex">

            <!-- visual -->
            <div id="visual-up">
                <div class="inner motion">
                    <div class="visual-title ani-right delay10 neonText-RE">GIỚI THIỆU VÀ NHẬN THƯỞNG</div>
                    <!-- <div class="visual-forex-i1 ani-left delay2"><img src="img/promotion/special_gift.png"></div> -->
                </div>
            </div>
            <!-- // visual -->

            <div class="content content-01">
                <div class="inner">
                    <div class="content-text" style="font-weight: 600;">
                        <h3>Kiếm 30 đô la cho mỗi người bạn hoặc thành viên gia đình mà bạn đưa đến Glovice VC.</h3>
                        <br>Sử dụng link giới thiệu của riêng bạn tại tài khoản Glovice VC và gửi nó cho bạn bè của bạn.
                    </div>
                    <div class="content-color-image">
                        <div class="content-image">
                            <img src="../img/promotion/welcome/newclient.png" alt="">
                            <p>Tiền thưởng không giới hạn</p>
                        </div>
                        <div class="content-image">
                            <img src="../img/promotion/welcome/0r.png" alt="">
                            <p>Quy trình nhanh chóng và dễ dàng</p>
                        </div>
                        <div class="content-image">
                            <img src="../img/promotion/welcome/easy.png" alt="">
                            <p>Điều kiện đơn giản</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="fixed-bg">
                <div class="content content-05">
                    <div class="inner">
                        <div class="content-info-part">
                            <div class="timeline">
                                <h3>Mời càng nhiều bạn bè, bạn càng nhận được nhiều tiền thưởng</h3>
                                <h3>Siêu đơn giản, đăng ký giới thiệu ngay bây giờ !</h3>
                                <div class="box">
                                    <div class="container">
                                        <div class="lines">
                                            <div class="dot"></div>
                                            <div class="line"></div>
                                            <div class="dot"></div>
                                            <div class="line"></div>
                                            <div class="dot"></div>
                                            <div class="line"></div>
                                        </div>
                                        <div class="cards">
                                            <div class="card">
                                                <h4>BƯỚC 1</h4>
                                                <p>Đăng ký hoặc đăng nhập vào tài khoản Glovice VC của bạn và nhận liên kết giới thiệu của bạn trong cổng thông tin</p>
                                            </div>
                                            <div class="card mid">
                                                <h4>BƯỚC 2</h4>
                                                <p>Chia sẻ liên kết với bạn bè của bạn</p>
                                            </div>
                                            <div class="card">
                                                <h4>BƯỚC 3</h4>
                                                <p>Kiếm 30 đô la khi người bạn được giới thiệu của bạn đạt được 2 lot cho khối lượng giao dịch</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom">
                                        <div class="btn"><a href="https://my.kj-glovicevc.com/register" target="_blank">Nhận tiền thưởng của bạn ngay bây giờ</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="content-color-button" style="margin-top: 0px;padding-bottom: 70px;">
                    <a href="https://my.kj-glovicevc.com/register">Refer and earn now</a>
                </div>  -->
                </div>
            </div>
            <!-- // content -->

            <div id="visual-down">
                <div class="inner motion">
                    <div class="visual-title ani-right delay10 neonText-RE"></div>
                    <!-- <div class="visual-forex-i1 ani-left delay2"><img src="img/promotion/special_gift.png"></div> -->
                </div>
            </div>

            <?php
            include_once('content-store.php');
            ?>
            <!-- // content -->

        </div>
        <!-- // container -->

        <div id="footer">
            <div class="inner">
                <?php
                include('menufooter.php');
                include('footer-infor.php');
                ?>
            </div>
            <div class="footer-bottom">
                <div class="inner">
                    <ul class="footer_sns">
                        <li class="item-01">
                            <a href="#"><img src="../img/main/footer_bottom_item_01.png" alt=""></a>
                        </li>
                        <li class="item-02">
                            <a href="#"><img src="../img/main/footer_bottom_item_02.png" alt=""></a>
                        </li>
                        <li class="item-03">
                            <a href="#"><img src="../img/main/footer_bottom_item_03.png" alt=""></a>
                        </li>
                        <li class="item-04">
                            <a href="#"><img src="../img/main/footer_bottom_item_04.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- // footer-bottom -->
        </div>
        <!-- // footer -->
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