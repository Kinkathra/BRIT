
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
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
if(isset($_POST['save'])){
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i]; 
    mysqli_query($conn,"DELETE FROM equipment WHERE uid='".$del_id."'");
    // $message = "Data deleted successfully !";
    }
}
$result = mysqli_query($conn,"SELECT * FROM equipment");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script type="javasc.js"></script>

<style>
    .icon{width:1em; height:1em; float:right;}
    y{color:yellow;}
    html, body{ width:100%; height:100%; margin: 0px; padding:0px; overflow-x:hidden;
background: linear-gradient(to right, #1CB5E0, #000046);}
    #submit{float:top}
    table{width:100%};
    r{color: red}
    #borda{border: solid white; text-align: center;}
    #submit{float: right}
    #addNew{background-color: gray;}
    .btn-outline-danger{border-color: green}
    h1{text-align: center; color: white}
    tr{
        background-color:white
    }
</style>

<link rel="stylesheet" type="text/css" href="stylez.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Backroom IT Inventory</title>
</head>
<body style="   background-color:rgb(59, 131, 247);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="welcome.php">BR<y>!T</y>&nbsp;<a href="inventory.php"></a> <span class="blinking-cursor">||<a href = "inventory.php" ><img class="icon" src="britback.png"></a> <span class="blinking-cursor">||
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a href="inventory.php" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            &nbsp;
          </a>

          </ul>

  </div> <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class=" dropdown-toggle btn btn-transparent"  id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            &nbsp;<br>
            
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="req.php">Phones</a></li>
            <li><a class="dropdown-item" href="#">Laptops</a></li>
            <li><a class="dropdown-item" href="#">Chargers</a></li>
            <li><a class="dropdown-item" href="#">Docking Station</a></li>
            <li><a class="dropdown-item" href="#">Mounts, etc.</a></li>

          </ul>
        </li>
      </ul>
    </div>
  </div>
          </li>
      </ul>
    </div>
</nav><!-- Example single danger button -->

<div><?php if(isset($message)) { echo $message; } ?>
</div>

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
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
if(isset($_POST['save'])){
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i]; 
    mysqli_query($conn,"DELETE FROM equipment WHERE uid='".$del_id."'");
    // $message = "Data deleted successfully !";
    }
}
$result = mysqli_query($conn,"SELECT * FROM equipment");
?>

<!DOCTYPE html>
<html>
<head>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script type="javasc.js"></script>

<style>
    .icon{width:1em; height:1em;}
    y{color:yellow;}
    html, body{ width:100%; height:100%; margin: 0px; padding:0px; overflow-x:hidden;
background: linear-gradient(to right, #1CB5E0, #000046);}
    #submit{float:top}
    table{width:100%};
    r{color: red}
    #borda{border: solid white; text-align: center;}
    #submit{float: right}
    #addNew{background-color: gray;}
    .btn-outline-danger{border-color: green}
    h1{text-align: center; color: white}
    tr{
        background-color:white
    }
</style>

<link rel="stylesheet" type="text/css" href="stylez.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Backroom IT Inventory</title>
</head>

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
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
if(isset($_POST['save'])){
    $checkbox = $_POST['check'];
    for($i=0;$i<count($checkbox);$i++){
    $del_id = $checkbox[$i]; 
    mysqli_query($conn,"DELETE FROM equipment WHERE uid='".$del_id."'");
    // $message = "Data deleted successfully !";
    }
}
$result = mysqli_query($conn,"SELECT * FROM equipment");
?>


<table style ="border-style:solid">
  <caption> <a href="index.php">Back</a></caption>
  <tr>
  <th scope ="col">Employee Information:</th>
  <th scope ="col">New Employee:</th>
  <th scope ="col">Existing Employee:</th>
  </tr>
  <tr>
      <td>Date:<br><input class="initialDate" type="Date" name=""></td>
      <td>Add        <input type="checkbox" name="">        Backfill        <input type="checkbox" name=""></td>  
      <td>Role Change:<br><input type="text" name=""></td>
  </tr>
    <tr>
      <td>Location:<br><input class="location" onclick="setDate()" type="text" name=""></td>
      <td id = "space">Backfill Name:<br><input type="text" name=""></td>
      <td>New Equipment:<input type="checkbox" name=""><br>Broken Equipment:<input type="checkbox" name=""></td>

  </tr>  
    <tr>
      <td>Employee:<br><input type="text" name=""></td>
      <td id = "space">Backfill Phone Number:<br><input type="text" name=""></td>
      <td>Explanation<b>(broken only)</b><br><textarea rows="2"></textarea></td>
  </tr>
    <tr>
      <td>Requesting Manager:<br><input type="text" name=""></td>
      <td id = "space">Position:<br><input type="text" name=""></td>
  </tr>
      <tr>
      <td>AVP/AOM Signature:<br><input type="text" name="" placeholder="            INITIALS" ></td>
      <td id = "space">Start Date:<br><input type="Date" name=""></td>
      <div id = "space1">
      <td>Transferring Equipment? <input type="checkbox" name=""><br>Previous Employee: <input type="textbox" name=""></td>
  </tr>
      <tr>
      <td>Date Approved:<br><input type="Date" name=""></td>
      <td id = "space">Comments:<br><input type="text" name=""></td>

      <td style="border:solid;"><b><h5 style="text-align: center; background-color:black;color:white">IT Only</h5></b><br>End of Useful Life <input type="checkbox" name="">Date First Commisioned: <input type="Date" name=""></td>

  </tr>

</table>
<table>

  <tr id = "goRight">
    <th scope ="col">Equipment Request:</th>
    <th scope ="col">Item</th>
    <!--<th scope ="col">Date Needed</th>-->
    <th scope ="col">Price</th>
<!--     <th scope ="col">Vendor<b>(IT ONLY)</b></th>
    <th scope ="col">Final Price<b>(IT ONLY)</b></th>
    <th scope ="col">Date Ordered<b>(IT ONLY)</b></th> -->


  </tr>

</table id = "">
  <tr>
  <td><input type="checkbox" name="phone"><label for=phone>Phone</label></td>
  <td><input type="checkbox" name="laptop"><label for=laptop>Laptop</label></td>
  <td><input type="checkbox" name="charger"><label for=charger>Charger</label></td>
  <td><input type="checkbox" name="sled"><label for=sled>Sled</label></td>
  <td><input type="checkbox" name="mount"><label for=mount>Mount</label></td>
<input type="text" placeholder="Solo Approval Date" onfocus="(this.type='date')" onblur="if(this.value==''){this.type='text'}">
  <label for="price">Choose value est.:</label>
  <select id="price" name="price">
    <option value="0">0</option>
    <option value="charger">50</option>
    <option value="iphone" selected>260</option>
    <option value="laptop">500</option>
  </select>  
  Notes:
  <td><textarea col ="1" rows="1"></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
</tr>
<!-- <tr>
  <td><textarea col ="1" rows="1" placeholder="Item"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Date Needed"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Price"></textarea></td>
  <td><textarea col ="1" rows="1"></textarea></td>
  <td><textarea col ="1" rows="1"disabled></textarea></td>
  <td><textarea col ="1" rows="1"disabled></textarea></td>
  <td><textarea col ="1" rows="1"disabled></textarea></td>
</tr> -->
<!-- <tr>
  <td><textarea col ="1" rows="1" placeholder="Item"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Date Needed"></textarea></td>
  <td><textarea col ="1" rows="1"placeholder="Price"></textarea></td>
  <td><textarea col ="1" rows="1"></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
</tr>
<tr>
  <td><textarea col ="1" rows="1" placeholder="Item"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Date Needed"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Price"></textarea></td>
  <td><textarea col ="1" rows="1"></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
</tr>
<tr>
  <td><textarea col ="1" rows="1" placeholder="Item"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Date Needed"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Price"></textarea></td>
  <td><textarea col ="1" rows="1"></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
</tr>
<tr>
  <td><textarea col ="1" rows="1" placeholder="Item"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Date Needed"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Price"></textarea></td>
  <td><textarea col ="1" rows="1"></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
</tr>
<tr>
  <td><textarea col ="1" rows="1" placeholder="Item"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Date Needed"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Price"></textarea></td>
  <td><textarea col ="1" rows="1"></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td>
  <td><textarea col ="1" rows="1" disabled></textarea></td><br>
  <td><input type="submit" name=""></td>
</tr>
</tr> -->
</table>
</div>

</body>
<script type="javasc.js"></script>

</html>

</body>
<script type="javasc.js"></script>

</html>
