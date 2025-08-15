<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .login-form {
        width: 100%;
        height: 100vh;
        background-image: url(./images/bg.jpg);
        background-size: cover;
        background-position: 55%;
    }

    .login {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.25px);
        backdrop-filter: blur(15px);
        border: 1px solid #fff;
        border-bottom: 1px solid rgba(255, 255, 255, 0.5px);
        border-right: 1px solid rgba(255, 255, 255, 0.5px);
        border-radius: 20px;
        box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.1);
    }

    .login h2 {
        width: 100%;
        margin-bottom: 15px;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
        font-size: 2.5em;
        font-weight: 600;
        color: #8f2c24;
    }

    .login .inputbox input {
        width: 100%;
        padding: 10px 20px;
        outline: none;
        font-size: 1.25em;
        color: #8f2c24;
        border-radius: 5px;
        border: none;
        margin-bottom: 30px;
    }

    .login .inputbox input::placeholder {
        color: #8f2c24;
        font-size: 17px;
    }

    #btn {
        position: relative;
        border: none;
        outline: none;
        color: white;
        background-color: #8f2c24;
        font-size: 1.25em;
        font-weight: 500;
        transition: 0.5s;
        cursor: pointer;
    }

    #btn:hover {
        background-color: #d64c43;
    }

    .bottom-content {
        display: flex;
        justify-content: space-between;
    }

    .bottom-content a {
        font-size: 1.25em;
        color: #8f2c24;
        font-weight: 500;
        text-decoration: none;
    }
    </style>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form</title>

        <link rel="stylesheet" href="../resource/style.css">

    </head>

    <body>
        <form action="action.php" method="POST">

            <div class="login-form "
                style="background: url(../img/bg.jpg); background-position: center; background-size: cover;">
                <div class="login">
                    <h2>Sign In</h2>

                    <div class="inputbox">
                        <input type="text" placeholder="Username" name="uname" required>
                    </div>
                    <div class="inputbox">
                        <input type="password" placeholder="Password" name="pass" required>
                    </div>
                    <div class="inputbox">
                        <input type="submit" name="login" value="Login" id="btn" required>
                    </div>

                    <div class="bottom-content">
                        <a href="#">Forgot Password</a>
                        <a href="#">Sign up</a>
                    </div>

                </div>
            </div>
        </form>

    </body>

    </html>
</body>

</html>