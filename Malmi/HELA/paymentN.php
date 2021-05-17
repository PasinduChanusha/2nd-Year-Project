<style type="text/css">
    body {
  font-family: 'Ubuntu', sans-serif;;
  font-size: 17px;
  padding: 8px;
}
.main {
        background: transparent;
        width: 1000px;
        height: 100%;
        margin: auto;
        border-radius: 1.5em;
        box-shadow: 0px 11px 35px 2px rgba(0, 0, 0, 0.14);
    }

 .sign {
        padding-top: 40px;
        color: #261F55 ;
        font-family: 'Ubuntu', sans-serif;
        font-weight: bold;
        font-size: 45px;
    }


* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -10px;
}

.col-25 {
  -ms-flex: 50%; 
  flex: 50%;
  text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E67E22  ;

}

.col-50 {
  -ms-flex: 100%; 
  flex: 100%;
  text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E67E22  ;
}

.col-75 {
  -ms-flex: 100%; 
  flex: 100%;
  text-shadow: 0px 0px 3px rgba(117, 117, 117, 0.12);
        color: #E67E22  ;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  
  padding: 3px 18px 13px 18px;
 
  border-radius: 6px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 9px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.submit {
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: linear-gradient(to right, #D35400, #E67E22);
        border: none;
        padding: 12px;
        width: 200%;
        margin: 10px 0;
        font-family: 'Ubuntu', sans-serif;
        font-size: 17px;
        box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.04);
    }

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

<?php require("add/ImConnect.php") ;
session_start();
$total = $_SESSION['total'];
?>
       
<form method="post" action="https://sandbox.payhere.lk/pay/checkout">   
    <input type="hidden" name="merchant_id" value="1216239">    <!-- Replace your Merchant ID -->
    <input type="hidden" name="return_url" value="http://localhost/Malmi/HELA/index.php">
    <input type="hidden" name="cancel_url" value="http://localhost/Malmi/HELA/index.php">
    <input type="hidden" name="notify_url" value="http://sample.com/notify">  
    <br><br>Item Details<br>
    <input type="text" name="order_id" value="ItemNo12345">
    <input type="text" name="items" value="Door bell wireless"><br>
    <input type="text" name="currency" value="LKR">
    <input type="text" name="amount" value="<?php echo $total;?>">  

     <?php 
       
         $name = $_SESSION["res"];
         // echo "$name";
         
            $sql = "SELECT * FROM order_details WHERE o_id = '$name' LIMIT 1";

            $result = mysqli_query($connection,$sql);
            $row=mysqli_fetch_array($result);
            
         
        ?>
    <br><br>Customer Details<br>
    <input type="text" name="first_name" value="<?php echo $row['F_name'];?>" ><br>
    <input type="text" name="last_name" value="<?php echo $row['L_name'];?>"><br>
    <input type="text" name="email" value="<?php echo $row['email'];?>">
    <input type="text" name="phone" value="<?php echo $row['Contact_no'];?>"><br>
    <input type="text" name="address" value="<?php echo $row['Address'];?>">
    <input type="text" name="city" value="<?php echo $row['city'];?>">
    <input type="hidden" name="country" value="<?php echo $row['country'];?>"><br><br> 
    <input type="submit" name="Submit" value="Buy Now">   
</form>
</form>
<?php include_once('add/ImConnect.php');?>
<?php
// $connect = mysqli_connect("localhost", "root", "", "newdb");
    



// else{

//     }
// header('Location:https://sandbox.payhere.lk/pay/checkout');


 ?>

 <!-- <?php //header("https://sandbox.payhere.lk/pay/checkout"); ?> -->




<!-- <?php

// $merchant_id         = $_POST['merchant_id'];
// $order_id             = $_POST['order_id'];
// $payhere_amount     = $_POST['payhere_amount'];
// $payhere_currency    = $_POST['payhere_currency'];
// $status_code         = $_POST['status_code'];
// $md5sig                = $_POST['md5sig'];

// $merchant_secret = 'XXXXXXXXXXXXX'; // Replace with your Merchant Secret (Can be found on your PayHere account's Settings page)

// $local_md5sig = strtoupper (md5 ( $merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret)) ) );

// if (($local_md5sig === $md5sig) AND ($status_code == 2) ){
//         //TODO: Update your database as payment success
// }

?> -->