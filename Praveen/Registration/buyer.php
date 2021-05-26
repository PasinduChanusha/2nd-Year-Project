<?php session_start(); ?>
<?php require_once ('ImConnect.php'); ?>

<?php 

	if(isset($_POST['submit'])){
		$first_name = $_POST['Fname'];
		$last_name = $_POST['Lname'];
		$b_day = $_POST['birthday'];
		$gender = $_POST['radiogroup1'];
		$contact = $_POST['phone'];
		$email = $_POST['email'];
		$line1 = $_POST['line1'];
		$line2 = $_POST['line2'];
		$line3 = $_POST['line3'];
        $p_code = $_POST['postal'];
        $province = $_POST['province'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		


if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,10}$/',$password)))
		{
			echo "Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and special character";
			exit();
		}
		$password = sha1($_POST['password']);
		$rpassword = sha1($_POST['rpassword']);



if(!(preg_match('/^[A-Za-z0-9]+(?:[ _-][A-Za-z0-9]+)*$/', $username))){
	echo ("Invalin Username");
	exit();
}
if (!(preg_match('/^[0-9]{10}+$/', $contact))) 
		{
			echo "Mobile number is incorrect. The mobile number should have only ten digits.";
			exit();
		}

if (!(preg_match('/^[A-Za-z]+$/', $first_name)))
		{
			echo "First name should be a string";
			exit();
		}

if (!(preg_match('/^[A-Za-z]+$/', $last_name)))
		{
			echo "Last should be a string";
			exit();
		}




		if($password != $rpassword){
			echo ("Password are not matching");
		}
else{
		$insert = "insert into buyer values ('NULL','$first_name','$last_name','$b_day','$gender','$contact','$email','$line1','$line2','$line3','$p_code','$province', '$username','$password','$rpassword')";
		if(mysqli_query($connection,$insert)){
			echo "Successfull";
			header("Location: ../Login/login4.php");
		}
		else{
			echo "UnSuccessfull";
		}


	}

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Registration
        <!--page title-->
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="01.css">
</head>

<body>

    

    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h1>Buyer Registration Form</h1>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="buyer.php" method="POST">
                        <div class="row clearfix">
                            <div class="col_half">
                                <?php
                                $u = $_SESSION['bemail'];
                                ?>
                                <div class="input_field"> <span><i aria-hidden="true" ></i></span>
                                    <input type="text" name="Fname" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" ></i></span>
                                    <input type="text" name="Lname" placeholder="Last Name" required />
                                </div>
                            </div>
                        </div>

                        <div class="input_field"><span><i aria-hidden="true" ></i> </span>
                            <input type="date" name="birthday" placeholder="Date" required />
                        </div>

                        <div class="input_field radio">
                            <input type="radio" name="radiogroup1" id="rd1" value="m">
                            <label for="rd1">Male</label>
                            <input type="radio" name="radiogroup1" id="rd2" value="f">
                            <label for="rd2">Female</label>
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true" ></i> </span>
                            <input type="text" name="phone" placeholder="TelePhone" required>
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" ></i></span>
                            <input readonly type="email" name="email" placeholder="Email"  value="<?php echo $_SESSION['bemail'];?>" required />
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true" ></i></span>
                            <input type="address" name="line1" placeholder="address line 1" required />
                        </div>
                         <div class="input_field"> <span><i aria-hidden="true"></i></span>
                            <input type="address" name="line2" placeholder="address line 2" required />
                        </div>
                         <div class="input_field"> <span><i aria-hidden="true"></i></span>
                            <input type="address" name="line3" placeholder="address line 3" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true"></i></span>
                            <input type="address" name="postal" placeholder="postal code" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true"></i></span>
                            <input type="address" name="province" placeholder="province" required />
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true"></i></span>
                            <input type="text" name="username" placeholder="Username" required />
                        </div>


                        <div class="input_field"> <span><i aria-hidden="true"></i></span>
                            <input type="password"  name="password" placeholder="Password" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true"></i></span>
                            <input type="password"  name="rpassword" placeholder="Re-type Password" required />
                        </div>


                        <input class="button" name="submit" type="submit" value="Register" />
                    </form>
                </div>
            </div>
            <!-- <a href="seller.php">Switch As A Seller</a>
    </div> -->

</body>
</html>
