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
			background-image: url(./img/promotion/special_gift.png);
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
				<h1 class="header-logo"><a href="index.php"><img src="img/main/header-logo-vc.png" alt=""></a></h1>
				<?php
				include_once('menu.php');
				?>

				<div class="header-lang">
					<button type="button">ENGLISH</button>
					<ul class="list">
						<li><a><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">ENGLISH</span> </a></li>
						<li><a href="vi/specialgift.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
					</ul>
				</div>
			</div>
		</div><!-- // header -->

		<!-- container -->
		<div class="container forex">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">BEST TRADER'S<br>SPECIAL GIFT</div>
					<!-- <div class="visual-forex-i1 ani-left delay2"><img src="img/promotion/special_gift.png"></div> -->
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-text" style="font-weight: 600;">
						The fastest person to reach 100 lots within 10 trading days will get a 3,000$ travel package voucher<br>
					</div>
					<div class="content-color-image">
						<div class="content-image">
							<img src="img/promotion/welcome/newclient.png" alt="">
							<p>Marvelous Award</p>
						</div>
						<div class="content-image">
							<img src="img/promotion/welcome/0r.png" alt="">
							<p>Especially for Brave Traders</p>
						</div>
						<div class="content-image">
							<img src="img/promotion/welcome/easy.png" alt="">
							<p>Speedy Trading Race</p>
						</div>
					</div>
					<div class="content-color-button"><a href="https://my.kj-glovicevc.com/register">First come, first served</a></div>
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
					<div class="content-title">Travel package detail:</div>
					<div class="content-text">Overseas package travel voucher worth 3,000 USD (for 4 people)<br>Singapore - Malaysia tour 5 days 4 nights / Conquer 2 destinations at once</div>
					<ul class="content-list">
						<li>Return airline ticket Da Nang - Singapore / Malaysia - Da Nang</li>
						<li>3-star standard hotel room for 2 people / shuttle bus</li>
						<li>Meals, hotel breakfast buffet, main meal 10 - 12 USD / person included</li>
						<li>$10,000 travel insurance</li>
					</ul>
					<div class="content-text" style="font-size: 20px;color: #000000;font-style: italic;">*Travel expenses may vary depending on the exchange rate and departure date. The travel package's information might be changed due to the travel agency's circumstances</div>
				</div>
			</div><!-- // content -->

			<div class="visual" style="background-image: url(./img/promotion/content-specialgift.jpg);padding-top: 276px;">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText"></div>
					<!-- <div class="visual-forex-i1 ani-left delay2"><img src="img/promotion/special_gift.png"></div> -->
				</div>
			</div>

			<div class="content content-01">
				<div class="inner">
					<div class="content-text" style="font-weight: 600;">
						Don't want to miss this incredible chance?<br>Follow the instructions below:
					</div>
					<div class="content-text" style="font-size: 20px;font-weight: 600;line-height: 40px;text-align: left;padding-left: 421px;">
						<b>Step 1:</b> Register a live trading account with Glovice VC<br>
						<b>Step 2:</b> Make at least a minimum deposit for respective account types<br>
						<b>Step 3:</b> Reach a trading volume of 100 lots within 10 days during the campaign period (3 months)<br>
						<b>Step 4:</b> Contact Glovice VC to claim your gift
					</div>
					<div class="content-text" style="font-weight: 600;font-size: 20px;font-style: italic;">
						Please be acknowledged that this campaign will be closed once we find the winner! Good luck with trading!
						<br>
						Click here for further information <a href="./best-trader's-contest-rules.pdf" style="text-decoration:underline;" target="_blank">(best-trader's-contest-rules.pdf)</a>
					</div>
				</div>
			</div><!-- // content -->

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
								<!-- // <div><a href="#">Download MT4 App Mac</a></div> -->
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
		</div>
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