<?php include 'utils/head.php';?>

<body>
    <main>
        <div id="otpless-login-page"></div>
        <button onclick="loadOtplessLogin()">Get Started</button>
    </main>
    <script type="text/javascript">
        function loadOtplessLogin() {
            const otplessScript = document.createElement("script");
            otplessScript.src = "https://otpless.com/auth.js";
            // otplessScript.setAttribute("cid", "YOUR_CID_HERE");
            document.body.appendChild(otplessScript);
        }
        function otpless(otplessUser) {
            console.log(JSON.stringify(otplessUser));
            localStorage.setItem('token', otplessUser.token)
            window.location.href = 'result.php'
        }
    </script>
</body>
