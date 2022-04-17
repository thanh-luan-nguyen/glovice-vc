<?php $link_switch = '../lotterygame.php';
include_once("head.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logo.ico" type="image/gif">
    <!-- Title -->
    <title>GLOVICE VC</title>
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
        @media screen and (max-width: 450px) {
            .tradingview-widget-container {
                display: none;
            }
        }

        .neonText {
            font-weight: bold;
            color: #103c31;
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
        }

        .forex .content-01 .content-text {
            margin-bottom: 25px;
            font-size: 20px;
            font-weight: 600;
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

        .forex .content-01 .content-text {
            font-size: 30px;
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
            padding-top: 0px;
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

        .forex .visual {
            background-image: url(../img/promotion/lotterygame.jpg);
        }

        .forex .content-05 .content-list li {
            font-size: 20px;
            line-height: 40px;
            color: #3a3a3a
        }

        .forex .content-05 .content-text {
            margin-bottom: 22px;
        }

        .forex .content-05 .inner {
            /* padding-left: 179px; */
            background: url();
            min-height: 60px;
        }

        .content-color-button,
        .content-white-button {
            padding-bottom: 80px;
            padding-top: 30px;
        }

        .table {}

        .content-store .inner {
            padding: 30px 0 150px;
        }

        table.table-reward {
            margin-top: 30px;
            margin-bottom: 30px;
            background: linear-gradient(to right, #116535 0%, #0e112c 100%);
            color: #fff;
        }

        table.table-reward,
        tr,
        td {
            height: 50px;
            text-align: center;
            border: 0.1px solid;
            line-height: 3.5em;
            font-size: 20px;
            font-weight: 600;

        }

        ul.content-list {
            margin-left: 140px;
        }

        li.li-left {
            width: 35%;
        }

        li.li-center {
            width: 40%;
        }

        li.li-right {
            margin-left: 25px;
        }

        .forex .content-05 .content-list li {
            float: left;
        }

        .content.inner {
            padding-left: 1px !important;
        }

        .forex .content-05 .inner {
            padding-left: 0px !important;
        }

        .forex .content-05 .content-list li {
            line-height: 30px;
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
            color: #3a3a3a
        }
    </style>
</head>

<body>

    <button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
    <!-- allMenu -->
    <?php
    $link_switch = 'vi/lotterygame.php';
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
                        <li><a href="../lotterygame.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
                        <li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- container -->
        <div class="container forex">

            <!-- visual -->
            <div class="visual">
                <div class="inner motion">
                    <div class="visual-title ani-right delay10 neonText">BỐC THĂM TRÚNG THƯỞNG</div>
                    <!-- <div class="visual-forex-i1 ani-left delay2"><img src="img/promotion/special_gift.png"></div> -->
                </div>
            </div>
            <!-- // visual -->

            <div class="content content-01">
                <div class="inner">

                </div>
            </div><!-- // content -->

            <div class="content content-01">
                <div class="inner">
                    <div class="content-text">
                        <div class="content-text">Trò chơi bốc thăm trúng thưởng mang đến cơ hội cho tất cả nhà giao dịch và cả IB với 40 Phần thưởng đặc biệt </div>
                        <h3>Tổng giá trị phần thưởng lên đến 4000 $</h3>
                    </div>
                    <div class="content-color-image">
                        <div class="content-image">
                            <img src="../img/promotion/welcome/newclient.png" alt="">
                            <p>Đa dạng phần thưởng</p>
                        </div>
                        <div class="content-image">
                            <img src="../img/promotion/welcome/0r.png" alt="">
                            <p>Cơ hội bình đẳng cho tất cả khách hàng & IB</p>
                        </div>
                        <div class="content-image">
                            <img src="../img/promotion/welcome/easy.png" alt="">
                            <p>Điều kiện dễ dàng</p>
                        </div>
                    </div>
                </div>
            </div><!-- // content -->

            <div class="content content-05">
                <div class="content inner">
                    <table class="table-reward">
                        <tr>
                            <td><b>Xếp hạng</b></td>
                            <td><b>Phần thưởng</b></td>
                            <td><b>Số lượng người chiến thắng</b></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>iPhone 13 Pro Max 512GB</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Du lịch Thái Lan 4 ngày 3 đêm trọn gói cho 4 người </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Du lịch Phú Quốc 3 ngày 2 đêm trọn gói cho 4 người </td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Hoàn tiền 50$ vào tài khoản giao dịch</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Gói Netflix, Spotify hoặc YouTube Premium 1 tháng</td>
                            <td>30</td>
                        </tr>
                    </table>
                </div>
            </div><!-- // content -->

            <div class="content-color-button"><a href="https://my.kj-glovicevc.com/register">Bắt đầu giao dịch ngay bây giờ</a></div>

            <div class="visual" style="background-image: url(../img/promotion/content-lotterygame.jpg);padding-top: 276px;">
                <div class="inner motion">
                    <div class="visual-title ani-right delay10 neonText"></div>
                </div>
            </div>

            <div class="content content-01">
                <div class="inner">
                    <div class="content-text" style="font-weight: 600;">
                        Bạn muốn tham gia trò chơi bốc thăm trúng thưởng của chúng tôi? <br> Đừng ngần ngại làm theo các bước dưới đây
                    </div>
                    <div class="content-text" style="font-size: 20px;font-weight: 600;line-height: 40px;text-align: left;padding-left: 421px;">
                        <b>Bước 1: </b> Đăng ký tài khoản giao dịch trực tiếp với Glovice VC<br>
                        <b>Bước 2: </b> Thực hiện ít nhất một Khoản tiền gửi tối thiểu cho các loại Tài khoản tương ứng<br>
                        <b>Bước 3: </b> Đạt được khối lượng giao dịch là 4 lot<br>
                        <b>Bước 4: </b>Đăng ký trò chơi với Glovice VC!
                    </div>
                    <div class="content-text" style="font-weight: 600;font-size: 20px;font-style: italic;">
                        Trò chơi xổ số của chúng tôi sẽ được tổ chức vào ngày cuối cùng của thời gian ra mắt <br>
                        Chúng tôi sẽ chọn ngẫu nhiên những nhà giao dịch may mắn đã đăng ký với Glovice VC và đáp ứng đủ các điều kiện nêu trên.
                    </div>
                </div>
            </div><!-- // content -->

            <?php
            include_once('content-store.php');
            ?>

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
        s.id = "zsiqscript"
        s.defer = true;
        s.src = "https://salesiq.zoho.com/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
        d.write("<div id='zsiqwidget'></div>");
    </script>
</body>

</html>