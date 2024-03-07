<?php include 'utils/head.php';?>
<body>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            token = localStorage.getItem('nekoTssel-PTO')
            if (token) {
                document.body.innerHTML = `
                    <main>
                        <h3>Token: ${token}</h3>
                        <div>This token can be validated using OTPless API endpoints from backend. <a target="_blank" href="https://otpless.com/platforms/verify-sdk-token">Click here</a> for more details.</div>
		                <div>Note: Tokens can only be validated once and cannot be used again. Re-authenticate to get a new token.</div>
                    </main>`
            }else{
                document.body.innerHTML = `
                    <main>
                        <h3>No Token</h3>
                        <button onclick="window.location.href = 'index.php'">Go Home</button>
                    </main>
                `
            }

        })
    </script>
</body>
