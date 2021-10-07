<!DOCTYPE html>
<html id = "centered">
<head>

<script type="text/javascript" src="itForm.js"></script>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<meta charset="utf-8">
      <link rel="stylesheet" type="text/css" href="styles.css">

	<title>Req Form</title>
</head>
<body>

<ul class="nav" style="background-color:white">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Equipment Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="req.php">Submit Req</a>
  </li>

  </li>
</ul>
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
    <th scope ="col">Date Needed</th>
    <th scope ="col">Price</th>
<!--     <th scope ="col">Vendor<b>(IT ONLY)</b></th>
    <th scope ="col">Final Price<b>(IT ONLY)</b></th>
    <th scope ="col">Date Ordered<b>(IT ONLY)</b></th> -->


  </tr>

</table id = "">
  <tr>
  <td><textarea col ="1" rows="1" placeholder="Item"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Date Needed"></textarea></td>
  <td><textarea col ="1" rows="1" placeholder="Price"></textarea></td>
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
<footer>  IT Req</footer>
</body>
</html>