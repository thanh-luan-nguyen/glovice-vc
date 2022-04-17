<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container exchange-rate-list">
    <div class="tradingview-widget-container__widget"></div>
    <!-- <div class="tradingview-widget-copyright"><a href="https://vn.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"> Ticker Tape</span></a> bởi TradingView</div> -->
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
        {
            "symbols": [{
                    "description": "",
                    "proName": "FX:USDJPY"
                },
                {
                    "description": "",
                    "proName": "OANDA:USDCAD"
                },
                {
                    "description": "",
                    "proName": "OANDA:USDCHF"
                },
                {
                    "description": "",
                    "proName": "OANDA:EURUSD"
                },
                {
                    "description": "",
                    "proName": "OANDA:EURJPY"
                },
                {
                    "description": "",
                    "proName": "FX_IDC:USDGBP"
                },
                {
                    "description": "",
                    "proName": "OANDA:EURGBP"
                }
            ],
            "showSymbolLogo": false,
            "colorTheme": "light",
            "isTransparent": false,
            "displayMode": "adaptive",
        }
    </script>
</div>
<!-- TradingView Widget END -->
<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Composer -->
<!-- Source: https://www.jssor.com/demos/full-width-slider.slider/=edit -->


<script src="https://kj-glovicevc.com/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
<script type="text/javascript">
    window.jssor_1_slider_init = function() {

        var jssor_1_SlideoTransitions = [
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 0,
                d: 1000,
                y: 5,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 200,
                d: 1000,
                y: 25,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 400,
                d: 1000,
                y: 45,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 600,
                d: 1000,
                y: 65,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 800,
                d: 1000,
                y: 85,
                e: {
                    y: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                ls: 0.5
            }, {
                b: 500,
                d: 1000,
                y: 195,
                e: {
                    y: 6
                }
            }],
            [{
                b: 0,
                d: 2000,
                y: 30,
                e: {
                    y: 3
                }
            }],
            [{
                b: -1,
                d: 1,
                rY: -15,
                tZ: 100
            }, {
                b: 0,
                d: 1500,
                y: 30,
                o: 1,
                e: {
                    y: 3
                }
            }],
            [{
                b: -1,
                d: 1,
                rY: -15,
                tZ: -100
            }, {
                b: 0,
                d: 1500,
                y: 100,
                o: 0.8,
                e: {
                    y: 3
                }
            }],
            [{
                b: 500,
                d: 1500,
                o: 1
            }],
            [{
                b: 0,
                d: 1000,
                y: 380,
                e: {
                    y: 6
                }
            }],
            [{
                b: 300,
                d: 1000,
                x: 80,
                e: {
                    x: 6
                }
            }],
            [{
                b: 300,
                d: 1000,
                x: 330,
                e: {
                    x: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                r: -110,
                sX: 5,
                sY: 5
            }, {
                b: 0,
                d: 2000,
                o: 1,
                r: -20,
                sX: 1,
                sY: 1,
                e: {
                    o: 6,
                    r: 6,
                    sX: 6,
                    sY: 6
                }
            }],
            [{
                b: 0,
                d: 600,
                x: 150,
                o: 0.5,
                e: {
                    x: 6
                }
            }],
            [{
                b: 0,
                d: 600,
                x: 1140,
                o: 0.6,
                e: {
                    x: 6
                }
            }],
            [{
                b: -1,
                d: 1,
                sX: 5,
                sY: 5
            }, {
                b: 600,
                d: 600,
                o: 1,
                sX: 1,
                sY: 1,
                e: {
                    sX: 3,
                    sY: 3
                }
            }]
        ];

        var jssor_1_options = {
            $AutoPlay: 1,
            $LazyLoading: 1,
            $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
            },
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
            }
        };

        var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

        /*#region responsive code begin*/

        var MAX_WIDTH = 1920;

        function ScaleSlider() {
            var containerElement = jssor_1_slider.$Elmt.parentNode;
            var containerWidth = containerElement.clientWidth;

            if (containerWidth) {

                var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                jssor_1_slider.$ScaleWidth(expectedWidth);
            } else {
                window.setTimeout(ScaleSlider, 20);
            }
        }

        ScaleSlider();

        $Jssor$.$AddEvent(window, "load", ScaleSlider);
        $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        /*#endregion responsive code end*/
    };
</script>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
<style>
    /* jssor slider loading skin spin css */
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    .buttonproit:hover {
        color: #f0a329;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }


    /*jssor slider bullet skin 132 css*/
    .jssorb132 {
        position: absolute;
    }

    .jssorb132 .i {
        position: absolute;
        cursor: pointer;
    }

    .jssorb132 .i .b {
        fill: #fff;
        fill-opacity: 0.8;
        stroke: #000;
        stroke-width: 1600;
        stroke-miterlimit: 10;
        stroke-opacity: 0.7;
    }

    .jssorb132 .i:hover .b {
        fill: #000;
        fill-opacity: .7;
        stroke: #fff;
        stroke-width: 2000;
        stroke-opacity: 0.8;
    }

    .jssorb132 .iav .b {
        fill: #000;
        stroke: #fff;
        stroke-width: 2400;
        fill-opacity: 0.8;
        stroke-opacity: 1;
    }

    .jssorb132 .i.idn {
        opacity: 0.3;
    }

    .jssora051 {
        display: block;
        position: absolute;
        cursor: pointer;
    }

    .jssora051 .a {
        fill: none;
        stroke: #fff;
        stroke-width: 360;
        stroke-miterlimit: 10;
    }

    .jssora051:hover {
        opacity: .8;
    }

    .jssora051.jssora051dn {
        opacity: .5;
    }

    .jssora051.jssora051ds {
        opacity: .3;
        pointer-events: none;
    }
</style>
<svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
    <defs>
        <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stddeviation="4"></feGaussianBlur>
        </filter>
        <radialGradient id="jssor_1_grd_2">
            <stop offset="0" stop-color="#fff"></stop>
            <stop offset="1" stop-color="#000"></stop>
        </radialGradient>
        <mask id="jssor_1_msk_3">
            <path fill="url(#jssor_1_grd_2)" d="M600,0L600,400L0,400L0,0Z" x="0" y="0" style="position:absolute;overflow:visible;"></path>
        </mask>
    </defs>
</svg>
<div id="jssor_1" style="position:relative;margin:0 auto;top:75px;left:0px;width:1600px;height:560px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1600px;height:560px;overflow:hidden;">
        <!-- 1 -->
        <div style="background-color:#000000;">
            <a href="specialgift.php"><img data-u="image" style="opacity:1;" data-src="../img/caiso1-update.jpg" /></a><!-- Slide 3 -->
        </div>

        <div>
            <a href="lotterygame.php"><img data-u="image" data-src="../img/caiso2.jpg"/></a>
            <!-- <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                    <div data-to="50% 50%" data-t="13" style="left:100px;top:-20px;width:800px;height:200px;position:absolute;opacity:0;">
                    </div>
                </div> -->
        </div>
        <!-- <button class="buttonproit" style="left: 725px; top: 470px; width:150px;height:45px;position:absolute; background-color: transparent; border: 1px solid;font-family:'Roboto Condensed',sans-serif;"><a href="#">CREAT ACCOUNT</a></button> -->

        <div>
            <a href="welcomebonus.php"><img data-u="image" data-src="../img/caiso3-fix.jpg" /></a>
            <!-- <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
                </div> -->
            <!-- <button class="buttonproit" style="left: 725px; top: 470px; width:150px;height:45px;position:absolute; background-color: transparent; border: 1px solid;font-family:'Roboto Condensed',sans-serif;"><a href="#">CREAT ACCOUNT</a></button> -->
        </div>

        <!-- 4 -->
        <div>
            <img data-u="image" data-src="../img/GloviceVC-bg-4.jpg" />
            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
            </div>
            <!-- <button class="buttonproit" style="left: 725px; top: 470px; width:150px;height:45px;position:absolute; background-color: transparent; border: 1px solid;font-family:'Roboto Condensed',sans-serif;"><a href="#">CREAT ACCOUNT</a></button> -->
        </div>

        <!-- 5 -->
        <div>
            <img data-u="image" data-src="../img/GloviceVC-bg-5.jpg" />
            <div data-ts="flat" data-p="1080" style="left:0px;top:0px;width:1600px;height:560px;position:absolute;">
            </div>
            <!-- <button class="buttonproit" style="left: 725px; top: 470px; width:150px;height:45px;position:absolute; background-color: transparent; border: 1px solid;font-family:'Roboto Condensed',sans-serif;"><a href="#">CREAT ACCOUNT</a></button> -->
        </div>

    </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;"></a>
    <!-- Bullet Navigator -->
    <div data-u="navigator" class="jssorb132" style="position:absolute;bottom:24px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:12px;height:12px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
        </svg>
    </div>
    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
        </svg>
    </div>
</div>
<script type="text/javascript">
    jssor_1_slider_init();
</script>
<!-- #endregion Jssor Slider End -->