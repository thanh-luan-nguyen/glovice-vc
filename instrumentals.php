<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo.ico" type="image/gif">
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
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/flag-icon.css">
	<style>
		.visual-title {
			font-weight: bold;
			padding-top: 180px;
			padding-left: 40px;
		}

		.visual-img2 {
			padding-left: 650px;
			margin-top: -450px;
		}

		.visual-img {
			padding-left: 700px;
			margin-top: -80px;
		}

		.neonText {
			color: #fff;
			text-transform: uppercase;
		}

		.markets .content-02 {
			margin-bottom: 0px;
		}

		.content-color-text {
			font-weight: 600;
		}

		.content-title {
			font-weight: 600;
		}

		.markets .content-03 .inner-title {
			font-weight: 600;
		}
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = 'vi/intrumentals.php';
	include_once('menumobile.php');
	?>
	<!-- // allMenu -->

	<div id="wrap">
		<div id="header">
			<div class="inner">

				<?php
				include_once('menu.php');
				?>
				<div class="header-user">
					<a href="https://my.kj-glovicevc.com/login" target="_blank">Login</a>
					<a href="https://my.kj-glovicevc.com/register" target="_blank">Open Live Account</a>
				</div><!-- // header-user -->
				<div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register" target="_blank">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">ENGLISH</button>
					<ul class="list">
						<li><a href="#"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>

						<li><a href="vi/market.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->

		<!-- container -->
		<div class="container markets">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">Instrumentals</div>
					<div class="visual-img ani-left delay2"><img src="img/trading/market/markets_visual-i1.png"></div>
					<div class="visual-img2 ani-top delay5"><img src="img/trading/market/markets_visual-i2.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-color-text">
						The forex market is the largest and most liquid key trading market in the world now.<br> Trade at the special venue where investors and liquidity providers around the world interact.
					</div>
				</div>
			</div><!-- // content -->

			<div class="fixed-bg">
				<div class="content content-02">
					<div class="inner motion">
						<div class="content-title">Why do most traders choose Glovice VC?</div>
						<ul class="glovicefx-list">
							<li class="item1">
								<div class="icon ani-top delay5"></div>
								<div class="text text ani-top delay6">
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
									Solid relationship with leading<br>
									banks around the world, quick<br>
									and easy money transaction
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div><!-- // content -->

			<div class="content content-03">
				<div class="inner">
					<div class="inner-title">Key trading markets</div>
					<div class="inner-text">Discover the world’s key&nbsp;trading markets through Glovice VC accounts and platforms.</div>
					<ul class="inner-list">
						<li class="item1">
							<a href="forex.php" class="box">
								<div class="icon"></div>
								<div class="title">Forex</div>
								<div class="text">
									The forex market is the largest and most<br>liquid key trading market in the world now.<br>Trade at the special venue where investors and liquidity providers around the world interact.

								</div>
							</a>
						</li>
						<li class="item2">
							<a href="CommodityFutures.php" class="box">
								<div class="icon"></div>
								<div class="title">Commodities</div>
								<div class="text">
									We provide various soft commodity<br>products to trade, including coffee, soybeans,<br>sugar, corn, cocoa, and wheat as CFDs and they are all with low spreads and leverage up to 1:100.

								</div>
							</a>
						</li>
						<li class="item3">
							<a href="SpotIndices.php" class="box">
								<div class="icon"></div>
								<div class="title">Indices</div>
								<div class="text">
									Enjoy the various options of Indices,<br>the most popular form of CFD here.<br>We have a large range of Indices<br>including the Australian S&P 200 Index,<br>UK FTSE 100 Index, and US DJIA Index.

								</div>
							</a>
						</li>
						<li class="item4">
							<a href="SpotMetals.php" class="box">
								<div class="icon"></div>
								<div class="title">Metals</div>
								<div class="text">
									Metal trade is often considered a safe-haven investment, especially in times of economic uncertainty. Trade CFDs on Glovice VC and<br> discover new trading opportunities.

								</div>
							</a>
						</li>
						<li class="item5">
							<a href="Energies.php" class="box">
								<div class="icon"></div>
								<div class="title">Energies</div>
								<div class="text">
									Energy commodities tend to be quite<br>volatile and have large price swings. These characteristics make it more exciting for traders <br>who are looking for potentially large profits.<br>It can be an ideal choice for CFD trading.

								</div>
							</a>
						</li>
						<li class="item6">
							<a href="#" class="box">
								<div class="icon"></div>
								<div class="title">Various choices</div>
								<div class="text">
									Glovice VC provides you a variety of trading options and a convenient platform. Join us in pioneering<br>a new trading market.

								</div>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- // content -->
		</div>
		<!-- // container -->
		<div id="footer">
			<div class="inner">
				<?php
				include_once('menufooter.php');
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