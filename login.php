<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Book Bank Login</title>
    <link rel="stylesheet" href="loginStyle.css">
</head>
<body>
   
    <div class="login-container">

        <h1>User Login</h1>
        <form class="loginForm" method="post" action="./backend/register.php">
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required placeholder="Enter Your E-Mail">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" name="signIn">Login</button> <button class="forgotPassword">Forgot Password </button>
            <div class="message" id="message"></div>
            <div class="registration">
                Don't have account yet?<a href="./registrationForm.html"><button>Sign UP</button></a>
            </div>
        </form>
    </div>
    <script src="loginScript.js"></script>
</body>
</html>
