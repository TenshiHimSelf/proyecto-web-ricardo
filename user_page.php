<?php
session_start();

if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Amerian Style</title>
  <link rel="stylesheet" href="css/main_page.css?v=20250416">  <!-- la version cambia dependiendo del dia que se realicen cambios, anio - mes - dia -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"/>
</head>
<body>

  <nav>
    <a href="user_page.php" class="logo">Amerian Style</a>
    <a href="cart.html" class="cart-icon">
      <i class="ri-shopping-bag-4-line"></i>
      <span class="cart-item-count"></span>
    </a>
  </nav>

  <section class="product-collection">
    <!--Revisar bien los directorios-->
  <button class="logout" onclick="window.location.href='php/logout.php'">logout</button>
    <h1>Ultima colección agregada</h1>
    <div class="product-list">

    </div>
  </section>

<!--Las variables estan disponible de manera global, no sabia esto, pensaba que la unica manera era exportar-->
  <script src="js/products.js"></script>
  <script src="js/main_page.js"></script>
</body>
</html>