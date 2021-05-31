<?php

 //ini_set('session.gc_maxlifetime', 30*24*60*60);

session_start();

require_once ('php/CreateDb.php');
require_once ('php/component.php');


// create instance of Createdb class
$database = new CreateDb("newdb", "producta");
$dbname = "newdb";
        $tablename = "product";
        $servername = "localhost";
        $username = "root";
        $password = "";
      // create connection
        $con = mysqli_connect($servername, $username, $password, $dbname);
if (isset($_POST['add'])){
    if(isset($_SESSION['id'])){
        $p_id = $_POST['product_id'];
        $u_id = $_SESSION['id'];

        $product = "UPDATE product SET p_quantity=p_quantity-1 WHERE p_id=$p_id";
        $result1 = mysqli_query($con,$product);
                    $cart = "SELECT * FROM cart_item  WHERE p_id = $p_id && u_id=$u_id";


                        $result = mysqli_query($con,$cart);
                

        if (mysqli_num_rows($result) > 0){
            $update = "UPDATE cart_item SET quantity=quantity+1 WHERE p_id=$p_id";
            $u = mysqli_query($con,$update);
        }
        else{
        $insert = "insert into cart_item values (NULL,{$p_id},1,{$u_id})";
        // echo $insert;
        // exit;
        $r = mysqli_query($con,$insert);
         // var_dump($r);
         // exit;
}

    }
    else{
        header("Location: Login/login4.php");
    }

    /// print_r($_POST['product_id']);
}
    
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>

    
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/header.css">

     
      <link rel="stylesheet" href="css/indexs.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style type="text/css">
    .img-fluid card-img-top{
        
    }
</style>
<body>

<?php include ("php/header1.php"); ?>
<?php include("includes/ternding.php"); ?>
    <?php include("includes/service.php"); ?>
    <?php include("includes/slie.php"); ?>
    <script src="js/scroll.js"></script>
    




<div class="product">
    
            <?php
                $result = $database->getData();
                for ($x = 0; $x < 18; $x++){
                    $row = mysqli_fetch_assoc($result);
                    button1($row['p_name'], $row['p_price'], $row['p_path1'],$row['p_des'], $row['p_id']);
                }
            ?>
       
</div>

<?php include ("php/footer.php"); ?>
</body>
</html>
