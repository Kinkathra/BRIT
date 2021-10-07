
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

</style>

<link rel="stylesheet" type="text/css" href="stylez.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<title>Backroom IT Inventory</title>
</head>
<body style="   background-color:rgb(59, 131, 247);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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

  </div> <div class="collapse navbar-collapse" id="navbarNavDarkDropdown section1"><span id="goToText"><h3>Go to Device log</h3><img src="outline_add_white_24dp.png">weekly-update</span>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
    
<a href="#section2"><img class="main" id="section1" src="outline_arrow_circle_down_white_48dp.png"></a>
</ul>
    </div>
  </div>
          </li>
      </ul>
    </div>            <a href="logout.php"><span class="white">signout</a></span>

              <!--<span class="signOut"><a href="signout.php">signout</a></li>-->

</nav><!-- Example single danger button -->

<div><?php if(isset($message)) { echo $message; } ?>
</div>
<span "whiteBackground">
<h1 id="sortaLarger">Backroom IT(<!--<img src="outline_savings_white_24dp.png">-->)</h1>
  <div id="borda"> 
<h1>License Information</h1>
<div class="col-lg-12 setup-download">
                                
                                
                                
                                <div id="page-title">
                                    <span id="Nav-bar-mobile" class="icon-Menu visible-xs"></span><h1 id="download-title" class="title h3">License Downloads and Unlock Keys</h1>
                                </div>



                <div class="license-details" id="javascript">
                    <div class="panel panel-default">
                            <div class="panel-heading">
                                    <h4>
                                        <span class="product-title">Essential JS 2 VS Dev Essentials Edition (6 Month Subscription) <span class="js-platform-notes"></span></span>

                                        <span class="older-version licensefile" onclick="downloadLinkRedirection('/account/downloads/javascript',false, false, false)">Download Older Versions</span>

                                    </h4>
                            </div>
                            <div class="panel-body">

                                    <div class="main-release">
                                        <div class="release-info col-lg-12">
                                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                                                <span>
                                                        <span>Latest </span>

                                                    Official Release : 19.3.0.43
                                                </span>

                                                    <span>(Volume 3 2021 - September 30, 2021)</span>
                                                
                                                <div class="link-options" id="19.3.0.43">
                                                        <span class="right-border"><a href="https://www.syncfusion.com/products/whatsnew/essential-js2">What's New</a></span>

                                                        <span class="right-border"><a href="http://help.syncfusion.com/js/release-notes/v19.3.0.43" target="_blank">Release Notes</a></span>

                                                            <span class="right-border licensefile" onclick="openLicenseKeyDialog('7822','javascript','19.3.0.43', '', this)">Get License Key<span data-toggle="tooltip" data-html="true" data-placement="top" data-trigger="manual" class="bstooltip" title="" style="padding-left: 5px; color: black; font-size: 14px;" data-original-title="Starting with version 16.2.0.41, this license key needs to be included in all your .NET projects using Syncfusion components. Please refer to this <a target='_blank' href='https://help.syncfusion.com/common/essential-studio/licensing/license-key'>help topic</a> for more information."><span class="glyphicon glyphicon-info-sign"></span></span></span>

                                                            <span class="productkey" onclick="openKeysDialog('7822','19.3.0.43','W530793','04-27-2022', this)">Get Unlock Key</span>
                                                                <a href="#" data-toggle="tooltip" data-placement="top" title="" style="padding-left: 5px; color: black; font-size: 14px;" data-original-title="This unlock key can be used to install Essential Studio builds on a development machine. You can alternatively install builds using your Syncfusion user name and password."><span class="glyphicon glyphicon-info-sign"></span></a>

                                                        <span class="left-border"><a href="https://s3.amazonaws.com/files2.syncfusion.com/Installs/v19.3.0.43/SecurityCodeScanReports/JavaScript+EJ1_CodeScanReports.pdf" target="_blank">Code Scan Report</a></span>
                                                </div>

                                                    <div class="expires-message">

                                                        <span class="icon-info icon-mess"></span><span class="ex-message">Your license expires on April 27, 2022.</span>

                                                    </div>

                                                    <div class="hide license-file-notification" id="license-info-javascript-19-3-0-43">
                                                        <span class="glyphicon glyphicon-info-sign"></span>A license key is not required for Essential JS 2 VS Dev Essentials Edition (6 Month Subscription).
                                                    </div>

                                            </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                        <span class="web-installer btn btn-primary" onclick="licensedownloadsRedirection('syncfusionessentialjavascript-js1webinstaller','19.3.0.43','exe', 'javascript','1','JavaScript - EJ 1', false, false, false)">Download</span>
                                                <div class="more-download-option">
                                                        <span class="more-option licensefile" onclick="downloadLinkRedirection('/account/downloads/javascript/licensed/19_3_0_43',false, false, false)">More Download Options</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                            </div>

                    </div>
                </div>
                        </div>
</body>
<script type="javasc.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</html>
