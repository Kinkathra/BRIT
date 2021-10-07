
<?php include "config.php"; ?>
<div class='container'>

  <!-- Form -->
  <form method='post' action=''>
    <input type='submit' value='Delete' name='but_delete'><br><br>

    <!-- Record list -->
    <table border='1' id='recordsTable' style='border-collapse: collapse;' >
      <tr style='background: whitesmoke;'>
       <th> ID</th><th>First</th><th> Last</th><th> Serial</th><th>email</th><th>Position</th><th>Location</th><th>Sled Serial Number</th><th>Phone#</th>

     </tr>

     <?php 
    $query = "SELECT * FROM devishes";
    $result = mysqli_query($con,$query);
     
    while($row = mysqli_fetch_array($result) ){
    $id = $_REQUEST['id'];
    $first_name = $_REQUEST['first_name'];
    $last_name = $_REQUEST['last_name'];
    // $gender = $_REQUEST['gender'];
    $address = $_REQUEST['address'];
    $position = $_REQUEST['position'];
    $location = $_REQUEST['location'];
    $sled = $_REQUEST['sled'];
    $phone = $_REQUEST['phone'];
    $email = $first_name.$last_name.'@hospicesource.net';

     ?>
     
         <tr>
          <td><?php   echo $row["id"]; ?><hr></td>
          <td><?php   echo strtoupper( $row["first_name"].'.................'); ?><hr></td>
          <td><?php   echo ucfirst ($row["last_name"]); ?> <input type="checkbox"><hr></td>
          <td><?php   echo $row["address"]; ?><hr></td>
          <td><?php   echo $row["email"] ?></td>
          <td><?php   echo $row["position"] ?></td>
          <td><?php   echo $row["location"] ?></td>
          <td><?php   echo $row["sled"] ?></td>
          <td><?php   echo $row["phone"] ?></td>
        </tr>
        <hr>
    <?php
    }
    ?>
   </table>
 </form>
</div>