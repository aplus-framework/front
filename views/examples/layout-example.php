<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <div class="row">
        <div class="box">Logo</div>
        <div class="box">foo</div>
        <div class="box">foo 2</div>
    </div>

    <div class=" container row">
        <main class="box-9">
            <h2>Foo</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <h3>Fooss</h3>
            <h2>Bar</h2>
            <h2>Baz</h2>
        </main>
        <aside class="box-3">
            <div>
                <ul class="list">
                    <li>aaaa</li>
                    <li>aaaa</li>
                    <li>aaaa</li>
                    <li>aaaa</li>
                </ul>
            </div>
        </aside>
    </div>
    <hr>
    <footer class="container row margin-top-x">
        <div class="box-3">
            <h3>Foo</h3>
            <ul>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
            </ul>
        </div>
        <div class="box-3">
            <h3>Baz</h3>
            <ul>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
            </ul>
        </div>
        <div class="box-3">
            <h3>Bras</h3>
            <ul>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
            </ul>
        </div>
        <div class="box-3">
            <h3>Bru</h3>
            <ul>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
                <li>
                    <a href="#">aaaaa aa</a>
                </li>
            </ul>
        </div>
    </footer>

    <style>
        main {
            background: orange;
        }

        aside {
            background: green;
        }

        footer {
            background: red;
        }
    </style>
<?php
$view->endBlock();
