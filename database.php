
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php

    $url='localhost';
    $username='gltmpvbudxb5';
    $password=')5q^12Y2h),fG';
    $conn=mysqli_connect($url,$username,$password,"student");
    if(!$conn){
    die('Could not Connect My Sql:' .mysql_error());
    }
?>