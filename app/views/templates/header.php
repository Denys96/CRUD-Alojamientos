<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alojamientos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { padding-top:70px; }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="index.php?page=home">Alojamientos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">
        <?php if(!empty($_SESSION['user'])): ?>
          <li class="nav-item"><a class="nav-link" href="index.php?page=account">Mi cuenta (<?php echo htmlspecialchars($_SESSION['user']['name']); ?>)</a></li>
          <?php if(!empty($_SESSION['user']['is_admin'])): ?>
            <li class="nav-item"><a class="nav-link" href="index.php?page=admin">Admin</a></li>
          <?php endif; ?>
          <li class="nav-item"><a class="nav-link" href="index.php?page=logout">Cerrar sesión</a></li>
        <?php else: ?>
          <li class="nav-item"><a class="nav-link" href="index.php?page=login">Iniciar sesión</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php?page=register">Registrarse</a></li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
<?php if(!empty($_SESSION['error'])): ?>
  <div class="alert alert-danger"><?php echo htmlspecialchars($_SESSION['error']); unset($_SESSION['error']); ?></div>
<?php endif; ?>
<?php if(!empty($_SESSION['success'])): ?>
  <div class="alert alert-success"><?php echo htmlspecialchars($_SESSION['success']); unset($_SESSION['success']); ?></div>
<?php endif; ?>
