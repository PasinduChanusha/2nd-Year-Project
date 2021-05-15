


<h2>PRODUCTS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>COLOR</th>
            <th>PRICE</th>
            <th>QUANTITY</th>
            <th>WEIGHT</th>
            <th>DELETE</th>
        </tr>
        </thead>
        <tbody>
        <tr>
     <?php session_start(); ?>
<?php require_once("ImConnect.php") ?>
<?php 
 $sql ="SELECT p_id, p_name,p_color,p_price,p_quantity,p_weight FROM producta";
$result =mysqli_query($connection,$sql);
 if($result){
 while ($row = $result-> fetch_assoc()){
    echo"<tr><td>".$row["p_id"]."</td>";
    echo"<td>".$row["p_name"]."</td>";
    echo"<td>".$row["p_color"]."</td>";
    echo"<td>".$row["p_price"]."</td>";
    echo"<td>".$row["p_quantity"]."</td>";
    echo"<td>".$row["p_weight"]."</td>";

      echo'<td><button  onclick="myFunction('. $row["p_id"]. ')" >Delete</button>'."</td></tr>";

 } 

 echo "</table>";
}
else{
    echo "0 result";

}
$connection-> close();

 ?>

 <!-- <button onclick="myFunction()">Try it</button> -->

           
        </tr>
        
        <tbody>
    </table>
</div>


<script>
    console.log("csdcsdc");
function myFunction(id) {
    console.log("csdcsdc");
 if( confirm("Are you sure?") )  {
    window.location.href = "./deletepA.php?id=" + id;
 }
}

</script>



