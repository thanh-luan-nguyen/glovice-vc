<?php $link_switch = '../specialgift.php';
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
            margin-bottom: 10px;
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
            font-size: 20px;
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
            padding-top: 80px;
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
            background-image: url(../img/promotion/special_gift.png);
        }

        .forex .content-05 .content-list li {
            font-size: 20px;
            line-height: 40px;
        }

        .forex .content-05 .content-text {
            margin-bottom: 22px;
        }

        .content-color-image {
            width: 100%;
            background-color: blueviolet;
        }

        .content-color-image>.content-image {
            width: 30%;
            padding-left: 9.5%;
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

        .forex .content-01 .content-image {
            margin-bottom: 60px;
        }
    </style>
</head>

<body>

    <button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
    <!-- allMenu -->
    <?php
    $link_switch = 'vi/specialgift.php';
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
                        <li><a href="../specialgift.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
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
                    <div class="visual-title ani-right delay10 neonText">PHẦN THƯỞNG ĐẶC BIỆT DÀNH CHO <br> NHÀ GIAO DỊCH XUẤT SẮC NHẤT</div>
                    <!-- <div class="visual-forex-i1 ani-left delay2"><img src="img/promotion/special_gift.png"></div> -->
                </div>
            </div>
            <!-- // visual -->

            <div class="content content-01">
                <div class="inner">
                    <div class="content-text" style="font-weight: 600;">
                        Người nhanh nhất đạt được 100 lots trong vòng 10 ngày giao dịch sẽ nhận được gói du lịch trị giá 3.000 USD<br>
                    </div>
                    <div class="content-color-image">
                        <div class="content-image">
                            <p>Phần thưởng hấp dẫn</p>
                        </div>
                        <div class="content-image">
                            <img src="../img/promotion/welcome/0r.png" alt="">
                            <p>Đặc biệt dành cho các nhà giao dịch dũng cảm</p>
                        </div>
                        <div class="content-image">
                            <img src="../img/promotion/welcome/easy.png" alt="">
                            <p>Cuộc đua giao dịch thần tốc</p>
                        </div>
                    </div>
                    <div class="content-color-button"><a href="https://my.kj-glovicevc.com/register" style="transform: translate(-135%, 50%);">Đến trước, phục vụ trước - FCFS</a></div>
                </div>
            </div><!-- // content -->

            <!-- <div class="fixed-bg">
			<div class="content content-04">
				<div class="inner">
					<div class="content-title">Travel package detail:</div>
					<div class="content-part">
						<div class="title">History of the Forex market</div>
						<div class="text">
							Overseas package travel voucher worth 3,000 USD (for 4 people)<br>
						Singapore - Malaysia tour 5 days 4 nights / Conquer 2 destinations at once<br><br>
							</div>
					</div>			
					<div class="content-part">
						<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">Start Trading Now</a></div>
					</div>
				</div>
			</div>
		</div> -->

            <div class="content content-05">
                <div class="inner">
                    <div class="content-title">Chi tiết gói du lịch:</div>
                    <div class="content-text">Voucher du lịch nước ngoài trọn gói trị giá 3.000 USD (dành cho 4 người) <br> Tour Singapore - Malaysia 5 ngày 4 đêm / Chinh phục cùng lúc 2 điểm đến</div>
                    <ul class="content-list">
                        <li>Vé máy bay khứ hồi Đà Nẵng - Singapore / Malaysia - Đà Nẵng</li>
                        <li>Phòng khách sạn tiêu chuẩn 3 sao dành cho 2 người / xe đưa đón</li>
                        <li>Ăn uống, buffet sáng khách sạn, bao ăn chính 10 - 12 USD / người</li>
                        <li>Bảo hiểm du lịch $ 10.000</li>
                    </ul>
                    <div class="content-text" style="font-size: 20px;color: #000000;font-style: italic;">*Chi phí đi lại có thể thay đổi tùy theo tỷ giá hối đoái và ngày khởi hành. Thông tin của gói du lịch có thể thay đổi tùy vào tình hình và chính sách của các đại lý du lịch tại thời điểm đó</div>
                </div>
            </div><!-- // content -->

            <div class="visual" style="background-image: url(../img/promotion/content-specialgift.jpg);padding-top: 276px;">
                <div class="inner motion">
                    <div class="visual-title ani-right delay10 neonText"></div>
                    <!-- <div class="visual-forex-i1 ani-left delay2"><img src="img/promotion/special_gift.png"></div> -->
                </div>
            </div>

            <div class="content content-01">
                <div class="inner">
                    <div class="content-text" style="font-weight: 600;">
                        Bạn không muốn bỏ lỡ cơ hội có một không hai này? <br> Hãy làm theo hướng dẫn bên dưới:
                    </div>
                    <div class="content-text" style="font-size: 20px;font-weight: 600;line-height: 40px;text-align: left;padding-left: 421px;">
                        <b>Bước 1: </b> Đăng ký tài khoản giao dịch trực tiếp với Glovice VC<br>
                        <b>Bước 2: </b> Nạp khoản tiền gửi tối thiểu cho các loại Tài khoản tương ứng<br>
                        <b>Bước 3: </b> Đạt được khối lượng giao dịch là 100 lot trong vòng 10 ngày trong thời gian cuộc thi (3 tháng)<br>
                        <b>Bước 4: </b> Liên hệ với Glovice VC để nhận Quà của bạn
                    </div>
                    <div class="content-text" style="font-weight: 600;font-size: 20px;font-style: italic;">
                        Xin lưu ý rằng cuộc thi này sẽ bị đóng khi chúng tôi tìm thấy người chiến thắng! Vì vậy, hãy là nhà giao dịch may mắn nhất bây giờ!
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
        s.id = "zsiqscript";
        s.defer = true;
        s.src = "https://salesiq.zoho.com/widget";
        t = d.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(s, t);
        d.write("<div id='zsiqwidget'></div>");
    </script>
</body>

</html>