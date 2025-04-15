<?php
session_start();

$errors = [
  'login' => $_SESSION['login_error'] ?? '',
  'register'=> $_SESSION['register_error'] ??'',
];

$activeForm = $_SESSION['active_form'] ?? 'login';

session_unset();

function showError($error) {
  return !empty($error) ? "<p class='error-message'>$error</p>" :"";
}

function isActiveForm($formName, $activeForm) {
  return $formName === $activeForm ? 'active' : '';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poryecto Web</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,400..700;1,400..700&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
      <form action="php/login_register.php" method="post">
        <h2>Login</h2>
        <?= showError($errors['login']); ?>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Contraseña" required>
        <button type="submit" name="login">Login</button>
        <p>No tienes una cuenta? <a href="#" onclick="showForm('register-form')">Crea una cuenta</a></p>
      </form>
    </div>
  </div>

  <div class="form-box <?= isActiveForm('register', $activeForm); ?>" id="register-form">
    <form action="php/login_register.php" method="post">
      <h2>Crear una cuenta</h2>
      <?= showError($errors['register']); ?>
      <input type="text" name="name" placeholder="Nombre" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <select name="role" required>
        <option value="">--Tipo de Cuenta--</option>
        <option value="user">Usuario</option>
        <option value="admin">Administrador</option>
      </select>
      <button type="submit" name="register">Crear cuenta</button>
      <p>Tienes una cuenta? <a href="#" onclick="showForm('login-form')">Login</a></p>
    </form>
  </div>

  <script src="js/login.js"></script>

</body>
</html>