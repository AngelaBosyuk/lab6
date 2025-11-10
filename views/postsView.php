<?php include 'views/layout/header.php'; ?>

<div class="container">
  <form method="get" class="mb-4">
    <div class="input-group">
      <input type="text" name="query" class="form-control" placeholder="Пошук постів за назвою..." value="<?= htmlspecialchars($_GET['query'] ?? '') ?>">
      <button class="btn btn-primary" type="submit">Пошук</button>
    </div>
  </form>

  <?php if (empty($posts)): ?>
    <p class="text-danger">Нічого не знайдено 😔</p>
  <?php else: ?>
    <div class="row row-cols-1 row-cols-md-2 g-4">
      <?php foreach ($posts as $post): ?>
        <div class="col">
          <div class="card shadow-sm">
            <div class="card-body">
              <h4 class="card-title text-primary"><?= htmlspecialchars($post->title) ?></h4>
              <p class="card-text">
                <?= $parsedown->text(htmlspecialchars($post->content)) ?>
              </p>
              <p class="text-muted small">Дата створення: <?= htmlspecialchars($post->date) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php endif; ?>
</div>

<?php include 'views/layout/footer.php'; ?>
