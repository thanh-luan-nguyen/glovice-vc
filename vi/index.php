<?php
$link_switch = '../index.php';
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

	<!-- Title -->
	<title>Glovice VC</title>
	<link rel="stylesheet" href="../css/slick.css" />
	<link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/common.css">
	<link rel="stylesheet" href="../css/main.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/jquery.easing.1.3.min.js"></script>
	<script src="../js/slick.js"></script>
	<script src="../js/common.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700|Montserrat:400,700" rel="stylesheet">
	<link rel="stylesheet" href="../css/flag-icon.css">
	<style>
		.main .content-02 .inner-list li {
			width: 20%;
			padding: 0px;
			padding-left: 5px;
			/* height: 150px; */
		}

		.main .content-02 .inner-list .text {
			margin-bottom: 20px;
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

		.main .content-06 .inner-title {
			font-size: 26px;
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
				<h1 class="header-logo"><a href="./index.php"><img src="../img/main/header-logo-vc.png" alt=""></a></h1>

				<?php include_once('menu.php');
				?>
				<div class="header-user">
					<a href="https://my.kj-glovicevc.com/login" target="_blank">Đăng Nhập</a>
					<a href="https://my.kj-glovicevc.com/register" target="_blank">Mở Tài Khoản Live</a>
				</div><!-- // header-user -->

				<div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register" target="_blank">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">VIETNAM</button>
					<ul class="list">
						<li><a href="../index.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
						<li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">VIETNAM</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->


		<?php
		include_once("slide.php");
		?>
		<!-- container -->
		<div class="container main">

			<div class="gradient-box motion">
				<ul>
					<li class="item-01 ani-top delay1"><a href="#">
							<span class="icon"></span>
							<!-- <span class="title">Wide Range of<br>Trading Instruments</span> -->
							<span class="title">Công Cụ Giao Dịch<br>Khác Nhau</span>
						</a></li>
					<li class="item-02 ani-top delay32020-11-13"><a href="#">
							<span class="icon"></span>
							<span class="title">Nạp Và Rút Tiền<br>Nhanh Chóng</span>
						</a></li>
					<li class="item-03 ani-top delay3"><a href="#">
							<span class="icon"></span>
							<span class="title">Giá Biến Động Theo<br>Thời Gian Thực</span>
						</a></li>
					<li class="item-04 ani-top delay4"><a href="#">
							<span class="icon"></span>
							<span class="title">Khớp Lệnh<br>Nhanh Nhất</span>
						</a></li>
					<li class="item-05 ani-top delay5"><a href="#">
							<span class="icon"></span>
							<span class="title">Chương Trình Đào Tạo<br>Cho Người Mới </span>
						</a></li>
					<li class="item-06 ani-top delay6"><a href="#">
							<span class="icon"></span>
							<span class="title">Hỗ Trợ Khách Hàng<br>Tận Tâm</span>
						</a></li>
				</ul>

			</div>

			<div class="content content-02">
				<div class="inner">
					<!-- <div class="inner-title"></div> -->
					<div class="inner-text">Khám phá các thị trường giao dịch chính trên thế giới thông qua tài khoản và nền tảng Glovice VC.</div>
					<ul class="inner-list motion">
						<li class="item1 ani-left delay1">
							<a href="forex.php" class="box">
								<div class="icon"></div>
								<div class="title">Forex</div>
								<div class="text">
									<!-- Ngoại hối là thị trường giao dịch
									chính,  tính thanh khoản cao.<br>
									Đặc biệt, đây là nơi
									các nhà đầu tư, nhà cung cấp thanh khoản
									từ khắp các nơi trên thế giới hội tụ. -->
								</div>
							</a>
						</li>
						<li class="item2 ani-left delay2">
							<a href="commodityfutures.php" class="box">
								<div class="icon"></div>
								<div class="title">Hàng Hóa</div>
								<div class="text">
									<!-- Giao dịch các loại nông sản đa dạng<br>
									như cà phê, đậu nành, đường, ngô,<br>
									ca cao, lúa mì bằng CFDs, cung cấp<br>
									spread thất và đòn bẩy lên đến 1:100. -->
								</div>
							</a>
						</li>
						<li class="item3 ani-left delay3">
							<a href="spotindices.php" class="box">
								<div class="icon"></div>
								<div class="title">Chỉ Số</div>
								<div class="text">
									<!-- Tiếp cận đa dạng các loại chỉ số -<br>
									Hình thức được ưa chuộng nhất CFDs<br>
									Bao gồm chỉ số S&P200 của Úc,<br>
									chỉ số FTSE100 của Anh và chỉ số<br>
									DJIA của Mỹ... -->
								</div>
							</a>
						</li>
						<li class="item4 ani-right delay4">
							<a href="spotmetals.php" class="box">
								<div class="icon"></div>
								<div class="title">Kim Loại</div>
								<div class="text">
									<!-- Giao dịch kim loại là một nguồn<br>
									đầu tư an toàn, đặc biệt khi nền<br>
									kinh tế không chắc chắn. Giao dịch<br>
									trên GloviceFX và khám phá các<br>
									cơ hội giao dịch mới. -->
								</div>
							</a>
						</li>
						<li class="item5 ani-right delay5">
							<a href="energies.php" class="box">
								<div class="icon"></div>
								<div class="title">Năng Lượng</div>
								<div class="text">
									<!-- Các mặt hàng năng lượng nổi tiếng<br>
									với giá cả biến động. Luôn được các<br>
									nhà giao dịch tìm kiếm lợi nhuận cao<br>
									tìm kiếm. Là lựa chọn lý tưởng cho<br>
									giao dịch CFDs. -->
								</div>
							</a>
						</li>

					</ul>
				</div>
			</div><!-- // content -->

			<!-- <div class="content content-03">
				<div class="inner motion">
					<div class="inner-left">
						<div class="image-01 ani-bottom delay1"><img src="img/main/main_content_03_cut_01.png" alt=""></div>
						<div class="image-02 ani-bottom delay2"><img src="img/main/main_content_03_cut_02.png" alt=""></div>
						<div class="image-03 ani-bottom delay3"><img src="img/main/main_content_03_cut_03.png" alt=""></div>
						<div class="image-04 ani-bottom delay4"><img src="img/main/main_content_03_cut_04.png" alt=""></div>
						<div class="image-05 ani-bottom delay5"><img src="img/main/main_content_03_cut_05.png" alt=""></div>
					</div>
					<div class="inner-right">
						<div class="inner-title">The complete package for new & experienced traders</div>
						<div class="inner-box box-sf">
							<div class="inner-box-title">STANDARD <b>FIXED</b></div>
							<ul class="inner-box-list">
								<li>Spreads from 1.8 No min. deposit No commission</li>
								<li>One of the established inbustry leaders</li>
							</ul>
							<div class="inner-box-btn"><a href="#">Open Account</a></div>
						</div>
						<div class="inner-box box-sv">
							<div class="inner-box-title">STANDARD <b>VARIABLE</b></div>
							<ul class="inner-box-list">
								<li>Spreads from 1.2 No min. deposit No commission</li>
								<li>Tax-free spread betting profits</li>
							</ul>
							<div class="inner-box-btn"><a href="#">Open Account</a></div>
						</div>
					</div>
					
				</div>
			</div> -->

			<!-- // content -->

			<div class="content content-04">
				<div class="inner" style="margin-top: 40px;">
					<div class="inner-left">
						<div class="inner-box">
							<div class="inner-title" style="font-weight: 600;">GloviceVC MT4</div>
							<div class="inner-text">
								Công cụ giao dịch phổ biến nhất thế giới để giao dịch CFD. <br>
								Hãy thử và làm bot giao dịch tự động của riêng bạn!
							</div>
							<div class="download-btn-main">
								<div><a href="https://download.mql5.com/cdn/web/16391/mt4/kjglovice4setup.exe">Tải MT4 cho Windows</a></div>
								<!-- //	<div><a href="#">Download MT4 App Mac</a></div> -->
							</div>
						</div>
						<div class="inner-box">
							<div class="inner-title" style="font-weight: 600;">Có sẵn trên điện thoại di động</div>
							<div class="inner-text">
								Giám sát sự thay đổi của thị trường thông qua các ứng dụng di động của chúng tôi, <br>
								đồng thời tận dụng những cơ sở hạ tầng giao dịch trong thời gian ngắn nhất <br>
								cũng như khả năng khớp lệnh nhanh,tính thanh khoản cao đã được kiểm chứng rộng rãi. <br>
								Có sẵn cho iOS và thiết bị Android.
							</div>

							<div class="store-btn">
								<a href="https://download.mql5.com/cdn/mobile/mt4/android?server=KJGlovice-Demo,KJGlovice-Live" class="google"><span>Tải xuống trên</span><em>Google Play</em></a>
								<a href="https://download.mql5.com/cdn/mobile/mt4/ios?server=KJGlovice-Demo,KJGlovice-Live" class="apple"><span>Tải xuống trên</span><em>App Store</em></a>
							</div>
						</div>
					</div><!-- // inner-left -->
					<div class="inner-right motion">
						<img class="ani-top delay2" src="../img/main/mt4_pc_mobile.gif" alt="">
					</div><!-- // inner-right -->
				</div>
			</div><!-- // content -->

			<div class="content content-05">
				<div class="inner motion">

					<ul class="inner-list">
						<li class="item-01">
							<div class="icon ani-top delay5"></div>
							<div class="title ani-top delay6">Thuận lợi</div>
							<ul class="text ani-top delay7">
								<li>Khớp lệnh tức thì</li>
								<li>Nạp và rút tiền nhanh chóng</li>
								<li>Đa dạng các loại tài khoản giao dịch</li>
							</ul>
						</li>
						<li class="item-02">
							<div class="icon ani-top delay9"></div>
							<div class="title ani-top delay10">Thân thiện với người mới </div>
							<ul class="text ani-top delay11">
								<li>Chương trình đào tạo đặc biệt</li>
								<li>Hội thảo của các chuyên gia chuyên nghiệp</li>
								<li>Trò chuyện trực tiếp trong thời gian thực</li>
							</ul>
						</li>
						<li class="item-03">
							<div class="icon ani-top delay13"></div>
							<div class="title ani-top delay14">Điều kiện giao dịch ổn định</div>
							<ul class="text ani-top delay15">
								<li>Spread thấp</li>
								<li>Công cụ giao dịch đáng tin cậy</li>
								<li>Quản lý rủi ro </li>
							</ul>
						</li>
						<!-- <li class="item-04">
							<div class="icon ani-top delay17"></div>
							<div class="title ani-top delay18">Các mức phí thấp</div>
							<ul class="text ani-top delay19">
								<li>Tài khoản số độc lập</li>
								<li>Hỗ trợ các công cụ giao dịch</li>
								<li>Hệ thống chuyển giao dễ dàng</li>
							</ul>
						</li> -->
					</ul>

				</div>
			</div><!-- // content -->

			<div class="fixed-bg">
				<div class="content content-06">
					<div class="inner motion">

						<div class="inner-title">
							<span>Bắt đầu giao dịch với Glovice VC</span>
							<b>Mở Tài Khoản Nhanh Trong 4 Bước Đơn Giản</b>
						</div>

						<ul class="inner-list">
							<li class="item-01">
								<div class="icon ani-right delay5"></div>
								<div class="title ani-right delay6">Đăng ký</div>
								<div class="text ani-right delay7">
									Mở tài khoản<br>giao dịch<br>của bạn qua Glovice VC
								</div>
							</li>
							<li class="item-02 ani-right delay8">
								<div class="icon ani-right delay9"></div>
								<div class="title ani-right delay10">Xác minh</div>
								<div class="text ani-right delay11">
									Cập nhật thông tin <br>giấy tờ để<br>xác minh tài khoản của bạn
								</div>
							</li>
							<li class="item-03">
								<div class="icon ani-right delay11"></div>
								<div class="title ani-right delay11">Tạo quỹ</div>
								<div class="text ani-right delay11">
									Đăng nhập vào Glovice VC<br>Trực tiếp nạp tiền <br>vào tài khoản của bạn
								</div>
							</li>
							<li class="item-04">
								<div class="icon ani-right delay14"></div>
								<div class="title ani-right delay14">Giao Dịch</div>
								<div class="text ani-right delay14">
									Bắt đầu giao dịch<br>trên hơn 250<br>công cụ
								</div>
							</li>
						</ul>
						<div class="inner-btn"><a href="https://my.kj-glovicevc.com/register" target="_blank">MỞ TÀI KHOẢN LIVE</a></div>
					</div>
				</div>
			</div><!-- // content -->

		</div>
		<!-- // container -->

		<div id="footer">
			<div class="inner">
				<?php
				include_once('menufooter.php');
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
					<div class="footer-help">
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