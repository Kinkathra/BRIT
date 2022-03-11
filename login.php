<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<html lang="en" data-arp-injected="true"><head>
    <link rel="stylesheet" type="text/css" href="stylez.css">

    <style>
    
    .signUpNow{
    color: rgb(255 255 255);
    background-color: rgb(193 193 193 / 46%);
    border-radius: -5cm;
    padding: -5.599999999999994em;
    border: solid rgba(245, 207, 169,.60);
}
flyBritFly {
  width: 100px;
  height: 100px;
  position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-delay: -2s;
}

/*@keyframes example {*/
/*  0%   { left:0px; top:0px;}*/
/*  25%  { left:200px; top:0px;}*/
/*  50%  { left:200px; top:200px;}*/
/*  75%  { left:0px; top:200px;}*/
/*  100% { left:0px; top:0px;}*/
/*}*/
/*end of fly brit*/
    #white{color:white;}
 
    .centered{margin-left:30%;  mix-blend-mode: darken};
    .pinkOrWhatever{color:#fc2683;}
    </style>
    <link rel="stylesheet" type="text/css" href="stylez.css">

    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{background-color: rgba(0,0,0,.5); // Sets to 50% transparent

}
        h2{color:white;}
         html{ font: 14px sans-serif; background-image:url(bird-1232416_960_720.webp); background-repeat:no-repeat; background;}
        .wrapper{ width: 360px; padding: 20px; mix-blend-mode: lighten }
    </style>
</head>
<body>
    <div class="wrapper centered">
        <h2><u>Login</u> <span class="blinking-cursor">|</span><flybritfly><img src="backroomiths.png"><span class="blinking-cursor">_</span><br><p style="
          font-size: 31px;
          font-family:Times New Roman;
          color: #004580;
          /* border-top-width: 4em; */
          border: solid;
          border-top-width: thick;
          text-align:center;
          border-bottom-color: #ffffff00;
          border-left-color: #ffffff00;
          border-right-color: #ffffff26;
          border-right-width: 1px;
          border-left-color: #ffffff0d;
          border-left-width: 3px;
          border-bottom-color: #00000040;
          border-bottom-width: 1px;
          "><u style="text-decoration: underline;text-decoration-color: #ffffff24;/* text-decoration-line: overline; */">Asset Management</u></p></h2>
        </flybritfly><p style="color:#c5edd0">Please fill in your credentials to access this site.</p>

        
        <form action="/login.php" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" placeholder="username" name="username" value="SNL" class="form-control " value="">
                <span class="invalid-feedback"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="password" name="password" value="password" class="form-control ">
                <span class="invalid-feedback"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login" style="  text-shadow: 2px 2px 5px green">
            </div>
<p style="color:#fc2683;border-left: solid #ffffff59;border-bottom: solid #80808052;border-top: solid #ffffff57;border-right: solid #ffffff3b;border-right-width: 1px;border-bottom: solid #ffffff42;border-bottom-width: 1px;/* margin: 0; */">Don't have an account? <a href="register.php"><span class="signUpNow">Sign up now</span></a>.</p>        </form>
    </div>
    
<span style="color:#00000063">©</span>
</body></html>
