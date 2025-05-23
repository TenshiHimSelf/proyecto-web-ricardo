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
  <title>Descripción del producto</title>
  <link rel="stylesheet" href="css/detail.css?v=20250416">  <!-- la version cambia dependiendo del dia que se realicen cambios, anio - mes - dia -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet">
</head>
<body>

<nav>
    <a href="user_page.php" class="logo">Amerian Style</a>
    <a href="cart.html" class="cart-icon">
      <i class="ri-shopping-bag-4-line"></i>
      <span class="cart-item-count"></span>
    </a>
</nav>

  <div class="product-detail">
    <div class="product-img">
      <div class="thumbnail-list">

      </div>
      <div class="main-img">

      </div>
    </div>

    <div class="product-info">
      <h2 class="title"></h2>
      <div class="rating">
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-fill"></i>
        <i class="ri-star-half-fill"></i>
        <span>(4.5)</span>
      </div>
      <span class="price"></span>
      <p class="description"></p>
      <div class="size-selection">
        <p>Seleccionar tamaño</p>
        <div class="size-options">

        </div>
      </div>
      <div class="color-selection">
        <p>Seleccionar color</p>
        <div class="color-options">

        </div>
      </div>
      <button class="btn" id="add-cart-btn">Añadir al carrito</button>
      <div class="product-policy">
        <p>Producto 100% original.</p>
        <p>Póliza de devolución por 14 días.</p>
      </div>

    </div>
  </div>
  <!--Revisar bien los directorios-->
  <script src="js/main_page.js"></script>

</body>
</html>