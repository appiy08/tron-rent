<?php
    require('connection.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['name'])) {
        $name = stripslashes($_REQUEST['name']);    // removes backslashes
        $username = mysqli_real_escape_string($conn, $name);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE name='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($conn, $query);
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
			$_SESSION['logged_in'] = $logged_in;
            $_SESSION['name'] = $username;
            // Redirect to user dashboard page
            header("Location: index.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
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
    <div id="root" class="layout-container page-login">
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
          <a class="navbar-back">
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
          <h2 class="page-title">Hello</h2>
          <h3 class="page-title">Welcome to Tron Rent</h3>
          <form class="form-wrapper" method="post" name="login" autocomplete="off">
            <div class="mb-4">
              <label for="InputUsername" class="form-label">Username</label>
              <input
                type="text"
                name="name"
                class="form-control"
                id="InputUsername"
                aria-describedby="emailHelp"
              />
            </div>
            <div class="mb-4">
              <label for="InputPassword" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="InputPassword" />
            </div>
            <div class="mb-4">
              <label class="form-label" for="InputVCode">VCode</label>
              <div class="input-group">
                <input type="text" class="form-control" id="InputVCode" />
                <span class="input-group-text" id="basic-addon2">CODE</span>
              </div>
            </div>
            <div class="vstack gap-3 form-button-group">
              <!-- <button type="submit" class="btn btn-light form-btn">
                Login
              </button> -->
              <input type="submit" name="submit" class="btn btn-light form-btn" value="Login">
              <a href="register.php" type="button" class="btn btn-outline-primary form-btn">
                Register
              </a>
              <a href="index.php" type="button" class="btn btn-outline-primary border-0 fs-13">
                Go to homepage
              </a>
            </div>
          </form>
          <?php
            }
          ?>
        </div>
      </main>
    </div>

    <script src="./assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/swiper/swiper-bundle.min.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>
