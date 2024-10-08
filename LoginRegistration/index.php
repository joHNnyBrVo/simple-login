<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/loginStyle.css">
    <title>Login Form</title>
</head>
<body>
    <div class="main-container">
        <h2>User Login</h2>
        <img src="assets/background/account_circle.png">
        <form action="backend/login.php" class="loginProcess" method="post">
            <div>
                <input type="text" id="email" name="email" class="input-item" placeholder="Enter your email" required>
                <i><img src="assets/background/mail.png"></i>
            </div>

            <div>
                <input type="password" id="password" class="input-item" name="password" placeholder="Enter your password" required>
                <i><img src="assets/background/lock.png"></i>
            </div>

            <div>
                <p>Don't have an account? <a href="views/register.php" >Register</a>
            </div>

            <input type="submit" name="login" value="Login" class="btn">
        </form>
    </div>
</body>
</html>