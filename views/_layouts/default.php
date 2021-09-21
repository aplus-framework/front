<?php
/**
 * @var string|null $title
 * @var Framework\MVC\View $view
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?? 'Aplus Framework Front' ?></title>
</head>
<body>
<?= $view->renderBlock('contents') ?>
</body>
</html>
