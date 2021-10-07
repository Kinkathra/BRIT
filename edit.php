<?php 
include_once 'database.php';
$uid = 5

$sql = "SELECT * FROM equipment where uid='$uid'";

$result = $conn->query($sql);

if ($result->num_rows > 0){
    $row= $result->fetch_assoc();

    $first_name = $row["first_name"];

    echo 

    "<html>
    <body>

    <form_action='editupdate.php' method='post'>
 
 Name: <input type='text' name='name' value='$first_name'><br>
 <input type='submit'>
 </form>
 <body>
 </html>}

    ";
 ?><?php } ?>
