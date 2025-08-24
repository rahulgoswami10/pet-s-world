<?php 
    include("connection.php");
    session_start();
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['pass']);
    // echo $email, $password;

    $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";
    $data = mysqli_query($conn, $sql);
    $total = mysqli_num_rows($data);

    if($total) {
        $result = mysqli_fetch_assoc($data);
        $_SESSION['id'] = $result['user_id'];
        // header("location: display.php");
        echo "<script>alert(Logged in successfully...)</script>";
        echo "<script>window.location.href='display.php'</script>";
    } else {
        // echo "User not found!";
        echo "<script>alert('Invalid email or password!')</script>";
        echo "<script>window.location.href='login.php'</script>";
    }
?>