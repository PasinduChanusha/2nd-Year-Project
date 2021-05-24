<script src="login_form_validation.js"></script>
<?php session_start(); ?>
<?php require_once("inconnect.php") ?>


<?php  
$message="";
if(isset($_POST["Submit"])) {
	$conn = mysqli_connect("localhost","root","","newdb");
	$result0 = mysqli_query($conn,"SELECT * FROM delivery WHERE email='" . $_POST["email"] . "'");
	$result = mysqli_query($conn,"SELECT * FROM delivery WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");

	$count0  = mysqli_num_rows($result0);
	$count  = mysqli_num_rows($result);

	$row=mysqli_fetch_array($result);

	

	if($count0>0 && $count==0) {
		$message = "Invalid Password!";
	}
	else if($count0==0 && $count==0){
		$message ="Invalid email or password";
	}
	else {
		if(!empty($_POST["remember"])) {

	setcookie ("email",$_POST["email"],time()+ 3600);
	setcookie ("password",$_POST["password"],time()+ 3600);

			 } 
		else {

	setcookie("email","");
	setcookie("password","");

			 }

		
		$_SESSION['loggedin'] = true;

		
			$result2 =mysqli_query($conn,"SELECT * FROM delivery WHERE email='" . $_POST["email"] . "'");
			$row1=mysqli_fetch_array($result2);
			$_SESSION["user_id"]=$row1['d_id'];
			$_SESSION["username"]=$row1['U_name'];
			
		
			
	

		header("Location: ../Delivery/indexdelivery.php");

		
	}
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
     			<input type="submit" name="Submit" class="submit" align="center"  value="LOGIN IN">
     			
 			</div>

		</div>

	</form>
	<div class="xy"  >

          <button  onclick="location.href='../Registration/delivary.php'" class="submit">Sign UP</button>
          
      </div>




</div>
</body>
