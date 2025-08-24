<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <!-- iconScout cdn link -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">
    <!-- css stylesheet cdn -->
    <link rel="stylesheet" href="./cngpass.css">
</head>
<body>
    <h3>Change Password</h3>
    <div class="container">
        <form method="POST" action="cngpassaction.php" name="fr" class="fr">
            <input type="text" name="oldpass" placeholder="old password">
            <input type="text" name="newpass" placeholder="new password">
            <input type="text" name="cnfpass" placeholder="confirm password">
            <button>Update Password <i class="uil uil-sync"></i></button>
        </form>
    </div>
</body>
</html>