<?php
include_once('head.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
		@media only screen and (max-width: 500px) {
			.minh {
				display: none;
			}
		}

		.minh {
			margin: 0 auto;
		}
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<aside id="allMenu">
		<div class="frame">
			<div class="allmenu_head">
				<div class="allmenu-demo"><a href="#">Demo</a></div><!-- // header-demo -->
				<div class="allmenu-lang">
					<button type="button">ENGLISH</button>
					<ul class="list">
						<li><a href="#"><span class="flag-icon flag-icon-jpn" style="padding: 0px;"></span><span class="code">Japan</span> </a></li>
						<li><a href="#"><span class="flag-icon flag-icon-eng" style="padding: 0px;"></span><span class="code">English</span> </a></li>
						<li><a href="#"><span class="flag-icon flag-icon-kor" style="padding: 0px;"></span><span class="code">한국어</span> </a></li>
						<li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
					</ul>
				</div>
				<button type="button" class="allmenu_ctrl allmenu_close"><em class="blind">TotalMenu Close</em><span></span></button>
			</div>
			<div class="allmenu-user">
				<a href="https://my.kj-glovicevc.com/register" target="_blank">Login</a>
				<a href="https://my.kj-glovicevc.com/register" target="_blank">Open Live Account</a>
			</div><!-- // header-user -->

			<ul id="anb" class="anb-1dep">
				<li><a class="anb-menu">Trading</a>
					<div>
						<ul class="anb-2dep">
							<li class="heading"><a href="market.html">Markets</a></li>
							<li><a href="forex.html">Forex</a></li>
							<li><a href="Commodity Futures.html">Commodity Futures</a></li>
							<li><a href="Energies.html">Energies</a></li>
							<li><a href="Spot Metals.html">Metals</a></li>
							<li><a href="Spot Indices.html">Spot Indices</a></li>
							<li><a href="Crypto Currencies.html">Crypto Currencies</a></li>
						</ul>
						<ul class="anb-2dep">
							<li class="heading"><a href="Account Types.html">Account Types</a></li>
							<li><a href="Standard Fixed.html">Standard</a></li>
							<li><a href="Premium.html">Premium</a></li>
						</ul>
					</div>
				</li>
				<li><a class="anb-menu" href="Platfoms.html">Platform</a>
					<div>
						<ul class="anb-2dep">
							<li class="heading">Trading</li>
							<li><a href="mt4.html">Metatrader&nbsp;4</a></li>
						</ul>
						<ul class="anb-2dep">
							<li class="heading">PAMM / MAM</li>
							<li><a href="pamm.html">PAMM</a></li>
							<li><a href="mam.html">MAM</a></li>
						</ul>
					</div>
				</li>
				<li><a class="anb-menu">About Us</a>
					<div>
						<ul class="anb-2dep">
							<li><a href="Company Profile.html">Company&nbsp;Profile</a></li>
							<li><a href="Career.html">Career</a></li>
						</ul>
					</div>
				</li>
				<li><a class="anb-menu" href="Partnership.html">Partnership</a>
					<div>
						<ul class="anb-2dep">
							<li><a href="White Label.html">White&nbsp;Label</a></li>
							<li><a href="Introducing.html">IB Introducer</a></li>
							<li><a href="Affiliates Program.html">Affiliate</a></li>
						</ul>
					</div>
				</li>
				<li><a class="anb-menu">Education</a>
					<div>
						<ul class="anb-2dep">
							<li><a href="Web Seminar.html">Web&nbsp;Seminar</a></li>
						</ul>
					</div>
				</li>
			</ul>

		</div>
	</aside>
	<!-- // allMenu -->

	<div id="wrap">
		<div id="header">
			<div class="inner">
				<h1 class="header-logo"><a href="index.php"><img src="../img/main/header-logo-vc.png" alt=""></a></h1>

				<?php
				include_once('menu.php');
				?>

				<div class="header-user">
					<a href="https://my.kj-glovicevc.com/register">Login</a>
					<a href="https://my.kj-glovicevc.com/register">Open Live Account</a>
				</div><!-- // header-user -->

				<div class="header-demo"><a href="https://my.kj-glovicevc.com/register">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">ENGLISH</button>
					<ul class="list">
						<!-- <li><a href="#"><span class="flag-icon flag-icon-jpn" style="padding: 0px;"></span><span class="code">Japan</span> </a></li> -->
						<li><a href="#"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>
						<!-- <li><a href="#"><span class="flag-icon flag-icon-kor" style="padding: 0px;"></span><span class="code">한국어</span> </a></li>	 -->
						<li><a href="vi/Platfoms.php"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->

		<!-- container -->
		<div class="container platforms">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10">PLATFORMS</div>
					<div class="visual-platforms-i1 ani-top delay2"><img src="../img/platforms/platform-img/platforms_visual-i1.png"></div>
				</div>
			</div>
			<!-- // visual -->

			<?php
			include_once('content-store.php');
			?>

			<div class="content content-02">
				<div class="inner">
					<div class="content-color-text">Lịch Kinh Tế</div>
					<div class="content-image">
						<!-- TradingView Widget BEGIN -->
						<div class="minh">
							<!-- TradingView Widget BEGIN -->
							<div class="tradingview-widget-container" style="margin: 0 auto;">
								<div class="tradingview-widget-container__widget"></div>
								<!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/currencies/economic-calendar/" rel="noopener" target="_blank"><span class="blue-text">Economic Calendar</span></a> by TradingView</div> -->
								<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
									{
										"colorTheme": "light",
										"isTransparent": false,
										"width": "1200",
										"height": "800",
										"locale": "en",
										"importanceFilter": "-1,0,1"
									}
								</script>
							</div>
							<!-- TradingView Widget END -->
						</div>
						<!-- TradingView Widget END -->
					</div>

				</div>
			</div><!-- // content -->

			<div class="content content-03">
				<div class="inner">
					<div class="content-info-part">
						<div class="title">DỊCH VỤ SAO CHÉP GIAO DỊCH</div>
						<div class="text">
							Sao chép giao dịch cho phép các nhà giao dịch trên thị trường tài chính tự động sao chép các tài khoản chủ được mở và quản lý bởi một nhà đầu tư được chọn, thường là trong bối cảnh mạng giao dịch xã hội.
							<br><br>

							Không giống như giao dịch nhân bản (một phương pháp cho phép nhà giao dịch sao chép các chiến lược cụ thể), sao chép các liên kết giao dịch một phần của nhà giao dịch sao chép tiền vào tài khoản của nhà đầu tư đã sao chép. Bất kỳ hành động giao dịch nào được thực hiện từ sau bởi nhà đầu tư được sao chép, chẳng hạn như đặt một lệnh, chỉ định các lệnh Cắt lỗ và Chốt lời, hoặc đóng điểm lệnh, cũng được thực hiện trong tài khoản của nhà giao dịch sao chép theo lệnh tỷ lệ giữa tài khoản của nhà đầu tư được sao chép và các quỹ giao dịch sao chép được phân bổ của nhà đầu tư sao chép.
						</div>
						<div class="image"><img src="../img/platforms/platforms_trading_service.gif" alt=""></div>
					</div>

					<div class="content-info-part">
						<div class="title">DỊCH VỤ PAMM</div>
						<div class="text">
							Dịch vụ PAMM là một phần mềm giải pháp giúp bạn có thể sao chép các hoạt động giao dịch từ một tài khoản "Master - Bậc thầy" sang một hoặc nhiều Tài khoản "Follower - Người theo dõi", giúp tự động hóa việc phân phối lãi / lỗ. Master điều hành quỹ của mình thông qua một Tài khoản PAMM nhất định, và chiến lược giao dịch của nó được nhân rộng trên quỹ của Người theo dõi. Hiệu suất tài khoản PAMM có thể được xem và phân tích với sự trợ giúp của phân tích nâng cao cung cấp thông tin ở dạng kỹ thuật số và đồ họa.
							<br><br>
							Dịch vụ PAMM đảm bảo sao chép chính xác và tức thời các giao dịch trên quỹ của Người theo dõi.
							<br><br>
							Dịch vụ PAMM là một phần mềm giải pháp tiên tiến nhằm hợp nhất các nhà giao dịch có kinh nghiệm (Master) và những người quan tâm đến thị trường tài chính (Follower) trên toàn thế giới. Mọi người tham gia đều nhận được lợi ích do hợp tác.
						</div>
					</div>

					<div class="inner-title"><span>Tài khoản PAMM hoạt động như thế nào?</span></div>

					<div class="content-image"><img src="../img/platforms/platforms_pamm_service1.gif" alt=""></div>

					<div class="inner-title"><span>Đầu tư vào một tài khoản PAMM</span></div>
					<div class="inner-text">Các nhà đầu tư chọn một người quản lý trong bảng xếp hạng tài khoản PAMM<br>và đầu tư tiền vào tài khoản của họ</div>
					<div class="content-image"><img src="../img/platforms/platforms_pamm_service2.gif" alt=""></div>
					<!-- <div class="content-image"><img src="../img/platforms/platforms_pamm_service2_text.png" alt=""></div> -->

					<div class="content-info-part">
						<div class="title">Tính năng MAM/PAMM</div>
						<ul class="inner-text" style="font-size: 20px; line-height: 25px;">
							<li>- Người quản lý MAM điều chỉnh thông số giao dịch trong thời gian thực</li>
							<li>- Không giới hạn tài khoản giao dịch và số tiền gửi</li>
							<li>- Giao dịch tài khoản Full, Mini & Micro Lot để có lợi thế phân bổ tốt nhất</li>
							<li>- Phân bổ cho các tài khoản ít nhất là 0.01 Lots (1000 đơn vị)</li>
							<li>- Tất cả các loại lệnh thông thường được chấp nhận: Market, Stop, Limit</li>
							<li>- Tất cả các loại lệnh đặc biệt được chấp nhận: Trailing Stop, Close By và Close All</li>
							<li>- Quản lý nhiều tài khoản chính có các chiến lược khác nhau</li>
							<li>- Cho phép Expert Advisor (EA, phần mềm giao dịch tự động) giao dịch các tài khoản được quản lý từ phía khách hàng</li>
							<li>- Mỗi Tài khoản phụ có một Output để sàng lọc báo cáo</li>
							<li>- Cửa số theo dõi thị trường trong MAM</li>
							<li>- Giám sát quản lý đơn hàng trực tiếp trong MAM bao gồm P&L</li>
							<li>- STP trên tài khoản chính để thực hiện đơn đặt hàng số lượng lớn, với phân bổ tức thì cho các tài khoản phụ</li>
							<li>- Giám sát hoa hồng và hiệu suất trong thời gian thực</li>
							<li>- Quản lý báo cáo khách hàng hàng tháng, hàng quý và hàng năm thông qua trình quản lý MetaTrader</li>
						</ul>
					</div>

				</div>
			</div><!-- // content -->

		</div>
		<!-- // container -->

		<div id="footer">
			<div class="inner">



				<?php
				include_once('menufooter.php');
				include_once("footer-infor.php");
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