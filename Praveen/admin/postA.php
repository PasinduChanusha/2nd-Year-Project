


<h2>POSTS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>DESCRIPTION</th>
            
            <th>IMAGE</th>
            <!-- <th>ADD</th> -->
            <th>REJECT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           <?php session_start(); ?>
<?php require_once("Inconnect.php") ?>
<?php 
 $sql ="SELECT * FROM posta";
 $result =$connection-> query($sql);
 if($result){
 while ($row = $result-> fetch_assoc()){
    // echo"<tr><td>".$row["p_id"]."</td>";
    // echo"<td>".$row["p_title"]."</td>";
    // echo"<td>".$row["p_user"]."</td>";
    echo"<td>".$row["description1"]."</td>";
    $imgg = $row['path1'];
    // /echo "$imgg";
    
   echo "<td>"."<img src='../$imgg' height =100 width=100>";
    
    //echo"<td>"."<a href=deletepoA.php?id=".$row["post_id"].">DELETE</a>"."</td></tr>";
echo'<td><button  onclick="myFunction('. $row["post_id"]. ')" >Delete</button>'."</td></tr>";

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

<script>
    console.log("csdcsdc");
function myFunction(id) {
    console.log("csdcsdc");
 if( confirm("Are you sure?") )  {
    window.location.href = "./deletepoA.php?id=" + id;
 }
}

</script>


