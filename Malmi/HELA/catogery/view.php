<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="view1.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>home</title>
</head>
<!-- <style type="text/css">
  
</style> -->
<body>
  <div class="container">
    <div class="gridProduct">
        <div class="product-gallery">
          <div class="product-image">
            <img class="active" src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/product-image-1003091828_6d5c2c31-51e8-4eb6-bc1d-b542745b034d_370x370_crop_center.jpg?v=1569317214">
          </div>
          <ul class="image-list">
            <li class="image-item"><img src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/product-image-1003091829_5a52412e-393a-4e73-89ca-028ab0676184.jpg?v=1569317214"></li>
            <li class="image-item"><img src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/product-image-1003091824_21c3ee3b-c041-4f54-8490-e070091ccd65_370x370_crop_center.jpg?v=1569317214"></li>
            <li class="image-item"><img src="https://cdn.shopify.com/s/files/1/0049/6218/9382/products/product-image-1003091828_6d5c2c31-51e8-4eb6-bc1d-b542745b034d_370x370_crop_center.jpg?v=1569317214"></li>
          </ul>
        </div>
      <div class="details">
        <div class="seller">
          <a><p><i class="fa fa-user-circle-o" aria-hidden="true"></i> P.M Sadun</p></a>
        </div>
        <h1>Nordic Throw Pillow Cushion Cover Home Decor 45 X 45 Cm
</h1>
        <h2>Rs 650.00 LKR</h2>
         

  <div class="row">
      <div class="star-rating">
        <span class="fa fa-star-o" data-rating="1"></span>
        <span class="fa fa-star-o" data-rating="2"></span>
        <span class="fa fa-star-o" data-rating="3"></span>
        <span class="fa fa-star-o" data-rating="4"></span>
        <span class="fa fa-star-o" data-rating="5"></span>
        <input type="hidden" name="whatever3" class="rating-value" value="4.1">
      </div>
  </div>
        <div class="description">
          <p></p>
          <p>Nordic Throw Pillow Cushion Cover Home Decor 45 X 45 Cm


Size: 18 in x 18 in (45 cm x 45 cm) Material: Polyester Printed Single side Invisible Zipper has been designed to be refilled easily Both machine washable and the...
</p>
        </div>
        <button class="add-to-cart">Add To Cart</button>
        
      </div>

    </div>
    <!-- <div class="grid related-products">
      <div class="column-xs-12">
        <h3>You may also like</h3>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/miziNqvJx5M">
        <h4>Succulent</h4>
        <p class="price">$19.99</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/2y6s0qKdGZg">
        <h4>Terranium</h4>
        <p class="price">$19.99</p>
      </div>
      <div class="column-xs-12 column-md-4">
        <img src="https://source.unsplash.com/6Rs76hNbIWE">
        <h4>Cactus</h4>
        <p class="price">$19.99</p>
      </div>
    </div> -->
  </div>


<script type="text/javascript">
  var $star_rating = $('.star-rating .fa');
console.log($star_rating);
var SetRatingStar = function() {
  return $star_rating.each(function() {
    if (parseInt($star_rating.siblings('input.rating-value').val()) >= parseInt($(this).data('rating'))) {
      return $(this).removeClass('fa-star-o').addClass('fa-star');
    } else {
      return $(this).removeClass('fa-star').addClass('fa-star-o');
    }
  });
};

$star_rating.on('click', function() {
  $star_rating.siblings('input.rating-value').val($(this).data('rating'));
  return SetRatingStar();
});

SetRatingStar();
$(document).ready(function() {

});

  const activeImage = document.querySelector(".product-image .active");
const productImages = document.querySelectorAll(".image-list img");
const navItem = document.querySelector('a.toggle-nav');

function changeImage(e) {
  activeImage.src = e.target.src;
}

function toggleNavigation(){
  this.nextElementSibling.classList.toggle('active');
}

productImages.forEach(image => image.addEventListener("click", changeImage));
navItem.addEventListener('click', toggleNavigation);



</script>
</body>
</html>
