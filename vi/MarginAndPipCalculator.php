<?php $link_switch = '../MarginAndPipCalculator.php';
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
        .calculator.visual {
            background-image: url(../img/trading/market/margin_and_pip_calc.jpg);
            height: 460px;
            background-repeat: no-repeat;
            background-position: 50% 0;
            background-size: cover
        }
    </style>
</head>

<body>

    <button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
    <!-- allMenu -->
    <?php
    $link_switch = 'vi/SpotIndices.php';
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
                        <li><a href="../MarginAndPipCalculator.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
                        <li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- container -->
        <div class="container spot-indices">
            <!-- visual -->
            <div class="calculator visual">
                <div class="inner motion">
                    <div class="visual-title ani-right delay5 neonText" style="font-weight: bold;">MÁY TÍNH<br>MARGIN VÀ PIP</div>
                </div>
            </div>
            <!-- // visual -->

            <?php include_once('calculator.php') ?>

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