<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("newdb", "product");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
    $pr_id= $_SESSION['pr_id'];
    $sql = "DELETE FROM cart_item WHERE p_id = {$pr_id} ";

// create instance of Createdb class
$database = new CreateDb("newdb", "product");
$dbname = "newdb";
        $tablename = "product";
        $servername = "localhost";
        $username = "root";
        $password = "";
      // create connection
        $con = mysqli_connect($servername, $username, $password, $dbname);
$result = mysqli_query($con,$sql);
if($result){
header("Location: cart.php");

}

}
else
  echo "Not Deleted";
  }



?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="css/header.css" />
<link rel="stylesheet" href="css/footer.css" />
         <!-- <link rel="stylesheet" href="css/cart.css" />-->
   
    
   <link rel="stylesheet" href="css/stylecart.css">
  <!--<link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="css/indexs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="bg-light">

<?php
 require_once ('php/header1.php');
    //require_once ('php/header.php');

?>


   
         <!--   <div class="shopping-cart">
                <h6>My Cart</h6>-->
                
                <div class="wrap cf">
 
  <div class="heading cf">
    <h1>My Cart</h1>
    <a href="index.php" class="continue">Continue Shopping</a>
  </div>
</div>


        <section class="container content-section">
            
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
            </div>
            <div class="cart-items">
            </div>
            </section>
            <div class="cart-items">
                <?php
                $database = new CreateDb("newdb", "product");
$dbname = "newdb";
        $tablename = "product";
        $servername = "localhost";
        $username = "root";
        $password = "";
      // create connection
        $con = mysqli_connect($servername, $username, $password, $dbname);

                $total = 0;
                if(isset($_SESSION['id'])){
                   $u_id = $_SESSION['id'];
                    $cart = "SELECT p.p_path1,p.p_name,p.p_price,p.p_id,c.c_id,c.quantity FROM cart_item c INNER JOIN product p ON c.p_id = p.p_id WHERE c.u_id = $u_id";


                        $result = mysqli_query($con,$cart);
                        
                         if($result){
                        while ($row = $result-> fetch_assoc()){
                                    
                                    cartElement1($row['p_path1'], $row['p_name'],$row['p_price'], $row['p_id'],$row['quantity']);
                                    
                                    $total = $total + (int)$row['p_price']*(int)$row['quantity'];
                                    
                                    //<form action="https://sandbox.payhere.lk/pay/oc83a1745" method="get"><input name="submit" type="image" src="https://www.payhere.lk/downloads/images/pay_with_payhere.png" style="width:200px;" value="Buy Now"></form>
                            
                        
                        }
                        
                        $_SESSION['total']=$total;
                      }
                    }


                ?>
                </div>
            <div class="cart-total">
                <section class="container content-section">
                    <div class="wrap cf">
        <div class="subtotal cf">
                <strong class="cart-total-title">PRICE DETAILS</strong>
                <hr>
                
                    
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                               
                            }
                        ?>
                        
                    
                        <h3>RS <?php echo $total.'.00'; ?></h3>
                        <h4 class="text-success">Delivery charges = Rs 300.00</h4>
                        <hr>
                        <h3>RS <?php
                            echo  $total+300;
                            ?></h3>
                   </section>
            </div>
            <div class="wrap cf">
 
  <div class="heading cf">
   <a href="paymentform.php" class="continue">Purchase Items</a>
    
    <!-- <button type="submit" name="purchase" method="post">Purchase Items</button> -->
  </div>
</div>
           

        </div>
    </div>
</div>


<?php require_once ('php/footer.php');?>
</body>
</html>