<?php 
    include("connection.php");
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $email = $_REQUEST["email"];
    $address = $_REQUEST["address"];
    $dogname = $_REQUEST["dogname"];

    echo $name . "<br><br>", 
         $age . "<br><br>", 
         $email . "<br><br>", 
         $address . "<br><br>", 
         $dogname . "<br><br>"
    ;


    $sql = "INSERT INTO `users`(`user_id`, `name`, `age`, `email`, `address`, `dog's name`) VALUES (NULL, '$name', '$age', '$email', '$address', '$dogname')";

    $data = mysqli_query($conn, $sql);

    if($data) {
        // echo "Data inserted successfully";
        header("location: display.php");
    } else {
        echo "Operation failed";
    }

?>