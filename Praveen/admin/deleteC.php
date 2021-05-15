
<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = "DELETE FROM cart_item WHERE p_id = '$_SESSION[id]'  ";

$result = mysqli_query($connection,$sql);
if($result){
header("Location: cart.php");

}
else
	echo "Not Deleted";
?>
