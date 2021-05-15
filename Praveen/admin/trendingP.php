


<h2>TRENDING PRODUCTS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>PRODUCT ID</th>
            <th>QUANTITY</th>
            
            
            <th>REJECT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           <?php session_start(); ?>
<?php require_once("Inconnect.php") ?>
<?php 
 $sql ="SELECT id, p_id, SUM(quantity) AS TotalQuantity
FROM order_item
GROUP BY p_id
ORDER BY SUM(quantity) DESC;";
 $result =$connection-> query($sql);
 if($result){
 while ($row = $result-> fetch_assoc()){
   
    echo"<td>".$row["p_id"]."</td>";
    echo"<td>".$row["TotalQuantity"]."</td>";
    
    echo"<td>"."<a href=delete.php?id=".$row["id"].">Reject</a>"."</td></tr>";

 } 
 echo "</table>";
}
else{
    echo "0 result";

}
$connection-> close();
 ?>


           
        </tr>
        
        <tbody>
    </table>
</div>


