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
  <title>Usuario</title>
  <link rel="stylesheet" href="../css/main_page.css">
</head>
<body>
  <div class="box">
    <h1>Welcome, <span><?= $_SESSION['name']; ?></span></h1>
    <p>This is an <span>User</span> page</p>
    <button onclick="window.location.href='logout.php'"  >logout</button>
  </div>
</body>
</html>