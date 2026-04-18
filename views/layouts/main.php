<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? 'My Website' ?></title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php include __DIR__ . '/../partials/navbar.php'; ?>

<div class="container mt-5">
    <?php if ($flash = \app\core\Application::$app->session->getFlash('success')): ?>
        <div class="alert alert-success">
            <?= $flash ?>
        </div>
    <?php endif; ?>
    {{ content }}
</div>

<?php include __DIR__ . '/../partials/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
