<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <element event="some JavaScript"></element>
    <title>Delivery Service Profile</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link type="text/css" rel="stylesheet" href="style.css"> -->
    <link type="text/css" rel="stylesheet" href="..\css\header.css">
    <link type="text/css" rel="stylesheet" href="..\Login\soori_dashboard.css">
    <!-- <link type="text/css" rel="stylesheet" href="..\..\css\footer.css"> -->
    
</head>

<body>
    <?php include('../php/header2.php');?>
    

    <div class="content">
        <article class="left">
            <section class="list">
                <ul>
                    <br>
                    <h2>Shortcuts</h2>
                    <hr>
                    <br>
                    <li><a href="../Login/logoutd.php"><h3>Log Out</h3></a></li>
                     <br>
                     <br>
                    <li><a href="#"><h3>Change Password</h3></a></li>
                     <br>
                     <br>
                    <li><a href="#"><h3>Edit Profile</h3></a></li>
                    <br>
                    
                    
                </ul>
            </section>

        </article>

        <article class="right">
            <header>
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" width="70px" height="70px">
                <div class="account">
                    <h2>

                        <?php
                        include_once('../add/ImConnect.php');
        session_start();
        echo $_SESSION["username"];
        ?>
                    </h2>
                    
                </div>
                <div class="middle-container container">
                <h2 align="center">DELIVERY STATUS</h2>
                 <div class="table-wrapper">
            <table class="fl-table">
            <thead>
            <tr>
            	<th>PRODUCT</th>
                <th>PRODUCT NAME</th>
                <th>COSTOMER FIRST NAME</th>
                <th>COSTOMER LAST NAME</th>
                <th>SHIPPING ADDRESS</th>
                <th>CONTACT NO</th>
                <th>ORDERD TIME</th>
                <th>QUANTITY</th>
                <th>DELIVERY STATUS</th>
                <th>BUYER STATUS</th>
                <th>CONFIRMATION</th>
            </tr>
        </thead>
         <tbody>
               
         	<tr>
                <div class="items">
                    
                   
                   <?php 

                    // $idd = $_SESSION["id"];
                    $query = "SELECT order_item.buyer_status,order_item.o_id,order_item.p_id,order_item.time1,order_item.order_status, order_details.Address,order_details.Contact_no, order_details.F_name,order_details.L_name, product.p_name,product.p_path1,order_item.unit_price,order_item.quantity FROM product INNER JOIN order_item ON order_item.p_id = product.p_id INNER JOIN order_details ON order_item.o_id = order_details.o_id";
                
                     $t = mysqli_query($connection, $query);
                     $c = mysqli_fetch_array($t);
                     
                     

                     if($t-> num_rows !=0){
                        while($c = $t-> fetch_assoc()){
                        	$W = $c['o_id'];
                            $X = $c['p_id'];

		                    $_SESSION['oid'] = $W;
		                    // echo $W;
                      //   	echo "<pre>";
                    		// print_r($c);
                            $qq = $c['p_path1'];
                            echo "<tr>";
                            echo "<td>"."<img src='../$qq' height =100 width=100>";
                            echo"<td>".$c["p_name"]."</td>";
                            echo"<td>".$c["F_name"]."</td>";
                            echo"<td>".$c["L_name"]."</td>";
                            echo"<td>".$c["Address"]."</td>";
                            echo"<td>".$c["Contact_no"]."</td>";
                            echo"<td>".$c["time1"]."</td>";
                            echo"<td>".$c["quantity"]."</td>";
                            echo"<td>".$c["order_status"]."</td>";
                            echo"<td>".$c["buyer_status"]."</td>";
                            echo"<td>"."<a href=acceptdelivery.php?oid=".$c["o_id"]."&pid=".$c["p_id"]." >CONFIRM</a></td>";
                        echo "</tr>";

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
                    
                </div>
            </header>
        </article>
    </div>

    

</body>
<!-- <?php //include('../php/footer.php');?> -->
</html>