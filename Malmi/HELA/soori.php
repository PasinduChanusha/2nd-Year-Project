    <head>
          <link rel="stylesheet" href="css/profileB.css">
        <link type="text/css" rel="stylesheet" href="css/header.css">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">


    </head>

    <body>
        <?php include('php/header1.php');?>

        <div class="main-container">

            <!-- HEADER -->
            <header class="block">
                <ul class="header-menu horizontal-list">
                    <!-- <li>
                        <a class="header-menu-tab" href="#1"><span class="icon entypo-cog scnd-font-color"></span>Settings</a>
                    </li> -->
                    <!-- <li>
                        <a class="header-menu-tab" href="#2"><span class="icon fontawesome-user scnd-font-color"></span>Account</a>
                    </li> -->
                    <li>
                        <a class="header-menu-tab" href="chat2/index.php"><span class="icon fontawesome-envelope scnd-font-color"></span>Messages</a>
                        <!-- <a class="header-menu-number" href="#4">5</a> -->
                    </li>
                    <!-- li>
                        <a class="header-menu-tab" href="#5"><span class="icon fontawesome-star-empty scnd-font-color"></span>Favorites</a>
                    </li> -->
                </ul>
                <div class="profile-menu">
                    <p>              <?php
                     include_once('add/ImConnect.php');
        session_start();
        // echo $_SESSION["id"];
        echo $_SESSION["username"];
        ?>
            </header>

            
            <div class="bodytab">
                <div class="left-container container">
                <div class="menu-box block"> 
                    <ul class="menu-box-menu">
                        <!-- <li>
                            <a class="menu-box-tab" href="#"><span class=""></span>Manage Feedback<div class="menu-box-number"></div></a>                            
                        </li> -->
                        <li>
                            <a class="menu-box-tab" href="indexaddpost.php"><span class=""></span>Make Post<div class="menu-box-number"></div></a>                            
                        </li>
                        <li>
                            <a class="menu-box-tab" href="Login/logoutb.php"><span class=""></span>Log Out<div class="menu-box-number"></div></a>                            
                        </li>
                        <li>
                            <a class="menu-box-tab" href="changeB.php"><span class=""></span>Change Password</a>
                        </li>
                        <li>
                            <a class="menu-box-tab" href="Registration/buyerE.php"><sapn class=""></sapn>Edit Profile</a>
                        </li>                        
                    </ul>
                </div>
                
               
                   
                
                
                   
                </ul>
            </div>
           
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
                                <th>Quantity</th>
                                <th>ORDER STATUS</th>
                                <th>DELIVERY STATUS</th>
                                <th>ADD</th>
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
                                    echo"<td>"."<a href=acceptbuyer.php?oid=".$c["o_id"]."&pid=".$c["p_id"].">Add</a></td>";
                                    
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
            </div>
                
                    
                       
               

          

                
                
               
                
                
                    
                    
                </div> 
            </div> 
        </div> 
    </body>
