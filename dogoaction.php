<?php 
    include("connection.php");
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $email = $_REQUEST["email"];
    $address = $_REQUEST["address"];
    $password = md5($_REQUEST["password"]);
    $dogname = $_REQUEST["dogname"];
    $fileName = $_FILES['image']['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $folder = "upload/".$fileName;
    move_uploaded_file($tmpName, $folder);

    // echo $name . "<br><br>", 
    //      $age . "<br><br>", 
    //      $email . "<br><br>", 
    //      $address . "<br><br>", 
    //      $password . "<br><br>", 
    //      $dogname . "<br><br>"
    // ;

    $checkEmail = "SELECT `email` FROM `users` where `email` = '$email'";
    $dataEmail = mysqli_query($conn, $checkEmail);
    $resultEmail = mysqli_fetch_assoc($dataEmail);


    if($resultEmail['email'] == $email) {
        echo "It seems this email id already exists! Try with a different email id";
    } else {
        $sql = "INSERT INTO `users`(`user_id`, `name`, `age`, `email`, `address`, `password`, `dog's name`, `image`) 
                VALUES (NULL, '$name', '$age', '$email', '$address', '$password', '$dogname', '$folder')"
        ;

        $data = mysqli_query($conn, $sql);

        if($data) {
            // echo "Data inserted successfully";
            // header("location: display.php");
            echo "<script>window.location.href='login.php'</script>";
        } else {
            echo "Operation failed";
        }
    }

?>