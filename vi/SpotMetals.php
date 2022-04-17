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
					<a href="https://my.kj-glovicevc.com/login" target="_blank">Đăng Nhập</a>
					<a href="https://my.kj-glovicevc.com/register" target="_blank">Tạo Tài Khoản Live</a>
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
					<div class="visual-title ani-right delay10" style="font-weight: 700">KIM LOẠI</div>
					<div class="visual-metals-i1 ani-top delay5"><img src="../img/trading/market/spot_metals_visual-i1.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-color-text">
						Thương mại kim loại thường được coi là một khoản đầu tư trú ẩn an toàn, đặc biệt là trong thời điểm kinh tế bất ổn. Giao dịch CFD trên Glovice VC và khám phá các cơ hội giao dịch mới.
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

					<div class="content-color-button" style="padding-top: 55px;"><a href="https://my.kj-glovicevc.com/register">Bắt đầu giao dịch ngay bây giờ</a></div>
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
								<div class="title">Kim loại</div>
								<div class="text">
									Kinh doanh vàng và kim loại quý được đánh giá cao trong thời gian dài, các kim loại có giá trị, và đặc biệt là vàng, luôn liên quan đến sức khỏe của nền kinh tế.
									Trên thị trường tài chính, các khoản đầu tư kim loại thường có xu hướng duy trì giá trị của chúng trong thời gian dài. Do đó, chúng cung cấp một nơi trú ẩn an toàn lâu dài cho các nhà đầu tư hàng hóa.
								</div>

								<div class="title">Các yếu tố ảnh hưởng đến giá kim loại có giá trị</div>
								<div class="text">
									<b>Cung và cầu</b><br>Với sự gia tăng của nhu cầu, giá kim loại sẽ tăng trong khi khi nhu cầu yếu, giá của các kim loại có giá trị sẽ giảm xuống. <br><br>
									<b>Giá trị của Đô la Mỹ và các sự kiện kinh tế khác.</b><br>
									Giá cả và giá trị của kim loại quý bị ảnh hưởng bởi một số yếu tố kinh tế như giá trị của đồng đô la, các sự kiện kinh tế và chính trị, và các sự kiện tự nhiên.<br><br>
									<b>Lạm phát</b><br>
									Lạm phát có tác động ngay lập tức đến giá các kim loại có giá trị. Nói chung, tỷ lệ lạm phát ngày càng tăng có xu hướng làm tăng giá các kim loại có giá trị.
								</div>

								<div class="title">Nhu cầu kinh doanh</div>
								<div class="text">
									Việc sử dụng vàng cho mục đích thương mại, như nhu cầu ngày càng tăng đối với vàng trong ngành kinh doanh đồ trang sức và điện tử, có thể khiến giá kim loại quý tăng lên. Đầu tư vào các kim loại có giá trị có thể hỗ trợ các nhà đầu tư phòng ngừa trước sự biến động của thị trường, sự không chắc chắn về chính trị và sự sụp đổ tài chính. Nó cũng có thể là một phần thiết yếu của danh mục đầu tư dài hạn đa dạng.
								</div>


								<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">Bắt đầu giao dịch ngay bây giờ</a></div>
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