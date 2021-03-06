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
					<a href="https://my.kj-glovicevc.com/login" target="_blank">????ng Nh???p</a>
					<a href="https://my.kj-glovicevc.com/register" target="_blank">M??? T??i Kho???n Live</a>
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
							<span class="title">C??ng C??? Giao D???ch<br>Kh??c Nhau</span>
						</a></li>
					<li class="item-02 ani-top delay32020-11-13"><a href="#">
							<span class="icon"></span>
							<span class="title">N???p V?? R??t Ti???n<br>Nhanh Ch??ng</span>
						</a></li>
					<li class="item-03 ani-top delay3"><a href="#">
							<span class="icon"></span>
							<span class="title">Gi?? Bi???n ?????ng Theo<br>Th???i Gian Th???c</span>
						</a></li>
					<li class="item-04 ani-top delay4"><a href="#">
							<span class="icon"></span>
							<span class="title">Kh???p L???nh<br>Nhanh Nh???t</span>
						</a></li>
					<li class="item-05 ani-top delay5"><a href="#">
							<span class="icon"></span>
							<span class="title">Ch????ng Tr??nh ????o T???o<br>Cho Ng?????i M???i </span>
						</a></li>
					<li class="item-06 ani-top delay6"><a href="#">
							<span class="icon"></span>
							<span class="title">H??? Tr??? Kh??ch H??ng<br>T???n T??m</span>
						</a></li>
				</ul>

			</div>

			<div class="content content-02">
				<div class="inner">
					<!-- <div class="inner-title"></div> -->
					<div class="inner-text">Kh??m ph?? c??c th??? tr?????ng giao d???ch ch??nh tr??n th??? gi???i th??ng qua t??i kho???n v?? n???n t???ng Glovice VC.</div>
					<ul class="inner-list motion">
						<li class="item1 ani-left delay1">
							<a href="forex.php" class="box">
								<div class="icon"></div>
								<div class="title">Forex</div>
								<div class="text">
									<!-- Ngo???i h???i l?? th??? tr?????ng giao d???ch
									ch??nh,  t??nh thanh kho???n cao.<br>
									?????c bi???t, ????y l?? n??i
									c??c nh?? ?????u t??, nh?? cung c???p thanh kho???n
									t??? kh???p c??c n??i tr??n th??? gi???i h???i t???. -->
								</div>
							</a>
						</li>
						<li class="item2 ani-left delay2">
							<a href="commodityfutures.php" class="box">
								<div class="icon"></div>
								<div class="title">H??ng H??a</div>
								<div class="text">
									<!-- Giao d???ch c??c lo???i n??ng s???n ??a d???ng<br>
									nh?? c?? ph??, ?????u n??nh, ???????ng, ng??,<br>
									ca cao, l??a m?? b???ng CFDs, cung c???p<br>
									spread th???t v?? ????n b???y l??n ?????n 1:100. -->
								</div>
							</a>
						</li>
						<li class="item3 ani-left delay3">
							<a href="spotindices.php" class="box">
								<div class="icon"></div>
								<div class="title">Ch??? S???</div>
								<div class="text">
									<!-- Ti???p c???n ??a d???ng c??c lo???i ch??? s??? -<br>
									H??nh th???c ???????c ??a chu???ng nh???t CFDs<br>
									Bao g???m ch??? s??? S&P200 c???a ??c,<br>
									ch??? s??? FTSE100 c???a Anh v?? ch??? s???<br>
									DJIA c???a M???... -->
								</div>
							</a>
						</li>
						<li class="item4 ani-right delay4">
							<a href="spotmetals.php" class="box">
								<div class="icon"></div>
								<div class="title">Kim Lo???i</div>
								<div class="text">
									<!-- Giao d???ch kim lo???i l?? m???t ngu???n<br>
									?????u t?? an to??n, ?????c bi???t khi n???n<br>
									kinh t??? kh??ng ch???c ch???n. Giao d???ch<br>
									tr??n GloviceFX v?? kh??m ph?? c??c<br>
									c?? h???i giao d???ch m???i. -->
								</div>
							</a>
						</li>
						<li class="item5 ani-right delay5">
							<a href="energies.php" class="box">
								<div class="icon"></div>
								<div class="title">N??ng L?????ng</div>
								<div class="text">
									<!-- C??c m???t h??ng n??ng l?????ng n???i ti???ng<br>
									v???i gi?? c??? bi???n ?????ng. Lu??n ???????c c??c<br>
									nh?? giao d???ch t??m ki???m l???i nhu???n cao<br>
									t??m ki???m. L?? l???a ch???n l?? t?????ng cho<br>
									giao d???ch CFDs. -->
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
								C??ng c??? giao d???ch ph??? bi???n nh???t th??? gi???i ????? giao d???ch CFD. <br>
								H??y th??? v?? l??m bot giao d???ch t??? ?????ng c???a ri??ng b???n!
							</div>
							<div class="download-btn-main">
								<div><a href="https://download.mql5.com/cdn/web/16391/mt4/kjglovice4setup.exe">T???i MT4 cho Windows</a></div>
								<!-- //	<div><a href="#">Download MT4 App Mac</a></div> -->
							</div>
						</div>
						<div class="inner-box">
							<div class="inner-title" style="font-weight: 600;">C?? s???n tr??n ??i???n tho???i di ?????ng</div>
							<div class="inner-text">
								Gi??m s??t s??? thay ?????i c???a th??? tr?????ng th??ng qua c??c ???ng d???ng di ?????ng c???a ch??ng t??i, <br>
								?????ng th???i t???n d???ng nh???ng c?? s??? h??? t???ng giao d???ch trong th???i gian ng???n nh???t <br>
								c??ng nh?? kh??? n??ng kh???p l???nh nhanh,t??nh thanh kho???n cao ???? ???????c ki???m ch???ng r???ng r??i. <br>
								C?? s???n cho iOS v?? thi???t b??? Android.
							</div>

							<div class="store-btn">
								<a href="https://download.mql5.com/cdn/mobile/mt4/android?server=KJGlovice-Demo,KJGlovice-Live" class="google"><span>T???i xu???ng tr??n</span><em>Google Play</em></a>
								<a href="https://download.mql5.com/cdn/mobile/mt4/ios?server=KJGlovice-Demo,KJGlovice-Live" class="apple"><span>T???i xu???ng tr??n</span><em>App Store</em></a>
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
							<div class="title ani-top delay6">Thu???n l???i</div>
							<ul class="text ani-top delay7">
								<li>Kh???p l???nh t???c th??</li>
								<li>N???p v?? r??t ti???n nhanh ch??ng</li>
								<li>??a d???ng c??c lo???i t??i kho???n giao d???ch</li>
							</ul>
						</li>
						<li class="item-02">
							<div class="icon ani-top delay9"></div>
							<div class="title ani-top delay10">Th??n thi???n v???i ng?????i m???i </div>
							<ul class="text ani-top delay11">
								<li>Ch????ng tr??nh ????o t???o ?????c bi???t</li>
								<li>H???i th???o c???a c??c chuy??n gia chuy??n nghi???p</li>
								<li>Tr?? chuy???n tr???c ti???p trong th???i gian th???c</li>
							</ul>
						</li>
						<li class="item-03">
							<div class="icon ani-top delay13"></div>
							<div class="title ani-top delay14">??i???u ki???n giao d???ch ???n ?????nh</div>
							<ul class="text ani-top delay15">
								<li>Spread th???p</li>
								<li>C??ng c??? giao d???ch ????ng tin c???y</li>
								<li>Qu???n l?? r???i ro </li>
							</ul>
						</li>
						<!-- <li class="item-04">
							<div class="icon ani-top delay17"></div>
							<div class="title ani-top delay18">C??c m???c ph?? th???p</div>
							<ul class="text ani-top delay19">
								<li>T??i kho???n s??? ?????c l???p</li>
								<li>H??? tr??? c??c c??ng c??? giao d???ch</li>
								<li>H??? th???ng chuy???n giao d??? d??ng</li>
							</ul>
						</li> -->
					</ul>

				</div>
			</div><!-- // content -->

			<div class="fixed-bg">
				<div class="content content-06">
					<div class="inner motion">

						<div class="inner-title">
							<span>B???t ?????u giao d???ch v???i Glovice VC</span>
							<b>M??? T??i Kho???n Nhanh Trong 4 B?????c ????n Gi???n</b>
						</div>

						<ul class="inner-list">
							<li class="item-01">
								<div class="icon ani-right delay5"></div>
								<div class="title ani-right delay6">????ng k??</div>
								<div class="text ani-right delay7">
									M??? t??i kho???n<br>giao d???ch<br>c???a b???n qua Glovice VC
								</div>
							</li>
							<li class="item-02 ani-right delay8">
								<div class="icon ani-right delay9"></div>
								<div class="title ani-right delay10">X??c minh</div>
								<div class="text ani-right delay11">
									C???p nh???t th??ng tin <br>gi???y t??? ?????<br>x??c minh t??i kho???n c???a b???n
								</div>
							</li>
							<li class="item-03">
								<div class="icon ani-right delay11"></div>
								<div class="title ani-right delay11">T???o qu???</div>
								<div class="text ani-right delay11">
									????ng nh???p v??o Glovice VC<br>Tr???c ti???p n???p ti???n <br>v??o t??i kho???n c???a b???n
								</div>
							</li>
							<li class="item-04">
								<div class="icon ani-right delay14"></div>
								<div class="title ani-right delay14">Giao D???ch</div>
								<div class="text ani-right delay14">
									B???t ?????u giao d???ch<br>tr??n h??n 250<br>c??ng c???
								</div>
							</li>
						</ul>
						<div class="inner-btn"><a href="https://my.kj-glovicevc.com/register" target="_blank">M??? T??I KHO???N LIVE</a></div>
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