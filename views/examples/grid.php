<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>

    <h2>Container</h2>
    <div class="container"> .container</div>

    <h2>Content</h2>
    <div class="content">.content</div>

    <h2>Cells</h2>
    <div class="cell-row">
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell - Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        <div class="cell">.row .cell</div>
    </div>
    <div class="cell-row">
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
        <div class="cell">.cell-row .cell</div>
    </div>

    <h2>Row</h2>
    <div class="row">.row</div>
    <div class="row">
        <div class="col-1">.row .col-1</div>
        <div class="col-2">.row .col-2</div>
        <div class="col-3">.row .col-3</div>
        <div class="rest">.row .rest</div>
    </div>
    <div class="row">
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
        <div class="col-1">.row .col-1</div>
    </div>

    <h2>Row Padding</h2>
    <div class="row-padding">.row-padding</div>
    <div class="row-padding">
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-2">.row-padding .col-2</div>
        <div class="col-3">.row-padding .col-3</div>
        <div class="rest">.row-padding .rest</div>
    </div>
    <div class="row-padding">
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1 Lorem ipsum dolor sit amet</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1</div>
        <div class="col-1">.row-padding .col-1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
        <div class="col-1">.row-padding .col-1</div>
    </div>

    <h2>Content in Container</h2>
    <div class="container">
        <div class="content">.container .content</div>
    </div>

    <h2>Row in Container</h2>
    <div class="container">
        <div class="row">
            .container .row
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-1">.container .row .col-1</div>
            <div class="col-2">.container .row .col-2</div>
            <div class="col-3">.container .row .col-3</div>
            <div class="rest">.container .row .rest</div>
        </div>
    </div>

    <h2>Row Padding in Container</h2>
    <div class="container">
        <div class="row-padding">
            .container .row-padding
        </div>
    </div>
    <div class="container">
        <div class="row-padding">
            <div class="col-1">.container .row-padding .col-1</div>
            <div class="col-2">.container .row-padding .col-2</div>
            <div class="col-3">.container .row-padding .col-3</div>
            <div class="rest">.container .row-padding .rest</div>
        </div>
    </div>

    <h2>Stretch in Container</h2>
    <div class="container">
        <div class="stretch">.container .stretch</div>
    </div>

    <h2>Auto in Container</h2>
    <div class="container">
        <div class="auto">.container .auto</div>
    </div>

    <h2>Bar</h2>
    <div class="bar">.bar</div>
    <div class="bar">
        <div class="bar-item">.bar .bar-item</div>
        <div class="bar-item">.bar .bar-item</div>
        <div class="bar-item">.bar .bar-item</div>
    </div>
    <div class="bar">
        <div class="bar-items">
            <div>.bar .bar-items div</div>
            <div>.bar .bar-items div</div>
            <div>.bar .bar-items div</div>
        </div>
    </div>
    <div class="bar">
        <div class="bar-items">
            <a href="#">.bar .bar-items a</a>
            <a href="#">.bar .bar-items a</a>
            <a href="#">.bar .bar-items a</a>
        </div>
    </div>
    <div class="bar">
        <div class="bar-items">
            <a href="#">.bar .bar-items a</a>
            <a href="#" class="mobile">.bar .bar-items a.mobile</a>
            <a href="#">.bar .bar-items a</a>
        </div>
    </div>
    <div class="bar">
        <div class="bar-items mobile">
            <a href="#">.bar .bar-items.mobile a</a>
            <a href="#">.bar .bar-items.mobile a</a>
            <a href="#">.bar .bar-items.mobile a</a>
        </div>
    </div>

    <h2>Block</h2>
    <div class="block">.block</div>
    <div class="block">.block</div>

    <h2>Responsive</h2>
    <div class="responsive">.responsive</div>
    <div class="responsive">.responsive</div>

    <h2>Section and pre</h2>
    <section>section</section>
    <section>section</section>
    <section>section</section>
    <div class="section">.section</div>
    <pre>pre</pre>
    <pre>pre</pre>

    <h2>Margins</h2>
    <div class="row">
        <div class="col-1 margin">.row .col-1.margin</div>
        <div class="col-1 margin">.row .col-1.margin</div>
    </div>
    <div class="row">
        <div class="col-1 margin-x">.row .col-1.margin-x</div>
        <div class="col-1 margin-x">.row .col-1.margin-x</div>
    </div>
    <div class="row">
        <div class="col-1 margin-top">.row .col-1.margin-top</div>
        <div class="col-1 margin-top">.row .col-1.margin-top</div>
    </div>
    <div class="row">
        <div class="col-1 margin-top-x">.row .col-1.margin-top-x</div>
        <div class="col-1 margin-top-x">.row .col-1.margin-top-x</div>
    </div>
    <div class="row">
        <div class="col-1 margin-right">.row .col-1.margin-right</div>
        <div class="col-1 margin-right">.row .col-1.margin-right</div>
    </div>
    <div class="row">
        <div class="col-1 margin-right-x">.row .col-1.margin-right-x</div>
        <div class="col-1 margin-right-x">.row .col-1.margin-right-x</div>
    </div>
    <div class="row">
        <div class="col-1 margin-bottom">.row .col-1.margin-bottom</div>
        <div class="col-1 margin-bottom">.row .col-1.margin-bottom</div>
    </div>
    <div class="row">
        <div class="col-1 margin-bottom-x">.row .col-1.margin-bottom-x</div>
        <div class="col-1 margin-bottom-x">.row .col-1.margin-bottom-x</div>
    </div>
    <div class="row">
        <div class="col-1 margin-left">.row .col-1.margin-left</div>
        <div class="col-1 margin-left">.row .col-1.margin-left</div>
    </div>
    <div class="row">
        <div class="col-1 margin-left-x">.row .col-1.margin-left-x</div>
        <div class="col-1 margin-left-x">.row .col-1.margin-left-x</div>
    </div>

    <h2>Floats</h2>
    <div class="row">
        <div class="col-1 float-left">.row .float-left</div>
        <div class="col-1 float-right">.row .float-right</div>
    </div>
    <div class="row">
        <div class="col-1 float-left">.row .float-left 1</div>
        <div class="col-1 float-right">.row .float-right 1</div>
        <div class="col-1 float-left">.row .float-left 2</div>
        <div class="col-1 float-right">.row .float-right 2</div>
    </div>

    <h2>Aligns</h2>
    <div class="row" style="height: 10rem">
        <div class="col-1 align-top">
            <p>.col-1 .align-top</p>
        </div>
        <div class="col-1 align-middle">
            <p>.col-1 .align-middle</p>
        </div>
        <div class="col-1 align-bottom">
            <p>.col-1 .align-bottom</p>
        </div>
    </div>

    <h2>Radius</h2>
    <div class="row" style="height: 10rem">
        <div class="col-1 circle">.row .col-1.circle</div>
        <div class="col-1 rad-1">.row .col-1.rad-1</div>
        <div class="col-1 rad-2">.row .col-1.rad-2</div>
        <div class="col-1 rad-3">.row .col-1.rad-3</div>
    </div>

    <h2>Border</h2>
    <div class="row" style="height: 10rem">
        <div class="col-1 border-top" style="border-color: red">.row .col-1.border-top</div>
        <div class="col-1 border-right" style="border-color: red">.row .col-1.border-right</div>
        <div class="col-1 border-bottom" style="border-color: red">.row .col-1.border-bottom</div>
        <div class="col-1 border-left" style="border-color: red">.row .col-1.border-left</div>
    </div>

    <h2>Borderbar</h2>
    <div class="row" style="height: 10rem">
        <div class="col-1 topbar">.row .col-1.topbar</div>
        <div class="col-1 rightbar">.row .col-1.rightbar</div>
        <div class="col-1 bottombar">.row .col-1.bottombar</div>
        <div class="col-1 leftbar">.row .col-1.leftbar</div>
    </div>

    <hr>

    <h2>w3</h2>

    <style>
        body {
            padding-bottom: 100px;
        }

        .container,
        .content,
        .rest,
        section,
        .section,
        .pre,
            /*.bar .bar-items div,*/
        [class^="cell"],
        [class^="bar"],
        [class^="row"],
        [class^="col"] {
            background-color: rgba(0, 0, 0, .25);
            border-right: 1px solid #fff;
            border-bottom: 1px solid #fff;
            color: #fff;
        }

    </style>

    <h2>Aligns</h2>
    <div class="cell-row" style="height: 10rem">
        <div class="cell cell-top">
            <p>.col-1 .align-top</p>
        </div>
        <div class="cell cell-middle">
            <p>.col-1 .align-middle</p>
        </div>
        <div class="cell cell-middle">
            <p>.col-1 .align-middle</p>
        </div>
        <div class="cell cell-bottom">
            <p>.col-1 .align-bottom</p>
        </div>
    </div>
<?php
$view->endBlock();
