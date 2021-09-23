<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h1>Padding All Sides</h1>
    <div class="pad"></div>
    <div class="pad"></div>
    <div class="pad"></div>
    <hr>
    <div class="pad-2"></div>
    <div class="pad-2"></div>
    <div class="pad-2"></div>
    <hr>
    <div class="pad-3"></div>
    <div class="pad-3"></div>
    <div class="pad-3"></div>
    <hr>
    <div class="pad-4"></div>
    <div class="pad-4"></div>
    <div class="pad-4"></div>
    <hr>
    <div class="pad-8"></div>
    <div class="pad-8"></div>
    <div class="pad-8"></div>
    <hr>
    <h1>Padding Top</h1>
    <div class="pad-t"></div>
    <div class="pad-t"></div>
    <div class="pad-t"></div>
    <hr>
    <div class="pad-t-2"></div>
    <div class="pad-t-2"></div>
    <div class="pad-t-2"></div>
    <hr>
    <div class="pad-t-3"></div>
    <div class="pad-t-3"></div>
    <div class="pad-t-3"></div>
    <hr>
    <div class="pad-t-4"></div>
    <div class="pad-t-4"></div>
    <div class="pad-t-4"></div>
    <hr>
    <div class="pad-t-8"></div>
    <div class="pad-t-8"></div>
    <div class="pad-t-8"></div>
    <hr>
    <h1>Padding Right</h1>
    <div class="pad-r"></div>
    <div class="pad-r"></div>
    <div class="pad-r"></div>
    <hr>
    <div class="pad-r-2"></div>
    <div class="pad-r-2"></div>
    <div class="pad-r-2"></div>
    <hr>
    <div class="pad-r-3"></div>
    <div class="pad-r-3"></div>
    <div class="pad-r-3"></div>
    <hr>
    <div class="pad-r-4"></div>
    <div class="pad-r-4"></div>
    <div class="pad-r-4"></div>
    <hr>
    <div class="pad-r-8"></div>
    <div class="pad-r-8"></div>
    <div class="pad-r-8"></div>
    <hr>
    <h1>Padding Bottom</h1>
    <div class="pad-b"></div>
    <div class="pad-b"></div>
    <div class="pad-b"></div>
    <hr>
    <div class="pad-b-2"></div>
    <div class="pad-b-2"></div>
    <div class="pad-b-2"></div>
    <hr>
    <div class="pad-b-3"></div>
    <div class="pad-b-3"></div>
    <div class="pad-b-3"></div>
    <hr>
    <div class="pad-b-4"></div>
    <div class="pad-b-4"></div>
    <div class="pad-b-4"></div>
    <hr>
    <div class="pad-b-8"></div>
    <div class="pad-b-8"></div>
    <div class="pad-b-8"></div>
    <hr>
    <h1>Padding Left</h1>
    <div class="pad-l"></div>
    <div class="pad-l"></div>
    <div class="pad-l"></div>
    <hr>
    <div class="pad-l-2"></div>
    <div class="pad-l-2"></div>
    <div class="pad-l-2"></div>
    <hr>
    <div class="pad-l-3"></div>
    <div class="pad-l-3"></div>
    <div class="pad-l-3"></div>
    <hr>
    <div class="pad-l-4"></div>
    <div class="pad-l-4"></div>
    <div class="pad-l-4"></div>
    <hr>
    <div class="pad-l-8"></div>
    <div class="pad-l-8"></div>
    <div class="pad-l-8"></div>
    <hr>
    <h1>Padding Horizontal</h1>
    <div class="pad-h"></div>
    <div class="pad-h"></div>
    <div class="pad-h"></div>
    <hr>
    <div class="pad-h-2"></div>
    <div class="pad-h-2"></div>
    <div class="pad-h-2"></div>
    <hr>
    <div class="pad-h-3"></div>
    <div class="pad-h-3"></div>
    <div class="pad-h-3"></div>
    <hr>
    <div class="pad-h-4"></div>
    <div class="pad-h-4"></div>
    <div class="pad-h-4"></div>
    <hr>
    <div class="pad-h-8"></div>
    <div class="pad-h-8"></div>
    <div class="pad-h-8"></div>
    <hr>
    <h1>Padding Vertical</h1>
    <div class="pad-v"></div>
    <div class="pad-v"></div>
    <div class="pad-v"></div>
    <hr>
    <div class="pad-v-2"></div>
    <div class="pad-v-2"></div>
    <div class="pad-v-2"></div>
    <hr>
    <div class="pad-v-3"></div>
    <div class="pad-v-3"></div>
    <div class="pad-v-3"></div>
    <hr>
    <div class="pad-v-4"></div>
    <div class="pad-v-4"></div>
    <div class="pad-v-4"></div>
    <hr>
    <div class="pad-v-8"></div>
    <div class="pad-v-8"></div>
    <div class="pad-v-8"></div>
    <hr>

    <style>
        [class^="pad"] {
            background-color: rgba(0, 0, 0, .025);
            box-shadow: inset 0 0 1px blue;
            display: inline-block;
        }
    </style>
    <script>
        let boxes = document.querySelectorAll('[class^="pad"]');
        for (var i = boxes.length - 1; i >= 0; i--) {
            boxes[i].innerHTML = boxes[i].className;
        }

    </script>
<?php
$view->endBlock();
