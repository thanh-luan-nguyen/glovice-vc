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
			color: #fff;
		}

		.forex .content-02 .content-title {
			font-weight: 600;
		}

		.forex .content-03 {
			padding-top: 0px;
			padding-bottom: 40px;
		}

		.forex .content-03 .content-title {}

		.forex .content-01 {
			padding-top: 50px;
		}

		.forex .content-01 .content-text {
			margin-bottom: 20px;
			font-weight: 600;
		}

		.forex .content-03 .content-title {
			color: #08492d;
			font-weight: 600;
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

		.forex .content-03 .content-title {
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
			padding-top: 50px;
		}

		.forex .content-04 {
			padding-top: 50px;
			padding: 113px 0 35px;
		}

		.forex .content-04 .content-part .text {
			font-weight: 600;
			line-height: 1.33;
		}

		.visual-title {
			padding-left: 150px;
		}
	</style>
</head>



<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = 'vi/forex.php';
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
						<li><a href="vi/webseminar.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
					</ul>
				</div>
			</div>
		</div><!-- // header -->

		<!-- container -->
		<div class="container forex">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">FOREX</div>
					<div class="visual-forex-i1 ani-left delay2"><img src="img/trading/market/forex_visual-i1.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-text">
						Glovice VC foreign exchange trading involves trading one currency pair against another,<br>
						predicting that one currency will rise or fall against another. Currencies are traded in pairs,<br>
						like the Euro versus the US Dollar (EUR/USD).
					</div>
					<div class="content-image">
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container" style="margin: 0px auto; padding: 0px auto;">
							<div class="tradingview-widget-container__widget"></div>
							<!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/forex-cross-rates/" rel="noopener" target="_blank"><span class="blue-text">Exchange Rates</span></a> by TradingView</div> -->
							<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
								{
									"width": 1000,
									"height": 600,
									"currencies": [
										"EUR",
										"USD",
										"JPY",
										"GBP",
										"CHF",
										"AUD",
										"CAD",
										"NZD"
									],
									"isTransparent": false,
									"colorTheme": "light",
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
					<div class="content-title">Why do most traders choose Glovice VC?</div>
					<ul class="content-list">
						<li class="item1">
							<div class="icon ani-top delay5"></div>
							<div class="text ani-top delay6">
								Narrow spreads and leverage<br>
								up to 1:100 minimize<br>
								investment risks<br>
							</div>
						</li>
						<li class="item2">
							<div class="icon ani-top delay7"></div>
							<div class="text ani-top delay8">
								No slippage,<br>
								market execution<br>
								without rejection
							</div>
						</li>
						<li class="item3">
							<div class="icon ani-top delay10"></div>
							<div class="text  ani-top delay11">
								Best market research and<br>
								analysis by the experts<br>
								with hands-on experience
							</div>
						</li>
						<li class="item4">
							<div class="icon ani-top delay13"></div>
							<div class="text ani-top delay14">
								Surplus and stable liquidity<br>
								from top tier banks around<br>
								the world
							</div>
						</li>
						<li class="item5">
							<div class="icon ani-top delay16"></div>
							<div class="text ani-top delay17">
								Client's funds are transparently<br>
								and safely saved in segregated<br>
								accounts in the custodian bank,
								complying with the regulations
							</div>
						</li>
						<li class="item6">
							<div class="icon ani-top delay19"></div>
							<div class="text ani-top delay20">
								Solid relationship with<br>
								leading banks around the world,<br>
								quick and easy money transaction
							</div>
						</li>
					</ul>
				</div>
			</div><!-- // content -->

			<div class="content content-03">
				<div class="inner">
					<div class="content-title">Why trade the Forex market?

					</div>
					<div class="content-text">
						Glovice VC offers variety of currency pairs at minimum spread with 24/5
						hours support.
					</div>
					<ul class="content-list">
						<li class="item1">
							<div class="box motion">
								<div class="thumb ani-top delay5"></div>
								<div class="title ani-top delay6">The world’s biggest marketplace<br>and most traded asset class</div>
								<!--<div class="text ani-top delay7">
								 

							</div>-->
							</div>
						</li>
						<li class="item2">
							<div class="box motion">
								<div class="thumb ani-top delay8"></div>
								<div class="title ani-top delay9">Deep liquidity</div>
								<!--	<div class="text ani-top delay10">
								 

							</div> -->
							</div>
						</li>
						<li class="item3">
							<div class="box motion">
								<div class="thumb ani-top delay11"></div>
								<div class="title ani-top delay12">24/5 operations
								</div>
								<!--	<div class="text ani-top delay13">
								
							</div>  -->
							</div>
						</li>
						<li class="item4">
							<div class="box motion">
								<div class="thumb ani-top delay15"></div>
								<div class="title ani-top delay16">Many factors can affect the<br>volatility of the marketplace
								</div>
								<!--	<div class="text small ani-top delay17">
								
							</div>-->
							</div>
						</li>
					</ul>
				</div>
			</div><!-- // content -->

			<div class="fixed-bg">
				<div class="content content-04">
					<div class="inner">
						<div class="content-title">What is Forex?</div>
						<div class="content-part">
							<div class="title">History of the Forex market</div>
							<div class="text">
								The Forex market marketplace is a vital part of the world economy, permitting global exchange and investments by providing foreign money conversion. It trades approximately $6.6 trillion of volume every day.<br><br>

								Currencies are traded on the Forex Market which is a global market open 24/5 from Monday to Friday. All foreign exchange transactions are conducted on the over-the-counter (OTC) market, which means there is no physical exchange (like stocks), and a global network of banks and other financial institutions control the market (there is no central exchange like New York Stock trading).<br><br>

								The Forex market marketplace is a global and decentralized market for the buying and selling of currencies. This means the marketplace isn't always traded on a principal exchange however as an alternative is traded among banks, brokers, establishments, retail buyers. This will increase the significance of selecting the proper broker to get entry to this marketplace – with Glovice VC capable of providing among the deepest liquidity to be had withinside the market.
							</div>
						</div>
						<div class="content-part">
							<div class="title">Three ways to trade Forex</div>
							<div class="text">
								Most foreign exchange trades aren’t made for the purpose of exchanging currencies (as you would possibly at a foreign exchange while traveling) however alternatively to take a position approximately future price movements, similar to you'll with inventory trading. <br><br>Similar to inventory investors, foreign exchange investors try to buy currencies whose values they suppose will grow relative to other currencies or to dispose of currencies whose purchasing strength they expect will decrease.
								There are 3 specific methods to trade foreign exchange, in order to accommodate investors with various goals:

							</div><br><br><br>
							<div class="title">The spot market</div>
							<div class="text">
								What is traded in the SPOT market, the forex market is the source of all VC markets. In other words, Forex trading traded by general traders is aggregated in this market.
							</div>
							<br><br><br>
							<div class="title">The forward market</div>
							<div class="text">
								Delivery will be carried out on a specific date in the future or after a certain period of time under the conditions set at the time of contract (foreign currency type, amount, rate, etc.). The rate is usually determined in consideration of the interest rate for the period up to the delivery date. It is used for hedging future exchange risk. The trading form is the same as futures trading, but with bilateral trading, margin is not required, and cash settlement is different from futures trading.
							</div>
							<br><br><br>
							<div class="title">The futures market</div>
							<div class="text">
								A derivative (financial derivative product) that promises to buy or sell a specific underlying asset on a specific date (delivery date) at a predetermined price. It is listed on the financial instruments exchange with stock indexes, bonds, oil, precious metals, agricultural products, etc. as underlying assets.
								<br><br><br><br>
								The forward and futures markets are in general utilized by investors who need to speculate or hedge towards future rate modifications in a currency.<br>The exchange rates in those markets are primarily based totally on what’s taking place withinside the spot market, which is the biggest of the foreign exchange markets and is in which a majority of foreign exchange trades are executed.
								Glovice VC traders can offer grades to buy and sell in the area of ​​institutional investors. As a user of the MT4 platform popular with Forex traders, join this Forex market and you will enjoy trading in the dynamic world<br>of Forex market.
							</div>
							<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">Start Trading Now</a></div>
						</div>
					</div>
				</div>
			</div><!-- // content -->

			<div class="content content-05">
				<div class="inner">
					<div class="content-title">FOREX MARKET PARTICIPANTS</div>
					<div class="content-text">The most important Forex market participants are :</div>
					<ul class="content-list">
						<li>Central and commercial banks</li>
						<li>International trade companies</li>
						<li>Forex brokers (ECN, STP, and Dealing-Desk brokers)</li>
						<li>Large, medium, and small institutional investors<br>(i.e. Investment Companies, etc.)</li>
						<li>Common retail traders</li>
						<li>World travellers</li>
					</ul>
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