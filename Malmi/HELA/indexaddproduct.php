<?php session_start(); ?>
<!DOCTYPE html> 



<html>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="add/add.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1" /> -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   <link type="text/css" rel="stylesheet" href="css\header.css">
     <link type="text/css" rel="stylesheet" href="css\footer.css">
  <title>Add Product</title>


<body>
<?php include('php/header1.php');?>
<div id="content" >
  <form action="indexaddproduct.php" method="post" enctype="multipart/form-data" >
    

    <div class="main">
      <p class="sign" align="center">Add Your Product</p>
      <form class="form1" enctype="multipart/form-data">
      <div class="form-group">
            
            <div class="remember12" align="center">
             <label for="Pname"><b>Product Name</b></label>
           </div>
    <input class="un " align="center" type="text" placeholder="Enter Name" name="Pname"  required>

  </div>
  
    <div class="remember12" align="center">
    <label for="Pcategory"><b>Product Category</b></label>
    <select name="Pcat" class="un">
      <option value="Home & Living">Home & Living</option>
      <option value="Arts & Crafts">Arts & Crafts</option>
      <option value="Tools & Home">Tools & Home</option>
      <option value="Home Gardening">Home Gardening</option>
      <option value="Toys & Educational">Toys & Educational</option>
      <option value="Kitchen & Dining">Kitchen & Dining</option>

  </select>
</div>

<div class="form-group">
  <div class="remember12" align="center">
    <label for="Pcolor"><b>Product Color</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product Color" name="Pcolor" id="Pcolor" required>
</div>
<div>
<div class="remember12" align="center">
    <label for="Pquantity"><b>Quantity</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product quantity" name="Pquantity" id="Pquantity" required>
</div>
<div class="form-group">
<div class="remember12" align="center">
    <label for="Pprice"><b>Product Price</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product Price" name="Pprice" id="Pprice" required>
</div>
<div class="form-group">
  <div class="remember12" align="center">
    <label for="Pweight"><b>Product Weight</b></label>
  </div>
    <input  class="un " align="center" type="text" placeholder="Enter Product Weight" name="Pweight" id="Pweight" required>
</div>
<div class="form-group">
  <div class="remember12" align="center">
    <label for="Pdes"><b>Product Description</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product Descripion" name="Pdes" id="Pdes" required>

  </div>

   <div class="form-group"> 
    <div class="remember12" align="center">
    <label for="productImage" style="cursor: pointer;"><b>Upload Image1</b></label>
  </div>
    <img id="output" width="200" /> 
    <input class="un" align="center" type="file" name="image"  style="" required>
    <br>
    
          <br>
    <input type="submit" name="Submit" class="submit" align="center"  value="ADD">
          
      </div>
      
    
    

    </div>
  </form>
  </form>
  


<?php include_once('add/ImConnect.php');?>
<?php include_once('add/productadd.php');?>






</div>
<?php include('php/footer.php');?>

</body>
</html>

