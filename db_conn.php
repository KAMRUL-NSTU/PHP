<?php
$conn = mysqli_connect("localhost","root","","user_log");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    exit();
}

?>