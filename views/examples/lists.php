<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Lists ul</h2>
    <ul>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <ul>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
        </ul>
        <li>abcd 123</li>
    </ul>
    <ul>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <ul>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
        </ul>
        <li>abcd 123</li>
    </ul>
    <hr>
    <ol>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <ol>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
        </ol>
        <li>abcd 123</li>
        <li>abcd 123</li>
    </ol>
    <ol>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <ol>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
        </ol>
        <li>abcd 123</li>
        <li>abcd 123</li>
    </ol>
    <hr>
    <ul class="list">
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
    </ul>
    <hr>
    <ul class="list hoverable">
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
    </ul>
    <hr>
    <ul class="list border">
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
    </ul>
    <hr>
    <ol class="list hoverable border">
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
        <li>abcd 123</li>
    </ol>
    <hr>
    <div class="list">
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
    </div>
    <hr>
    <div class="list border">
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
    </div>
    <hr>
    <div class="list hoverable border">
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#" class="text-success">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#">abcd 123</a>
        <a href="#" class="text-info">abcd 123</a>
        <a href="#" class="text-error">abcd 123</a>
        <a href="#" class="text-warning">abcd 123</a>
    </div>

    <hr>

    <script>feather.replace();</script>
    <style>
        body {
            padding-bottom: 100px;
            margin: 1rem;
        }

        .feather {
            width: 1rem;
            height: 1rem;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
            margin-top: -.1rem;
        }

    </style>
<?php
$view->endBlock();
