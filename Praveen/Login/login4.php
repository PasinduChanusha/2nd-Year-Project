
<?php
session_start();
$message="";
if(count($_POST)>0) {
 require("inconnect.php");
 //echo $_POST["password"];
 //exit();
 $password = $_POST['password'];
    
$email = $_POST['email'];

if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',$password)))
    {
      echo "Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and special character";
      exit();
    }
    if(!(preg_match('/^[a-z0-9](\.?[a-z0-9]){5,}@g(oogle)?mail\.com$/', $email))){
  echo ("Invalid Email");
  exit();
}
 $password = sha1($_POST["password"]);
 //echo $password;
 //exit();
$result = mysqli_query($connection,"SELECT * FROM buyer WHERE email='" . $_POST["email"] . "' and password = '$password'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row['b_id'];
$_SESSION["username"] = $row['u_name'];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["username"])) {
   require("sellers/userlog.php");
userlog('Signin','Success',$_SESSION["username"],'Successfully loged');
header("Location:../buyerN.php");
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

      		<div class="remember" align="center">
          		<label for="materialLoginFormRemember"></label>
              
            	 
            </div>

            <div >
     			<input type="submit" name="Submit" class="submit" align="center"  value="LOGIN IN">
     			
 			</div>
</div>
	</form>
  <div class="xy"  >

          <button  onclick="location.href='../Registration/regemail.php'" class="submit">Sign UP</button>
          
      </div>
</div>
</body>
