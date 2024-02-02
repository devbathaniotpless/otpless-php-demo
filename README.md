[![OTPless](https://d1j61bbz9a40n6.cloudfront.net/website/home/v4/logo/white_logo.svg)](https://otpless.com/platforms/javascript)

# PHP Demo - Login Page

## Steps to add OTPless SDK to your PHP project

1. **Add OTPLESS Sign in Page and Button to load it**

    > Add the following elements.

    ```html
    <div id="otpless-login-page"></div>
    <button id="otpless-login-button" class="btn" onclick="loadOtplessLogin()">Get Started</button>
    ```

2. **Load the script and add callback function**

    > retrive data using **otplessUser** object

    ```html
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
    ```

3. **Add following code to render login page**

    ```html
    <div className='modal-container' id='modalContainer' onClick={closeModal}>
        <div id='otpless-login-page'></div>
    </div>
    <button onclick="openModal()">Get Started</button>
    ```

### Usage

> **Prerequisite** [XAMPP](https://xammp.com) installed

- Clone this repository in XAMPP's htdocs directory (eg. `C:/xampp/htdocs/otpless-php-demo`).
- Open `XAMPP Control Panel` and start Apache server.
- Open [localhost/otpless-php-demo](http://localhost/otpless-php-demo/) in your browser to see the demo.
- Switch branches to check out available options to integrate *OTPless SDK* in your project.

> Received User Data Format

```js
// otpless user Format
{
    "token": "xxxxxxxxxxxxxxxxxxxxxxxxxxxx",
    "timestamp": "YYYY-MM-DD HH:MM:SS",
    "timezone": "+XX:XX",
    "mobile": {
        "name": "User Name",
        "number": "User Mobile Number"
    },
    "email": {
        "name": "User Name ",
        "email": "User Email"
    }
}
```
