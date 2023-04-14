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
    <div id="root" class="layout-container page-share">
      <main class="layout-body">
        <div class="layout-main">
          <div class="header">
            <div class="slogan-bar">
              <div class="title">Invite your contacts</div>
              <div class="desc">Sign up and recharge to get great rewards</div>
            </div>
            <div class="invite-bar">
              Build a team and get great rewards
              <a href="javascript.void(0)" class="btn btn-primary invite-btn">
                Invitation reward</a
              >
            </div>
          </div>
          <div class="body">
            <div class="main-wrap">
              <div class="hstack justify-content-between">
                <div class="invite-code">
                  <img src="./assets/images/share_code_chart.png" /><label
                    >Invitation codes</label
                  ><em>889479</em>
                </div>
                <div class="qrcode-wrap">
                  <img
                    id="0c8f5d01-7a5a-43c1-8192-fb1488b0d538"
                    src="data:image/png;base64,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"
                    class="img-fluid"
                  />
                </div>
              </div>
              <div class="invite-link">
                https://tron.rent/index.html#/register/889479
              </div>
              <a class="btn btn-dark copy-link-btn">Copy Link</a>
              <div class="share-tip">Share to</div>
              <div class="share-components">
                <a
                  href="/im/text/open?url=https%3A%2F%2Fm.facebook.com%2Fsharer.php%3Fu%3Dhttps%25253A%25252F%25252Ftron.rent%25252Findex.html%252523%25252Fregister%25252F889479%3Ffrom%3Dfb_share_mobile%26_rdr"
                  target="_blank"
                  class="social-share-icon social-share-facebook"
                ></a
                ><a
                  href="/im/text/open?url=https%3A%2F%2Ftwitter.com%2Fintent%2Ftweet%3Ftext%3DTron%2520Rent%26url%3Dhttps%25253A%25252F%25252Ftron.rent%25252Findex.html%252523%25252Fregister%25252F889479"
                  target="_blank"
                  class="social-share-icon social-share-twitter"
                ></a
                ><a
                  href="/im/text/open?url=https%3A%2F%2Ft.me%2Fshare%2Furl%3Furl%3Dhttps%25253A%25252F%25252Ftron.rent%25252Findex.html%252523%25252Fregister%25252F889479%26text%3DTron%2520Rent"
                  target="_blank"
                  class="social-share-icon social-share-telegram"
                ></a
                ><a
                  href="/im/text/open?url=https%3A%2F%2Fapi.whatsapp.com%2Fsend%2F%3Ftext%3DTron%2520Rent%2520https%25253A%25252F%25252Ftron.rent%25252Findex.html%252523%25252Fregister%25252F889479%26type%3Dcustom_url%26app_absent%3D0"
                  target="_blank"
                  class="social-share-icon social-share-whatsapp"
                ></a
                ><a
                  href="/im/text/open?url=https%3A%2F%2Fwww.youtube.com%2F"
                  target="_blank"
                  class="social-share-icon social-share-youtube"
                ></a
                ><a
                  href="/im/text/open?url=https%3A%2F%2Fwww.instagram.com%2F"
                  target="_blank"
                  class="social-share-icon social-share-instagram"
                ></a>
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
