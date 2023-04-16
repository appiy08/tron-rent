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
  <div id="root" class="layout-container page-deposit">
    <header class="layout-navbar">
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid align-items-center justify-content-start px-0">
          <div class="col-4 navbar-left">
            <div class="hstack align-items-center">
              <a href="index.php" class="navbar-back mute-color">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                </svg>
              </a>
            </div>
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
      </nav>
    </header>
    <main class="layout-body">
      <div class="layout-main">
        <h2 class="page-title">Recharge</h2>
        <div class="vstack gap-3">
          <a href="recharge.php" class="card dp-card">
            <img src="./assets/images/deposit_card_left.png" class="card-img-top" alt="Deposit Card Left" />
            <div class="card-img-top-content-wrap">
              <h3 class="card-img-top-title">Transfer to Flexible Account</h3>
            </div>
            <div class="card-body">
              <p class="card-text">
                1. Transfer into this account can be used to deposit money to
                earn interest, and you can manually receive the income 24
                hours after the first investment time, and return the
                principal when it expires.
              </p>
            </div>
          </a>
          <a href="recharge.php" class="card dp-card">
            <img src="./assets/images/deposit_card_right.png" class="card-img-top" alt="Deposit Card Right" />
            <div class="card-img-top-content-wrap">
              <h3 class="card-img-top-title">Transfer to wallet account</h3>
            </div>
            <div class="card-body">
              <p class="card-text">
                2. Transfer to this account can be used to purchase regular
                products. Different products have different cycles and yields.
                For details, please refer to the product introduction.
              </p>
            </div>
          </a>
        </div>
      </div>
    </main>
  </div>

  <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
  <script src="./assets/js/main.js"></script>
</body>

</html>