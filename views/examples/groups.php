<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <div class="group">
        <button class="default">Button</button>
        <button class="default">Button</button>
    </div>
    <hr>
    <div class="group">
        <input type="text" name="name" placeholder="name">
        <button class="default">+</button>
        <button class="default">-</button>
    </div>
    <hr>
    <div class="group">
        <input type="text" name="name" placeholder="name" class="rad-1">
        <button class="success rad-3">Button</button>
    </div>
    <hr>
    <div class="row">
        <div class="col-4">
            <div class="group">
                <input type="text" name="name" placeholder="name" class="rad-1">
                <button class="success rad-3">Button</button>
            </div>
        </div>
        <div class="col-4">
            <div class="group">
                <input type="text" name="name" placeholder="name" class="rad-1">
                <button class="success rad-3">Button</button>
            </div>
        </div>
    </div>
    <hr>
    <div class="group">
        <input type="text" name="name" placeholder="name">
        <button class="default">Button</button>
        <button class="default">Button</button>
        <button class="default">Button</button>
    </div>
    <hr>
    <div class="group">
        <button class="default">Button</button>
        <input type="text" name="name" placeholder="name" class="rad-3">
        <input type="text" name="name" placeholder="name">
        <button class="default">Button</button>
        <button class="default" style="margin: 10px">Button</button>
    </div>
    <hr>
    <div>
        <div class="primary">a</div>
        <div class="success">a</div>
        <div class="error">a</div>
    </div>
    <hr>
    <div class="group">
        <div class="primary">a</div>
        <div class="success">a</div>
        <div class="error">a</div>
    </div>
    <style>
        body {
            padding-bottom: 100px;
            margin: 1rem;
        }

    </style>
<?php
$view->endBlock();
