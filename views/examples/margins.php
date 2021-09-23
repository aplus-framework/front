<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h1>Margin All Sides</h1>
    <div class="mar"></div>
    <div class="mar"></div>
    <div class="mar"></div>
    <hr>
    <div class="mar-2"></div>
    <div class="mar-2"></div>
    <div class="mar-2"></div>
    <hr>
    <div class="mar-3"></div>
    <div class="mar-3"></div>
    <div class="mar-3"></div>
    <hr>
    <div class="mar-4"></div>
    <div class="mar-4"></div>
    <div class="mar-4"></div>
    <hr>
    <div class="mar-8"></div>
    <div class="mar-8"></div>
    <div class="mar-8"></div>
    <hr>
    <h1>Margin Top</h1>
    <div class="mar-t"></div>
    <div class="mar-t"></div>
    <div class="mar-t"></div>
    <hr>
    <div class="mar-t-2"></div>
    <div class="mar-t-2"></div>
    <div class="mar-t-2"></div>
    <hr>
    <div class="mar-t-3"></div>
    <div class="mar-t-3"></div>
    <div class="mar-t-3"></div>
    <hr>
    <div class="mar-t-4"></div>
    <div class="mar-t-4"></div>
    <div class="mar-t-4"></div>
    <hr>
    <div class="mar-t-8"></div>
    <div class="mar-t-8"></div>
    <div class="mar-t-8"></div>
    <hr>
    <h1>Margin Right</h1>
    <div class="mar-r"></div>
    <div class="mar-r"></div>
    <div class="mar-r"></div>
    <hr>
    <div class="mar-r-2"></div>
    <div class="mar-r-2"></div>
    <div class="mar-r-2"></div>
    <hr>
    <div class="mar-r-3"></div>
    <div class="mar-r-3"></div>
    <div class="mar-r-3"></div>
    <hr>
    <div class="mar-r-4"></div>
    <div class="mar-r-4"></div>
    <div class="mar-r-4"></div>
    <hr>
    <div class="mar-r-8"></div>
    <div class="mar-r-8"></div>
    <div class="mar-r-8"></div>
    <hr>
    <h1>Margin Bottom</h1>
    <div class="mar-b"></div>
    <div class="mar-b"></div>
    <div class="mar-b"></div>
    <hr>
    <div class="mar-b-2"></div>
    <div class="mar-b-2"></div>
    <div class="mar-b-2"></div>
    <hr>
    <div class="mar-b-3"></div>
    <div class="mar-b-3"></div>
    <div class="mar-b-3"></div>
    <hr>
    <div class="mar-b-4"></div>
    <div class="mar-b-4"></div>
    <div class="mar-b-4"></div>
    <hr>
    <div class="mar-b-8"></div>
    <div class="mar-b-8"></div>
    <div class="mar-b-8"></div>
    <hr>
    <h1>Margin Left</h1>
    <div class="mar-l"></div>
    <div class="mar-l"></div>
    <div class="mar-l"></div>
    <hr>
    <div class="mar-l-2"></div>
    <div class="mar-l-2"></div>
    <div class="mar-l-2"></div>
    <hr>
    <div class="mar-l-3"></div>
    <div class="mar-l-3"></div>
    <div class="mar-l-3"></div>
    <hr>
    <div class="mar-l-4"></div>
    <div class="mar-l-4"></div>
    <div class="mar-l-4"></div>
    <hr>
    <div class="mar-l-8"></div>
    <div class="mar-l-8"></div>
    <div class="mar-l-8"></div>
    <hr>
    <h1>Margin Horizontal</h1>
    <div class="mar-h"></div>
    <div class="mar-h"></div>
    <div class="mar-h"></div>
    <hr>
    <div class="mar-h-2"></div>
    <div class="mar-h-2"></div>
    <div class="mar-h-2"></div>
    <hr>
    <div class="mar-h-3"></div>
    <div class="mar-h-3"></div>
    <div class="mar-h-3"></div>
    <hr>
    <div class="mar-h-4"></div>
    <div class="mar-h-4"></div>
    <div class="mar-h-4"></div>
    <hr>
    <div class="mar-h-8"></div>
    <div class="mar-h-8"></div>
    <div class="mar-h-8"></div>
    <hr>
    <h1>Margin Vertical</h1>
    <div class="mar-v"></div>
    <div class="mar-v"></div>
    <div class="mar-v"></div>
    <hr>
    <div class="mar-v-2"></div>
    <div class="mar-v-2"></div>
    <div class="mar-v-2"></div>
    <hr>
    <div class="mar-v-3"></div>
    <div class="mar-v-3"></div>
    <div class="mar-v-3"></div>
    <hr>
    <div class="mar-v-4"></div>
    <div class="mar-v-4"></div>
    <div class="mar-v-4"></div>
    <hr>
    <div class="mar-v-8"></div>
    <div class="mar-v-8"></div>
    <div class="mar-v-8"></div>
    <hr>

    <style>
        hr {
            margin: 0;
        }

        [class^="mar"] {
            background-color: rgba(0, 0, 0, .025);
            box-shadow: inset 0 0 1px blue;
            height: 100px;
            width: 100px;
            display: inline-block;
        }
    </style>
    <script>
        let boxes = document.querySelectorAll('[class^="mar"]');
        for (var i = boxes.length - 1; i >= 0; i--) {
            boxes[i].innerHTML = boxes[i].className;
        }

    </script>
<?php
$view->endBlock();
