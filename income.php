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
    <div id="root" class="layout-container page-income">
        <header class="layout-navbar">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid px-0">
                    <div class="row align-items-center w-100">
                        <div class="col-4 navbar-left">
                            <a class="navbar-brand" href="#">
                                <img src="./assets/images/logo/tron-supply-logo.svg" alt="Brand Logo" class="img-fluid" />
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
        </header>
        <main class="layout-body">
            <div class="layout-main">
                <div class="card rounded-top-none top-bar">
                    <div class="top-banner">
                        <div class="top-info">
                            <div class="label">Current Yield</div>
                            <div class="rate">0.00-0.00%</div>
                        </div>
                    </div>
                    <div class="hstack gap-5 justify-content-between earn-time">
                        <div class="left">
                            <h6 class="mb-0">Earnings time</h6>
                            <p class="mb-0">Singapore time After (every day)</p>
                            <p class="mb-0">Minimum yield requires at least deposit <span class="text-primary">10.00TRX</span></p>
                        </div>
                        <div class="right vstack gap-3">
                            <a href="#" class="btn btn-soft-primary">View all</a>
                            <a href="#" class="btn btn-soft-primary">Deposit</a>
                        </div>
                    </div>
                </div>
                <ul class="income-list">
                    <div class="icon-null"></div>
                    <div class="van-list__finished-text">No records</div>
                    <!-- <ul class="list-group bg-transparent">
                        <li class="list-group-item bg-transparent">An item</li>
                        <li class="list-group-item bg-transparent">A second item</li>
                        <li class="list-group-item bg-transparent">A third item</li>
                        <li class="list-group-item bg-transparent">A fourth item</li>
                        <li class="list-group-item bg-transparent">And a fifth one</li>
                    </ul> -->
                </ul>
            </div>
        </main>
        <footer class="layout-footer">
            <div class="tabbar-wrap">
                <a href="index.php" class="tab-item active">
                    <div class="icon-bar">
                        <i class="icon icon-home"></i>
                    </div>
                    <p>Home</p>
                </a>
                <a href="income.php" class="tab-item">
                    <div class="icon-bar">
                        <i class="icon icon-mining"></i>
                    </div>
                    <p>Income</p>
                </a>
                <a href="invest.php" class="tab-item ismid">
                    <div class="icon-bar">
                        <i class="icon icon-invest"></i>
                    </div>
                    <p>Invest</p>
                </a>
                <a href="share.php" class="tab-item">
                    <div class="icon-bar">
                        <i class="icon icon-share"></i>
                    </div>
                    <p>Share Friends</p>
                </a>
                <a href="mine.php" class="tab-item">
                    <div class="icon-bar">
                        <i class="icon icon-me"></i>
                    </div>
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