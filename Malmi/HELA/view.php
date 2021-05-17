<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("newdb", "product");
//$db = new CreateDb("helakam", "Product");

// $id = $_SESSION['product_id'];
// echo $_GET['id'];
// exit();
$id = $_GET['id'];


  

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/indexs.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <title>home</title>
</head>
<link rel="stylesheet" href="css/viewstyle.css">
<body>
  <?php include ("php/header1.php"); ?>
<?php
  $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                           
                                if ($row['p_id'] == $id){
                                    button2($row['p_name'],$row['p_price'],$row['p_path1'],$row['p_des'],$row['p_id']);
                                
                              }
                            }
                           
?>           
<?php 
  

?>
<?php
    //session_start();  
     
    
function button2($pname,$pprice,$pimg,$pdec,$productid) {
          
             
              
           $elemet="
<form action=\"view.php\" method=\"post\">                 
  <div class=\"container\">
    <div class=\"gridProduct\">
        <div class=\"product-gallery\">
          <div class=\"product-image\">
            <img class=\"active\" src=\"$pimg \">
          </div>
          <ul class=\"image-list\">
           
          </ul>
        </div>
      <div class=\"details\">
        <div class=\"seller\">
          <a href=\"indexselb.php\"><p><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i> Malmi Dehigama</p></a>
        </div>
        <h1>$pdec
</h1>
        <h2>\"$pprice\"</h2>
          <div class=\"row\">
      <div class=\"star-rating\">
        <span class=\"fa fa-star-o\" data-rating=\"1\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"2\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"3\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"4\"></span>
        <span class=\"fa fa-star-o\" data-rating=\"5\"></span>
        <input type=\"hidden\" name=\"whatever3\" class=\"rating-value\" value=\"4.1\">
      </div>
  </div>
        <div class=\"description\">
          <p></p>
          <p>$pdec
</p>
        </div>
        <button class=\"add-to-cart\">Add To Cart</button>
        
      </div>

    </div>
      
  </div>

      
           ";
            echo $elemet; 
              

                  }

?>

<br>
<br>
<br>
<br>
<br>
<br>
<script src="http://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script>
        var ratedIndex = -1, uID = 0;

        $(document).ready(function () {
            resetStarColors();

            if (localStorage.getItem('ratedIndex') != null) {
                setStars(parseInt(localStorage.getItem('ratedIndex')));
                // uID = localStorage.getItem('uID');
            }

            $('.fa-star').on('click', function () {
               ratedIndex = parseInt($(this).data('index'));
               // localStorage.setItem('ratedIndex', ratedIndex);
               saveToTheDB();
            });

            $('.fa-star').mouseover(function () {
                resetStarColors();
                var currentIndex = parseInt($(this).data('index'));
                setStars(currentIndex);
            });

            $('.fa-star').mouseleave(function () {
                resetStarColors();

                if (ratedIndex != -1)
                    setStars(ratedIndex);
            });
        });

        function saveToTheDB() {
            $.ajax({
               url: "view.php",
               method: "POST",
               dataType: 'json',
               data: {
                   save: 1,
                   uID: uID,
                   ratedIndex: ratedIndex
               }, success: function (r) {
                    uID = r.id;
                    // localStorage.setItem('uID', uID);
               }
            });
        }

        function setStars(max) {
            for (var i=0; i <= max; i++)
                $('.fa-star:eq('+i+')').css('color', 'green');
        }

        function resetStarColors() {
            $('.fa-star').css('color', 'white');
        }
    </script>
<script src="js/scroll.js"></script>

<br>
<br>

<?php include ("php/footer.php"); ?>


</body>
</html>
