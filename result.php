<?php include 'utils/head.php';?>
<body>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            token = localStorage.getItem('token')
            if (token) {
                document.body.innerHTML = `<main>Token: ${token}</main>`
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
