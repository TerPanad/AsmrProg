<?php 
    include('./server.php');
    session_abort();
 ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="#" class="logo">
            <img src="./information/images/logo.png" alt="">
            <style>
                img {
                    width: 30px;
                    height: 30px;
                    margin: 10px;
                }
            </style>
            <div class="logo-name"><span>Asmr</span>Prog</div>
        </a>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <span class="navbar-text">
                <div>
                    <a href="login.php"><span class="login">Login</span></a>
            <span> | </span>
            <a href="signup.php"><span class="signup">Sign up </span></a>
        </div>
        </span>
        </div>
    </nav>



    <div class="container">
        <main>
            <h1>Look first then leap</h1>
            <p> The best trades require research, then commitment.</p>
        </main>
        <aside>
            <h2>Exchange</h2>
            <p>This is the sidebar content.</p>
        </aside>
    </div>

</body>



<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div class="tradingview-widget-container__widget"></div>
    <div class="tradingview-widget-copyright">
        <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
    </div>
    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-crypto-coins-heatmap.js" async>
        {
            "dataSource": "CryptoDeFi",
            "blockSize": "market_cap_calc",
            "blockColor": "change",
            "locale": "en",
            "symbolUrl": "",
            "colorTheme": "dark",
            "hasTopBar": true,
            "isDataSetEnabled": true,
            "isZoomEnabled": true,
            "hasSymbolTooltip": true,
            "isMonoSize": false,
            "width": "100%",
            "height": "800"
        }
    </script>
</div>
<!-- TradingView Widget END -->



<div class="">
    <div>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500 Index"
                    }, {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100 Cash CFD"
                    }, {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR to USD"
                    }, {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    }, {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    }],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "colorTheme": "dark",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</div>



<div class="container">
    <main>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                {
                    "width": "1005",
                    "height": "600",
                    "symbolsGroups": [{
                        "name": "Indices",
                        "originalName": "Indices",
                        "symbols": [{
                            "name": "FOREXCOM:SPXUSD",
                            "displayName": "S&P 500 Index"
                        }, {
                            "name": "FOREXCOM:NSXUSD",
                            "displayName": "US 100 Cash CFD"
                        }, {
                            "name": "FOREXCOM:DJI",
                            "displayName": "Dow Jones Industrial Average Index"
                        }, {
                            "name": "INDEX:NKY",
                            "displayName": "Nikkei 225"
                        }, {
                            "name": "INDEX:DEU40",
                            "displayName": "DAX Index"
                        }, {
                            "name": "FOREXCOM:UKXGBP",
                            "displayName": "FTSE 100 Index"
                        }]
                    }, {
                        "name": "Futures",
                        "originalName": "Futures",
                        "symbols": [{
                            "name": "CME_MINI:ES1!",
                            "displayName": "S&P 500"
                        }, {
                            "name": "CME:6E1!",
                            "displayName": "Euro"
                        }, {
                            "name": "COMEX:GC1!",
                            "displayName": "Gold"
                        }, {
                            "name": "NYMEX:CL1!",
                            "displayName": "WTI Crude Oil"
                        }, {
                            "name": "NYMEX:NG1!",
                            "displayName": "Gas"
                        }, {
                            "name": "CBOT:ZC1!",
                            "displayName": "Corn"
                        }]
                    }, {
                        "name": "Bonds",
                        "originalName": "Bonds",
                        "symbols": [{
                            "name": "CBOT:ZB1!",
                            "displayName": "T-Bond"
                        }, {
                            "name": "CBOT:UB1!",
                            "displayName": "Ultra T-Bond"
                        }, {
                            "name": "EUREX:FGBL1!",
                            "displayName": "Euro Bund"
                        }, {
                            "name": "EUREX:FBTP1!",
                            "displayName": "Euro BTP"
                        }, {
                            "name": "EUREX:FGBM1!",
                            "displayName": "Euro BOBL"
                        }]
                    }, {
                        "name": "Forex",
                        "originalName": "Forex",
                        "symbols": [{
                            "name": "FX:EURUSD",
                            "displayName": "EUR to USD"
                        }, {
                            "name": "FX:GBPUSD",
                            "displayName": "GBP to USD"
                        }, {
                            "name": "FX:USDJPY",
                            "displayName": "USD to JPY"
                        }, {
                            "name": "FX:USDCHF",
                            "displayName": "USD to CHF"
                        }, {
                            "name": "FX:AUDUSD",
                            "displayName": "AUD to USD"
                        }, {
                            "name": "FX:USDCAD",
                            "displayName": "USD to CAD"
                        }]
                    }],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "colorTheme": "light",
                    "locale": "en",
                    "backgroundColor": "#ffffff"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->



    </main>
    <aside>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                {
                    "colorTheme": "right",
                    "dateRange": "1D",
                    "showChart": true,
                    "locale": "en",
                    "width": "700",
                    "height": "600",
                    "largeChartUrl": "",
                    "isTransparent": false,
                    "showSymbolLogo": true,
                    "showFloatingTooltip": false,
                    "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                    "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                    "gridLineColor": "rgba(240, 243, 250, 0)",
                    "scaleFontColor": "rgba(209, 212, 220, 1)",
                    "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                    "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                    "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                    "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                    "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                    "tabs": [{
                        "title": "Indices",
                        "symbols": [{
                            "s": "FOREXCOM:SPXUSD",
                            "d": "S&P 500 Index"
                        }, {
                            "s": "FOREXCOM:NSXUSD",
                            "d": "US 100 Cash CFD"
                        }, {
                            "s": "FOREXCOM:DJI",
                            "d": "Dow Jones Industrial Average Index"
                        }, {
                            "s": "INDEX:NKY",
                            "d": "Nikkei 225"
                        }, {
                            "s": "INDEX:DEU40",
                            "d": "DAX Index"
                        }, {
                            "s": "FOREXCOM:UKXGBP",
                            "d": "FTSE 100 Index"
                        }],
                        "originalTitle": "Indices"
                    }, {
                        "title": "Futures",
                        "symbols": [{
                            "s": "CME_MINI:ES1!",
                            "d": "S&P 500"
                        }, {
                            "s": "CME:6E1!",
                            "d": "Euro"
                        }, {
                            "s": "COMEX:GC1!",
                            "d": "Gold"
                        }, {
                            "s": "NYMEX:CL1!",
                            "d": "WTI Crude Oil"
                        }, {
                            "s": "NYMEX:NG1!",
                            "d": "Gas"
                        }, {
                            "s": "CBOT:ZC1!",
                            "d": "Corn"
                        }],
                        "originalTitle": "Futures"
                    }, {
                        "title": "Bonds",
                        "symbols": [{
                            "s": "CBOT:ZB1!",
                            "d": "T-Bond"
                        }, {
                            "s": "CBOT:UB1!",
                            "d": "Ultra T-Bond"
                        }, {
                            "s": "EUREX:FGBL1!",
                            "d": "Euro Bund"
                        }, {
                            "s": "EUREX:FBTP1!",
                            "d": "Euro BTP"
                        }, {
                            "s": "EUREX:FGBM1!",
                            "d": "Euro BOBL"
                        }],
                        "originalTitle": "Bonds"
                    }, {
                        "title": "Forex",
                        "symbols": [{
                            "s": "FX:EURUSD",
                            "d": "EUR to USD"
                        }, {
                            "s": "FX:GBPUSD",
                            "d": "GBP to USD"
                        }, {
                            "s": "FX:USDJPY",
                            "d": "USD to JPY"
                        }, {
                            "s": "FX:USDCHF",
                            "d": "USD to CHF"
                        }, {
                            "s": "FX:AUDUSD",
                            "d": "AUD to USD"
                        }, {
                            "s": "FX:USDCAD",
                            "d": "USD to CAD"
                        }],
                        "originalTitle": "Forex"
                    }]
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </aside>
</div>
<div class="">
    <div>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500 Index"
                    }, {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100 Cash CFD"
                    }, {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR to USD"
                    }, {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    }, {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    }],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "colorTheme": "dark",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</div>



<div class="container">
    <main>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                {
                    "width": "1000",
                    "height": 550,
                    "defaultColumn": "overview",
                    "defaultScreen": "general",
                    "market": "forex",
                    "showToolbar": true,
                    "colorTheme": "light",
                    "locale": "en",
                    "isTransparent": false
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </main>
    <aside>
        <h1 class="tex">Screener Widget</h1>
        <p class="tex1">Separate the wheat from the chaff with this embeddable Screener – handy for sorting symbols both by fundamental and technical indicators.</p>
        <style>
            .tex {
                text-align: center;
                margin-top: 100px;
                margin-left: 100px;
                width: 1000;
                height: 500;
            }
            
            .tex1 {
                text-align: center;
                margin-left: 100px;
                width: 1000;
                height: 500;
            }
        </style>
    </aside>
</div>



<div class="">
    <div>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                        "proName": "FOREXCOM:SPXUSD",
                        "title": "S&P 500 Index"
                    }, {
                        "proName": "FOREXCOM:NSXUSD",
                        "title": "US 100 Cash CFD"
                    }, {
                        "proName": "FX_IDC:EURUSD",
                        "title": "EUR to USD"
                    }, {
                        "proName": "BITSTAMP:BTCUSD",
                        "title": "Bitcoin"
                    }, {
                        "proName": "BITSTAMP:ETHUSD",
                        "title": "Ethereum"
                    }],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "colorTheme": "dark",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
</div>



<div class="container">
    <main>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright">
                <a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"></a>
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                {
                    "width": "1000",
                    "height": 550,
                    "defaultColumn": "overview",
                    "screener_type": "crypto_mkt",
                    "displayCurrency": "USD",
                    "colorTheme": "light",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </main>
    <aside>
        <h2 class="text2">Cryptocurrency Market Widget</h2>
        <p class="text3">This widget displays crypto assets and then sorts them by their market capitalization.</p>
        <style>
            .text2 {
                text-align: center;
                margin-top: 100px;
                margin-left: 100px;
                width: 1000;
                height: 500;
            }
            
            .text3 {
                text-align: center;
                margin-left: 100px;
                width: 1000;
                height: 500;
            }
        </style>
    </aside>
</div>




<div class="textux">
    <h1>Global markets in your hand</h1>
    <p>We reliably connect you to hundreds of data feeds, with direct access to 2,019,615 instruments from all over the world, sourcing the highest-quality information used by professionals from institutional-grade data partners.</p>
    <h1>The social network for your finance life </h1>
    <p>Get creative with world markets by participating in the largest social network on the web for traders and investors.</p>
</div>


<div class="containergrid">
    <div class="item-b">
        <h4>Community</h4>
        <span><img src="/icon/discord.png" alt=""></span>
        <img src="/icon/facebook.png" alt=""><span>
        <img src="./icon/instagram.png" alt=""></span>
        <img src="./icon/telegram.png" alt=""> <br>
        <img src="./icon/tik-tok.png" alt="">
        <img src="./icon/twitter.png" alt="">
        <img src="./icon/youtube.png" alt="">

    </div>
    <div class="item-a">
        <h4>About Us</h4>
        <p>About</p>
        <p>Careers</p>
        <p>Announcements</p>
        <p>News</p>
        <p>Press</p>
        <p>Legal</p>
        <p>Terms</p>
        <p>Privacy</p>
        <p>Building Trust</p>
        <p>Blog</p>
        <p>Community</p>
        <p>Sitemaa</p>
        <p>Risk Warning</p>
        <p>Notices</p>
        <p>Downloads</p>
        <p>Desktop Application</p>
    </div>
    <div class="item-a">
        <h4>Products</h4>
        <p>Exchange</p>
        <p>Buy Crypto</p>
        <p>Leveraged Tokens</p>
        <p>TradingView</p>
        <p>Pay</p>
        <p>Academy</p>
        <p>Live</p>
        <p>Tax</p>
        <p>Gift Card</p>
        <p>Launchpad & Launchpool</p>
        <p>Auto-Invest</p>
        <p>ETH Staking</p>
        <p>NFT</p>
        <p>BNB</p>
        <p>BABT</p>
        <p>Research</p>
        <p>Charity</p>

    </div>
    <div class="item-a">
        <h4>Business</h4>
        <p>P2P Merchant Application</p>
        <p>P2Pro Merchant Application</p>
        <p>Listing Application</p>
        <p>Institutional & VIP Services</p>
        <p>Labs</p>
        <h4>Learn</h4>
        <p>Learn & Earn</p>
        <p>Browse Crypto Prices</p>
        <p>Bitcoin Price</p>
        <p>Ethereum Price</p>
        <p>Browse Crypto Price Predictions</p>
        <p>Bitcoin Price Prediction</p>
        <p>Ethereum Price Prediction</p>
        <p>Buy Bitcoin</p>
        <p>Buy BNB</p>
        <p>Buy Ripple</p>
        <p>Buy Dogecoin</p>
        <p>Buy Ethereum</p>
        <p>Buy Tradable Altcoins</p>

    </div>
    <div class="item-a">
        <h4>Service</h4>
        <p>Affiliate</p>
        <p>Referral</p>
        <p>Historical Market Data</p>
        <p>Proof of Reserves</p>
        <h4>Support</h4>
        <p>24/7 Chat Support</p>
        <p>Support Center</p>
        <p>Product Feedback & Suggestions</p>
        <p>Fees</p>
        <p>APIs</p>
        <p>Binance Verify</p>
        <p>Trading Rules</p>
        <p>Binance Airdrop Portal</p>
        <p>Law Enforcement Requests</p>



    </div>
</div>
<footer>
    <p>&copy; 2024 Trading CoinBase. 1996 - 2024 OANDA Corporation. All rights reserved. "OANDA", "fxTrade" and OANDA's "fx" family of trademarks are owned by OANDA Corporation. All other trademarks appearing on this website are the property of their respective
        owners. OANDA Global Markets Ltd is a company registered in BVI number 2026433, and has its registered office at Kingston Chambers, PO Box 173, Road Town, Tortola, British Virgin Islands. It is authorised and regulated by the BVI Financial Services
        Commission, number: SIBA/L/20/1130. On this website, we provide translated content for your convenience. In case of any inconsistency or discrepancy between the original English content and its translated versions, the English version shall prevail.
    </p>
</footer>


<script src="chart.js"></script>
</body>

</html>