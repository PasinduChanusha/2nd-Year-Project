<!DOCTYPE html>
<html>
<?php session_start(); ?>
<head>
    <title>
        Admin Dashboard
    </title>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="admin\profileB.css">
    <link rel="stylesheet"  href="admin\bp\profileB.css">
  <!--  <link rel="stylesheet" type="text/css" href="css\header.css">
    <link rel="stylesheet" type="text/css" href="css\footer.css"> -->
    <link rel="stylesheet" type="text/css" href="css\dash.css">
    <input type="button" value="<" onclick="history.back(-1)" />
<?php
  $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
  echo "<a href='$url'></a>"; 
?>

</head>


<body>
<!-- <?php //include("php/header2.php");?> -->
<div class="admin-panel clearfix">
    <div class="slidebar">
      <div class="logo">
        <a href=""></a>
      </div>
      <ul>
        <li><a href="admin/cp/index.php" id="targeted">dashboard</a></li>
        <li><a href="admin/producttable.php">Awaiting Products</a></li>
        <li><a href="admin/ordertable.php">Orders</a></li>
        <li><a href="admin/posttable.php">Awaiting Posts</a></li>
        <li><a href="admin/sellers.php">Sellers</a></li>
        <li><a href="admin/buyers.php">Buyers</a></li>
        <li><a href="admin/delivery.php">Delivery Service</a></li>
        <li><a href="admin/productA.php">Accepted Products</a></li>
        <li><a href="admin/postA.php">Accepted Posts</a></li>
        <li><a href="#">Reports</a></li>
        <li><a href="#">Edit profile</a></li>
        <li><a href="admin/changeA.php">CHANGE PASSWORD</a></li>
        <li><a href="admin/logout.php">LOG OUT</a></li>
      </ul>
    </div>
    <div class="main">
      <?php require_once('admin/bp/index.php'); ?>
      <ul class="topbar clearfix">
        
        
      </ul>
       </div>
     </div>
  </div>
  <!-- <?php //include("php/footer.php");?> -->
</body>
</html>
