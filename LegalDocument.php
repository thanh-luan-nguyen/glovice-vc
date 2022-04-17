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
		}

		.neonText {
			color: #fff;
			text-shadow:
				0 0 7px #fff,
				0 0 10px #fff,
				0 0 21px #fff,
				0 0 42px #0fa,
				0 0 82px #0fa,
				0 0 92px #0fa,
				0 0 102px #0fa,
				0 0 151px #0fa;
		}
	</style>
</head>

<body>

	<button type="button" class="allmenu_ctrl allmenu_open"><em class="blind">TotalMenu Open</em><span></span></button>
	<!-- allMenu -->
	<?php
	$link_switch = 'vi/market.php';
	include_once('menumobile.php');
	?>
	<!-- // allMenu -->

	<div id="wrap">
		<div id="header">
			<div class="inner">
				<h1 class="header-logo"><a href="index.php"><img src="img/main/header_logo.png" alt=""></a></h1>
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
		<div class="container legal-document">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay10">LEGAL DOCUMENT</div>
					<div class="visual-company-i1 ani-top delay5"><img src="img/aboutus/aboutus-img/legal_document-i1.png"></div>
				</div>
			</div>




			<div class="content content-01">
				<div class="inner">
					<div class="content-slope">
						<div class="content-slope-box" style="background-image:url(img/aboutus/company_profile_slope_item1.jpg)">
							<div class="text">
								Protecting the privacy and safeguarding the personal and financial information
								of our clients and website visitors is one of our highest priorities. The following
								Privacy Statement explains how Glovice VC collects and protects your personal
								information. References to "Glovice VC" in this Privacy Statement include all
								Glovice VC companies and divisions.
							</div>
							<div class="btn">
								<a href="img/aboutus/aboutus-img/Privacy Statement-matome.pdf" download>Learn more</a>
							</div>
						</div>
						<div class="content-slope-box" style="background-image:url(img/aboutus/company_profile_slope_item2.jpg)">
							<div class="text">
								Money laundering is the act of converting illegal money/monetary instruments
								into money/investments that appear legal to prevent the actual illegal source
								from getting tracked.
							</div>
							<div class="btn">
								<a href="img/aboutus/aboutus-img/AML_PS_TAC-matome.pdf" download>Learn more</a>
							</div>
						</div>
						<div class="content-slope-box" style="background-image:url(img/aboutus/company_profile_slope_item3.jpg)">
							<div class="text">
								Responsibility of providing advice for visitors investment type Risk Disclosure
								Products and services…
							</div>
							<div class="btn">
								<a href="img/aboutus/aboutus-img/Terms And Conditions.pdf" download>Learn more</a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- // content -->



		</div>
		<!-- // container -->






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