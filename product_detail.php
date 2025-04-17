<?php
session_start();

if (!isset($_SESSION['email'])) {
  header("Location: ../login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Detail</title>
  <link rel="stylesheet" href="css/detail.css?v=20250416">  <!-- la version cambia dependiendo del dia que se realicen cambios, anio - mes - dia -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet">
  
</head>
<body>

<nav>
    <a href="user_page.php" class="logo">Amerian Style</a>
    <a href="cart.php" class="cart-icon">
      <i class="ri-shopping-bag-4-line"></i>
      <span class="cart-item-count"></span>
    </a>
</nav>

  <div class="product-detail">
    <div class="product-img">
      <div class="thumbnail-list">
        <img src="images/product1_green_1.jpg">
        <img src="images/product1_green_2.jpg">
        <img src="images/product1_green_3.jpg">
        <img src="images/product1_green_4.jpg">
      </div>
      <div class="main-img">
        <img src="images/product1_green_1.jpg">
      </div>
    </div>






    <div class="product-info">
      <h2 class="title">Men Casual Round Neck T-shirt</h2>
      <div class="rating">
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-half-fill"></i>
        <span>(4.5)</span>
      </div>
      <span class="price">$100</span>
      <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo unde consectetur quas veritatis magni, praesentium atque sequi reiciendis vero ullam pariatur ex facilis a ea. Nemo quidem sit autem eos.</p>
      <div class="size-selection">
        <p>Select Size</p>
        <div class="size-options">
          <button class="selected">5</button>
          <button>M</button>
          <button>L</button>
          <button>XL</button>
          <button>XXL</button>
        </div>
      </div>
      <div class="color-selection">
        <p>Select Color</p>
        <div class="color-options">
          <img src="images/product1_green_1.jpg" class="selected">
          <img src="images/product1_yellow_1.jpg">
          <img src="images/product1_red_1.jpg">
          <img src="images/product1_white_1.jpg">
          <img src="images/product1_maroon_1.jpg">
        </div>
      </div>
      <button class="btn" id="add-cart-btn">Add to Cart</button>
      <div class="product-policy">
        <p>100% Original Product.</p>
        <p>Easy return and exchange policy within 14 days.</p>
      </div>

    </div>
  </div>








  <!--Revisar bien los directorios-->









  <script src="js/main_page.js"></script>

</body>
</html>