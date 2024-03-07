<?php include 'utils/head.php';?>

<body>
    <div id="otpless-login-page"></div>
    <!-- TODO: Add your app id -->
    <script id="otpless-sdk" type="text/javascript" src="https://otpless.com/v2/auth.js" data-appid="PASTE_YOUR_APPID_HERE"></script>
    <script type="text/javascript">
        function otpless(otplessUser) {
            // Replace the following code with your own logic
            console.log(otplessUser)
            alert(JSON.stringify(otplessUser));
            window.location.href = 'result.php'
        }
    </script>
</body>
