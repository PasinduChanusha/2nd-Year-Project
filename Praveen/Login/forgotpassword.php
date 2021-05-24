<?php
session_start();
require("inconnect.php");
if(isset($_POST['submit'])){

$to_email = $_POST['email'];
$subject = "RESET PASSWORD";
$body = rand(1000,9000);
$headers = "From: helakamsrilanka@gmail.com";

mail($to_email, $subject, $body, $headers);
$_SESSION['digit']= $body;
header("Location:Digit/index.php");


}
?>

<html>

<head>
  <link rel="stylesheet" href="forgot.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Forgot Password?</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">Password assistance</p>
    <p class="forgot" align="center">Enter the email address  .</p>
    <form class="form1" action="forgotpassword.php" method="post">
      <input class="un " name="email" type="text" align="center" placeholder="Email">
     
       <div >
          <input type="submit" name="submit" class="submit" align="center"  value="Sign In">
          
      </div>
      <p class="forgot" align="center"><a href="#">If you no longer use the email address<br> associated with your Amazon account, you may contact Customer Service for help restoring access to your account</p>
     </a>
     </p>
     </form>       
                
    </div>
     
</body>

</html>