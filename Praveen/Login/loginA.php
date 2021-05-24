<script src="login_form_validation.js"></script>
<?php
session_start();
$message="";
if(count($_POST)>0) {
 require("inconnect.php");
 $password = sha1($_POST["password"]);
$result = mysqli_query($connection,"SELECT * FROM admin WHERE email='" . $_POST["email"] . "' and password = '$password'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['a_id'];
$_SESSION["email"] = $row['email'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["email"])) {

header("Location:../indexadmin.php");
}
?>

<html>

  <link rel="stylesheet" href="login.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>LOGIN</title>


<body>

<div id="content">
  <form action="" method="post" >
    <div class="message"><?php if($message!="") { echo $message; } ?></div>

    <div class="main">
      <p class="sign" align="center">LOGIN IN</p>
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
          <input type="submit" name="Submit" class="submit" align="center"  value="LOGIN IN">
          
      </div>
<br>
<!-- <br> -->

    </div>
  </form>





</div>
</body>
