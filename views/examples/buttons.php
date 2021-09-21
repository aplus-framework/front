<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Buttons</h2>
    <button>Button</button>
    <a href="#" class="btn">Link Button</a>
    <h2>Disabled Buttons</h2>
    <button class="disabled">Button</button>
    <a href="#" class="btn disabled">Link Button</a>
    <h2>Focused (active) Buttons</h2>
    <button class="active">Button</button>
    <a href="#" class="btn active">Link Button</a>
    <h2>Rounded Buttons</h2>
    <h3>Round</h3>
    <button class="rad">Button</button>
    <a href="#" class="btn rad">Link Button</a>
    <h3>Round x</h3>
    <button class="rad-1">Button</button>
    <a href="#" class="btn rad-1">Link Button</a>
    <h3>Round xx</h3>
    <button class="rad-2">Button</button>
    <a href="#" class="btn rad-2">Link Button</a>
    <h3>Round xxx</h3>
    <button class="rad-3">Button</button>
    <a href="#" class="btn round-xxx">Link Button</a>
    <h3>Circle</h3>
    <button class="circle">Button</button>
    <a href="#" class="btn circle">Link Button</a>
    <a href="#" class="btn circle">+</a>
    <h2>Colored Buttons</h2>
    <button class="default">Button</button>
    <a href="#" class="btn default">Link Button</a>
    <button class="primary">Button</button>
    <a href="#" class="btn primary">Link Button</a>
    <button class="info">Button</button>
    <a href="#" class="btn info">Link Button</a>
    <button class="success">Button</button>
    <a href="#" class="btn success">Link Button</a>
    <button class="warning">Button</button>
    <a href="#" class="btn warning">Link Button</a>
    <button class="error">Button</button>
    <a href="#" class="btn error">Link Button</a>
    <h2>Icons</h2>
    <button>Button <i data-feather="mail"></i></button>
    <a href="#" class="btn">Link Button <i data-feather="mail"></i></a>
    <button class="success">Add <i data-feather="plus"></i></button>
    <a href="#" class="btn success">Add <i data-feather="plus"></i></a>
    <button><i data-feather="plus"></i></button>
    <button><i data-feather="minus"></i></button>
    <button><i data-feather="star"></i> Star</button>
    <button><i data-feather="settings"></i> Settings</button>
    <button class="circle"><i data-feather="search"></i></button>
    <button><i data-feather="search"></i> Search</button>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <h2>Groups</h2>
    <div class="group">
        <button><i data-feather="plus"></i></button>
        <button><i data-feather="minus"></i></button>
        <button class="error"><i data-feather="star"></i> Star</button>
        <button class="success"><i data-feather="settings"></i> Settings</button>
    </div>
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
