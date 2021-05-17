<?php
 
  header('Content-Type: text/xml');
  echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';
  echo '<response>';

  $name = $_GET['q'];

  $dbhost = 'localhost';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'newdb';

  $connection = mysqli_connect('localhost', 'root', '', 'newdb');

  if(mysqli_connect_error()){
      die('Database connection faild' . $connection->connect_error);
  } 
  if($name == ''){
    echo (" ");
  }
  
  else {

      //lookup all links from the xml file if length of q>0

      $sql = "SELECT p_name,p_id FROM product WHERE p_name LIKE '$name%'";
      $result = $connection->query($sql);

      if ($result->num_rows > 0) {

        // output data of each row
        if($result->num_rows == 1){
          $row = $result->fetch_assoc();
          echo "<a href='view.php?id={$row["p_id"]}'>".$row["p_name"]."</a>";
        }
        while($row = $result->fetch_assoc()) {
          echo "<a href='view.php?id={$row["p_id"]}'>".$row["p_name"]."</a>";
          echo "<br>";
        }
      }
      else{
        echo "No Suggetions.";
      }
    }

  echo '</response>';
  $connection->close();
?>