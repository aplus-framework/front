<?php
require __DIR__ . '/vendor/autoload.php';

use ScssPhp\ScssPhp\Compiler;
use ScssPhp\ScssPhp\OutputStyle;

$cacheDir = sys_get_temp_dir() . '/aplus-front';

if ( ! file_exists($cacheDir)) {
    mkdir($cacheDir);
}

const BUILD_DIR = __DIR__ . '/build/';

if ( ! file_exists(BUILD_DIR)) {
    mkdir(BUILD_DIR, 0777, true);
}

$theme = 'front';
$version = 'dev';

$scss = new Compiler([
    'cacheDir' => $cacheDir,
]);
//$scss->setOutputStyle(OutputStyle::COMPRESSED);
$scss->setSourceMap(Compiler::SOURCE_MAP_FILE);
$scss->setSourceMapOptions([
    'sourceMapURL' => './' . $theme . '-' . $version . '.map',
    'sourceMapBasepath' => __DIR__ . '/sass',
]);
$scss->setImportPaths(__DIR__ . '/sass');
$result = $scss->compileString('@import "' . $theme . '.scss";');
$css = $result->getCss();
$map = $result->getSourceMap();

//file_put_contents(BUILD_DIR . 'versions/' . $theme, $version);
file_put_contents(BUILD_DIR . $theme . '-' . $version . '.css', $css);
file_put_contents(BUILD_DIR . $theme . '-' . $version . '.map', $map);
