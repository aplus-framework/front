<?php
require __DIR__ . '/vendor/autoload.php';

use Framework\MVC\View;

const BUILD_DIR = __DIR__ . '/build/';
const VIEWS_DIR = __DIR__ . '/views/';

if ( ! file_exists(BUILD_DIR . 'examples')) {
    mkdir(BUILD_DIR . 'examples', 0777, true);
}

$view = new View(VIEWS_DIR);
$view->setLayoutPrefix('_layouts');

// Build index page
$page = $view->render('index');
file_put_contents(BUILD_DIR . 'index.html', $page);

// Build example pages
$examples = glob(VIEWS_DIR . 'examples/*.php');
foreach ($examples as $example) {
    $file = substr($example, strrpos($example, '/') + 1, -4);
    $page = $view->render('examples/' . $file, ['title' => $file]);
    file_put_contents(BUILD_DIR . 'examples/' . $file . '.html', $page);
}


