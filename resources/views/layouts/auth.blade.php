{{-- Sign in page --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

        * {
            box-sizing: border-box;
        }

        body {
            background: #0D141C;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 10 50px;
            min-height: 100vh;


        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #46cd8e;
            background-color: #46cd8e;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        button:active {
            transform: scale(0.95);
        }

        button:focus {
            outline: none;
        }

        button.ghost {
            background-color: #46cd8e;
            border-color: #46cd8e;
        }

        button.ghosst {

            background-color: transparent;
            border-color: #FF9400;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        label.form-check-label {
            font-size: 13px;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            border-radius: 50px;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25),
                0 10px 10px rgba(0, 0, 0, 0.22);
            position: fixed;
            overflow: hidden;
            width: 600px;
            max-width: 100%;
            min-height: 480px;
            margin: 10px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }

        .container.right-panel-active .sign-in-container {
            transform: translateX(100%);
        }

        .sign-up-container {
            left: 0;
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .container.right-panel-active .sign-up-container {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show 0.5s;
        }

        @keyframes show {

            0%,
            49.99% {
                opacity: 0;
                z-index: 1;
            }

            50%,
            100% {
                opacity: 1;
                z-index: 5;
            }
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform 0.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            background: #ACE1DB;
            background: -webkit-linear-gradient(to right, #ebfffd, #96CEB4);
            background: linear-gradient(to right, #ebfffd, #96CEB4);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
            background: #FF9400;

            background: -webkit-linear-gradient(to right, #FFFFFF, #FF9400);
            background: linear-gradient(to right, #ffedd5, #fab553);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }

        :where(.container, form, .input-field, header) {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: start;
            padding: inherit;
        }

        .container {
            background: #fff;
            padding: 30px 5px;
            border-radius: 12px;

            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }

        .container header {
            height: 100px;
            width: 100px;
            background: ;
            color: #fff;
            font-size: 2.5rem;
            border-radius: 50%;
            align-content: center;
        }

        .container h4 {
            font-size: 1.25rem;
            color: #333;
            font-weight: 500;
        }

        form .input-field {
            flex-direction: row;
            column-gap: 10px;
        }

        .input-field input {
            height: 45px;
            width: 42px;
            border-radius: 6px;
            outline: none;
            font-size: 1.125rem;
            text-align: center;
            border: 1px solid #ddd;
        }

        .input-field input {
            height: 45px;
            width: 42px;
            border-radius: 6px;
            outline: none;
            font-size: 1.125rem;
            text-align: center;
            border: 1px solid #ddd;
        }

        .input-field input:focus {
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .input-field input::-webkit-inner-spin-button,
        .input-field input::-webkit-outer-spin-button {
            display: none;
        }

        form button.active {
            background: #4070f4;
            pointer-events: auto;
        }

        form button:hover {
            background: #05001a;
        }
    </style>
    @yield('head')
</head>

<body>
    <div class="container" id="container">
        @yield('content')
    </div>

    <script type="text/javascript">
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        if (email.trim() === '' && password.length < 8) {
            alert('Please enter your email or password');
            return false; // توقف عن عملية الإرسال
        } else {
            signInButton.addEventListener('click', () => {
                container.classList.add("right-panel-active");
            });

        }

        signUpButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });
    </script>
{{-- for motion --}}
    <script>
        function moveToNext(input, nextInputId) {
            if (input.value.length === input.maxLength) {
                document.getElementById(nextInputId).focus();
            }
        }
    </script>
    @yield('script')
</body>

</html>
