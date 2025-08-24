<?php 
    include("./connection.php");
    session_start();
    $user_id = $_REQUEST['uid'];
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $age = $_REQUEST['age'];
    $address = $_REQUEST['address'];
    $password = md5($_REQUEST["password"]);
    $dogname = $_REQUEST['dogname'];



    $sql = "UPDATE `users` 
            SET `name`='$name',
            `age`='$age',
            `email`='$email',
            `address`='$address',
            -- `password`='$password',
            `dog's name`='$dogname' 
            WHERE `user_id` = '$user_id'";
    ;

    $data = mysqli_query($conn, $sql);

    if($data) {
       echo "Data Updated";
       header("location: display.php");
    } else {
        echo "Data hasn't been updated this time";
    }

?>