<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <div class="dropdown">
        <button>Dropdown</button>
        <div class="dropdown-content border">
            <h1>Content</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="dropdown">
        <button class="no-rad">Dropdown List</button>
        <ul class="dropdown-content border list">
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
            <li>abcd 123</li>
        </ul>
    </div>
    <div class="dropdown">
        <button class="no-rad">Dropdown Links</button>
        <div class="dropdown-content border list">
            <a href="#">abcd 123</a>
            <a href="#">abcd 123</a>
            <a href="#">abcd 123</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="no-rad">Dropdown Mega</button>
        <div class="dropdown-content-mega border padding-xx">
            <h1>Mega</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
    <div class="row border margin-top padding-x">
        <div class="box">
            <div class="dropdown">
                <button class="no-rad">Dropdown Links</button>
                <div class="dropdown-content border list">
                    <a href="#">abcd 123</a>
                    <a href="#">abcd 123</a>
                    <a href="#">abcd 123</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="no-rad">Dropdown Mega</button>
                <div class="dropdown-content-mega border padding-xx">
                    <h1>Mega</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="box-3 ">
            <div class="dropdown float-right">
                <a href="#" class="btn no-rad">Dropdown Links</a>
                <div class="dropdown-content border list">
                    <a href="#">abcd 123</a>
                    <a href="#">abcd 123 abcd 123 abcd 123 <b>breaking lines ;)</b></a>
                    <a href="#">abcd 123</a>
                </div>
            </div>
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
