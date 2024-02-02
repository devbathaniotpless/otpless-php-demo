[![OTPless](https://d1j61bbz9a40n6.cloudfront.net/website/home/v4/logo/white_logo.svg)](https://otpless.com/platforms/javascript)

# PHP Demo - Login Page

## Steps to add OTPless SDK to your PHP project

1. **Add OTPLESS Sign in Page and Button to load it**

    > Add the following elements.

    ```html
    <div id="otpless-login-page"></div>
    <button id="otpless-login-button" class="btn" onclick="loadOtplessLogin()">Get Started</button>
    ```

2. **Retrieve User's Information**
    > load SDK script on button click

    ```js
    function loadOtplessLogin() {
        const otplessScript = document.createElement("script");
        otplessScript.src = "https://otpless.com/auth.js";
        // otplessScript.setAttribute("cid", "YOUR_CID_HERE");
        document.body.appendChild(otplessScript);
    }
        
    ```
3. **Retrieve User's Information**
    > retrive data using **otplessUser** object

    ```js
    function otpless(otplessUser) {
        alert(JSON.stringify(otplessUser));
    }
    ```

### Usage

> **Prequisite** [XAMPP](https://xammp.com) installed

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
