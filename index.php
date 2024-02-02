<?php include 'utils/head.php'; ?>

<body>
    <main>
        <div className='modal-container' id='modalContainer' onClick={closeModal}>
            <div id='otpless-login-page'></div>
        </div>
        <button onclick="openModal()">Get Started</button>
    </main>
    <script type="text/javascript">
        initOTPless = (callback) => {
            console.log('called init')
            const otplessInit = Reflect.get(window, 'otplessInit')

            const loadScript = () => {
                const script = document.createElement('script')
                script.src = 'https://otpless.com/auth.js'
                script.id = 'otplessIdScript'
                // script.setAttribute('cid', 'YOUR_CID_HERE')
                document.body.appendChild(script)
            }

            otplessInit ? otplessInit() : loadScript()

            Reflect.set(window, 'otpless', callback)
        }

        const callback = (otplessUser) => {
            removeQueryParam('ex')
            localStorage.setItem('token', otplessUser.token)
            window.location.href = 'result.php'
        }

        const openModal = () => {
            const urlParams = new URLSearchParams(window.location.search)
            const paramsValue = urlParams.get('ex')

            if (!paramsValue) {
                const currentURL = window.location.href
                const newParam1 = 'ex=true'
                const updatedURL = `${currentURL}?${newParam1}`
                window.history.pushState(null, '', updatedURL)
            }
            initOTPless(callback)
            const modalContainer = document.getElementById('modalContainer')
            modalContainer ? (modalContainer.style.display = 'flex') : ''

            setTimeout(() => {
                removeQueryParam('ex')
            }, 1000)
        }

        const removeQueryParam = (param) => {
            const url = new URL(window.location.href)
            url.searchParams.delete(param)
            window.history.pushState(null, '', url)
        }

        const closeModal = (e) => {
            removeQueryParam('ex')
            const modalContainer = document.getElementById('modalContainer')
            if (e.target === modalContainer) {
                modalContainer ? (modalContainer.style.display = 'none') : ''
            }
        }

        document.addEventListener("DOMContentLoaded", () => {
            const urlParams = new URLSearchParams(window.location.search)
            const paramsValue = urlParams.get('ex')
            if (paramsValue) initOTPless(callback)
        })
    </script>
</body>
