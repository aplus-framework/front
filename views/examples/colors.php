<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Colors</h2>
    <h2>Backgrounds with auto-text color</h2>
    <div class="success pad-8 mar-t-4">Success</div>
    <div class="info pad-8 mar-t-4">Info</div>
    <div class="warning pad-8 mar-t-4">Warning</div>
    <div class="error pad-8 mar-t-4">Error</div>
    <h2>Texts</h2>
    <div class="pad-4 mar-t-2 text-success">
        Success
    </div>
    <div class="pad-4 mar-t-2 text-info">
        Info
    </div>
    <div class="pad-4 mar-t-2 text-warning">
        Warning
    </div>
    <div class="pad-4 mar-t-2 text-error">
        Error
    </div>
    <h2>Buttons</h2>
    <div class="pad-4 mar-t-2">
        <button class="success">Success</button>
    </div>
    <div class="pad-4 mar-t-2">
        <button class="info">Info</button>
    </div>
    <div class="pad-4 mar-t-2">
        <button class="warning">Warning</button>
    </div>
    <div class="pad-4 mar-t-2">
        <button class="error">Error</button>
    </div>
    <h2>Borders and Links</h2>
    <div class="pad-4 mar-t-2 border border-success">
        <a href="#" class="text-success">Success</a>
    </div>
    <div class="pad-4 mar-t-2 border border-info">
        <a href="#" class="text-info">Info</a>
    </div>
    <div class="pad-4 mar-t-2 border border-warning">
        <a href="#" class="text-warning">Warning</a>
    </div>
    <div class="pad-4 mar-t-2 border border-error">
        <a href="#" class="text-error">Error</a>
    </div>
    <h2>Headings and Lists</h2>
    <div class="pad-4 mar-t-2 info">
        <h2>Info</h2>
        <ol>
            <li>abc</li>
            <li>abc</li>
            <li>abc</li>
        </ol>
    </div>
    <div class="pad-4 mar-t-2 error">
        <h2>Error</h2>
        <ol>
            <li>abc</li>
            <li>abc</li>
            <li>abc</li>
        </ol>
    </div>
    <h2>Misc</h2>
    <div class="success pad-8 mar-t-4 border border-success">
        <p>Default</p>
        <p>
            <button>Button</button>
        </p>
        <p>
            <button class="success">Button</button>
        </p>
        <p><a href="#">Link</a></p>
        <p><a href="#" class="text-success">Link</a></p>
        <p><a href="#" class="text-default">Link</a></p>
    </div>
    <div class="info pad-8 mar-t-4 border border-info">
        <p>Default</p>
        <p>
            <button>Button</button>
        </p>
        <p>
            <button class="info">Button</button>
        </p>
        <p><a href="#">Link</a></p>
        <p><a href="#" class="text-info">Link</a></p>
        <p><a href="#" class="text-default">Link</a></p>
    </div>
    <div class="warning pad-8 mar-t-4 border border-warning">
        <p>Default</p>
        <p>
            <button>Button</button>
        </p>
        <p>
            <button class="warning">Button</button>
        </p>
        <p><a href="#">Link</a></p>
        <p><a href="#" class="text-warning">Link</a></p>
        <p><a href="#" class="text-default">Link</a></p>
    </div>
    <div class="error pad-8 mar-t-4 border border-error">
        <p>Default</p>
        <p>
            <button>Button</button>
        </p>
        <p>
            <button class="error">Button</button>
        </p>
        <p><a href="#"><strong>Link</strong></a></p>
        <p><a href="#" class="text-error"><strong>Link</strong></a></p>
        <p><a href="#" class="text-default"><strong>Link</strong></a></p>
    </div>
    <style>
        body {
            padding-bottom: 100px;
            margin: 1rem;
        }
    </style>
<?php
$view->endBlock();
