<?php
//ini_set('session.gc_maxlifetime', 30*24*60*60);

session_start();

require_once ('../../php/CreateDb.php');
require_once ('../../php/component.php');
$connection = mysqli_connect('localhost', 'root', '','newdb');

// create instance of Createdb class
// $database = new CreateDb("newdb", "product");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "p_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'p_id' => $_POST['p_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        //print_r($_SESSION['cart']);
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8"> -->
    
  
    <title>Shopping</title>

    
    
 
    <link rel="stylesheet" href="css\product1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="css\header.css">    
      <link rel="stylesheet" href="css\footer.css"> 

</head>
<body>

<?php require_once ("../../php/header1.php"); ?>



<div class="product">
            <?php
// 
                // $result = $database->getData();
                $query = "SELECT * FROM producta where p_cat = 'Arts & Crafts'";
                $result = $connection->query($query);
                if ($result->num_rows > 0) {
            
                	while ($row = $result->fetch_assoc()){
                    buttonpro($row['p_name'], $row['p_price'], $row['p_path1'],$row['p_des'], $row['p_id']);
                }
            }
     
                
            ?>
       
</div>





<?php require_once ("php/footer.php"); ?>
<script type="text/javascript" src="js/scroll.js"></script>
</body>
</html>
