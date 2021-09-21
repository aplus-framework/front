<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <div class="row-padding">
        <div class="box-2">
            <img src="greece.jpg">
        </div>
        <div class="box-2">
            <img src="greece.jpg" class="rad">
        </div>
        <div class="box-2">
            <img src="greece.jpg" class="circle">
        </div>
        <div class="box-2">
            <img src="greece.jpg" class="border padding">
        </div>
        <div class="box-2">
            <img src="greece.jpg">
            <div class="overlay">
                <div class="text">Hello World</div>
            </div>
        </div>
    </div>
    <h2>.grayscale</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="grayscale">
        </div>
    </div>
    <h2>.grayscale-min</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="grayscale-min">
        </div>
    </div>
    <h2>.grayscale-hover / .grayscale-max</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="grayscale-hover">
        </div>
    </div>
    <h2>.sepia</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="sepia">
        </div>
    </div>
    <h2>.sepia-min</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="sepia-min">
        </div>
    </div>
    <h2>.sepia-hover / .sepia-max</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="sepia-hover">
        </div>
    </div>
    <h2>.blur</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="blur">
        </div>
    </div>
    <h2>.blur-min</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="blur-min">
        </div>
    </div>
    <h2>.blur-hover / .blur-max</h2>
    <div class="row">
        <div class="box-6">
            <img src="greece.jpg">
        </div>
        <div class="box-6">
            <img src="greece.jpg" class="blur-hover">
        </div>
    </div>
    <h2>Displays</h2>
    <h3>hover</h3>
    <div class="row">
        <div class="box-6">
            <div class="display-container">
                <img src="greece.jpg">
                <div class="padding success display-top-left display-hover">Top Left</div>
                <div class="padding success display-top-right">Top Right</div>
                <div class="padding success display-bottom-left">Bottom Left</div>
                <div class="padding success display-bottom-right">Bottom Right</div>
                <div class="padding success display-top-center">Top Center</div>
                <div class="padding success display-left">Left</div>
                <div class="padding success display-right">Right</div>
                <div class="padding success display-center display-hover">Center</div>
                <div class="padding success display-bottom-center">Bottom Center</div>
            </div>
        </div>
    </div>
    <h3>Figure</h3>
    <div class="row">
        <div class="box-6">
            <figure class="display-container">
                <img src="greece.jpg" alt="Greece">
                <figcaption class="padding default opacity display-bottom-left">Fig.1 - Greece</figcaption>
        </div>
    </div>
    <style>
        body {
            padding-bottom: 100px;
            margin: 1rem;
        }
    </style>
<?php
$view->endBlock();
