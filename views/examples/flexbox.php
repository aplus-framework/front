<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Grid</h2>
    <h3>Box auto width</h3>
    <p>Add ilimited boxes. It will wrap when the row width is 100%.</p>
    <div class="row">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>
    <hr>
    <p>Only 12 boxes. Simulating the .box-1 class:</p>
    <div class="row">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>
    <hr>
    12 boxes with .box-1 class:
    <div class="row">
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
        <div class="box-1"></div>
    </div>
    <hr>
    6 boxes with .box-2 class:
    <div class="row">
        <div class="box-2"></div>
        <div class="box-2"></div>
        <div class="box-2"></div>
        <div class="box-2"></div>
        <div class="box-2"></div>
        <div class="box-2"></div>
    </div>
    <hr>
    4 boxes with .box-3 class:
    <div class="row">
        <div class="box-3"></div>
        <div class="box-3"></div>
        <div class="box-3"></div>
        <div class="box-3"></div>
    </div>
    <hr>
    3 boxes with .box-4 class:
    <div class="row">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-4"></div>
    </div>
    <hr>
    2 boxes with .box-6 class:
    <div class="row">
        <div class="box-6"></div>
        <div class="box-6"></div>
    </div>
    <hr>
    1 box with .box-12 class:
    <div class="row">
        <div class="box-12"></div>
    </div>
    <hr>
    <h2>Nested</h2>
    <p>One row with boxes and columns side by side. The columns with boxes and rows.</p>
    <div class="row">
        <div class="box"></div>
        <div class="column">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="box"></div>
        <div class="column box-4">
            <div class="box"></div>
            <div class="row">
                <div class="box"></div>
                <div class="box"></div>
                <div class="column">
                    <div class="box"></div>
                    <div class="box"></div>
                </div>
                <div class="box"></div>
            </div>
            <div class="box"></div>
            <div class="row">
                <div class="box"></div>
                <div class="box"></div>
            </div>
        </div>
        <div class="box"></div>
    </div>
    <hr>
    <p>One column with boxes and rows side by side. The rows with boxes and columns.</p>
    <div class="column">
        <div class="box"></div>
        <div class="row">
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
            <div class="box"></div>
        </div>
        <div class="box"></div>
        <div class="row">
            <div class="box"></div>
            <div class="column">
                <div class="box"></div>
                <div class="box"></div>
                <div class="row">
                    <div class="box"></div>
                    <div class="box"></div>
                </div>
                <div class="box"></div>
            </div>
            <div class="box"></div>
            <div class="column">
                <div class="box"></div>
                <div class="box"></div>
            </div>
        </div>
        <div class="box"></div>
    </div>
    <hr>
    <h2>Box Align</h2>
    <div class="row" style="height: 200px">
        <div class="box box-start"></div>
        <div class="box box-end"></div>
        <div class="box box-baseline"></div>
        <div class="box box-center"></div>
        <div class="box box-stretch"></div>
    </div>
    <hr>
    <h2>Align Content</h2>
    <p>.align-content-start</p>
    <div class="row align-content-start" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-content-end</p>
    <div class="row align-content-end" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-content-center</p>
    <div class="row align-content-center" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-content-stretch</p>
    <div class="row align-content-stretch" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-content-space-between</p>
    <div class="row align-content-space-between" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-content-space-around</p>
    <div class="row align-content-space-around" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <h2>Align Items</h2>
    <p>.align-items-start</p>
    <div class="row align-items-start" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-items-end</p>
    <div class="row align-items-end" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-items-center</p>
    <div class="row align-items-center" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-items-baseline</p>
    <div class="row align-items-baseline" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <p>.align-items-stretch</p>
    <div class="row align-items-stretch" style="height: 200px">
        <div class="box-4"></div>
        <div class="box-4"></div>
        <div class="box-5"></div>
        <div class="box-5"></div>
    </div>
    <hr>
    <h2>Justify Content</h2>
    <p>.justify-content-start</p>
    <div class="row justify-content-start" style="height: 200px">
        <div class="box-3"></div>
        <div class="box-3"></div>
    </div>
    <hr>
    <p>.justify-content-center</p>
    <div class="row justify-content-center" style="height: 200px">
        <div class="box-3"></div>
        <div class="box-3"></div>
    </div>
    <hr>
    <p>.justify-content-end</p>
    <div class="row justify-content-end" style="height: 200px">
        <div class="box-3"></div>
        <div class="box-3"></div>
    </div>
    <hr>
    <p>.justify-content-space-between</p>
    <div class="row justify-content-space-between" style="height: 200px">
        <div class="box-3"></div>
        <div class="box-3"></div>
        <div class="box-3"></div>
    </div>
    <hr>
    <p>.justify-content-space-around</p>
    <div class="row justify-content-space-around" style="height: 200px">
        <div class="box-3"></div>
        <div class="box-3"></div>
        <div class="box-3"></div>
    </div>
    <hr>

    <style>
        body {
            margin-bottom: 200px;
        }

        .row,
        .column,
        [class^="box"] {
            background-color: rgba(0, 0, 0, .025);
            box-shadow: inset 0 0 1px blue;
        }

        [class^="box"] {
            height: 40px;
        }

    </style>
    <script>
        let boxes = document.querySelectorAll('[class^="box"]');
        for (var i = boxes.length - 1; i >= 0; i--) {
            boxes[i].innerHTML = boxes[i].className;
        }

    </script>
<?php
$view->endBlock();
