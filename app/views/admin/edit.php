<div class="row justify-content-center">
  <div class="col-md-8">
    <h2>Editar alojamiento (ID: <?php echo $item['id']; ?>)</h2>
    <?php if (!empty($error)): ?><div class="alert alert-danger"><?php echo $error; ?></div><?php endif; ?>
    <form method="post" action="index.php?page=admin&action=edit&id=<?php echo $item['id']; ?>">
      <div class="mb-3"><label class="form-label">Título</label><input class="form-control" name="title" value="<?php echo htmlspecialchars($item['title']); ?>" required></div>
      <div class="mb-3"><label class="form-label">Descripción</label><textarea class="form-control" name="description"><?php echo htmlspecialchars($item['description']); ?></textarea></div>
      <div class="mb-3"><label class="form-label">Precio (USD)</label><input class="form-control" name="price" type="number" step="0.01" value="<?php echo number_format($item['price'],2); ?>"></div>
      <div class="mb-3"><label class="form-label">Imagen (URL)</label><input class="form-control" name="image" type="text" value="<?php echo htmlspecialchars($item['image']); ?>"></div>
      <button class="btn btn-primary">Actualizar</button>
    </form>
  </div>
</div>
