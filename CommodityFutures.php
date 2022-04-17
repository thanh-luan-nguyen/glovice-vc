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
	<meta property="og:title" content="">
	<meta property="og:type" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">
	<meta property="og:locale" content="">
	<meta property="og:site_name" content="">
	<meta property="fb:app_id" content="">
	<meta name="keywords" content="commodity , products, trade ">
	<meta name="description" content="We provide various soft commodity products to trade, including coffee, soybeans, sugar, corn, cocoa,
and wheat as CFDs and they are all with low spreads and leverage up to 1:100." />
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

	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/common.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/flag-icon.css">

	<style>
		.tradingview-widget-container {
			margin: 0 auto;
			padding: 0 auto;
		}

		@media screen and (max-width: 1200px) {
			.tradingview-widget-container {
				display: none;
			}
		}

		.neonText {
			font-weight: bold;
			color: #fff;
		}

		.commodity_futures .content-color-text {
			font-weight: 600;
		}

		.content-title {
			font-weight: 600;
		}

		.content-info-part .title {
			margin-top: 45px;
		}

		.visual-title {
			padding-left: 0px;
		}

		.commodity_futures .content-02 {
			padding: 85px 0 120px;
		}

		.content-info-part .text {
			font-weight: 600;
		}

		.content-store .inner-text {
			font-size: 18px;
		}

		.commodity_futures .content-03 {
			padding: 5px 0 75px;
		}
	</style>
</head>

<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P7GZ6G5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = 'vi/commodityfutures.php';
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
						<li><a href="vi/commodityfutures.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
					</ul>
				</div>
			</div>
		</div><!-- // header -->
		<!-- container -->
		<div class="container commodity_futures">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">COMMODITY<br>FUTURES</div>
					<div class="visual-commodity-i1 ani-left delay2"><img src="img/trading/market/commodity_futures_visual.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-color-text">
						We provide various soft commodity products to trade, including coffee, soybeans, sugar, corn, cocoa,<br>and wheat as CFDs and they are all with low spreads and leverage up to 1:100. </div>
					<div class="content-image" style="margin-bottom: 0;">
						<!-- <img src="img/trading/commodity_futures_content_01_image.jpg" alt=""> -->
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container">
							<div class="tradingview-widget-container__widget"></div>
							<!-- <div class="tradingview-widget-copyright"><a href="https://vn.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Các Thị trường Tài chính</span></a> bởi TradingView</div> -->
							<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
								{
									"width": 1200,
									"height": 800,
									"symbolsGroups": [{
											"name": "Indices",
											"originalName": "Indices",
											"symbols": [{
													"name": "FOREXCOM:SPXUSD",
													"displayName": "S&P 500"
												},
												{
													"name": "FOREXCOM:NSXUSD",
													"displayName": "Nasdaq 100"
												},
												{
													"name": "FOREXCOM:DJI",
													"displayName": "Dow 30"
												},
												{
													"name": "INDEX:NKY",
													"displayName": "Nikkei 225"
												},
												{
													"name": "INDEX:DEU30",
													"displayName": "DAX Index"
												},
												{
													"name": "FOREXCOM:UKXGBP",
													"displayName": "UK 100"
												},
												{
													"name": "#GLOBALPRIME:USCOCOA",
													"displayName": "US Cocoa"
												},
												{
													"name": "COPPER",
													"displayName": "Copper.f"
												}
											]
										},
										{
											"name": "Commodities",
											"originalName": "Commodities",
											"symbols": [{
													"name": "CME_MINI:ES1!",
													"displayName": "S&P 500"
												},
												{
													"name": "CME:6E1!",
													"displayName": "Euro"
												},
												{
													"name": "COMEX:GC1!",
													"displayName": "Gold"
												},
												{
													"name": "NYMEX:CL1!",
													"displayName": "Crude Oil"
												},
												{
													"name": "NYMEX:NG1!",
													"displayName": "Natural Gas"
												},
												{
													"name": "CBOT:ZC1!",
													"displayName": "Corn"
												}
											]
										},
										{
											"name": "Bonds",
											"originalName": "Bonds",
											"symbols": [{
													"name": "CME:GE1!",
													"displayName": "Eurodollar"
												},
												{
													"name": "CBOT:ZB1!",
													"displayName": "T-Bond"
												},
												{
													"name": "CBOT:UB1!",
													"displayName": "Ultra T-Bond"
												},
												{
													"name": "EUREX:FGBL1!",
													"displayName": "Euro Bund"
												},
												{
													"name": "EUREX:FBTP1!",
													"displayName": "Euro BTP"
												},
												{
													"name": "EUREX:FGBM1!",
													"displayName": "Euro BOBL"
												}
											]
										},
										{
											"name": "Forex",
											"originalName": "Forex",
											"symbols": [{
													"name": "FX:EURUSD"
												},
												{
													"name": "FX:GBPUSD"
												},
												{
													"name": "FX:USDJPY"
												},
												{
													"name": "FX:USDCHF"
												},
												{
													"name": "FX:AUDUSD"
												},
												{
													"name": "FX:USDCAD"
												}
											]
										}
									],
									"showSymbolLogo": true,
									"colorTheme": "light",
									"isTransparent": false,
									"locale": "en"
								}
							</script>
						</div>
						<!-- TradingView Widget END -->
					</div>
					<div><br><br></div>
					<div class="content-color-button"><a href="https://my.kj-glovicevc.com/register" target="_blank">Start Trading Now</a></div>
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
							<div class="text ani-top delay21">
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
								<!-- <div class="title02">What are commodity futures?</div> -->
								<div class="title"> What is a commodity</div>
								<div class="text">
									A commodity is a collection of property or items which are essential in regular life, including food, energy, or metals. A commodity is alternate and exchangeable through nature. It may be categorized as each sort of movable goods that may be bought and sold, besides for actionable claims and money.
									<br><br>In general, commodities are labelled into 4 types:
									<br><br>1. Metals – silver, gold, platinum, and copper
									<br>2. Energy – crude oil, natural gas, gasoline, and heating oil
									<br>3. Agriculture – corn, beans, rice, wheat, etc.
									<br>4. Livestock and meat – eggs, pork, cattle, etc.
								</div>
								<div class="title"> How to invest in commodities</div>
								<div class="text">
									The great way to capitalize into commodities is thru a futures contract. It is an settlement to buy or sell a particular quantity of a commodity at a fixed rate at a later time. Futures are available in each commodity category. Traders use those contracts as prevention towards the risks related to the rate swing of a futures’ indirect exchange of products or raw material. Trading in commodities includes an excessive amount of risk for amateur investors.</div>

								<div class="title">What are the benefits of futures</div>
								<div class="text">
									Advantages of futures:
									<br><br>· Futures are leveraged investments
									<br>· Future markets are very liquid
									<br>· Futures deliver big earnings if traded carefully
									<br>· Affordable minimum-deposit accounts and managed substantial contracts
									<br>· Long or short futures may be set as target easily

									<br><br>More than a hundred commodities are traded withinside the commodity futures market. Out of those, 50+ commodities are actively traded. These consist of energy products, metals, agricultural commodities, etc.
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
								<!-- // <div><a href="#">Download MT4 App Mac</a></div>-->
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