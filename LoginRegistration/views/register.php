<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/registrationStyle.css">
    <title>Registration Form</title>
</head>
<body>
    <div class="main-container">
        <h2>User Registration</h2>
        <img src="../assets/background/account_circle.png">
        <form action="../backend/registration.php" class="registerProcess" method="post">
            <div class="name-container">
                <input type="text" id="firstName" name="firstName" class="input-item" placeholder="Enter your first name" required>
                <i><img src="../assets/background/person.png"></i>
                <input type="text" id="lastName" name="lastName" class="input-item" placeholder="Enter your last name" required>
                <i><img src="../assets/background/person.png" class="img"></i>
            </div>

            <div>
                <input type="text" id="section" name="section" class="input-item" placeholder="Enter your section" required>
                <i><img src="../assets/background/edit.png"></i>
            </div>
            <div>
                <input type="text" id="email" name="email" class="input-item" placeholder="Enter your email" required>
                <i><img src="../assets/background/mail.png"></i>
            </div>
            <div>
                <input type="password" id="password" name="password" class="input-item" placeholder="Enter your password" required>
                <i><img src="../assets/background/lock.png"></i>
            </div>
            <div>
                <input type="password" id="confirmPassword" class="input-item" name="confirmPassword" placeholder="Re-enter your password" required>
                <i><img src="../assets/background/lock.png"></i>
            </div>

            <div>
                <p>Already have an account? <a href="../index.php">Login</a></p>
            </div>

            <input type="submit" name="register" value="Register" class="btn">
        </form>
    </div>
</body>
</html>
