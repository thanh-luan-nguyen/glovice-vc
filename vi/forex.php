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
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/slick.js"></script>
	<script src="../js/common.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="../css/flag-icon.css">
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

		/* .forex .content-04 {
			padding-top: 50px;
		} */

		.forex .content-04 .content-part .text {
			font-weight: 600;
			line-height: 1.33;
		}

		.visual-title {
			padding-left: 150px;
		}

		.forex .content-03 .content-list .box {
			height: 345px;
		}
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = 'forex.php';
	include_once('../vi/menumobile.php');
	?>
	<!-- // allMenu -->

	<div id="wrap">
		<div id="header">
			<div class="inner">
				<h1 class="header-logo"><a href="index.php"><img src="../img/main/header-logo-vc.png" alt=""></a></h1>

				<?php include_once('menu.php');
				?>

				<div class="header-user">
					<a href="https://my.kj-glovicevc.com/login" target="_blank">Đăng Nhập</a>
					<a href="https://my.kj-glovicevc.com/register" target="_blank">Tạo Tài Khoản Live</a>
				</div><!-- // header-user -->

				<div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register" target="_blank">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">VIETNAM</button>
					<ul class="list">
						<li><a href="../forex.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>

						<li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
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
					<div class="visual-forex-i1 ani-left delay2"><img src="../img/trading/market/forex_visual-i1.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-text">
						Giao dịch ngoại hối Glovice VC liên quan đến việc giao dịch một loại tiền tệ này với một<br>
						loại tiền tệ khác,dự đoán rằng một loại tiền tệ sẽ tăng hoặc giảm so với loại tiền tệ còn lại. <br>
						Tiền tệ được giao dịch theo cặp, như Euro so với Đô la Mỹ (EUR / USD).
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
					<div class="content-color-button"><a href="https://my.kj-glovicevc.com/register">Bắt đầu giao dịch ngay bây giờ</a></div>
				</div>
			</div><!-- // content -->


			<!-- <div class="fixed-bg"> -->
			<?php
			include('content02.php');
			?>

			<div class="content content-03">
				<div class="inner">
					<div class="content-title">Tại sao nên giao dịch trên thị trường ngoại hối?</div>
					<div class="content-text">
						Glovice VC cung cấp nhiều cặp tiền tệ khác nhau với mức spread tối thiểu và hỗ trợ 24/5 .
					</div>
					<ul class="content-list">
						<li class="item1">
							<div class="box motion">
								<div class="thumb ani-top delay5"></div>
								<div class="title ani-top delay6"></div>
								<div class="text ani-top delay7">
									Thị trường lớn nhất thế giới<br>
									và các loại tài sản được<br>
									giao dịch nhiều nhất
								</div>
							</div>
						</li>
						<li class="item2">
							<div class="box motion">
								<div class="thumb ani-top delay8"></div>
								<div class="title ani-top delay9"></div>
								<div class="text ani-top delay10">
									Thanh khoản cao
								</div>
							</div>
						</li>
						<li class="item3">
							<div class="box motion">
								<div class="thumb ani-top delay11"></div>
								<div class="title ani-top delay12"></div>
								<div class="text ani-top delay13">
									Hoạt động 24/5
								</div>
							</div>
						</li>
						<li class="item4">
							<div class="box motion">
								<div class="thumb ani-top delay15"></div>
								<div class="title ani-top delay16"></div>
								<div class="text small ani-top delay17">
									Nhiều yếu tố có thể ảnh hưởng <br>
									đến sự biến động của thị trường
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div><!-- // content -->

			<div class="fixed-bg">
				<div class="content content-04">
					<div class="inner">
						<div class="content-title">FOREX là gì?</div>
						<div class="content-part">
							<div class="title">LICH SỬ THỊ TRƯỜNG NGOẠI HỐI</div>
							<div class="text">
								<br>
								Thị trường ngoại hối là một phần quan trọng của nền kinh tế thế giới, cho phép trao đổi và đầu tư toàn cầu bằng cách cung cấp dịch vụ chuyển đổi tiền nước ngoài. , khối lượng lượng giao dịch khoảng 6,6 nghìn tỷ đô la mỗi ngày.
								<br>
								<br>
								Các loại tiền tệ được giao dịch trên Thị trường Ngoại hối, một thị trường toàn cầu mở cửa 24/5 từ Thứ Hai đến Thứ Sáu. Tất cả các giao dịch ngoại hối được thực hiện trên thị trường mua bán tự do (OTC), có nghĩa là không có trao đổi vật chất (như cổ phiếu) và một mạng lưới toàn cầu gồm các ngân hàng và các tổ chức tài chính khác kiểm soát thị trường (không có sàn giao dịch trung tâm như New York. Giao dịch chứng khoán).
								<br><br>
								Thị trường ngoại hối là một thị trường toàn cầu và phi tập trung để mua và bán tiền tệ, có nghĩa là thị trường không phải lúc nào cũng được giao dịch trên một sàn giao dịch chính, tuy nhiên, một sự thay thế được giao dịch giữa các ngân hàng, nhà môi giới, tổ chức, người mua lẻ. Điều này sẽ làm tăng tầm quan trọng của việc lựa chọn nhà môi giới thích hợp để tham gia vào thị trường này - Glovice VC có khả năng cung cấp một trong số các thanh khoản cao nhất có được trên thị trường.
							</div>
						</div>

						<div class="content-part">
							<div class="title">BA CÁCH GIAO DỊCH NGOẠI HỐI</div>
							<div class="text">
								Hầu hết các giao dịch ngoại hối không được thực hiện với mục đích trao đổi tiền tệ (như bạn có thể giao dịch ngoại tệ khi đi du lịch)mà để hưởng lợi từ những biến động giá trong tương lai, giống như khi bạn giao dịch hàng hóa.
								<br><br>
								Tương tự như các nhà đầu tư hàng hóa, các nhà đầu tư ngoại hối cố gắng mua các loại tiền tệ mà họ cho rằng giá trị của nó sẽ tăng lên so với các loại tiền tệ khác hoặc bán các loại tiền tệ có sức mua mà họ mong đợi sẽ giảm. Có 3 phương pháp cụ thể để giao dịch ngoại hối, nhằm đáp ứng các nhà đầu tư với các mục tiêu khác nhau:
							</div>
						</div>

						<div class="content-part">
							<div class="title">THỊ TRƯỜNG GIAO NGAY</div>
							<div class="text">
								Những gì được giao dịch trên thị trường SPOT, thị trường ngoại hối là nguồn gốc của tất cả các thị trường VC. Nói cách khác, giao dịch Forex được giao dịch bởi các nhà giao dịch nói chung được tổng hợp trong thị trường này.
							</div>
						</div>

						<div class="content-part">
							<div class="title">THỊ TRƯỜNG KÌ HẠN</div>
							<div class="text">
								Những gì được giao dịch trên thị trường SPOT, thị trường ngoại hối là nguồn gốc của tất cả các thị trường VC. Nói cách khác, giao dịch Forex được giao dịch bởi các nhà giao dịch nói chung được tổng hợp trong thị trường này.
							</div>
						</div>

						<div class="content-part">
							<div class="title">THỊ TRƯỜNG TƯƠNG LAI</div>
							<div class="text">
								Một sản phẩm phái sinh (sản phẩm phái sinh tài chính) hứa hẹn mua hoặc bán một tài sản cơ sở cụ thể vào một ngày cụ thể (ngày giao hàng) với mức giá xác định trước. Nó được liệt kê trên sàn giao dịch công cụ tài chính với chỉ số chứng khoán, trái phiếu, dầu mỏ, kim loại quý, sản phẩm nông nghiệp, v.v. làm tài sản cơ bản.
								</br></br>
								Thị trường kỳ hạn và tương lai nói chung được sử dụng bởi các nhà đầu tư, những người đầu cơ hoặc cần phòng hộ đối với các chênh lệch tỷ giá trong tương lai bằng một loại tiền tệ.
								</br></br>
								Tỷ giá hối đoái trên các thị trường đó chủ yếu dựa hoàn toàn vào những gì đang diễn ra bên trong thị trường giao ngay, thị trường lớn nhất trong số các thị trường ngoại hối và là nơi mà phần lớn các giao dịch ngoại hối được thực hiện. Các nhà giao dịch Glovice VC có thể đưa ra các mức mua và bán trong khu vực của các nhà đầu tư tổ chức. Là người dùng nền tảng MT4 phổ biến với các nhà giao dịch ngoại hối, hãy tham gia thị trường ngoại hối này và bạn sẽ thích giao dịch trong thế giới năng động
								của thị trường ngoại hối.
							</div>
							<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">Bắt Đầu Giao Dịch</a></div>
						</div>

					</div>
				</div>
			</div><!-- // content -->

			<div class="content content-05">
				<div class="inner">
					<div class="content-title">CÁC BÊN THAM GIA THỊ TRƯỜNG NGOẠI HỐI</div>
					<div class="content-text">Những bên tham gia thị trường ngoại hối bao gồm:</div>
					<ul class="content-list">
						<li>Các ngân hàng thương mại và trung ương</li>
						<li>Các công ty thương mại quốc tế</li>
						<li>Các nhà môi giới ngoại hối (ECN, STP và các nhà môi giới Bàn giao dịch)</li>
						<li>Các nhà đầu tư tổ chức lớn, vừa và nhỏ (tức là Công ty đầu tư, v.v.)</li>
						<li>Những nhà giao dịch cá nhân</li>
						<li>Du khách thế giới</li>
					</ul>
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