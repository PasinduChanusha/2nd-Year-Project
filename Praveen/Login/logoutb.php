<?php
session_start();
require_once ("../php/CreateDb.php");
require_once ("../php/component.php");

$db = new CreateDb("newdb", "product");

$l_id = $_SESSION['id'];
    $sql = "DELETE FROM cart_item WHERE u_id = {
    $l_id} ";

// create instance of Createdb class
$database = new CreateDb("newdb", "product");
$dbname = "newdb";
        $tablename = "product";
        $servername = "localhost";
        $username = "root";
        $password = "";
      // create connection
        $con = mysqli_connect($servername, $username, $password, $dbname);
$result = mysqli_query($con,$sql);
unset($_SESSION["d_id"]);

unset($_SESSION["id"]);
unset($_SESSION["username"]);
header("Location:../index.php");
?>