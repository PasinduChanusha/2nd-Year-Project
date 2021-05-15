<?php
session_start();
require("../Login/inconnect.php");
if(isset($_POST['Submit']))
{
    
 $oldpass=$_POST['opwd'];
 $username=$_SESSION['username'];
 $newpassword=$_POST['npwd'];
 if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',$newpassword)))
        {
            echo "Password require Minimum eight characters, at least one uppercase letter, one lowercase letter, one number and special character";
            exit();
        }
        $newpassword = sha1($_POST['npwd']);
        $rpassword = sha1($_POST['cpwd']);
        echo $newpassword;


$sql=mysqli_query($connection,"SELECT password FROM admin where password='$oldpass' AND u_name='$username'");
  echo "HELP";

if($sql)
{
    if($newpassword != $rpassword){
            echo ("Password are not matching");
        }
else{
   echo "Help";
 $con=mysqli_query($connection,"UPDATE admin set password='$newpassword', rpassword = '$newpassword' where u_name='$username'");
$_SESSION['msg1']="Password Changed Successfully !!";
header("Location:soori.php");
}
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Change Password
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="..\Registration\01.css">
</head>

<body>
    <hr>

    <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Password Change</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                   
             <form name="chngpwd" action="changeB.php" method="post" onSubmit="return valid();">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="opwd" id="opwd" placeholder="Old Password" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="npwd" id="npwd" placeholder="New Password" required />
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="cpwd" id="cpwd" placeholder="Re-Type New Password" required />
                        </div>

                    <td><input type="submit" name="Submit" value="Change Passowrd" /></td>                 
                     </form>
                </div>
            </div>
        </div>
    </div>

</body>