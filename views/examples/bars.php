<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Horizontal Bars</h2>
    <div class="bar">
        <div class="bar-item">London</div>
        <div class="bar-item">Paris</div>
        <div class="bar-item">Tokyo</div>
    </div>
    <hr>
    <h2>Vertical Bars</h2>
    <div class="bar-block">
        <div class="bar-item">London</div>
        <div class="bar-item">Paris</div>
        <div class="bar-item">Tokyo</div>
    </div>
    <hr>
    <h2>Hover Colors</h2>
    <div class="bar hover">
        <div class="bar-item">London</div>
        <div class="bar-item">Paris</div>
        <div class="bar-item">Tokyo</div>
    </div>
    <br>
    <div class="bar-block hover">
        <div class="bar-item">London</div>
        <div class="bar-item">Paris</div>
        <div class="bar-item">Tokyo</div>
    </div>
    <hr>
    <h2>Bar Links</h2>
    <div class="bar">
        <a href="#" class="bar-item">London</a>
        <a href="#" class="bar-item">Paris</a>
        <a href="#" class="bar-item">Tokyo</a>
    </div>
    <hr>
    <h2>Bar Buttons</h2>
    <div class="bar">
        <button>London</button>
        <button>Paris</button>
        <button>Tokyo</button>
    </div>
    <style>
        body {
            padding-bottom: 100px;
        }

        [class^="bar"] {
            background-color: rgba(0, 0, 0, .25);
            border-right: 1px solid #fff;
            border-bottom: 1px solid #fff;
            color: #fff;
        }

        .hover .bar-item:hover {
            background-color: red;
        }

    </style>
<?php
$view->endBlock();
