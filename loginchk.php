<?php
session_start();

include "db_conn.php";
if(isset($_REQUEST["submit"]))
{
    $email=trim($_REQUEST["uname"]);
    $pass=trim($_REQUEST["upass"]);
    $sql="select * from login where email='$email' and password='$pass'";
    $quary=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($quary);
    $uid=$row["id"];
    $_SESSION["uid"]=$uid;
    if($uid!="")
    {
        header("location: home.php");

    }
    else{
        header("location: index.php");
    }



}


?>