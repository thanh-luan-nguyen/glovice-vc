<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="img/logo.ico" type="image/gif">
  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:image" content="">
  <meta property="og:description" content="">
  <meta property="og:locale" content="">
  <meta property="og:site_name" content="">
  <meta property="fb:app_id" content="">
  <meta name="keywords" content="CFD, Indices, Australian S&P 200 Index,">
  <meta name="description" content="Enjoy the various options of Indices, the most popular form of CFD here. We have a large range of Indices including the Australian S&P 200 Index, UK FTSE 100 Index, and US DJIA Index. " />
  <meta name="author" content="IT Team" />
  <meta name="google" content="nositelinkssearchbox" />
  <meta name="geo.region" content="VN-DN" />
  <meta name="geo.placename" content="Danang" />
  <meta name="geo.position" content="16.06082848620572;108.21597185359056" />


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
    .neonText {
      font-weight: bold;
    }

    .neonText {
      color: #fff;
    }

    .spot-indices .content-color-text {
      font-weight: 600;
      margin-bottom: 10px;
    }

    .spot-indices .content-02 {
      padding-top: 50px;
    }

    .content-title.color-title {
      font-weight: 600;
    }

    .content-store .inner-title {
      font-weight: 600;
    }

    /* LUAN */
    /* .visual-title {
      padding-top: 150px;
    } */

    @media screen and (max-width: 1439px) {
      .visual-title {
        padding-top: unset;
      }
    }

    .content-info-part .text {
      font-weight: 600;
    }

    /* LUAN */
    .calculator.visual {
      background-image: url(img/trading/market/margin_and_pip_calc.jpg);
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

        <h1 class="header-logo"><a href="index.php"><img src="img/main/header-logo-vc.png" alt=""></a></h1>

        <?php
        include_once('menu.php');
        ?>

        <div class="header-lang">
          <button type="button">ENGLISH</button>
          <ul class="list">
            <li><a><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">ENGLISH</span> </a></li>
            <li><a href="vi/marginandpipcalculator.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
          </ul>
        </div>
      </div>
    </div><!-- // header -->

    <!-- container -->
    <div class="container spot-indices">
      <!-- visual -->
      <div class="calculator visual">
        <div class="inner motion">
          <div class="visual-title ani-right delay5 neonText">MARGIN AND PIP <br> CALCULATOR</div>
        </div>
      </div>
      <!-- // visual -->

      <?php include_once('calculator.php') ?>

      <div class="content content-store">
        <div class="inner">
          <div class="inner-left">
            <div class="inner-box">
              <div class="inner-title">Glovice VC MT4</div>
              <div class="inner-text">
                World most popular trading tool for trading CFDs. Try and make <br>
                your own automated Trading bot!
              </div>
              <div class="download-btn-main">
                <div><a href="https://download.mql5.com/cdn/web/16391/mt4/kjglovice4setup.exe">Download MT4 for Windows</a></div>
                <!--	<div><a href="#">Download MT4 App Mac</a></div>-->
              </div>
            </div>
            <div class="inner-box">
              <div class="inner-title">Available on Mobile</div>
              <div class="inner-text">
                Monitor the markets on the go with our mobile application and <br>
                benefit from ultra-low latency trading infrastructure, award- <br>
                winning order execution and deep liquidity. Available for iOS and <br>
                Android devices.
              </div>

              <div class="store-btn">
                <a href="https://download.mql5.com/cdn/mobile/mt4/android?server=KJGlovice-Demo,KJGlovice-Live" class="google"><span>Download on the</span><em>Google Play</em></a>
                <a href="https://download.mql5.com/cdn/mobile/mt4/ios?server=KJGlovice-Demo,KJGlovice-Live" class="apple"><span>Download on the</span><em>App Store</em></a>
              </div>
            </div>
          </div><!-- // inner-left -->
          <div class="inner-right motion">
            <img class="ani-left delay1" src="img/main/mt4_pc_mobile.gif" alt="">
          </div><!-- // inner-right -->
        </div>
      </div><!-- // content -->

    </div>
    <!-- // container -->
    <div id="footer">
      <div class="inner">
        <?php
        include_once('menufooter.php');
        include_once('footer-infor.php');
        ?>

      </div>

      <div class="footer-bottom">
        <div class="inner">
          <ul class="footer_sns">
            <li class="item-01"><a href="#"><img src="img/main/footer_bottom_item_01.png" alt=""></a></li>
            <li class="item-02"><a href="#"><img src="img/main/footer_bottom_item_02.png" alt=""></a></li>
            <li class="item-03"><a href="#"><img src="img/main/footer_bottom_item_03.png" alt=""></a></li>
            <li class="item-04"><a href="#"><img src="img/main/footer_bottom_item_04.png" alt=""></a></li>
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