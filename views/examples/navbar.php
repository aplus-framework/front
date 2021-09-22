<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Navbar 1</h2>
    <div class="row border align-items-center pad-2" id="navbar">
        <div class="box">
            <a href="#">Home</a>
            <a href="#">Packages</a>
            <a href="#">Contact</a>
        </div>
        <div class="box text-right">
            <a href="#" class="btn">Login</a>
            <a href="#" class="btn primary">Register</a>
        </div>
    </div>
    <h2>Navbar 2</h2>
    <div class="row border align-items-center pad-2" id="navbar">
        <div class="box">
            <a href="#" class="mar-l">Home</a>
            <a href="#" class="mar-l">Packages</a>
            <a href="#" class="mar-l">Contact</a>
        </div>
        <div class="box text-right">
            <a href="#" class="btn">Login</a>
            <a href="#" class="btn primary">Register</a>
        </div>
    </div>
    <h2>Navbar 3</h2>
    <div class="row border align-items-center" id="navbar-2">
        <div class="box links">
            <a href="#" class="mar-l pad bottombar">Home</a>
            <a href="#" class="mar-l pad bottombar">Packages</a>
            <a href="#" class="mar-l pad bottombar">Contact</a>
        </div>
        <div class="box text-right pad-2">
            <a href="#" class="btn">Login</a>
            <a href="#" class="btn primary">Register</a>
        </div>
    </div>
    <h2>Navbar 4</h2>
    <div class="row border align-items-center pad-2" id="navbar-4">
        <div class="box">
            <a href="#">Home</a>
            <a href="#">Packages</a>
            <a href="#">Contact</a>
        </div>
        <form class="box-4 display-flex">
            <input type="text" name="q" placeholder="Search...">
            <button class="primary">Go!</button>
        </form>
    </div>
    <h2>Navbar 5</h2>
    <div class="row border align-items-center pad-2" id="navbar-5">
        <div class="box">
            <a href="#">Home</a>
            <a href="#">Packages</a>
            <a href="#">Contact</a>
        </div>
        <form class="box-5 group">
            <input type="text" name="q" placeholder="Search..." class="animate-input">
            <button class="primary">Go!</button>
        </form>
    </div>
    <h2>Navbar 6</h2>
    <div class="row border align-items-center " id="navbar-6">
        <div class="box">
            <div class="row text-center links">
                <a href="#" class="box pad-3 border-right bottombar-hover">Home</a>
                <a href="#" class="box pad-3 border-right bottombar-hover">Packages</a>
                <a href="#" class="box pad-3 border-right bottombar-hover">Contact</a>
            </div>
        </div>
        <form class="box-4 group pad-2">
            <input type="text" name="q" placeholder="Search..." class="animate-input">
            <button class="primary">Go!</button>
        </form>
    </div>
    <h2>Navbar 7</h2>
    <div class="row">
        <div class="box-3 border">
            <div class="column border-bottom pad-2" id="navbar-7">
                <h3>Panel</h3>
            </div>
            <div class="column pad-2" id="navbar-7">
                <a href="#">Home</a>
                <a href="#">Packages</a>
                <a href="#">Contact</a>
                <a href="#" class="btn margin-top">Login</a>
                <a href="#" class="btn primary margin-top">Register</a>
            </div>
        </div>
        <div class="box-6 pad-2">
            <h1 style="margin-top: 0">Contents</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="box-3 border">
            <div class="column border-bottom pad-2" id="navbar-7">
                <h3>Panel</h3>
            </div>
            <div class="column" id="navbar-7">
                <div class="pad-2">
                    <input type="text" placeholder="Search...">
                </div>
                <ul class="list border-bottom border-top">
                    <li class="list-item"><a href="#">Home</a></li>
                    <li class="list-item"><a href="#">Packages</a></li>
                    <li class="list-item"><a href="#">Contact</a></li>
                </ul>
                <div class="pad-2 column">
                    <a href="#" class="btn">Login</a>
                    <a href="#" class="btn primary margin-top">Register</a>
                </div>
            </div>
        </div>
    </div>

    <h2>Navbar 8</h2>
    <div class="row border align-items-center" id="navbar-8">
        <div class="box links">
            <button class="no-rad">Home</button>
            <div class="dropdown">
                <button class="border-0 no-rad">Dropdown</button>
                <div class="dropdown-content border list">
                    <a href="#">abcd 123</a>
                    <a href="#">abcd 123</a>
                    <a href="#">abcd 123</a>
                </div>
            </div>
            <button class="no-rad">Contact</button>
            <div class="dropdown">
                <button class="border-0 no-rad">Dropdown Mega</button>
                <div class="dropdown-content-mega border pad-3">
                    <h1>Mega</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="box text-right">
            <a href="#" class="btn">Login</a>
            <a href="#" class="btn primary">Register</a>
        </div>
    </div>
    <button id="fix-top">Fix Top</button>

    <script>
        var btn = document.getElementById('fix-top');
        btn.onclick = function () {
            document.getElementById('navbar-8').classList.add('fixed-top');
        };

    </script>
    <style>
        body {
            margin: 2rem 2rem 30rem;
        }

        #navbar-4 input {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        #navbar-4 button {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            max-width: 5rem;
        }

        #navbar-5 input {
            width: 5rem;
        }

        #navbar-5 button {
            max-width: 5rem;
        }

        #navbar-6 .links a:hover {
            background: rgba(0, 0, 0, .05);
            text-decoration: none;
        }

        #navbar-8 {
            background: inherit;
        }

        #navbar-8 .links > * {
            float: left;
            border: 0;
            border-radius: 0;
            /*pad: .6rem ;*/
            /*display: inline;*/
        }

        #navbar-8 .links .dropdown > * {
            border-top: 0;
            border-bottom: 0;
        }
    </style>
<?php
$view->endBlock();
