<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo.ico" type="image/gif">.
	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">
	<meta property="og:locale" content="">
	<meta property="og:site_name" content="">
	<meta property="fb:app_id" content="">
	<meta name="keywords" content="Metal, trade, investment">
	<meta name="description" content="Metal trade is often considered a safe-haven investment, especially in times of economic uncertainty." />
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

		#wrap {
			padding-top: 0px;
		}

		.neonText {
			/*color: #fff;*/
			/* text-shadow: 
				0 0 7px #fff,
				0 0 10px #fff,
				0 0 21px #fff,
				0 0 42px #f9e2b9,
				0 0 82px #f9e2b9,
				0 0 92px #f9e2b9,
				0 0 102px #f9e2b9,
				0 0 151px #f9e2b9; */
		}

		.tradingview-widget-container {
			margin: auto;
		}

		.spot-metals .content-color-text {
			margin-bottom: 20px;
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

		.content-color-button,
		.content-white-button {
			padding-top: 30px;
		}
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = 'vi/spotmetals.php';
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
						<li><a href="vi/spotmetals.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->
		<!-- container -->
		<div class="container spot-metals">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">SPOT METALS</div>
					<div class="visual-metals-i1 ani-top delay5">
						<img src="img/trading/market/spot_metals_visual-i1.png">
					</div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-color-text">
						Metal trade is often considered a safe-haven investment, especially in times of economic uncertainty.<br>Trade CFDs on Glovice VC and discover new trading opportunities.
					</div>
					<div class="content-image">
						<!-- <img src="img/trading/spot_metals_content_table.jpg" alt=""> -->
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container">
							<div class="tradingview-widget-container__widget"></div>
							<!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">metal</span></a> by TradingView</div> -->
							<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
								{
									"width": "1100",
									"height": "300",
									"symbolsGroups": [{
										"name": "metal",
										"symbols": [{
												"name": "OANDA:XAGEUR"
											},
											{
												"name": "FXOPEN:XAGUSD"
											},
											{
												"name": "OANDA:XAUEUR"
											},
											{
												"name": "OANDA:XAUUSD"
											},
											{
												"name": "CURRENCYCOM:GOLD"
											}
										]
									}],
									"showSymbolLogo": true,
									"colorTheme": "light",
									"isTransparent": false,
									"locale": "en"
								}
							</script>
						</div>
						<!-- TradingView Widget END -->
					</div>

					<div class="content-color-button"><a href="https://my.kj-glovicevc.com/register">Start Trading Now</a></div>
				</div>
			</div><!-- // content -->

			<div class="content content-02">
				<div class="inner motion">
					<div class="content-title color-title">Why do most traders choose Glovice VC?</div>
					<ul class="glovicefx-list color-list">
						<li class="item1">
							<div class="icon ani-top delay5"></div>
							<div class="text ani-top delay6">
								Narrow spreads and leverage<br>
								up to 1:100 minimize<br>
								investment risks<br>
							</div>
						</li>
						<li class="item2">
							<div class="icon ani-top delay8"></div>
							<div class="text ani-top delay9">
								No slippage,<br>
								market execution<br>
								without rejection
							</div>
						</li>
						<li class="item3">
							<div class="icon ani-top delay11"></div>
							<div class="text ani-top delay12">
								Best market research and<br>
								analysis by the experts<br>
								with hands-on experience
							</div>
						</li>
						<li class="item4">
							<div class="icon ani-top delay14"></div>
							<div class="text ani-top delay15">
								Surplus and stable liquidity<br>
								from top tier banks around<br>
								the world
							</div>
						</li>
						<li class="item5">
							<div class="icon ani-top delay17"></div>
							<div class="text ani-top delay18">
								Client's funds are transparently<br>
								and safely saved in segregated<br>
								accounts in the custodian bank,
								complying with the regulations
							</div>
						</li>
						<li class="item6">
							<div class="icon ani-top delay20"></div>
							<div class="text  ani-top delay21">
								Solid relationship with<br>
								leading banks around the world,<br>
								quick and easy money transaction
							</div>
						</li>
					</ul>
				</div>
			</div><!-- // content -->

			<div class="fixed-bg">
				<div class="content content-03">
					<div class="inner">
						<div class="content-info">
							<div class="content-info-part">
								<div class="title"> Metals</div>
								<div class="text">
								Trading precious metals such as gold in particular has been related to economic wealth and has therefore been highly valued for long times. In the financial markets, metal investments tend to maintain their value over long periods of time. Thus they offer a long-term secure haven for commodity investors.</div>

								<div class="title">Factors affecting valuable metals’ prices</div>
								<div class="text">
									<b>Supply and demand</b><br>With the increase of demand, the metal price will increase whereas when the demand is vulnerable the cost of valuable metals declines. <br><br>
									<b>Value of the U.S Dollar and other economical events.</b><br>
									The price and value of precious metal can be affected by several economic factors such as value of the US dollar, economic and political events, and natural events.<br><br>
									<b>Inflation</b><br>
									Inflation has an immediate impact on the price of valuable metals. Generally, the growing rate of inflation has a tendency to raise the price of valuable metals.
								</div>

								<div class="title">Business demands</div>
								<div class="text">
									Commercial uses for gold, like the increasing demand for gold in the jewelry and electronics business, could make the price of precious metals to rise. Investing in valuable metals can assist investors to hedge towards market volatility, political uncertainty, and financial collapse. It also can be an essential part of a diversified long-term portfolio.
								</div>

								<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">Start Trading Now</a></div>
							</div>
						</div>
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