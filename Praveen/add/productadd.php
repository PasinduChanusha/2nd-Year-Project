<?php
    if (isset($_POST['Submit'])) {
        $Pname= $_POST['Pname'];
        $Pcat = $_POST['Pcat'];
        $Pcolor = $_POST['Pcolor'];
        $Pquantity = $_POST['Pquantity'];
        $Pprice = ($_POST['Pprice']*105)/100;
        $Pweight = $_POST['Pweight'];
        $Pdes = $_POST['Pdes'];
        $fsize = $_FILES['image']['size'];
        $img = $_FILES['image']['name'];
       
        $Folder = "add/picture/".$img;
       
        $ftype=$_FILES['image']['type'];

        if (!(preg_match('/^[A-Za-z]+$/', $Pname)))
    {
      echo "First name should be a string";
      exit();
    }

if (!(preg_match('/^[A-Za-z]+$/', $Pcolor)))
    {
      echo "Last should be a string";
      exit();
    }

     if (!(preg_match("/^[0-9]+(\.[0-9]{1,5})?$/", $Pprice))) {
        echo "Price should be a number"; 
        exit(); 
    }

    if (!(preg_match("/^[0-9]+(\.[0-9]{1,5})?$/", $Pquantity))) {
        echo "Qauntity should be a number"; 
        exit(); 
    }

        
        $type=array("image/jpg","image/png","image/jpeg","image/webp");
        $insert = "insert into product values ( 'NULL' , '$Pname' , '$Pcat' , '$Pcolor' , '$Pquantity',
        '$Pprice','$Pweight','$Pdes','$Folder' )";
         if (($fsize > 1048576)){      
        $message = 'File too large. File must be less than 1 megabytes.'; 
        echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
    }else{
        
               $f=0;
               for($a=0;$a<4;$a++)
               {
               if($type[$a]==$ftype)
               {
                if(mysqli_query($connection, $insert)){
               $f=1;

               
               move_uploaded_file($_FILES['image']['tmp_name'], $Folder);
               break;
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
    //header("Location: ../Login/soori.php");
?>   