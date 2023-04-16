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
    <div id="root" class="layout-container page-register">
      <header class="layout-navbar">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid gap-3 justify-content-between px-0">
            <div class="navbar-left">
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
            </div>
            <div hidden>
              <div
                id="lang_switch_content"
                class="lang-switch__content scrollbar-none"
                role="menu"
              >
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
            <div class="navbar-right">
              <a href="#" class="btn navbar-service" role="button"> </a>
            </div>
          </div>
        </nav>
      </header>
      <main class="layout-body">
        <div class="layout-main">
          <h2 class="page-title">Register an account</h2>
          <form class="p-3">
            <div class="mb-4">
              <label for="InputUsername" class="form-label">Username</label>
              <input
                type="email"
                class="form-control"
                id="InputUsername"
                aria-describedby="emailHelp"
                placeholder="Username,6-16 letters or numbers"
              />
            </div>
            <div class="mb-4">
              <label for="InputPassword" class="form-label">Password</label>
              <input type="password" class="form-control" id="InputPassword" />
            </div>
            <div class="mb-4">
              <label class="form-label" for="InputMobileNumber"
                >Area code + mobile number</label
              >
              <div class="input-group">
                <button
                  class="btn btn-area-code"
                  type="button"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#offcanvasBottom"
                  aria-controls="offcanvasBottom"
                >
                  +1
                </button>

                <div
                  class="offcanvas offcanvas-bottom area-code-modal"
                  tabindex="-1"
                  id="offcanvasBottom"
                  aria-labelledby="offcanvasBottomLabel"
                >
                  <div class="offcanvas-header">
                    <div class="search-bar">
                      <div class="input-group">
                        <span class="input-group-text" id="basic-addon1">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            fill="#bbbcc1"
                            class="bi bi-search"
                            viewBox="0 0 16 16"
                          >
                            <path
                              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"
                            />
                          </svg>
                        </span>
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Search country code"
                          aria-label="Username"
                          aria-describedby="basic-addon1"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="offcanvas-body">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/01.png" />
                        </div>
                        <div class="label">America &#40;+1&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/49.png" />
                        </div>
                        <div class="label">Germany &#40;+49&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/98.png" />
                        </div>
                        <div class="label">Iran &#40;+98&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/44.png" />
                        </div>
                        <div class="label">United Kingdom &#40;+44&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/39.png" />
                        </div>
                        <div class="label">Italy &#40;+39&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/976.png" />
                        </div>
                        <div class="label">Mongolia &#40;+976&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/356.png" />
                        </div>
                        <div class="label">Malta &#40;+356&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/371.png" />
                        </div>
                        <div class="label">Latvia &#40;+371&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/373.png" />
                        </div>
                        <div class="label">Moldova &#40;+373&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/372.png" />
                        </div>
                        <div class="label">Estonia &#40;+372&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/370.png" />
                        </div>
                        <div class="label">Lithuania &#40;+370&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/378.png" />
                        </div>
                        <div class="label">San Marino &#40;+378&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1.png" />
                        </div>
                        <div class="label">Canada &#40;+1&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/355.png" />
                        </div>
                        <div class="label">Albania &#40;+355&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/376.png" />
                        </div>
                        <div class="label">Andorra &#40;+376&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/382.png" />
                        </div>
                        <div class="label">Montenegro &#40;+382&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/387.png" />
                        </div>
                        <div class="label">Bosnia and Herzegovina &#40;+387&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/359.png" />
                        </div>
                        <div class="label">Bulgaria &#40;+359&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/379.png" />
                        </div>
                        <div class="label">Vatican &#40;+379&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/30.png" />
                        </div>
                        <div class="label">Hellenic &#40;+30&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/357.png" />
                        </div>
                        <div class="label">Cyprus &#40;+357&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/90.png" />
                        </div>
                        <div class="label">Türkiye &#40;+90&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/421.png" />
                        </div>
                        <div class="label">Slovak &#40;+421&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/974.png" />
                        </div>
                        <div class="label">Qatar &#40;+974&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/972.png" />
                        </div>
                        <div class="label">Israel &#40;+972&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/965.png" />
                        </div>
                        <div class="label">Kuwait &#40;+965&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/966.png" />
                        </div>
                        <div class="label">Saudi Arabia &#40;+966&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/33.png" />
                        </div>
                        <div class="label">French &#40;+33&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/34.png" />
                        </div>
                        <div class="label">Spain &#40;+34&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/374.png" />
                        </div>
                        <div class="label">Armenia &#40;+374&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/40.png" />
                        </div>
                        <div class="label">Romania &#40;+40&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/994.png" />
                        </div>
                        <div class="label">Azerbaijan &#40;+994&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/27.png" />
                        </div>
                        <div class="label">South Africa &#40;+27&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/91.png" />
                        </div>
                        <div class="label">India &#40;+91&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/423.png" />
                        </div>
                        <div class="label">Liechtenstein &#40;+423&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/420.png" />
                        </div>
                        <div class="label">Czech &#40;+420&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/353.png" />
                        </div>
                        <div class="label">Ireland &#40;+353&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/43.png" />
                        </div>
                        <div class="label">Austria &#40;+43&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/377.png" />
                        </div>
                        <div class="label">Monaco &#40;+377&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/352.png" />
                        </div>
                        <div class="label">Luxembourg &#40;+352&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/385.png" />
                        </div>
                        <div class="label">Croatia &#40;+385&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/351.png" />
                        </div>
                        <div class="label">Portuguesa &#40;+351&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/31.png" />
                        </div>
                        <div class="label">Nederland &#40;+31&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/45.png" />
                        </div>
                        <div class="label">Denmark &#40;+45&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/36.png" />
                        </div>
                        <div class="label">Hungary &#40;+36&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/961.png" />
                        </div>
                        <div class="label">Lebanon &#40;+961&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/354.png" />
                        </div>
                        <div class="label">Iceland &#40;+354&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/32.png" />
                        </div>
                        <div class="label">Belgium &#40;+32&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/381.png" />
                        </div>
                        <div class="label">Serbia &#40;+381&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/358.png" />
                        </div>
                        <div class="label">Finland &#40;+358&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/41.png" />
                        </div>
                        <div class="label">Switzerland &#40;+41&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/81.png" />
                        </div>
                        <div class="label">Japan &#40;+81&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/421.png" />
                        </div>
                        <div class="label">Slovakia &#40;+421&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/48.png" />
                        </div>
                        <div class="label">Poland &#40;+48&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/82.png" />
                        </div>
                        <div class="label">Korea &#40;+82&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/46.png" />
                        </div>
                        <div class="label">Sweden &#40;+46&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/47.png" />
                        </div>
                        <div class="label">Norway &#40;+47&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/375.png" />
                        </div>
                        <div class="label">Belarus &#40;+375&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/60.png" />
                        </div>
                        <div class="label">Malaysia &#40;+60&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/61.png" />
                        </div>
                        <div class="label">Australia &#40;+61&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/357.png" />
                        </div>
                        <div class="label">Kıbrıs &#40;+357&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/389.png" />
                        </div>
                        <div class="label">North Macedonia &#40;+389&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/383.png" />
                        </div>
                        <div class="label">Kosova &#40;+383&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/254.png" />
                        </div>
                        <div class="label">Kenya &#40;+254&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/2.png" />
                        </div>
                        <div class="label">Abu Dhabi &#40;+2&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/244.png" />
                        </div>
                        <div class="label">Angola &#40;+244&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1264.png" />
                        </div>
                        <div class="label">Anguilla &#40;+1264&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1268.png" />
                        </div>
                        <div class="label">Antigua and Barbuda &#40;+1268&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/54.png" />
                        </div>
                        <div class="label">Argentina &#40;+54&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/247.png" />
                        </div>
                        <div class="label">Ascension &#40;+247&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1242.png" />
                        </div>
                        <div class="label">Bahamas &#40;+1242&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/973.png" />
                        </div>
                        <div class="label">Bahrain &#40;+973&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/880.png" />
                        </div>
                        <div class="label">Bangladesh &#40;+880&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1246.png" />
                        </div>
                        <div class="label">Barbados &#40;+1246&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/501.png" />
                        </div>
                        <div class="label">Belize &#40;+501&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/229.png" />
                        </div>
                        <div class="label">Benin &#40;+229&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1441.png" />
                        </div>
                        <div class="label">Bermuda Is. &#40;+1441&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/591.png" />
                        </div>
                        <div class="label">Bolivia &#40;+591&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/267.png" />
                        </div>
                        <div class="label">Botswana &#40;+267&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/55.png" />
                        </div>
                        <div class="label">Brazil &#40;+55&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/673.png" />
                        </div>
                        <div class="label">Brunei &#40;+673&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/226.png" />
                        </div>
                        <div class="label">Burkina-faso &#40;+226&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/95.png" />
                        </div>
                        <div class="label">Burma &#40;+95&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/257.png" />
                        </div>
                        <div class="label">Burundi &#40;+257&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/237.png" />
                        </div>
                        <div class="label">Cameroon &#40;+237&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1345.png" />
                        </div>
                        <div class="label">Cayman Is. &#40;+1345&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/236.png" />
                        </div>
                        <div class="label">
                          Central African Republic &#40;+236&#41;
                        </div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/235.png" />
                        </div>
                        <div class="label">Chad &#40;+235&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/56.png" />
                        </div>
                        <div class="label">Chile &#40;+56&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/86.png" />
                        </div>
                        <div class="label">China &#40;+86&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/57.png" />
                        </div>
                        <div class="label">Colombia &#40;+57&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/242.png" />
                        </div>
                        <div class="label">Congo &#40;+242&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/682.png" />
                        </div>
                        <div class="label">Cook Is. &#40;+682&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/506.png" />
                        </div>
                        <div class="label">Costa Rica &#40;+506&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/53.png" />
                        </div>
                        <div class="label">Cuba &#40;+53&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/253.png" />
                        </div>
                        <div class="label">Djibouti &#40;+253&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1890.png" />
                        </div>
                        <div class="label">Dominica Rep. &#40;+1890&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/593.png" />
                        </div>
                        <div class="label">Ecuador &#40;+593&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/20.png" />
                        </div>
                        <div class="label">Egypt &#40;+20&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/503.png" />
                        </div>
                        <div class="label">EI Salvador &#40;+503&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/251.png" />
                        </div>
                        <div class="label">Ethiopia &#40;+251&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/679.png" />
                        </div>
                        <div class="label">Fiji &#40;+679&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/594.png" />
                        </div>
                        <div class="label">French Guiana &#40;+594&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/241.png" />
                        </div>
                        <div class="label">Gabon &#40;+241&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/220.png" />
                        </div>
                        <div class="label">Gambia &#40;+220&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/995.png" />
                        </div>
                        <div class="label">Georgia &#40;+995&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/233.png" />
                        </div>
                        <div class="label">Ghana &#40;+233&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/350.png" />
                        </div>
                        <div class="label">Gibraltar &#40;+350&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1809.png" />
                        </div>
                        <div class="label">Grenada &#40;+1809&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1671.png" />
                        </div>
                        <div class="label">Guam &#40;+1671&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/502.png" />
                        </div>
                        <div class="label">Guatemala &#40;+502&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/224.png" />
                        </div>
                        <div class="label">Guinea &#40;+224&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/592.png" />
                        </div>
                        <div class="label">Guyana &#40;+592&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/509.png" />
                        </div>
                        <div class="label">Haiti &#40;+509&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/504.png" />
                        </div>
                        <div class="label">Honduras &#40;+504&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/852.png" />
                        </div>
                        <div class="label">Hongkong &#40;+852&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/62.png" />
                        </div>
                        <div class="label">Indonesia &#40;+62&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/964.png" />
                        </div>
                        <div class="label">Iraq &#40;+964&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/225.png" />
                        </div>
                        <div class="label">Ivory Coast &#40;+225&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1876.png" />
                        </div>
                        <div class="label">Jamaica &#40;+1876&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/962.png" />
                        </div>
                        <div class="label">Jordan &#40;+962&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/855.png" />
                        </div>
                        <div class="label">Kampuchea (Cambodia ) &#40;+855&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/327.png" />
                        </div>
                        <div class="label">Kazakstan &#40;+327&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/331.png" />
                        </div>
                        <div class="label">Kyrgyzstan &#40;+331&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/856.png" />
                        </div>
                        <div class="label">Laos &#40;+856&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/266.png" />
                        </div>
                        <div class="label">Lesotho &#40;+266&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/231.png" />
                        </div>
                        <div class="label">Liberia &#40;+231&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/218.png" />
                        </div>
                        <div class="label">Libya &#40;+218&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/853.png" />
                        </div>
                        <div class="label">Macao &#40;+853&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/261.png" />
                        </div>
                        <div class="label">Madagascar &#40;+261&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/265.png" />
                        </div>
                        <div class="label">Malawi &#40;+265&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/960.png" />
                        </div>
                        <div class="label">Maldives &#40;+960&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/223.png" />
                        </div>
                        <div class="label">Mali &#40;+223&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1670.png" />
                        </div>
                        <div class="label">Mariana Is &#40;+1670&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/596.png" />
                        </div>
                        <div class="label">Martinique &#40;+596&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/230.png" />
                        </div>
                        <div class="label">Mauritius &#40;+230&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/52.png" />
                        </div>
                        <div class="label">Mexico &#40;+52&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1664.png" />
                        </div>
                        <div class="label">Montserrat Is &#40;+1664&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/212.png" />
                        </div>
                        <div class="label">Morocco &#40;+212&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/258.png" />
                        </div>
                        <div class="label">Mozambique &#40;+258&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/264.png" />
                        </div>
                        <div class="label">Namibia &#40;+264&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/674.png" />
                        </div>
                        <div class="label">Nauru &#40;+674&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/977.png" />
                        </div>
                        <div class="label">Nepal &#40;+977&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/599.png" />
                        </div>
                        <div class="label">Netheriands Antilles &#40;+599&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/64.png" />
                        </div>
                        <div class="label">New Zealand &#40;+64&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/260.png" />
                        </div>
                        <div class="label">Zambia &#40;+260&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/505.png" />
                        </div>
                        <div class="label">Nicaragua &#40;+505&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/227.png" />
                        </div>
                        <div class="label">Niger &#40;+227&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/234.png" />
                        </div>
                        <div class="label">Nigeria &#40;+234&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/850.png" />
                        </div>
                        <div class="label">North Korea &#40;+850&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/968.png" />
                        </div>
                        <div class="label">Oman &#40;+968&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/92.png" />
                        </div>
                        <div class="label">Pakistan &#40;+92&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/507.png" />
                        </div>
                        <div class="label">Panama &#40;+507&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/675.png" />
                        </div>
                        <div class="label">Papua New Cuinea &#40;+675&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/595.png" />
                        </div>
                        <div class="label">Paraguay &#40;+595&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/51.png" />
                        </div>
                        <div class="label">Peru &#40;+51&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/63.png" />
                        </div>
                        <div class="label">Philippines &#40;+63&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/689.png" />
                        </div>
                        <div class="label">French Polynesia &#40;+689&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1787.png" />
                        </div>
                        <div class="label">Puerto Rico &#40;+1787&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/262.png" />
                        </div>
                        <div class="label">Reunion &#40;+262&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/7.png" />
                        </div>
                        <div class="label">Russia &#40;+7&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1758.png" />
                        </div>
                        <div class="label">Saint Lueia &#40;+1758&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1784.png" />
                        </div>
                        <div class="label">Saint Vincent &#40;+1784&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/684.png" />
                        </div>
                        <div class="label">Samoa Eastern &#40;+684&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/685.png" />
                        </div>
                        <div class="label">Samoa Western &#40;+685&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/239.png" />
                        </div>
                        <div class="label">Sao Tome and Principe &#40;+239&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/221.png" />
                        </div>
                        <div class="label">Senegal &#40;+221&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/248.png" />
                        </div>
                        <div class="label">Seychelles &#40;+248&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/232.png" />
                        </div>
                        <div class="label">Sierra Leone &#40;+232&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/65.png" />
                        </div>
                        <div class="label">Singapore &#40;+65&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/386.png" />
                        </div>
                        <div class="label">Slovenia &#40;+386&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/677.png" />
                        </div>
                        <div class="label">Solomon Is &#40;+677&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/252.png" />
                        </div>
                        <div class="label">Somali &#40;+252&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/94.png" />
                        </div>
                        <div class="label">Sri Lanka &#40;+94&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1758.png" />
                        </div>
                        <div class="label">St.Lucia &#40;+1758&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1784.png" />
                        </div>
                        <div class="label">St.Vincent &#40;+1784&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/249.png" />
                        </div>
                        <div class="label">Sudan &#40;+249&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/597.png" />
                        </div>
                        <div class="label">Suriname &#40;+597&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/268.png" />
                        </div>
                        <div class="label">Swaziland &#40;+268&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/963.png" />
                        </div>
                        <div class="label">Syria &#40;+963&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/886.png" />
                        </div>
                        <div class="label">Taiwan &#40;+886&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/992.png" />
                        </div>
                        <div class="label">Tajikstan &#40;+992&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/255.png" />
                        </div>
                        <div class="label">Tanzania &#40;+255&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/66.png" />
                        </div>
                        <div class="label">Thailand &#40;+66&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/228.png" />
                        </div>
                        <div class="label">Togo &#40;+228&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/676.png" />
                        </div>
                        <div class="label">Tonga &#40;+676&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/1868.png" />
                        </div>
                        <div class="label">Trinidad and Tobago &#40;+1868&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/993.png" />
                        </div>
                        <div class="label">Turkmenistan &#40;+993&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/256.png" />
                        </div>
                        <div class="label">Uganda &#40;+256&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/380.png" />
                        </div>
                        <div class="label">Ukraine &#40;+380&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/971.png" />
                        </div>
                        <div class="label">United Arab Emirates &#40;+971&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/598.png" />
                        </div>
                        <div class="label">Uruguay &#40;+598&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/998.png" />
                        </div>
                        <div class="label">Uzbekistan &#40;+998&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/58.png" />
                        </div>
                        <div class="label">Venezuela &#40;+58&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/84.png" />
                        </div>
                        <div class="label">Vietnam &#40;+84&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/967.png" />
                        </div>
                        <div class="label">Yemen &#40;+967&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/263.png" />
                        </div>
                        <div class="label">Zimbabwe &#40;+263&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/243.png" />
                        </div>
                        <div class="label">Zaire &#40;+243&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/213.png" />
                        </div>
                        <div class="label">Algeria &#40;+213&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/216.png" />
                        </div>
                        <div class="label">Tunisia &#40;+216&#41;</div>
                      </li>
                      <li class="list-group-item list-group-item-action d-flex align-items-center gap-3 py-4">
                        <div class="icon">
                          <img src="./assets/images/country-flag/93.png" />
                        </div>
                        <div class="label">Afghanistan &#40;+93&#41;</div>
                      </li>
                    </ul>
                  </div>
                </div>

                <input
                  type="number"
                  class="form-control"
                  id="InputMobileNumber"
                />
              </div>
            </div>
            <div class="mb-4">
              <label class="form-label" for="InputEmail">Email</label>
              <input type="email" class="form-control" id="InputEmail" />
            </div>
            <div class="mb-4">
              <label class="form-label" for="InputRecomendationCode"
                >Recommendation code</label
              >
              <input
                type="text"
                class="form-control"
                id="InputRecomendationCode"
              />
            </div>
            <div class="vstack gap-3 form-button-group">
              <button type="button" class="btn btn-primary form-btn">
                Register
              </button>
            </div>
          </form>
        </div>
      </main>
    </div>

    <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
