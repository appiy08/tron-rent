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
    <div id="root" class="layout-container page-introduction">
        <header class="layout-navbar">
            <nav class="navbar navbar-expand-lg bg-primary">
                <div class="container-fluid align-items-center justify-content-start px-0">
                    <div class="navbar-left">
                        <div class="hstack align-items-center">
                            <a href="deposit.php" class="navbar-back">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                </svg>
                            </a>
                            <p class="navbar-title mb-0 ms-5" style="font-weight: bold; font-size:22px;">Transfer To Wallet Account</p>
                            <div class="navbar-right">
                                <a href="recharge-record.php" class="btn btn-primary" style="margin-left: 15px;">
                                    Records
                                </a>
                            </div>
                        </div>
                    </div>
            </nav>
        </header>
        <main class="layout-body">
            <div class="layout-main">
                <div class="form-wrap">
                    <div class="qrcode-wrap">
                        <div class="payment-qrcode">
                            <div class="qrcode-bg">
                                <img id="fd3810b6-c3a0-447b-87bc-bfea4cbc8bad" class="qrcode" style="display: inline-block;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAABkCAYAAABw4pVUAAAAAXNSR0IArs4c6QAAEYFJREFUeF7tnXWsHdUTx09xd3eHYgmU4B4gxR1CKBo8WHEoBAjuEqxYgGIBSpAED1I8wd0p7u7aXz6nne333btz7+y777WP/Hb+efvOPXv27Jmd2ZHvme2XUhqVephGjhyZ5p133pajrr766unRRx9t2WfYsGFp0KBBTX0OOuigdM455+T2E088MQ0ZMiR8B9dee23aYYcdWvZfbbXV0ogRI1r2+eCDD9J8880Xvm60Y7+aIc1LVTPEeXz+7yVk1Kjua6+ZZ545ff3113lpVWUtvvji6fXXX8/tzzzzTBowYEDT8q+//vrpnnvuiUp1Ovvss9PgwYOb+p900knp6KOPzu38Tj/o0ksvTXvuuWc+RgXC6E5JVdZMM82Uvvrqq24P2a8fimo0dVFZNUPia1ozRNbq/1JCVIy85+aXX35JU0wxRf7ZU1mRZ85TWfoOQeWgeqAIQ7zrqsq69dZb05ZbbtnUtepLXVXWr7/+mqaccsq2t63aKKSyaobEzd6aIYGXei0hFa2sThzDtvog2EFV1sCBA9Pdd98dPDMl76Xe51WWZ/bWDBnrYozTd0jNkHKh6xMv9eWWWy49++yzTTNEVaAyIKweVAkU8dQjOmaPPfZIQ4cOzV29WJanspgv84b69++fXnvttXz8n1VZumA1Q8auRi0h/3UJwVpoR+YURh1DlZD7778/rbzyyvkS2267bXrwwQfz8VVXXZU23HDDfDzJJJOkiSaaKB/vt99+6corr8zHJ5xwQtprr73aTa/4nTEYq1FlbbLJJumGG27I7RNOOGGadNJJ8/ETTzyR1l133Xz877//pt9//z2ssuhYde1CL/Xw3Y7pGPHUlSHkG/CIIfXUhw8fnrbYYoumy0c89cic9R3CdbheI5GnwQpspMg7JDKHxj41Q8YkqPo8QwgBdJe+/fbbLN6Qht9XWWWV9NZbb+X2W265JS2xxBL5mJiSWVyXXXZZWnXVVXP7/vvvn1Bn0MUXX5y22mqrfOxJyMknn1xkDwm5H3XUUbn/JZdcko455ph8vOOOO6azzjorH3sSgspEdUKkCOgHvfjii2mdddbJx56ETDDBBGmGGWbo7tIVaQsG6PWMYcQPiZi9HkPIf5AHgUjlktKFSPGS6oU8s1clhHwMqhPS4GLE7O02J0pOrBky5h3SZxgycuTI7qcJnUdjzjnnLKyjTz/9NP3111+55+67716or88//zz98ccfuV0lhMybWSk87aa+DjnkkLTxxhvn/tNPP32aZppp8vH333+ffvjhh3w87bTTpummm65JQqaaaqo044wz5nZSBpbZ7ERC/v777/TJJ5/0pHDksfqN6iRNWHE6EcdQhwQdYrocTxvVEyVVWd45nTAkOo+q/WqGdFNlVV3oaP8uDOEFbGQxG/732vUiWFPfffddbnrggQfSHHPM0TQHlRDiVAZ4QDU9//zzuf95551XOGUqIbPPPnuhjg4//PC00047Ff0tTqUX3GijjdIuu+ySm26++eZ07LHH5mPU3mmnnZaPp5566jTXXHMVquzDDz/Mxzi8hivTlzqO4wILLNB0X6jQxx9/PLfjRC677LKl6x9Z0y4MUQfFi7V4Gq43HENliN6hpnDVytI+PYU6UYZ4T3k0YxhZ05ohbXTJOGfIgAEDCitLRV/xUyo52v7YY4+lySabLN8SDhSWB7TUUksVsSO9X/BZZkGdccYZ6Z133sk/4wyaw7jgggsWqun9999POJyNNPfcc6dZZpklN2PFffbZZ019UJuoKgirinA55OGynnzyyRwva6R55pmnLVT1559/TgcffHA+FefY1C//g0Uz0rXTNESXtVYoqaeOPMCDok7aPGhNP2vGUM3equN4/T0ry2OI+iE6Jouli1p2PRiOyi6jqkZsCChXM2TsU97rDBkxYkShsiz62nhRRalrFFQlBOvFHLSbbropzTbbbHkYXsymLohZLbroorldJWTJJZfMzh6ExVUWaUXF3XnnnbnPvvvum7bZZpt8zJhl0FCctvfeey/3YW6HHnpoPkbV2Rz0PrEQX3nlldz00ksv5WtAOJXLLLNMS8HF8X3qqadyH1T4fffdV/SvgsznpMp+iEpLBCgXiWXp3VYNv3tWlo6psayWKzvmRy/8HjkXk5l1MYrg23TcmiElqzxeGTJw4MBCZXm4JIuCMndFqauEEL7+888/8+2tscYaafLJJ8/HKiErrbRSjjdBTz/9dOFIdiIhb7/9dnr33XfzEDfeeGO6+uqr8/Hmm29ehFqwysyKizzlypCFF144nX/++U2nffnll4Vzqj+SebRsI+0HHHBA8bOuo56j697rL3Vl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">
                            </div>
                        </div>
                        <p class="address-label">Address</p>
                    </div>
                    <div class="address-wrap">
                        <div class="head">
                            <input readonly="readonly">
                            <button class="btn copy-btn">Copy</button>
                        </div>
                        <div class="foot">
                            <p>Please do not top up other non-bep20 assets. After recharging, please click "Submit successfully"!</p>
                            <p class="text-danger">If the account has not been received for a long time, please click "Submit successfully" again.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>