<?php require_once("../add/ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$ido = $_GET["oid"];
$idp = $_GET["pid"];
$sql = "UPDATE order_item SET order_status ='Delivered' WHERE o_id =$ido AND p_id=$idp" ;


$result = mysqli_query($connection,$sql);
if($result){
header("Location: indexdelivery.php");

}
else
	echo "Accepted Fail";
?>