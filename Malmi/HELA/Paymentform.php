<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="Checkout form/Style.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<!-- <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css"> -->

</head>
<body>
   <!-- <?php //include ("php/header1.php"); ?> -->
<div class="main">
<h2 class="sign" align="center">Shipping Details</h2>
<div class="row">
  <div class="col-50">
    <div class="container">
      <form method="post" action="Paymentform.php">
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="fname" name="firstname">
            <label for="fname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="fname" name="lastname">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" >
            <label for="telephone"><i class="fa fa-phone"></i> Contact Number</label>
            <input type="text" id="pho" name="phone" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city">

            <div class="row">
              <div class="col-50">
                <label for="state">Country</label>
                <input type="text"  id="state" name="country">
              </div>
              
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        
        <input type="submit" value="Continue to checkout" class="submit" name="Submit">
        <!-- <button ><a href="Paymentform.php"> Next</a></button> -->
      </form>
      <?php include_once('add/ImConnect.php');?>
      <?php
      // $connect = mysqli_connect("localhost", "root", "", "newdb");
      session_start();
          
      if(isset($_POST['Submit'])){
          $fname=$_POST['firstname'];
          $lname=$_POST['lastname'];
          $email=$_POST['email'];
          $address=$_POST['address'];
          $contact=$_POST['phone'];
          $country = $_POST['country'];
          $city = $_POST['city'];
         // $c_id = $_SESSION['c_id'];
          $uid=$_SESSION['id'];
          
          $x = "SHOW TABLE STATUS LIKE 'order_details'";
          $t = mysqli_query($connection, $x);
          $c = mysqli_fetch_array($t);
          // echo $c;
          // echo "<pre>";
          // print_r($c);
          echo $c["Auto_increment"];
        $_SESSION['res'] = $c["Auto_increment"]; 
          $insert = "insert into order_details values ('NULL','$fname','$lname','$address','$contact','$country','$city',123445,'$email','$uid' )";
          mysqli_query($connection, $insert);
         $sql ="SELECT * FROM cart_item";
$result =mysqli_query($connection,$sql);
$nim = $_SESSION['res'];
 if($result){
 while ($row = $result-> fetch_assoc()){

$pprice = "SELECT * FROM product WHERE p_id={$row['p_id']}";
$price = mysqli_query($connection,$pprice);

$row1 = $price-> fetch_assoc();
    $y = "INSERT INTO order_item(id,o_id,p_id,unit_price,quantity,u_id) VALUES ('NULL',{$nim},{$row["p_id"]},{$row1['p_price']},{$row['quantity']},{$row["u_id"]})";
    mysqli_query($connection,$y);
        
         // $q = "SELECT o_id FROM order_details WHERE email = {$email} AND max(time)";
         
         // $_SESSION['res'] = $c;

        //  $s = "SELECT * FROM orders WHERE ";
           header('Location:paymentN.php');
      }
    }
      // else{
}
      //     }
      // header('Location:paymentN.php');


       ?>

    </div>
  </div>
</div>
</div>

 <!-- <?php //include ("php/footer.php"); ?> -->
</body>
</html>