<?php
           // $id=$_SESSION["id"];
           // echo $id;
          $un=$_SESSION["username"];
          // echo $un; 
        if (isset($_POST['save'])) {
          $post = $_POST['post'];
          $img = $_FILES['image']['name'];
          $Folder = "Add Post/picture/".$img;
          $fsize = $_FILES['image']['size'];
          $ftype=$_FILES['image']['type'];
          $type=array("image/jpg","image/png","image/jpeg","image/webp");
                          if (($fsize > 1048576)){      
        $message = 'File too large. File must be less than 1 megabytes.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
    }
    else{
              $insert = "insert into post values ( 'NULL' ,  '$post' , '$Folder' )";

               $f=0;
               for($a=0;$a<4;$a++)
               {
               if($type[$a]==$ftype)
               {
                if(mysqli_query($connection, $insert)){
               $f=1;

               
               move_uploaded_file($_FILES['image']['tmp_name'], $Folder);
               break;
               // $message = 'Post successfully uploaded.'; 
               // echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
               header('Location: soori.php');
               }
             }
               }
               if($f==0)
                 {
                 echo "Invalid File type.<br/>";
                 echo "Your file Type is ".$img;
               }
               }  
            }
      // header("Location: ../Login/soori.php");
      
			
?>