<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tron Supply</title>

    <link rel="stylesheet" href="./assets/css/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/css/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./assets/css/custom.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />

    <noscript>
        <strong>
            We're sorry but wallet_h5 doesn't work properly without JavaScript
            enabled. Please enable it to continue.
        </strong>
    </noscript>
</head>

<body>
    <div id="root" class="layout-container page-invest">
        <header class="layout-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <div class="row align-items-center w-100">
                        <div class="col-4 navbar-left">
                            <a class="navbar-brand" href="#">
                                <img src="./assets/images/logo/tron-rent.png" alt="Brand Logo" class="img-fluid" />
                            </a>
                        </div>
                        <div class="col-8 navbar-right">
                            <div class="hstack justify-content-between gap-3">
                                <a href="#" data-download-app class="btn btn-primary btn-download-app" role="button">
                                    <i data-download-app class="icon"></i>
                                    <span data-download-app>App</span>
                                </a>

                                <button type="button" id="lang_switch" class="lang-switch-btn" data-bs-container="body" data-bs-toggle="lang_switch" data-bs-placement="bottom" data-bs-trigger="focus" data-bs-custom-class="lang-switch-popover">
                                    English
                                </button>
                                <div hidden>
                                    <div id="lang_switch_content" class="lang-switch__content scrollbar-none" role="menu">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                English
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Indonesia
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Tiếng Việt
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                日本語
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Português
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                عربي
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                ไทย
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Español
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Deutsch
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Français
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Italiano
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                한국어
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Türk
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Pусский
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                فارسی
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                Melayu
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                简体中文
                                            </li>
                                            <li class="list-group-item list-group-item-action pe-auto">
                                                繁體中文
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="#" class="btn navbar-notice" role="button"> </a>
                                <a href="#" class="btn navbar-service" role="button"> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <ul class="nav nav-justified head-tabs">
                <li class="nav-item">
                    <button class="nav-link active" id="flexible-invest-tab" data-bs-toggle="tab" data-bs-target="#flexible-invest-tab-pane" type="button" role="tab" aria-controls="flexible-invest-tab-pane" aria-selected="true">
                        Flexible investment
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="cyclical-invest-tab" data-bs-toggle="tab" data-bs-target="#cyclical-invest-tab-pane" type="button" role="tab" aria-controls="cyclical-invest-tab-pane" aria-selected="true">
                        Cyclical investing
                    </button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" id="record-tab" data-bs-toggle="tab" data-bs-target="#record-tab-pane" type="button" role="tab" aria-controls="record-tab-pane" aria-selected="true">
                        Record
                    </button>
                </li>
            </ul>
        </header>
        <main class="layout-body">
            <div class="layout-main">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane bg-white fade show active" id="flexible-invest-tab-pane" role="tabpanel" aria-labelledby="flexible-invest-tab" tabindex="0">
                        <div class="vip-bar">
                            <div class="vip-card">
                                <div class="card-name d-none">Current level</div>
                                <div class="level">VIP0</div>
                                <div class="label">Deposit quantity</div>
                                <div class="value"><em>0</em>TRX</div>
                            </div>
                        </div>
                        <div class="hstack gap-3 custom-btn-group">
                            <button type="button" class="btn btn-primary btn-lg w-100">Deposit now</button>
                            <button type="button" class="btn btn-primary btn-lg w-100">Invitation reward</button>
                        </div>
                        <div class="table-wrap">
                            <table class="table align-middle border-white ui-table mb-0">
                                <thead>
                                    <tr class="align-middle text-center">
                                        <th scope="col">Level</th>
                                        <th scope="col">Deposit Quantity</th>
                                        <th scope="col">Daily Income</th>
                                        <th scope="col">Daily Withdrawals</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP1</td>
                                        <td>10.00-1000.00</td>
                                        <td>6.70-8.20%</td>
                                        <td class="pr">6.70-8.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP2</td>
                                        <td>1001.00-5000.00</td>
                                        <td>8.70-9.20%</td>
                                        <td class="pr">8.70-9.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP3</td>
                                        <td>5001.00-10000.00</td>
                                        <td>9.70-10.20%</td>
                                        <td class="pr">9.70-10.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP4</td>
                                        <td>10001.00-20000.00</td>
                                        <td>10.70-11.20%</td>
                                        <td class="pr">10.70-11.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP5</td>
                                        <td>20001.00-50000.00</td>
                                        <td>12.70-13.20%</td>
                                        <td class="pr">12.70-13.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP6</td>
                                        <td>50001.00-100000.00</td>
                                        <td>15.70-16.20%</td>
                                        <td class="pr">15.70-16.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP7</td>
                                        <td>100001.00-200000.00</td>
                                        <td>18.70-19.20%</td>
                                        <td class="pr">18.70-19.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP8</td>
                                        <td>200001.00-500000.00</td>
                                        <td>22.70-23.20%</td>
                                        <td class="pr">22.70-23.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP9</td>
                                        <td>500001.00-1000000.00</td>
                                        <td>26.70-27.20%</td>
                                        <td class="pr">26.70-27.20%</td>
                                    </tr>
                                    <tr class="align-middle text-center">
                                        <td class="pl">VIP10</td>
                                        <td>1000001.00above</td>
                                        <td>32.70-33.20%</td>
                                        <td class="pr">32.70-33.20%</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade cyclic-invest-tab" id="cyclical-invest-tab-pane" role="tabpanel" aria-labelledby="cyclical-invest-tab" tabindex="0">
                        <div class="invest-list-wrap">
                            <div class="link_icon">
                                <a href="#" class="btn btn-white btn-lg"><i class="icon-deposit"></i> Deposit</a>
                                <a href="#" class="btn btn-white btn-lg"><i class="icon-withdraw"></i> Withdrawal</a>
                            </div>
                            <div class="product-list-boxs"><!---->
                                <div class="product-list-box">
                                    <div class="product-item">
                                        <div class="uni-image"><img src="./assets/images/upload/20230224154315.jpg"></div>
                                        <div class="c-white mt10 mb10">TRONLINK MINING</div>
                                        <div class="ft26 word">Daily rate:25.00-29.00%</div>
                                        <div class="ft26 word">Cycle:70 day</div>
                                    </div>
                                    <div class="product-item">
                                        <div class="uni-image"><img src="./assets/images/upload/20230224154213.jpg"></div>
                                        <div class="c-white mt10 mb10">Tron Rent mining</div>
                                        <div class="ft26 word">Daily rate:4.00-5.00%</div>
                                        <div class="ft26 word">Cycle:3 day</div>
                                    </div>
                                    <div class="product-item">
                                        <div class="uni-image"><img src="./assets/images/upload/20230224155102.png"></div>
                                        <div class="c-white mt10 mb10">TRX mining 30 days</div>
                                        <div class="ft26 word">Daily rate:12.20-13.11%</div>
                                        <div class="ft26 word">Cycle:30 day</div>
                                    </div>
                                    <div class="product-item">
                                        <div class="uni-image"><img src="./assets/images/upload/20230224154626.jpg"></div>
                                        <div class="c-white mt10 mb10">ETH DIFI 2.0 MINING</div>
                                        <div class="ft26 word">Daily rate:17.99-18.00%</div>
                                        <div class="ft26 word">Cycle:60 day</div>
                                    </div>
                                    <div class="product-item">
                                        <div class="uni-image"><img src="./assets/images/upload/20230224154802.jpg"></div>
                                        <div class="c-white mt10 mb10"> Photovoltaic mining</div>
                                        <div class="ft26 word">Daily rate:6.00-8.00%</div>
                                        <div class="ft26 word">Cycle:15 day</div>
                                    </div>
                                    <div class="product-item">
                                        <div class="uni-image"><img src="./assets/images/upload/20230224140908.jpg"></div>
                                        <div class="c-white mt10 mb10">TRON mine</div>
                                        <div class="ft26 word">Daily rate:6.00-7.00%</div>
                                        <div class="ft26 word">Cycle:7 day</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="record-tab-pane" role="tabpanel" aria-labelledby="record-tab" tabindex="0">...</div>
                </div>
            </div>
        </main>
        <footer class="layout-footer">
            <div class="tabbar-wrap">
                <a class="tab-item active">
                    <div class="icon-bar"><i class="icon icon-home"></i></div>
                    <p>Home</p>
                </a><a class="tab-item">
                    <div class="icon-bar"><i class="icon icon-mining"></i></div>
                    <p>Income</p>
                </a><a class="tab-item ismid">
                    <div class="icon-bar"><i class="icon icon-invest"></i></div>
                    <p>Invest</p>
                </a><a class="tab-item">
                    <div class="icon-bar"><i class="icon icon-share"></i></div>
                    <p>Share Friends</p>
                </a><a class="tab-item">
                    <div class="icon-bar"><i class="icon icon-me"></i></div>
                    <p>Mine</p>
                </a>
            </div>
        </footer>
    </div>

    <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>