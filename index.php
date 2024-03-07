<?php include 'utils/head.php';?>

<body>
    <main>
        <button id='otpless' custom="true">Get Started</button>
        <script id="otpless-sdk" type="text/javascript" src="https://otpless.com/auth.js" appId="PASTE_YOUR_APPID_HERE"></script>
    </main>
    <script type="text/javascript">
        function otpless(otplessUser) {
            // Replace the following code with your own logic
            console.log(otplessUser)
            alert(JSON.stringify(otplessUser));
            window.location.href = 'result.php'
        }
    </script>
</body>
