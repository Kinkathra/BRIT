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
    <script type="javasc.js"></script>

<style>
    table{width: 100%;}
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
<title>Delete employee data</title>
</head>
<body style="   background-color:rgb(59, 131, 247);">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<h1>EQUIPMENT INVENTORY (Texas)</h1>
  <div id="borda"> 

<form name="form1"  action="insert.php" method="post" >
<table>
  <tr>
<div id = "lnr" class=>

<th id = "addNew">
<!--   New Equipment:
 -->       <input type="text" hidden name="id" ><input type="text" name="first_name" id = "firstI"  maxlength="1" input size="1" placeholder="1st-in">&nbsp;<input type="text" placeholder="Last Name" name="last_name" id = "lastN" placeholder="Last name"><input disabled value="@hospicesource.net" placeholder="@hospicesource.net" type="text" placeholder="Phone Serial" name="email"><!-- <span id = "at">@hospicesource.net</span> -->&nbsp;<input type="text" placeholder="IMEI" name="address" onclick="myfunk()">&nbsp;<input type="text" name="position" placeholder="Position">&nbsp;<input type="text" placeholder="Location" name="location">&nbsp;<input type="text" placeholder="Sled's Serial Number" name="sled">&nbsp;<input type="text" placeholder="Phone Number"  name="phone">iPhone<a href="apple.php"><img id="apple"  src="png-clipart-apple-logo-apple-logo-heart-logo.png"></a>&nbsp;<input disabled type="text" placeholder="xx" size="2" name=""></input>Android<a href="android.php"><img id="android" src="Android_robot.png"></a>&nbsp;<input size="2" disabled type="text" placeholder="xx" name="">&nbsp;SP<input disabled type="text" size="1" placeholder="10"><input onmousedown="submit()" id = "submit" type="submit" name="Submit"><!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php"><img src="baseline_cached_black_24dp.png"></a> -->
</th>
</div></div></tr></table></form>


<form method="post" action="">
<table class="table table-bordered">
<thead>
<tr>
    <th><input type="checkbox" id="checkAl"> Select All</th>
    <th>id</th>
    <th>first</th>
    <th>Last</th>
    <th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
</svg>IMEI <r>or</r><br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
</svg>Model/serial#</th>
    <th>email</th>
    <th>location</th>
    <th>phone#</th>
    <th>position</th>
    <th>sled-sn#</th>
    <th>Delete</th>
    <th>Edit</th>

</tr>
</thead>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
?>
<!-- Display Area -->
<tr>
    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["uid"]; ?>"></td>
    <td><?php echo $row["uid"]; ?></td>
    <td><?php echo $row["first_name"]; ?></td>
    <td><?php echo $row["last_name"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["location"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["position"]; ?></td>
    <td><?php echo $row["sled"]; ?></td>
<!--     Delete Button-->
    <td><a href="delete-process.php?uid=<?php echo $row["uid"]; ?>"><button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
</svg>
                Delete
              </button></a></td>
<!-- Edit Button -->
    <td><a href="edit.php">
        <button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
</svg>
                Edit
              </button></td>

</tr>
<?php
$i++;

}

?>

</table>
<p align="center"><button type="submit" class="btn btn-success" name="save">DELETE-Selected</button></p>
</form>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
<a href="req.php"><button>Create-A-Req</button>

</body>
<script type="javasc.js"></script>

</html>
