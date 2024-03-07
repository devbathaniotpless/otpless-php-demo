[![OTPless](https://d1j61bbz9a40n6.cloudfront.net/website/home/v4/logo/white_logo.svg)](https://otpless.com)

# PHP Demo - Login floater

## Steps to add OTPless SDK to your PHP project

1. **Create an App in [OTPless dashboard](https://otpless.com/dashboard/app) and copy the `APP ID`**

2. **Add OTPLESS Sign in floater**

    > Add the following elements.

    ```html
    <button id='otpless' custom="true">Get Started</button>
    <script id="otpless-sdk" type="text/javascript" src="https://otpless.com/auth.js" appId="PASTE_YOUR_APPID_HERE"></script>
    ```

3. **Retrieve User's Information**

    > retrive data using **otplessUser** object

    ```html
    <script type="text/javascript">
        function otpless(otplessUser) {
            alert(JSON.stringify(otplessUser));
        }
    </script>
    ```

### Usage

> **Prerequisites** [XAMPP](https://xammp.com) installed

- Clone this repository in XAMPP's htdocs directory (eg. `C:/xampp/htdocs/otpless-php-demo`).
- Open `XAMPP Control Panel` and start Apache server.
- Open [localhost/otpless-php-demo](http://localhost/otpless-php-demo/) in your browser to see the demo.
- Switch branches to check out available options to integrate *OTPless SDK* in your project.

## *Thank You*

## [Visit OTPless](https://otpless.com/platforms/javascript)
