<?php include 'utils/head.php';?>

<body>
    <script type="text/javascript" src="https://otpless.com/auth.js" cid="YOUR_CID_HERE"></script>
    <script type="text/javascript">
        function otpless(otplessUser) {
            console.log(JSON.stringify(otplessUser));
            localStorage.setItem('token', otplessUser.token)
            window.location.href = 'result.php'
        }
    </script>
</body>
