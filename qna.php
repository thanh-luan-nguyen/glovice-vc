<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/slick.css" />
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/sub.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/common.js"></script>
	<link rel="stylesheet" href="css/qa.css">
	<link rel="icon" href="img/logo.ico" type="image/gif">

	<style>
		.visual-title {
			padding-left: 0px;
			font-weight: 600;
			padding-top: 145px;
			padding-bottom: 145px;
		}

		.platforms .visual {
			background-image: url(./img/qna.png);
		}

		.box-answer a:hover {
			color: blue;
		}

		.box-answer a {
			font-weight: bold;
			text-decoration: underline;
		}
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<?php
	$link_switch = 'vi/qna.php';
	include_once('menumobile.php');
	?>
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
						<li><a href="vi/qna.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
					</ul>
				</div>
			</div>
		</div><!-- // header -->

		<!-- Phan content -->
		<div class="container platforms">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">QUESTION<br>& ANSWER</div>
					<!-- <div class="visual-platforms-i1 ani-top delay2"><img src="../img/qna.png"></div> -->
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<h2>Have Questions? We got Answers!</h2>
				</div>
			</div><!-- // content -->

			<?php
			include_once('content-qna.php');
			?>

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
								<!--<div><a href="#">Download MT4 App Mac</a></div>-->
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
					<div class="inner-right motion animate">
						<img class="ani-left delay1" src="img/main/mt4_pc_mobile.gif" alt="">
					</div><!-- // inner-right -->
				</div>
			</div>
		</div>
		<!-- ket thuc phan content -->
		<div id="footer">
			<div class="inner">
				<?php
				include('menufooter.php');
				include('footer-infor.php');
				?>

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
			</div>
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
		</div><!-- // footer -->
</body>

</html>