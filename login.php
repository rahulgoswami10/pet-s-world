<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css stylesheet cdn -->
     <link rel="stylesheet" href="./login.css">
</head>
<body>
    <h3>Login Form</h3>
    <div class="wrapper">
        <form action="loginaction.php" method="POST" class="fr" name="fr">
            <input type="email" name="email" id="email" placeholder="Your email" required>
            <input type="text" name="pass" id="pass" placeholder="Your password" required>
            <button id="btn">Log In</button>
            <a href="dogo.php">Don't have an account? <span>Sign up</span></a>
        </form>
    </div>
</body>
</html>