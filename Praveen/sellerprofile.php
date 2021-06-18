<?php session_start();

require_once ('Login/sellers/php/CreateDb.php');
require_once ('Login/sellers/php/component.php');

$database = new CreateDb("pdoduct", "product");

 ?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="Login/seller/profileS1.css" />
     <link rel="stylesheet" href="Login/seller/product.css">
     <link type="text/css" rel="stylesheet" href="css\header.css">
     <link type="text/css" rel="stylesheet" href="css\footer.css">
     
    <!--  <link rel="stylesheet" href="css/indexs.css"> -->
    <title>Seller Profile</title>
    

</head>

<body>
    <?php include('php/header1.php');?>

    <div class="heads">
        <div class="coverpadx">
        <img src="https://image.shutterstock.com/image-photo/typical-souvenirs-handicrafts-bali-famous-260nw-1513777076.jpg" width="1300px" height="400px" />
    </div>
    <div class="profilepic"></div>

    

    <div class="username"><?php echo $_SESSION["shopname"] ?><br><br> </div>
    <div class="profilepicx">
        <!-- <img src="http://3.bp.blogspot.com/-CrWqZorCP2Y/UWrcGU_f_8I/AAAAAAAAClI/unXrkG-AEfs/s1600/facebook-profile-pictures36.jpg" height="140px" /> -->
    </div>

    <div class="boxbtn">
        <div class="box11"><a href="indexaddproduct.php">Add Product</a></div>

    <div class="box11"><a href="Login/seller/sellerE.php">Edit Profile</div>

    <!-- <div class="box11"><a href="indexaddpost.php">Add Post</div> -->
         <div class="box11"><a href="Login/seller/orders.php">Current Oders</div> 
       
       <div class="box11"><a href="Login/seller/income.php">Monthly Income</div> 

    <div class="box11"><a href="Login/seller/logouts.php">Log Out</div>
    </div>
    </div>

    <div class="container">
    
    <div class="product">
    
            <?php
            require_once("Login/sellers/ImConnect.php");
            $shop = $_SESSION["shopname"];
            $iddd =$_SESSION["id"];
            // print_r($iddd);
            // $shopid = "SELECT s_id FROM sellers WHERE shop_name={$shop}";
            // $result = mysqli_query($connection,$shopid);
            //print_r($result);
           // while ($row = $result->fetch_assoc()){
            $profile = "SELECT p_name,p_price,p_path1,p_des,p_id FROM product WHERE s_id={$iddd}";
                $result1 = mysqli_query($connection,$profile);
                while ($row1 = $result1->fetch_assoc()){
                    button3($row1['p_name'], $row1['p_price'], $row1['p_path1'],$row1['p_des'], $row1['p_id']);
                }
            // }
            ?>
       
    </div>
</div>
<?php include('php/footer.php');?>
</body>

</html>