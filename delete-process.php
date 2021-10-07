
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
include_once 'database.php';
$sql = "DELETE FROM equipment WHERE uid='" . $_GET["uid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
header("location:inventory.php");
?>
<!-- <a href="index.php"><button style="padding-left:50%; padding-right: 50%; height: 40em;margin-top:3%%;">GO BACK</button> -->