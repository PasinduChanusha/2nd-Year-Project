<?php session_start(); ?>
<?php require_once ('ImConnect.php'); ?>

<?php 

	if(isset($_POST['submit'])){
		$first_name = $_POST['Fname'];
		$last_name = $_POST['Lname'];
		$contact = $_POST['phone'];
		$email = $_POST['email'];
		$password = sha1($_POST['password']);
		$rpassword = sha1($_POST['rpassword']);

		$insert = "insert into admin values ('NULL','$first_name','$last_name','$email','$contact','$password','$rpassword')";
		if(mysqli_query($connection,$insert)){
			echo "Successfull";
		}
		else{
			echo "UnSuccessfull";
		}


	}



?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Registration
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="01.css">
</head>

<body>

    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h1>Admin Registration Form</h1>
            </div>
            <div class="row clearfix">
                <div class="">
                    <form action="admin.php" method="POST">
                        <div class="row clearfix">
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="Fname" placeholder="First Name" />
                                </div>
                            </div>
                            <div class="col_half">
                                <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                    <input type="text" name="Lname" placeholder="Last Name" required />
                                </div>
                            </div>
                        </div>

                        
                        

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i> </span>
                            <input type="text" name="phone" placeholder="TelePhone" required>
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                            <input type="email" name="email" placeholder="Email" required />
                        </div>


                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="password" placeholder="Password" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="rpassword" placeholder="Re-type Password" required />
                        </div>

                        <input class="button" name="submit" type="submit" value="Register" />
                    </form>
                </div>
            </div>

    </div>

</body>
</html>
