<?php
include('./languages.php');
$link_switch = 'vi/index.php';



?>

<!DOCTYPE html>
<html lang="en">

<head>


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
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="img/logo.ico" type="image/gif">

	<meta property="og:title" content="Homepage Official of GloviceVC.com">
	<meta property="og:type" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="Discover the world’s key trading markets through Glovice VC accounts and platforms.">
	<meta property="og:locale" content="">
	<meta property="og:site_name" content="">
	<meta property="fb:app_id" content="">
	<meta name="keywords" content="Metatrader4, glovicefx, forex">
	<meta name="author" content="IT Team" />
	<meta name="description" content="Discover the world’s key trading markets through Glovice VC accounts and platforms." />
	<meta name="google" content="nositelinkssearchbox" />
	<meta name="geo.region" content="VN" />
	<meta name="geo.placename" content="Danang" />
	<meta name="geo.position" content="16.06082848620572;108.21597185359056" />

	<!-- Title -->
	<title>GLOVICE VC</title>
	<link rel="stylesheet" href="css/slick.css" />
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/jquery.easing.1.3.min.js"></script>
	<script src="js/slick.js"></script>
	<script src="js/common.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="css/flag-icon.css">
	<style>
		@media only screen and (min-width: 750px) {
			.main .content-02 .inner-list li {
				width: 20%;
				padding: 0px;
				padding-left: 5px;
			}
		}

		.main .content-02 .inner-list .text {
			font-size: 13px;
		}

		.main .content-02 .inner-list .icon {
			margin-bottom: 10px;
		}

		.main .content-02 .inner-list .title {
			margin-bottom: none;
		}

		.container .inner {
			position: relative;
			/* width: 1557px; */
			margin: 0 auto;
		}

		.main .content-05 .inner-list .title {
			font-weight: 600;
		}

		.main .content-04 .inner {
			padding-bottom: 100px;
		}
	</style>
	<style>
		.main .content-04 {
			padding-top: 50px;
		}

		.main .content-04 .inner-title {
			font-weight: 600;
		}

		.main .content-06 .inner-title {
			font-weight: 600;
		}

		.main .content-06 .inner-title b {
			font-weight: 600;
		}

		.main .content-06 .inner-list .title {
			font-weight: 600;
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
						<li><a href="vi/index.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
					</ul>
				</div>
			</div>
		</div><!-- // header -->

		<?php include_once("slide.php"); ?>

		<!-- container -->
		<div class="container main">
			<div class="gradient-box motion">
				<ul>

					<li class="item-01 ani-top delay1"><a href="#">
							<span class="icon"></span>
							<span class="title">Various Trading<br>Instruments</span>
						</a></li>
					<li class="item-02 ani-top delay32020-11-13"><a href="#">
							<span class="icon"></span>
							<span class="title">Fast Deposits<br>and Withdrawals</span>
						</a></li>
					<li class="item-03 ani-top delay3"><a href="#">
							<span class="icon"></span>
							<span class="title">Real Time Pricing</span>
						</a></li>
					<li class="item-04 ani-top delay4"><a href="#">
							<span class="icon"></span>
							<span class="title">Fastest Order<br>Execution</span>
						</a></li>
					<li class="item-05 ani-top delay5"><a href="#">
							<span class="icon"></span>
							<span class="title">Education Program<br>for Beginners</span>
						</a></li>
					<li class="item-06 ani-top delay6"><a href="#">
							<span class="icon"></span>
							<span class="title">Dedicated Customer<br>Support</span>
						</a></li>
				</ul>
			</div>

			<!-- <form name="langSelect" action="" method="get" >
        <select name="lang" id="langID">
          <option>Select Language</option>
          <option value="en">en</option>
          <option value="vn">vn</option>
        </select>

        <br/><br/>
        <button type="submit">Submit</button>

      </form> -->


			<div class="content content-02">
				<div class="inner">
					<!-- <?php
								// if (!isset($_GET['lang'])) $lang = 'en';
								// else $lang = $_GET['lang'];

								// include('lang/'.$lang.'.php');
								// echo "<div class='inner-title'>".$langArray['header']['products']['submenu']['instrumentals'] . "Key trading markets</div>";

								?> -->
					<div class="inner-text">Discover the world's key trading markets through Glovice VC accounts and platforms.</div>
					<ul class="inner-list motion">
						<li class="item1 ani-left delay1">
							<a href="forex.php" class="box">
								<div class="icon"></div>
								<div class="title">Forex</div>
								<div class="text">
									<!-- The forex market is the largest and most<br>liquid key trading market in the world now.<br>Trade at the special venue where investors and liquidity providers around the world interact. -->
								</div>
							</a>
						</li>
						<li class="item2 ani-left delay2">
							<a href="CommodityFutures.php" class="box">
								<div class="icon"></div>
								<div class="title">Commodities</div>
								<div class="text">
									<!-- We provide various soft commodity<br>products to trade, including coffee, soybeans,<br>sugar, corn, cocoa, and wheat as CFDs and  they are all with low spreads and leverage up to 1:100. -->
								</div>
							</a>
						</li>
						<li class="item3 ani-left delay3">
							<a href="SpotIndices.php" class="box">
								<div class="icon"></div>
								<div class="title">Indices</div>
								<div class="text">
									<!-- Enjoy the various options of Indices,<br>the most popular form of CFD here.<br>We have a large range of Indices<br>including the Australian S&P 200 Index,<br>UK FTSE 100 Index, and US DJIA Index. -->

								</div>
							</a>
						</li>
						<li class="item4 ani-right delay4">
							<a href="SpotMetals.php" class="box">
								<div class="icon"></div>
								<div class="title">Metals</div>
								<div class="text">
									<!-- Metal trade is often considered a safe-haven investment, especially in times of economic uncertainty. Trade CFDs on Glovice VC and<br> discover new trading opportunities. -->

								</div>
							</a>
						</li>
						<li class="item5 ani-right delay5">
							<a href="Energies.php" class="box">
								<div class="icon"></div>
								<div class="title">Energies</div>
								<div class="text">
									<!-- Energy commodities tend to be quite<br>volatile and have large price swings. These characteristics make it more exciting for traders <br>who are looking for potentially large profits.<br>It can be an ideal choice for CFD trading.  -->

								</div>
							</a>
						</li>
					</ul>
				</div>
			</div><!-- // content -->

			<div class="content content-04">
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
								<!-- //	<div><a href="#">Download MT4 App Mac</a></div> -->
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
						<img class="ani-top delay2" src="img/main/mt4_pc_mobile.gif" alt="">
					</div><!-- // inner-right -->
				</div>
			</div><!-- // content -->

			<div class="content content-05">
				<div class="inner motion">

					<ul class="inner-list">
						<li class="item-01">
							<div class="icon ani-top delay5"></div>
							<div class="title ani-top delay6">Advantages</div>
							<ul class="text ani-top delay7">
								<li>Instant execution</li>
								<li>Fast deposit and withdrawals</li>
								<li>Multiple trading account</li>
							</ul>
						</li>
						<li class="item-02">
							<div class="icon ani-top delay9"></div>
							<div class="title ani-top delay10">Beginner Friendly</div>
							<ul class="text ani-top delay11">
								<li>Exceptional education program</li>
								<li>Seminars by professional experts</li>
								<li>Real-time live chat</li>
							</ul>
						</li>
						<li class="item-03">
							<div class="icon ani-top delay13"></div>
							<div class="title ani-top delay14"> Stable Trading Condition</div>
							<ul class="text ani-top delay15">
								<li>Tight Spread</li>
								<li>Reliable Trading Tool</li>
								<li>Ultimate Risk Management</li>
							</ul>
						</li>

					</ul>

				</div>
			</div><!-- // content -->

			<div class="fixed-bg">
				<div class="content content-06">
					<div class="inner motion">

						<div class="inner-title">
							<span>Start Trading with Glovice VC</span>
							<b>Fast Account Opening in 4 Simple Steps</b>
						</div>

						<ul class="inner-list">
							<li class="item-01">
								<div class="icon ani-right delay5"></div>
								<div class="title ani-right delay5">Register</div>
								<div class="text ani-right delay5">
									Open your trading<br>account via<br>Glovice VC
								</div>
							</li>
							<li class="item-02">
								<div class="icon ani-right delay8"></div>
								<div class="title ani-right delay8">Verify</div>
								<div class="text ani-right delay8">
									Upload your documents<br>to verify your<br>account
								</div>
							</li>
							<li class="item-03">
								<div class="icon ani-right delay11"></div>
								<div class="title ani-right delay11">Fund</div>
								<div class="text ani-right delay11">
									Login to Glovice VC<br>Direct and fund<br>your account
								</div>
							</li>
							<li class="item-04">
								<div class="icon ani-right delay14"></div>
								<div class="title ani-right delay14">Trade</div>
								<div class="text ani-right delay14">
									Start trading<br>with<br>Glovice VC
								</div>
							</li>
						</ul>
						<div class="inner-btn"><a href="https://my.kj-glovicevc.com/register" target="_blank">OPEN LIVE ACCOUNT NOW</a></div>
					</div>
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