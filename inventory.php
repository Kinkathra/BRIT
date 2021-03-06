
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
    <link rel="icon" href ="favicon.png">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <script type="javasc.js"></script>

<style>
    #toBeReturned{border:.1em solid #0e5991;}
    .main{border-top:solid white; border-bottom:solid gray; border-left:.5px solid white; border-right:.1px solid gray;}
    #whiteBackground{background-color:white;color:white; border:solid;}
    #goToText{color:#86db76;}
    .white{color:white}
    .littleSmaller{font-size:300px;}
    #sortaLarger{font-size:100px;}
    #seperate{border:solid white;}
    .superLarge{font-size:10em; max-width:100%;}
    .cent{text-align:center;}
    .signOut{padding-left:6em; color:white; text-decoration:none;};
.blinking-cursor {
  font-weight: 100;
  font-size: 30px;
  color: #2E3D48;
  -webkit-animation: 1s blink step-end infinite;
  -moz-animation: 1s blink step-end infinite;
  -ms-animation: 1s blink step-end infinite;
  -o-animation: 1s blink step-end infinite;
  animation: 1s blink step-end infinite;
}

@keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-moz-keyframes blink {
  from, to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-webkit-keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-ms-keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: black;
  }
}

@-o-keyframes "blink" {
  from, to {
    color: transparent;
  }
  50% {
    color: black;
  }
}
flyBritFly {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-delay: -2s;
}

@keyframes example {
  0%   { left:0px; top:0px;}
  25%  { left:200px; top:0px;}
  50%  { left:200px; top:200px;}
  75%  { left:0px; top:200px;}
  100% { left:0px; top:0px;}
}
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
        background-color:white;
    }
            sm{font-size:12px; color:white;font-weight:;}
    #heads{color:black;}
    #headsbackground{background-color:white;}
</style>

<link rel="stylesheet" type="text/css" href="stylez.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Backroom IT Inventory</title>
</head>
<body style="   background-color:rgb(59, 131, 247);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id=section0>
  <div class="container-fluid">
    <a class="navbar-brand" href="welcome.php"><img src="backroomiths.png"><a href="req.php"><flyBritFly><span class="blinking-cursor">|</span><img class="icon" src="brit.ico" ><span class="blinking-cursor">_</span></flyBritFly></y></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Forms
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li><a class="dropdown-item" href="req.php">Req's</a></li>
            <li><a class="dropdown-item" href="#">Information</a></li>
            <li><a class="dropdown-item" href="#">Return-Labels</a></li>
          </ul>

  </div> <div class="collapse navbar-collapse" id="navbarNavDarkDropdown section1"><span id="goToText"><a href=#section2><h3 class="centr main">About Me</h3>
<img src="toggle-flier.svg" class="centr main" style="width:1em; height:1em; margin:auto; float:right">
<ul class="navbar-nav">
        <li class="nav-item dropdown">
    
</ul>
    </div>
  </div>
          </li>
      </ul>
    </div>            
    <a href="aboutme.php"><span style="padding-left:0" class="white">About&nbspme&nbsp</span></a><&emsp<a href="servicesOffered.php"><a href="logout.php"><span class="white">signout</a></span>

              <!--<span class="signOut"><a href="signout.php">signout</a></li>-->

</nav><!-- Example single danger button -->

<div><?php if(isset($message)) { echo $message; } ?>
</div>
<span "whiteBackground">
    <p style="text-align:center; color:#eaeaea ">This web application is used to keep track records <br> of unutilized
IT assetts yet to be returned to your company.<p style="text-align:center; color:#eaeaea "></p>
<h1 id="sortaLarger">Backroom IT(Phones<img src="">)</h1>
  <div id="borda"> 

<form name="form1"  action="insert.php" method="post" >
    <!--make input at top see through reenable to turn off-->
<!--<table>-->
<!--  <tr>-->
<!--<div id = "lnr" class=>-->

<th id = "addNew">
<!--   New Equipment:
 -->       <input type="text" hidden name="id" ><input type="text" name="first_name" id = "firstI"  maxlength="1" input size="1" placeholder="1st-in">&nbsp;<input type="text" placeholder="Last Name" name="last_name" id = "lastN" placeholder="Last name"><input disabled value="@urdomain.net" placeholder="@urdomain.net" type="text" placeholder="Phone Serial" name="email"><!-- <span id = "at">@urdomain.net</span> -->&nbsp;<input type="text" placeholder="IMEI" name="address" onclick="myfunk()">&nbsp;<input type="text" name="position" placeholder="Position">&nbsp;<input type="text" placeholder="Location" name="location">&nbsp;<input type="text" placeholder="Tracking #" name="sled">&nbsp;
 <input type="text" placeholder="Phone Number"  name="phone">iPhone<a href="#"><img id="apple"  src="png-clipart-apple-logo-apple-logo-heart-logo.png"></a>&nbsp;<input disabled type="text" placeholder="xx" size="2" name=""></input>Android<a href="#"><img id="android" src="Android_robot.png"></a>&nbsp;<input size="2" disabled type="text" placeholder="xx" name="">&nbsp;SP<input disabled type="text" size="1" placeholder="10"><input onmousedown="submit()" id = "submit" type="submit" name="Submit"><!--  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php"><img src="baseline_cached_black_24dp.png"></a> -->
<!--</th>-->
<!--</div></div></tr></table></form>--><!---->

<div id = "toBeReturned">
    <br>

<h3 style="color:#fffffa; margin:0; font-family:"Times New Roman">Deployed Phones being unutilized</h3>
<br>
<form method="post" action="inventory.php">
<table class="table table-bordered">
<thead>
<tr>
    <th><input type="checkbox" id="checkAl"> Select All</th>
    <th>id</th>
    <th>first</th>
    <th>LN</th>
    <th><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
</svg>IMEI <r>or</r><br><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
  <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
</svg>Model/serial#</th>
    <th>email</th>
    <th>location</th>
    <th>phone#</th>
    <th>position</th>
    <th>Tracking #</th>
    <th>Delete</th>
    <th>Track</th>

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
              <td>
<!-- Tracking utton --!>
              
              <a style="" href="https://www.fedex.com/fedextrack/?action=track&tracknumbers=<?php echo $row["sled"] ; ?>" target="_blank"><button type="button" class="btn btn-outline-danger">
               
</svg>
                Track
              </button></td>

</tr>
<?php
$i++;

}

?>

</table>
<p align="center">
</form>
</div>
<script>
$("#checkAl").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
</span>
<a href="#section1"><img class="centr main" src="outline_arrow_circle_up_white_48dp.png"></a>

<hr>
<hr>
<div class="w3-container" id="headsbackground">
 <span id="section2">
<h1 id ="heads">About Me</h1>

Professional candidate of growth for business and IT with the passion and <br>working knowledge of Hardware and Software technologies. I have 
discovered a degree<br> of professional skills to aid in the success of your company where <br> no task is too small and where every factor
must be counted <br>in order ensure the overall productivity and flow of a company. I know just how <br>important budgeting is for the success of a business
and that stakeholders love <br>to see that money is being spent efficiently. I also know how stressful <br> some tedious tasks can become for workers
which also affects employee productivity. <br>Taking into consideration those two important factors is why I created this <br> simple application to not only
keep records of devices that aren't being <br> utilized but to also allow helpdesk employees and technicians house this information away <br>from
the helpdesk where managing open tickets can become overwhelming.


</div>

</script>
</head>
<body>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>


<!--<!DOCTYPE HTML>-->
<!--<html>-->
<!--<head>  -->
<!--<script>-->
<!--window.onload = function () {-->

<!--var chart = new CanvasJS.Chart("chartContainer", {-->
<!--	animationEnabled: true,-->
<!--	title:{-->
<!--		text: "Stock Price of BMW - August"-->
<!--	},-->
<!--	axisX:{-->
<!--		valueFormatString: "DD MMM",-->
<!--		crosshair: {-->
<!--			enabled: true,-->
<!--			snapToDataPoint: true-->
<!--		}-->
<!--	},-->
<!--	axisY: {-->
<!--		title: "Closing Price (in USD)",-->
<!--		valueFormatString: "$##0.00",-->
<!--		crosshair: {-->
<!--			enabled: true,-->
<!--			snapToDataPoint: true,-->
<!--			labelFormatter: function(e) {-->
<!--				return "$" + CanvasJS.formatNumber(e.value, "##0.00");-->
<!--			}-->
<!--		}-->
<!--	},-->
<!--	data: [{-->
<!--		type: "area",-->
<!--		xValueFormatString: "DD MMM",-->
<!--		yValueFormatString: "$##0.00",-->
<!--		dataPoints: [-->
<!--			{ x: new Date(2016, 07, 01), y: 76.727997 },-->
<!--			{ x: new Date(2016, 07, 02), y: 75.459999 },-->
<!--			{ x: new Date(2016, 07, 03), y: 76.011002 },-->
<!--			{ x: new Date(2016, 07, 04), y: 75.751999 },-->
<!--			{ x: new Date(2016, 07, 05), y: 77.500000 },-->
<!--			{ x: new Date(2016, 07, 08), y: 77.436996 },-->
<!--			{ x: new Date(2016, 07, 09), y: 79.650002 },-->
<!--			{ x: new Date(2016, 07, 10), y: 79.750999 },-->
<!--			{ x: new Date(2016, 07, 11), y: 80.169998 },-->
<!--			{ x: new Date(2016, 07, 12), y: 79.570000 },-->
<!--			{ x: new Date(2016, 07, 15), y: 80.699997 },-->
<!--			{ x: new Date(2016, 07, 16), y: 79.686996 },-->
<!--			{ x: new Date(2016, 07, 17), y: 78.996002 },-->
<!--			{ x: new Date(2016, 07, 18), y: 78.899002 },-->
<!--			{ x: new Date(2016, 07, 19), y: 77.127998 },-->
<!--			{ x: new Date(2016, 07, 22), y: 76.759003 },-->
<!--			{ x: new Date(2016, 07, 23), y: 77.480003 },-->
<!--			{ x: new Date(2016, 07, 24), y: 77.623001 },-->
<!--			{ x: new Date(2016, 07, 25), y: 76.408997 },-->
<!--			{ x: new Date(2016, 07, 26), y: 76.041000 },-->
<!--			{ x: new Date(2016, 07, 29), y: 76.778999 },-->
<!--			{ x: new Date(2016, 07, 30), y: 78.654999 },-->
<!--			{ x: new Date(2016, 07, 31), y: 77.667000 }-->
<!--		]-->
<!--	}]-->
<!--});-->
<!--chart.render();-->

<!--}-->
<!--</script>-->
<!--</head>-->
<!--<body>-->
<!--<div id="chartContainer" style="height: 370px; width: 100%;"></div>-->
<!--<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>-->
<!--</body>-->
<!--</html>-->

<span id="seperate section3"></span><div _ngcontent-tew-c203="" class="page-container"><app-track-another-shipment _ngcontent-tew-c203="" _nghost-tew-c195=""><div _ngcontent-tew-c195="" class="track-another-shipment-container"><!----><trk-shared-stylesheet-wrapper _ngcontent-tew-c195=""><div class="track-shared-wrapper"><!----></div></trk-shared-stylesheet-wrapper><h1 _ngcontent-tew-c195="" id="track-single-shipment-header"><div id="borda"></div> Enter a FedEx tracking, door tag or FedEx Office order number. </h1><!----><form _ngcontent-tew-c195="" novalidate="" id="track-another-shipment-form" class="ng-untouched ng-pristine ng-invalid"><div _ngcontent-tew-c195=""><div _ngcontent-tew-c195="" class="single-input-container input-label-container"><input class= "cent" placeholder="Tracking #" _ngcontent-tew-c195="" type="text" id="track-another-shipment-single-input" formcontrolname="singleTrackingId" maxlength="999" aria-describedby="track-single-shipment-header" pattern="^[a-zA-Z0-9,;' \n\-]*$" class="fxg-field__input-text wtrk-custom-select ng-untouched ng-pristine ng-valid"><label _ngcontent-tew-c195="" for="track-another-shipment-single-input" class="fxg-input-field__placeholder fxg-field__floating-placeholder fxg-input-empty-label"></label><!----><!----></div><button _ngcontent-tew-c195="" type="submit" appfocusoutline="" class="shipment-track-button">Track</button><!----><div _ngcontent-tew-c195="" class="link-section"><a _ngcontent-tew-c195="" trksharedopenintinynewwindow="" appfocusoutline="" class="inline-button" href="/en-us/quick-help/tracking/f_quickhelp.html"></a></div><!----></div><!----><div _ngcontent-tew-c195="" role="alert" aria-live="polite"><!----></div><!----></form></div></app-track-another-shipment><h1 _ngcontent-tew-c203="" class="heading"><div class="superLarge" div id="seperate"><span class="littleSmaller"></span></h1><trk-shared-stylesheet-wrapper _ngcontent-tew-c203=""><div class="track-shared-wrapper"><div _ngcontent-tew-c203="" class="responsive-table-wrapper--horizontal-scroll responsive-table-wrapper--vertical-scroll"></div><!----><!----><div _ngcontent-tew-c203="" class="opodContainer"><div _ngcontent-tew-c203="" class="opodArea"><trk-shared-pod-link _ngcontent-tew-c203=""><div class="mt-2 text-align-center"><hr style="color:white"></div><!----><!----></trk-shared-pod-link></div></div><!----></div></trk-shared-stylesheet-wrapper></div></div><hr>
</div

<h1>LICENSESING INFORMATION</h1>
<div class="form-floating" style="text-align:center color:green">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="background-color:#f2889e">
    <option selected>Open this to select License</option>
    <option value="1" onclick="#license.php"><a href= "license.php">ServiceNow</a></option>
    <option value="2">Microsoft</option>
    <option value="3">iOS</option>
  </select>
  <label for="floatingSelect"><b>License Information</b></label>
</div>

<div style="" class="w3-container" id="">
<span id="section9">
<div id="borda"><h1 class="display-1 main" id = "" href="#section1"><b style="color:black">Inventory</b></h1>
<hr>
<!--
<table class="table">
  <thead>
    <tr>
      <th scope="col">Device</th>
      <th scope="col">In-Stock</th>
      <th scope="col">Deployed</th>
      <th scope="col">Assigned</th>
      <th scope="col">Broken</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">iPhone11</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>

    </tr>
 
    <tr>
      <th scope="row">iPhone6</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
       <tr>
      <th scope="row">Laptops</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
       <tr>
      <th scope="row">charges</th>
      <td>good</td>
      <td>good</td>
      <td>good</td>
      <td>good</td>
    </tr>
    <tr>
      <th scope="row">Weekly notes.</th>
       <td>@twitter</td>
       <ol>
      <td colspan="2"><li>There are two laptops in repair for Dee and Bill. One needs a hard-drive and the other needs screws.</li><br>
      <li>11 iphones with cases were picked up on 10/11/21 by Austin.</li>
      </td>
     </ol>
      <td>@manager</td>
    </tr>
  </tbody>
</table>
<span id = infoForDarrell><h1>New Iphones Needed </h1></span>
<form>
    <table>
    <th>
        Device
    </th>
            <td><input type=text"></tr>

    <th>
        Employee
    </th>
            <td><input type=text"></tr>

    <th>
        Needed by
    </th>
            <td><input type=text"></tr>

</table>
</form>
<h1>INVENTORY CONTROL & MANAGEMENT</h1>
<hr>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Device</th>
      <th scope="col">In-Stock</th>
      <th scope="col">Deployed</th>
      <th scope="col">Assigned</th>
      <th scope="col">Broken</th>

    </tr>
  </thead>
  <form>
      <tr></tr>
      <tr>
      <input type="text"><input type="text"><input type="text"><input type="text"><input type="text"></tr>
  </form>
  <tbody>
    <tr>
      <th scope="row">iPhone11</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>

    </tr>
 
    <tr>
      <th scope="row">iPhone6</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
       <tr>
      <th scope="row">Laptops</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>@fat</td>
    </tr>
       <tr>
      <th scope="row">charges</th>
      <td>good</td>
      <td>good</td>
      <td>good</td>
      <td>good</td>
    </tr>
    <tr>
      <th scope="row">Weekly notes.</th>
       <td>@twitter</td>
       <ol>
      <td colspan="2"><li>There are two laptops in repair for Dee and Bill. One needs a hard-drive and the other needs screws.</li><br>
      <li>11 iphones with cases were picked up on 10/11/21 by Austin.</li>
      </td>
     </ol>
      <td>@manager</td>
    </tr>
  </tbody>
</table>

<!-- JavaScript Bundle with Popper -->
<a href="#section0"><img class="centr main" src="outline_arrow_circle_up_white_48dp.png">
</body>
<script type="javasc.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html>
