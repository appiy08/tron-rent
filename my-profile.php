<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tron Rent</title>

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
    <div id="root" class="layout-container page-my">
      <header class="layout-navbar">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid px-0">
            <div class="row align-items-center w-100">
              <div class="col-4 navbar-left">
                <p class="mb-0 user-name">appiy08</p>
              </div>
              <div class="col-8 navbar-right">
                <div class="hstack justify-content-between gap-3">
                  <a
                    href="#"
                    data-download-app
                    class="btn btn-primary btn-download-app"
                    role="button"
                  >
                    <i data-download-app class="icon"></i>
                    <span data-download-app>App</span>
                  </a>

                  <button
                    type="button"
                    id="lang_switch"
                    class="lang-switch-btn"
                    data-bs-container="body"
                    data-bs-toggle="lang_switch"
                    data-bs-placement="bottom"
                    data-bs-trigger="focus"
                    data-bs-custom-class="lang-switch-popover"
                  >
                    English
                  </button>
                  <div hidden>
                    <div
                      id="lang_switch_content"
                      class="lang-switch__content scrollbar-none"
                      role="menu"
                    >
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          English
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Indonesia
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Tiếng Việt
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          日本語
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Português
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          عربي
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          ไทย
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Español
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Deutsch
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Français
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Italiano
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          한국어
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Türk
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Pусский
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          فارسی
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          Melayu
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
                          简体中文
                        </li>
                        <li
                          class="list-group-item list-group-item-action pe-auto"
                        >
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
          <div class="card rounded-top-none">
            <div class="user-info">
              <div class="user-money">
                <label class="d-block">Total Balance</label><em>12800.00</em>TRX
              </div>
              <div
                class="btn-group user-money-btn-group"
                role="group"
                aria-label="Basic outlined example"
              >
                <a type="button" class="btn btn-outline-custom">
                  <i class="icon icon-in"></i> Deposit
                </a>
                <a type="button" class="btn btn-outline-custom">
                  <i class="icon icon-out"></i> Withdrawal
                </a>
              </div>
            </div>
          </div>
          <div class="menus-box overflow-hidden">
            <div class="card bg-transparent">
              <div class="card-body">
                <h3 class="card-title">App Services</h3>
                <div class="grid-wrap pb-2">
                  <a href="javascript.void(0);" class="grid-item">
                    <i class="icon icon-help"></i>
                    <span>Information</span>
                  </a>
                  <a href="#/record/transaction" class="grid-item"
                    ><i class="icon icon-record"></i>
                    <span>Transaction record</span></a
                  >
                  <a href="#/share" class="grid-item">
                    <i class="icon icon-share"></i>
                    <span>Share Friends</span></a
                  >
                  <a
                    href="https://trxminer.click/tronapp.html"
                    target="_blank"
                    class="grid-item"
                  >
                    <i class="icon icon-app"></i>
                    <span>App</span></a
                  >
                  <a href="#/basicTransfer" class="grid-item"
                    ><i class="icon icon-change"></i>
                    <span>Transfer to basic</span></a
                  >
                  <a href="#/promotion" class="grid-item"
                    ><i class="icon icon-team"></i> <span>Team</span></a
                  >
                  <a href="#/account_security" class="grid-item"
                    ><i class="icon icon-cipher"></i>
                    <span>Change Password</span></a
                  >
                  <a href="#/announcement" class="grid-item"
                    ><i class="icon icon-news"></i> <span>Notification</span></a
                  >
                  <a class="grid-item"
                    ><i class="icon icon-out"></i> <span>Logout</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <footer class="layout-footer">
        <div class="tabbar-wrap">
          <a class="tab-item active"
            ><div class="icon-bar"><i class="icon icon-home"></i></div>
            <p>Home</p></a
          ><a class="tab-item"
            ><div class="icon-bar"><i class="icon icon-mining"></i></div>
            <p>Income</p></a
          ><a class="tab-item ismid"
            ><div class="icon-bar"><i class="icon icon-invest"></i></div>
            <p>Invest</p></a
          ><a class="tab-item"
            ><div class="icon-bar"><i class="icon icon-share"></i></div>
            <p>Share Friends</p></a
          ><a class="tab-item"
            ><div class="icon-bar"><i class="icon icon-me"></i></div>
            <p>Mine</p></a
          >
        </div>
      </footer>
    </div>

    <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
