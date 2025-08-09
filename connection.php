<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db = "dogosWorld";

    $conn =mysqli_connect($servername, $username, $password, $db);

    if ($conn) {
        // echo "Connection succesfull";
    } else {
        // echo "Connection failed a problem occured";
    }


?>