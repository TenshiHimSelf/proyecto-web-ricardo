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
  <link rel="stylesheet" href="../css/main_page.css">
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
</head>
<body>

  <nav>
    <a href="user_page.php" class="logo" style="margin-right: auto;">Amerian Style.</a>

    <a href="cart.php" class="cart-icon">
      <i class="ri-shopping-bag-4-line"></i>
      <span class="cart-item-count"></span>
    </a>
    <button onclick="window.location.href='logout.php'">logout</button>
  </nav>





</body>
</html>