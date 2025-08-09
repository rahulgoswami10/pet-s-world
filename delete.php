<?php 
    include("./connection.php");

    $delete_Id = $_REQUEST['del_id'];
    $sql = "DELETE FROM `users` WHERE `user_id` = '$delete_Id'";
    $data = mysqli_query($conn, $sql);

    if($data) {
        // echo "Data deleted";
        header("location: display.php");
    } else {
         echo "Operation failed";
    }

?>