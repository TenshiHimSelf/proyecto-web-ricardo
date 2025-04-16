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
  <title>Amerian Style</title>
  <link rel="stylesheet" href="css/main_page.css?v=20250416">  <!-- la version cambia dependiendo del dia que se realicen cambios, anio - mes - dia -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>

  <nav>
    <a href="user_page.php" class="logo">Amerian Style</a>
    <a href="cart.php" class="cart-icon">
      <i class="ri-shopping-bag-4-line"></i>
      <span class="cart-item-count"></span>
    </a>
  </nav>

  <section class="product-collection">
    <h1>Latest Collection</h1>
    <div class="product-list">

    </div>
  </section>






  <script src="js/main_page.js"></script>
</body>
</html>