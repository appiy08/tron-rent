<?php
 include('auth_session.php');
?>
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
    <div id="root" class="layout-container page-withdraw">
      <header class="layout-navbar">
        <nav class="navbar navbar-expand-lg">
          <div
            class="container-fluid align-items-center justify-content-start px-0"
          >
            <div class="col-4 navbar-left">
              <a href="index.php" class="navbar-back mute-color">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  fill="currentColor"
                  class="bi bi-chevron-left"
                  viewBox="0 0 16 16"
                >
                  <path
                    fill-rule="evenodd"
                    d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"
                  />
                </svg>
              </a>
            </div>
            <div class="col-8 navbar-right">
              <p class="navbar-title mb-0">Withdrawal</p>
            </div>
          </div>
        </nav>
      </header>
      <main class="layout-body">
        <div class="layout-main">
          <div class="card with-card shadow-none">
            <div class="card-body">
              <div class="user-info-bar">
                <div class="w-100 hstack justify-content-between">
                  <div>
                    <p class="label">Withdrawable balance</p>
                    <div class="value"><em>0.00</em> TRX</div>
                  </div>
                  <div>
                    <button type="button" class="btn btn-outline-light">
                      Records
                    </button>
                  </div>
                </div>
              </div>
              <p class="card-text">
                Withdrawal is based on Singapore time, once a day
              </p>
            </div>
          </div>
          <form class="withdraw-form">
            <div class="card shadow-none">
              <div class="card-body">
                <dl class="ratio-info">
                  <dd>
                    <span class="text-gray">Need traded：</span><em>0</em>
                  </dd>
                  <dd>
                    <span class="text-gray">Already traded：</span><em>0</em>
                  </dd>
                  <dd>
                    <span class="text-gray">Daily withdrawals：</span><em>1</em>
                  </dd>
                  <dd>
                    <span class="text-gray">Number of withdrawals：</span
                    ><em>0</em>
                  </dd>
                  <dd>
                    <span class="text-gray">Allow withdrawal：</span
                    ><em>yes</em>
                  </dd>
                  <dd>
                    <span class="text-gray">Minimum withdrawal：</span
                    ><em>5</em>
                  </dd>
                </dl>
              </div>
            </div>
            <!---->
            <div class="card shadow-none">
              <div class="card-body">
                <div
                  class="hstack align-items-center justify-content-between van-cell"
                >
                  <div class="van-cell__title">
                    <span>Choose withdrawal account</span>
                  </div>
                  <i class="van-icon">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-chevron-right"
                      viewBox="0 0 16 16"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                      />
                    </svg>
                  </i>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-body">
                <div class="input-group amount">
                  <span class="input-group-text" id="amount-wrapping"
                    >Amount</span
                  >
                  <input
                    type="text"
                    class="form-control border-0"
                    placeholder="Enter withdrawal amount"
                    aria-label="Enter withdrawal amount"
                    aria-describedby="amount-wrapping"
                  />
                </div>
              </div>
            </div>
            <div class="form-btn-group">
              <button type="submit" class="btn btn-primary btn-lg w-100 rounded-0 fs-16 py-3">
                Withdrawal
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
