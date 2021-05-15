<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <element event="some JavaScript"></element>
    <title>Buyer Profile</title>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="..\Add Post\style.css">
    <link type="text/css" rel="stylesheet" href="..\..\css\header.css">
    <link type="text/css" rel="stylesheet" href="soori_dashboard.css">
    <link type="text/css" rel="stylesheet" href="..\css\footer.css">
    
</head>

<body>
    <?php //include('../../php/header1.php');?>

    <div class="content">
        <article class="left">
            <section class="list">
                <ul>
                    <br>
                    <h2>Shortcuts</h2>
                    <hr>
                    <br>
                    <li><a href="../logoutb.php"><h3>Log Out</h3></a></li>
                     <br>
                     <br>
                    <li><a href="changep.php"><h3>Change Password</h3></a></li>
                     <br>
                     <br>
                    <li><a href="buyerE.php"><h3>Edit Profile</h3></a></li>
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
        session_start();
        echo $_SESSION["username"];
        ?>
                    </h2>
                    
                </div>

                <div class="summary">
                    <ul class="text-center">
                        <li><span class="value">29</span> All Orders</li>
                        <li><span class="value">0</span> Awaiting Payment</li>
                        <li><span class="value">0</span> Awaiting Shipment</li>
                        <li><span class="value">0</span> Disputes</li>
                    </ul>
                </div>

                <div class="items">
                    <h2>Ordered Items</h2>
                    <hr>
                    <div class="data">
                        <img src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/cushion-pillow-cover-blue.jpg?v=1569309533" />
                       <p>Decorative Batik Blue Cushion Pillow Cover</p>
                       <br>
                       <br>
                       <h4>Rs. 400.00 LKR</h4>
                    </div>

                    <div class="data">
                        <img class="fl-left" src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/IMG-20200311-184852-827_655162f9-2354-4c3d-89c0-76d98b6c7daf.jpg?v=1583933127" />
                       <p>Metal Spider Pot Stand For Home Living Room</p>
                       <br>
                       <br>
                       <h4>Rs 1,350.00 LKR</h4>
                    </div>
                    <div class="data">
                        <img class="fl-left" src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/seagrass_ball_deco_b1e2727f-f6e7-407c-9e92-b2680b5c61b5.jpg?v=1569773637" />
                        <p>Vintage Table Deco Seagrass Ball - 3 PCs</p>
                       <br>
                       <br>
                       <h4>Rs 450.00 LKR</h4>
                    </div>
                    <div class="data">
                        <img class="fl-left" src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/2878438331401843777.jpg?v=1599917507" />
                        <p>Women Girls Canvas Large Shoulder Bag Printed</p>
                       <br>
                       <br>
                       <h4>Rs 550.00 LKR</h4>
                    </div>
                    <div class="data">
                        <img class="fl-left" src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/cement-bird-hand-made-datacarft.png?v=1569309533" />
                        <p>6 Inch Table Deco Cement Mini Bird For Home Deco</p>
                       <br>
                       <br>
                       <h4>Rs 1,150.00 LKR</h4>
                    </div>
                    <div class="data">
                        <img class="fl-left" src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/9434368772146062786.jpg?v=1596878173" />
                        <p>Vintage Men Leather Luxury Wallet Short Male Purses</p>
                       <br>
                       <br>
                       <h4>Rs 1,100.00 LKR</h4>
                    </div>
                </div>
            </header>
        </article>
    </div>

   

</body>
<!-- <?php //include('../php/footer.php');?> -->
</html>