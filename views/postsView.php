<?php include 'views/layout/header.php'; ?>

<?php foreach ($posts as $post): ?>
  <article>
    <h2><?= htmlspecialchars($post->title) ?></h2>
    <p><?= htmlspecialchars($post->content) ?></p>
  </article>
<?php endforeach; ?>

<?php include 'views/layout/footer.php'; ?>
