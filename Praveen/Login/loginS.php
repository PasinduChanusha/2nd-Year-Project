<script src="login_form_validation.js"></script><?php
session_start();
$message="";
if(count($_POST)>0) {
 require("Inconnect.php");
 $password = sha1($_POST["password"]);
 $result = mysqli_query($connection,"SELECT * FROM sellers WHERE email='" . $_POST["email"] . "' and password = '$password'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['s_id'];
$_SESSION["shopname"] = $row['shop_name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["shopname"])) {
header("Location:../sellerprofile.php");
}
?>
<html>

  <link rel="stylesheet" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Sign in</title>


<body>

<div id="content" class="col-12 justify-content-center">
	<form action="" method="post" class="col-12 col-md-8 col-lg-4">
		<div class="message"><?php if($message!="") { echo $message; } ?></div>

		<div class="main">
			<p class="sign" align="center">Sign in</p>
			<form class="form1">
			<div class="form-group">
      			
        		<input class="un " align="center" type="email" name="email" id="email" placeholder="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"];} ?>"">
     		</div>

     		 <div class="form-group">
      			
        		<input class="pass" align="center" type="password" name="password" id="password" placeholder="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"];} ?>" class="form-control">
      		</div>

      		<div class="forgot" align="center">
      			<a href="forgotpassword.php">Forget Password</a><br>
      		</div>

            <div >
     			<input type="submit" name="Submit" class="submit" align="center"  value="Sign In">
     			
 			</div>

		</div>
	</form>
  <div class="xy"  >

          <button  onclick="location.href='../Registration/seller.php'" class="submit">Sign UP</button>
          
      </div>





</div>
</body>
