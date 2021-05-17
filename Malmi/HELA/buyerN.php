<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
    <title>
        Buyer Profile
    </title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="admin\profileB.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   <link rel="stylesheet" type="text/css" href="css\header.css">
    <!-- <link rel="stylesheet" type="text/css" href="css\footer.css"> -->
    <link rel="stylesheet" type="text/css" href="css\dash.css">
    

</head>

<body>
  <?php
                    include_once('php/header3.php');
                     include_once('add/ImConnect.php');
        // session_start();
        // echo $_SESSION["id"];
        // echo $_SESSION["username"];
        ?>
<!-- <?php //include("php/header2.php");?> -->
<!-- <div class="fa fa-user"><?php echo $_SESSION["username"]; ?></div> -->
<input type="button" value="Go Back!" onclick="history.back(-1)" />
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'></a>"; 
?>
<div class="admin-panel clearfix">
    <div class="slidebar">
      <div align="center" class="fa fa-user">
        <?php echo $_SESSION["username"]; ?>
      </div>
      <ul>
        <li><a href="indexaddpost.php" id="targeted">Make Post</a></li>
        <li><a href="Registration/buyerE.php">Edit Profile</a></li>
        <li><a href="changeB.php">Change Password</a></li>
        <li><a href="chat2/index.php">Messages</a></li>
        <li><a href="Login/logoutb.php">Log out</a></li>
        
      </ul>
    </div>
    <div class="main">
      <div class="middle-container container">
                <h2 align="center">MY ORDERS</h2>
                 <div class="table-wrapper">
                    <table class="fl-table">
                        <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>NAME</th>
                                <!-- <th>DESCRIPTION</th> -->
                                <th>PRICE</th>
                                <th>QUANTITY</th>
                                <th>ORDER STATUS</th>
                                <th>DELIVERY STATUS</th>
                                <th>CONFIRMATION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                        <div class="profile block"> 
                            <?php 

                            $idd = $_SESSION["id"];
                            $query = "SELECT order_item.buyer_status,order_item.order_status, order_item.o_id, order_item.p_id, product.p_path1,product.p_des, product.p_name,product.p_price,order_item.quantity FROM order_item INNER JOIN product ON order_item.p_id = product.p_id WHERE order_item.u_id = $idd";

                            // echo $query;

                             $t = mysqli_query($connection, $query);
                             $c = mysqli_fetch_array($t);
                             if($t-> num_rows !=0){
                                while($c = $t-> fetch_assoc()){
                                    $W = $c['o_id'];
                                    $X = $c['p_id'];

                                    $_SESSION['oid'] = $W;
                                    $qq = $c['p_path1'];
                                    echo "<tr>";
                                    echo "<td>"."<img src='$qq' height =100 width=100>";
                                    echo"<td>".$c["p_name"]."</td>";
                                    // echo"<td>".$c["p_des"]."</td>";
                                    echo"<td>"."LKR".$c["p_price"]."</td>";
                                    echo"<td>".$c["quantity"]."</td>";
                                    echo"<td>".$c["order_status"]."</td>";
                                    echo"<td>".$c["buyer_status"]."</td>";
                                    echo"<td>"."<a href=acceptbuyer.php?oid=".$c["o_id"]."&pid=".$c["p_id"].">Received</a></td>";
                                    
                                    // echo "</tr>";

                            // echo "<pre>";
                            // print_r($c);
                            
                            // $NN = $c['p_name'];
                            // // echo $qq;
                            // ?>
                        
                            
                            

                            <!--  <br><br><img src="<?php //echo $qq ?>" height =100 width=200/>  -->
                            <?php
                        }
                        

                            
                            // echo "</table>"; 
                            }
                            ?>
                            
                            </tr>
                
                        </tbody>
                    </table>
                </div>
            </div>
      <ul class="topbar clearfix">
        
        
      </ul>
       </div>
     </div>
  </div>
  <!-- <?php //include("php/footer.php");?> -->
</body>
</html>
