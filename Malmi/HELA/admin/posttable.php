


<h2>POSTS</h2>
 <link rel="stylesheet" href="posttable.css">
<div class="table-wrapper">
    <table class="fl-table">
        <thead>
        <tr>
            <th>ID</th>
            <!-- <th>TITLE</th> -->
            <!-- <th>USER NAME</th> -->
            <th>DESCRIPTION</th>
            
            <th>IMAGE</th>
            <th>ADD</th>
            <th>REJECT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           <?php session_start(); ?>
<?php require_once("Inconnect.php") ?>
<?php 
 $sql ="SELECT * FROM post";
 $result =$connection-> query($sql);
 if($result->num_rows > 0){
 while ($row = $result-> fetch_assoc()){
    $qq = $row['imageName'];
    // echo "$qq";
    echo"<tr><td>".$row["post_id"]."</td>";
    // echo"<td>".$row["p_title"]."</td>";
    // echo"<td>".$row["p_user"]."</td>";
    echo"<td>".$row["description"]."</td>";
    // $_SESSION['path'] = $row['imageName'];
   echo "<td>"."<img src='../$qq' height =100 width=100>";
    echo"<td>"."<a href=accept1.php?id=".$row["post_id"].">Add</a></td>";
    echo"<td>"."<a href=deletepo.php?id=".$row["post_id"].">Reject</a>"."</td></tr>";

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


