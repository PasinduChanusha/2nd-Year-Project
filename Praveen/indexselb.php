<?php session_start();

require_once ('Login/sellers/php/CreateDb.php');
require_once ('Login/sellers/php/component.php');

$database = new CreateDb("pdoduct", "product");

 ?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="Login/sellers/profileS.css" />
     <link rel="stylesheet" href="Login/sellers/css/product.css">
     <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
     
    <!--  <link rel="stylesheet" href="css/indexs.css"> -->
    <title>Seller Profile</title>
    

</head>

<body>
     <?php include ("php/header1.php"); ?>

    <div class="heads">
        <div class="coverpadx">
        <img src="https://cdn.thedesigninspiration.com/wp-content/uploads/2012/06/Facebook-Covers-004.jpg" width="1300px" height="400px" />
    </div>
    <div class="profilepic"></div>

    <div class="profilepicx">
        <img src="http://3.bp.blogspot.com/-CrWqZorCP2Y/UWrcGU_f_8I/AAAAAAAAClI/unXrkG-AEfs/s1600/facebook-profile-pictures36.jpg" height="140px" />
    </div>

    <div class="username">Malmi Arts </div>

    
    </div>
    


    <!-- <div class="aboutpad">
        <ul>
            <li>
                Works at Not Yet Working!! Am Still Studying!!</i>
            </li>

            <li>
                <i> Ginigathena Central College</i>
            </li>

            <li>
                <i> in Colombo, Sri Lanka</i>
            </li>

            <li>
                <i> From Colombo, Sri Lanka</i>
            </li>

            <li>
                <i> Exsample@gmail.com</i>
            </li>

            <li>
                <i> +9471560755</i>
            </li>
        </ul>
    </div> -->

    <div class="container">
    
    <div class="product">
    
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    button1($row['p_name'], $row['p_price'], $row['p_path1'],$row['p_des'], $row['p_id']);
                }
            ?>
       
    </div>
</div>
<?php include ("php/footer.php"); ?>
</body>

</html>