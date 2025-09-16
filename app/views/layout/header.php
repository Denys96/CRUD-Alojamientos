<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alojamientos MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style> body { padding-top: 70px; } .card-img-top { height:180px; object-fit:cover; } </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
      <div class="container">
        <a class="navbar-brand" href="index.php">Alojamientos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
          <ul class="navbar-nav ms-auto">
            <?php if (isset($_SESSION['user'])): ?>
              <li class="nav-item"><a class="nav-link" href="index.php?page=user&action=account">Mi cuenta (<?php echo htmlspecialchars($_SESSION['user']['name']); ?>)</a></li>
              <?php if ($_SESSION['user']['is_admin']): ?>
                <li class="nav-item"><a class="nav-link" href="index.php?page=admin&action=index">Panel Admin</a></li>
              <?php endif; ?>
              <li class="nav-item"><a class="nav-link" href="index.php?page=auth&action=logout">Salir</a></li>
            <?php else: ?>
              <li class="nav-item"><a class="nav-link" href="index.php?page=auth&action=login">Ingresar</a></li>
              <li class="nav-item"><a class="nav-link" href="index.php?page=auth&action=register">Registrarse</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
