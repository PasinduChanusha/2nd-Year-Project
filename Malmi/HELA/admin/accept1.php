<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = " INSERT INTO posta(post_id,description1,path1) select post_id,description,imageName from post where post_id ='$_GET[id]'" ;


$result = mysqli_query($connection,$sql);
if($result){
header("Location: postA.php");

}
else
	echo "Accepted Fail";
?>