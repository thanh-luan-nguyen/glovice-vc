<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../img/logo.ico" type="image/gif">
	<!-- Title -->
	<title>Glovice VC</title>
	<link rel="stylesheet" href="../css/slick.css" />
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/sub.css">
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

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/slick.js"></script>
	<script src="../js/common.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="../css/flag-icon.css">

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

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = '../commodityfutures.php';
	include_once('menumobile.php')
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
					<a href="https://my.kj-glovicevc.com/register" target="_blank">Mở Tài Khoản Live</a>
				</div><!-- // header-user -->

				<div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register" target="_blank">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">VIETNAM</button>
					<ul class="list">

						<li><a href="../commodityfutures.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
						<li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->
		<!-- container -->
		<div class="container commodity_futures">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10 neonText">GIAO DỊCH<br>HÀNG HÓA</div>
					<div class="visual-commodity-i1 ani-left delay2"><img src="../img/trading/market/commodity_futures_visual.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-color-text">
						Chúng tôi cung cấp các sản phẩm hàng hóa khác nhau để giao dịch, bao gồm cà phê, đậu nành, đường, ngô, ca cao<br>
						và lúa mì dưới dạng CFD và tất cả chúng đều có mức chênh lệch thấp và đòn bẩy lên đến 1: 100.
					</div>
					<div class="content-image">
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
									"locale": "vi_VN"
								}
							</script>
						</div>
						<!-- TradingView Widget END -->
					</div>
					<div class="content-color-button"><a href="https://my.kj-glovicevc.com/register">Bắt đầu giao dịch ngay bây giờ</a></div>
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
								<div class="title">Hàng hóa là gì</div>
								<div class="text">
									Hàng hóa là một tập hợp các tài sản hoặc vật phẩm thiết yếu trong cuộc sống thường ngày, bao gồm thực phẩm, năng lượng hoặc kim loại.
									<br><br>
									Một loại hàng hóa có thể thay thế và trao đổi thông qua tự nhiên. Nó có thể được phân loại thành từng loại hàng hóa di động có thể được mua và bán, khai thác hay kiếm tiền

									<br><br>Nhìn chung, hàng hóa được dán nhãn thành 4 loại:
									<br><br>1. Kim loại - Bạc, Vàng, Bạch kim và Đồng
									<br>2. Năng lượng - Dầu thô, khí đốt tự nhiên, xăng và dầu sưởi
									<br>3. Nông nghiệp - Ngô, Đậu, Gạo, Lúa mì, v.v.
									<br>4. Gia súc và Thịt - Trứng, Thịt lợn, Gia súc, v.v.
								</div>
							</div>
						</div>


						<div class="content-info">
							<div class="content-info-part">
								<div class="title">Cách đầu tư vào hàng hóa</div>
								<div class="text">
									Cách tuyệt vời để vốn hóa thành hàng hóa là thông qua hợp đồng tương lai. Nó là một thỏa thuận để mua hoặc bán một số lượng cụ thể của một loại hàng hóa với một tỷ giá cố định vào một thời điểm sau đó. Hợp đồng tương lai có sẵn trong từng loại hàng hóa. Các nhà giao dịch sử dụng các hợp đồng đó như một biện pháp phòng ngừa rủi ro liên quan đến sự dao động tỷ giá của việc trao đổi gián tiếp sản phẩm hoặc nguyên liệu thô của hợp đồng tương lai. Giao dịch hàng hóa có rủi ro quá lớn đối với các nhà đầu tư nghiệp dư.
								</div>
							</div>
						</div>

						<div class="content-info">
							<div class="content-info-part">
								<div class="title">Những lợi ích của hợp đồng tương lai là gì</div>
								<div class="text">
									Ưu điểm của hợp đồng tương lai:
									<br><br>· Hợp đồng tương lai là khoản đầu tư có đòn bẩy
									<br>· Thị trường tương lai rất thanh khoản
									<br>· Hợp đồng tương lai mang lại thu nhập lớn nếu giao dịch cẩn thận
									<br>· Các tài khoản tiền gửi tối thiểu phải chăng và các hợp đồng quan trọng được quản lý
									<br>· Hợp đồng tương lai dài hoặc ngắn có thể được đặt làm mục tiêu dễ dàng

									<br><br>Hơn một trăm loại hàng hóa được giao dịch trên thị trường hàng hóa kỳ hạn. Trong số đó, hơn 50 loại hàng hóa được giao dịch tích cực. Chúng bao gồm các sản phẩm năng lượng, kim loại, hàng hóa nông nghiệp, v.v.
								</div>
								<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">Bắt Đầu Giao Dịch Ngay</a></div>
							</div>
						</div>

					</div>
				</div>
			</div><!-- // content -->

			<?php
			include('content-store.php');
			?>

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