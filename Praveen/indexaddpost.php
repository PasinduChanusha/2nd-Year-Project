<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css\header.css">
  <link rel="stylesheet" type="text/css" href="Add post\style.css">
  <link rel="stylesheet" type="text/css" href="css\footer.css">
  <title>Add Post</title>
</head>


<body>  
      <?php include('php/header1.php'); ?> 
    <div class="post">  
<p class="sign" align="center">Add Your Post</p>
<form action="indexaddpost.php" method="post" enctype="multipart/form-data" >
<div class="remember123" >
<label "remember">Post Description</label>         
</div>
  <textarea type="text" name="post" class="d4to" placeholder="Enter Post Description" required></textarea>
  <div class="remember123" >
  <label class="remember123" >Upload Image </label>
  </div>
  
  <input class="d4to" type="file" name="image" required>  <br>
<br>
  <input  type="submit" name="save" class="save" value="ADD">
  
</div>
</form>
<br>
<?php session_start(); ?>
<?php include_once('Add post/ImConnect.php');?> 
<?php include('Add post/post.php');?>
<?php include('php/footer.php');?> 

<script src="js/scroll.js"></script>

  
</body>
</html>



