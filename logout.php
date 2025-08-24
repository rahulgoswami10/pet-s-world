<?php 
session_start();
session_unset();
session_destroy();

echo "<script>alert('logged out sucessfully')</script>";
echo "<script>window.location.href='dogo.php'</script>";

?>