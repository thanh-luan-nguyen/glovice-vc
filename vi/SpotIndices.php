<?php
include_once('head.php');
?>

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
						<li><a href="#">日本語</a></li>
						<li><a href="#">ENGLISH</a></li>
						<li><a href="#">한국어</a></li>
					</ul>
				</div>
				<button type="button" class="allmenu_ctrl allmenu_close"><em class="blind">TotalMenu Close</em><span></span></button>
			</div>
			<div class="allmenu-user">
				<a href="https://login.kj-glovicevc.com/" target="_blank">Login</a>
				<a href="https://login.kj-glovicevc.com/" target="_blank">Open Live Account</a>
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

						</ul>
						<ul class="anb-2dep">

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
					<a href="https://my.kj-glovicevc.com/login">Đăng Nhập</a>
					<a href="https://my.kj-glovicevc.com/register">Tạo Tài Khoản Live</a>
				</div><!-- // header-user -->

				<div class="header-demo"><a href="https://my.kj-glovicevc.com/demo-register">Demo</a></div><!-- // header-demo -->
				<div class="header-lang">
					<button type="button">VIETNAM</button>
					<ul class="list">
						<li><a href="../SpotIndices.php"><span class="flag-icon flag-icon-usa" style="padding: 0px;"></span><span class="code">English</span> </a></li>

						<li><a href="#"><span class="flag-icon flag-icon-vnm" style="padding: 0px;"></span><span class="code">Vietnam</span> </a></li>
					</ul>
				</div>

			</div>
		</div><!-- // header -->

		<!-- container -->
		<div class="container spot-indices">

			<!-- visual -->
			<div class="visual">
				<div class="inner motion">
					<div class="visual-title ani-right delay5" style="font-weight:700">CHỈ SỐ</div>
				</div>
			</div>
			<!-- // visual -->

			<div class="content content-01">
				<div class="inner">
					<div class="content-color-text" style="font-weight:600">
						Tận hưởng các tùy chọn khác nhau của chỉ số, hình thức CFD phổ biến nhất tại đây.
						Chúng tôi có một loạt các chỉ số bao gồm Chỉ số S&P 200 của Úc,chỉ số FTSE 100 của Vương quốc Anh và Chỉ số DJIA của Hoa Kỳ.
					</div>

					<!-- TradingView Widget BEGIN -->
					<!-- <div class="tradingview-widget-container">
						<div class="tradingview-widget-container__widget"></div>
						<div class="tradingview-widget-copyright"><a href="https://vn.tradingview.com/markets/indices/" rel="noopener" target="_blank"><span class="blue-text">Các chỉ số</span></a> <span class="blue-text">và</span> <a href="https://vn.tradingview.com/markets/bonds/" rel="noopener" target="_blank"><span class="blue-text">Trái phiếu</span></a></div>
						<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
							{
								"colorTheme": "light",
								"dateRange": "3M",
								"showChart": true,
								"locale": "vi_VN",
								"largeChartUrl": "",
								"isTransparent": false,
								"showSymbolLogo": false,
								"width": "1400",
								"height": "660",
								"plotLineColorGrowing": "rgba(41, 98, 255, 1)",
								"plotLineColorFalling": "rgba(41, 98, 255, 1)",
								"gridLineColor": "rgba(240, 243, 250, 1)",
								"scaleFontColor": "rgba(120, 123, 134, 1)",
								"belowLineFillColorGrowing": "rgba(33, 150, 243, 0.12)",
								"belowLineFillColorFalling": "rgba(33, 150, 243, 0.12)",
								"symbolActiveColor": "rgba(33, 150, 243, 0.12)",
								"tabs": [{
										"title": "Các chỉ số",
										"symbols": [{
												"s": "FOREXCOM:SPXUSD",
												"d": "S&P 500"
											},
											{
												"s": "FOREXCOM:NSXUSD",
												"d": "Nasdaq 100"
											},
											{
												"s": "FOREXCOM:DJI",
												"d": "Dow 30"
											},
											{
												"s": "INDEX:NKY",
												"d": "Nikkei 225"
											},
											{
												"s": "INDEX:DEU30",
												"d": "DAX Index"
											},
											{
												"s": "FOREXCOM:UKXGBP",
												"d": "UK 100"
											},
											{
												"s": "US DJIA INDEX",
												"d": "DJIA Index"
											},
											{
												"s": "CURRENCYCOM:UK100",
												"d": "FTSE 100 Index"
											}
										],
										"originalTitle": "Indices"
									},
									{
										"title": "Trái phiếu",
										"symbols": [{
												"s": "CME:GE1!",
												"d": "Eurodollar"
											},
											{
												"s": "CBOT:ZB1!",
												"d": "T-Bond"
											},
											{
												"s": "CBOT:UB1!",
												"d": "Ultra T-Bond"
											},
											{
												"s": "EUREX:FGBL1!",
												"d": "Euro Bund"
											},
											{
												"s": "EUREX:FBTP1!",
												"d": "Euro BTP"
											},
											{
												"s": "EUREX:FGBM1!",
												"d": "Euro BOBL"
											}
										],
										"originalTitle": "Bonds"
									}
								]
							}
						</script>
					</div> -->
					<div class="content-image">
						<!-- <img src="img/trading/spot_indices_content_table.jpg" alt=""> -->
						<!-- TradingView Widget BEGIN -->
						<div class="tradingview-widget-container">
							<div class="tradingview-widget-container__widget"></div>
							<!-- <div class="tradingview-widget-copyright"><a href="https://vn.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Các Thị trường Tài chính</span></a> bởi TradingView</div> -->
							<script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
								{
									"width": 1400,
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
									"locale": "en"
								}
							</script>
						</div>
						<!-- TradingView Widget END -->
					</div>
					<!-- TradingView Widget END -->

					<div class="content-color-button"><a href="https://my.kj-glovicevc.com/register">Bắt đầu giao dịch ngay bây giờ</a></div>
				</div>
			</div><!-- // content -->

			<?php
			include('content02.php');
			?>


			<div class="fixed-bg" style="background: unset;">
				<div class="content content-03">
					<div class="inner">
						<div class="content-info">
							<div class="content-info-part">
								<div class="title"> Chỉ số và giao dịch chỉ số là gì?</div>
								<div class="text" style="font-weight: 600;"> Một chỉ số thường được mô tả như một danh mục cổ phiếu đại diện cho một thị trường hoặc khu vực thị trường cụ thể. Do đó, các chỉ số (chỉ số chứng khoán) đo lường hiệu suất giá tổng thể của một tập hợp các cổ phiếu của một phân đoạn được chọn trên thị trường chứng khoán. Ví dụ, USA500 chủ yếu dựa hoàn toàn vào 500 doanh nghiệp tài sản có trọng số cụ thể theo vốn hóa thị trường được lập chỉ mục tại New York Exchange hoặc NASDAQ. <br><br>
									Các chỉ số giao dịch cho phép bạn tiếp cận doanh nghiệp với toàn bộ khu vực bằng cách bắt đầu một vị trí duy nhất. Sự dao động và biến động của tỷ giá chỉ số bị ảnh hưởng bởi nhiều thứ như hoạt động chính trị, các sự kiện chính có ảnh hưởng đến các doanh nghiệp trong một khu vực Kinh doanh được chọn, thống kê tài chính như số liệu việc làm và các điều chỉnh lớn trên thị trường tiền tệ. Tại Glovice VC, chúng tôi cung cấp cho bạn khả năng giao dịch các công cụ phái sinh trên các chỉ số chính trên khắp các thị trường chứng khoán quốc tế.
								</div>
								<div class="content-color-button-new"><a href="https://my.kj-glovicevc.com/register">Bắt đầu giao dịch ngay bây giờ</a></div>
							</div>
						</div>
					</div>
				</div><!-- // content -->



				<?php
				include_once('content-store.php');
				?>

			</div>

		</div>
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