<?php 
include("connection.php");
session_start();
$userID = $_SESSION['id'];
$oldpass = md5($_REQUEST['oldpass']);
$newpass = md5($_REQUEST['newpass']);
$confirmpass = md5($_REQUEST['cnfpass']);

$fetchPass = "SELECT `password` FROM `users` WHERE `user_id` = '$userID'";
$fetchData = mysqli_query($conn, $fetchPass);
$dbpass = mysqli_fetch_assoc($fetchData);

if($dbpass['password'] == $oldpass) {

    if($oldpass != $newpass) {

        if($newpass == $confirmpass) {
            $sql = "UPDATE `users` SET `password` = '$confirmpass' WHERE `user_id` = '$userID'";
            $data = mysqli_query($conn, $sql);
            echo "<script>alert('Password Updated Successfully...')</script>";
            echo "<script>window.location.href='display.php'</script>";
        } else {
            echo "<script>alert('New password and Confirm password should be same')</script>";
            echo "<script>window.location.href='cngpass.php'</script>";
        }
    } else {
        echo "<script>alert('Old password and New password shouldn't be same')</script>";
        echo "<script>window.location.href='cngpass.php'</script>";
    }
} else {
    echo "<script>alert('Incorrect password...!!')</script>";
    echo "<script>window.location.href='cngpass.php'</script>";
}
?>