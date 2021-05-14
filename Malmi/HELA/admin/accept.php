<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = " INSERT INTO producta(p_id,p_name,p_cat,p_des,p_color,p_price,p_quantity,p_weight,p_path1) select p_id,p_name,p_cat,p_des,p_color,p_price,p_quantity,p_weight,p_path1 from product where p_id ='$_GET[id]'" ;


$result = mysqli_query($connection,$sql);
if($result){
header("Location: productA.php");

}
else
	echo "Accepted Fail";
?>