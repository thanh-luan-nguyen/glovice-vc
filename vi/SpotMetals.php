<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../img/logo.ico" type="image/gif">.
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
	<title>Glovice VC</title>
	<link rel="stylesheet" href="../css/slick.css" />
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/sub.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/slick.js"></script>
	<script src="../js/common.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="../css/flag-icon.css">
	<style>
		.neonText {
			font-weight: bold;
		}

		#wrap {
			padding-top: 0px;
		}

		.tradingview-widget-container {
			margin: auto;
		}

		.spot-metals .content-color-text {
			margin-bottom: 45px;
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
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = '../spotmetals.php';
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
					<a href="https://my.kj-glovicevc.com/login" target="_blank">????ng Nh???p</a>
					<a href="https://my.kj-glovicevc.com/register" target="_blank">T???o T??i Kho???n Live</a>
				</div><!-- // header-user -->

				<div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register" target="_blank">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">VIETNAM</button>
					<ul class="list">
						<li><a href="../spotmetals.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>

						<li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->
		<!-- container -->
		<div class="container spot-metals">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10" style="font-weight: 700">KIM LO???I</div>
					<div class="visual-metals-i1 ani-top delay5"><img src="../img/trading/market/spot_metals_visual-i1.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-color-text">
						Th????ng m???i kim lo???i th?????ng ???????c coi l?? m???t kho???n ?????u t?? tr?? ???n an to??n, ?????c bi???t l?? trong th???i ??i???m kinh t??? b???t ???n. Giao d???ch CFD tr??n Glovice VC v?? kh??m ph?? c??c c?? h???i giao d???ch m???i.
					</div>

					<!-- TradingView Widget BEGIN -->
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
					<!-- TradingView Widget END -->

					<div class="content-color-button" style="padding-top: 55px;"><a href="https://my.kj-glovicevc.com/register">B???t ?????u giao d???ch ngay b??y gi???</a></div>
				</div>
			</div><!-- // content -->

			<?php
			include('content02.php');
			?>

			<div class="fixed-bg">
				<div class="content content-03">
					<div class="inner">
						<div class="content-info">
							<div class="content-info-part">
								<div class="title">Kim lo???i</div>
								<div class="text">
									Kinh doanh v??ng v?? kim lo???i qu?? ???????c ????nh gi?? cao trong th???i gian d??i, c??c kim lo???i c?? gi?? tr???, v?? ?????c bi???t l?? v??ng, lu??n li??n quan ?????n s???c kh???e c???a n???n kinh t???.
									Tr??n th??? tr?????ng t??i ch??nh, c??c kho???n ?????u t?? kim lo???i th?????ng c?? xu h?????ng duy tr?? gi?? tr??? c???a ch??ng trong th???i gian d??i. Do ????, ch??ng cung c???p m???t n??i tr?? ???n an to??n l??u d??i cho c??c nh?? ?????u t?? h??ng h??a.
								</div>

								<div class="title">C??c y???u t??? ???nh h?????ng ?????n gi?? kim lo???i c?? gi?? tr???</div>
								<div class="text">
									<b>Cung v?? c???u</b><br>V???i s??? gia t??ng c???a nhu c???u, gi?? kim lo???i s??? t??ng trong khi khi nhu c???u y???u, gi?? c???a c??c kim lo???i c?? gi?? tr??? s??? gi???m xu???ng. <br><br>
									<b>Gi?? tr??? c???a ???? la M??? v?? c??c s??? ki???n kinh t??? kh??c.</b><br>
									Gi?? c??? v?? gi?? tr??? c???a kim lo???i qu?? b??? ???nh h?????ng b???i m???t s??? y???u t??? kinh t??? nh?? gi?? tr??? c???a ?????ng ???? la, c??c s??? ki???n kinh t??? v?? ch??nh tr???, v?? c??c s??? ki???n t??? nhi??n.<br><br>
									<b>L???m ph??t</b><br>
									L???m ph??t c?? t??c ?????ng ngay l???p t???c ?????n gi?? c??c kim lo???i c?? gi?? tr???. N??i chung, t??? l??? l???m ph??t ng??y c??ng t??ng c?? xu h?????ng l??m t??ng gi?? c??c kim lo???i c?? gi?? tr???.
								</div>

								<div class="title">Nhu c???u kinh doanh</div>
								<div class="text">
									Vi???c s??? d???ng v??ng cho m???c ????ch th????ng m???i, nh?? nhu c???u ng??y c??ng t??ng ?????i v???i v??ng trong ng??nh kinh doanh ????? trang s???c v?? ??i???n t???, c?? th??? khi???n gi?? kim lo???i qu?? t??ng l??n. ?????u t?? v??o c??c kim lo???i c?? gi?? tr??? c?? th??? h??? tr??? c??c nh?? ?????u t?? ph??ng ng???a tr?????c s??? bi???n ?????ng c???a th??? tr?????ng, s??? kh??ng ch???c ch???n v??? ch??nh tr??? v?? s??? s???p ????? t??i ch??nh. N?? c??ng c?? th??? l?? m???t ph???n thi???t y???u c???a danh m???c ?????u t?? d??i h???n ??a d???ng.
								</div>


								<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">B???t ?????u giao d???ch ngay b??y gi???</a></div>
							</div>
						</div>



					</div>
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