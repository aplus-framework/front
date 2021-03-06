<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <button data-type="modal" data-target="modal-1">
        Open Modal 1
    </button>
    <div id="modal-1" class="modal">
        <div class="modal-content">
            <div class="container">
                <span class="display-topright close">&times;</span>
                <p>Some text in the Modal..</p>
                <p>Some text in the Modal..</p>
            </div>
        </div>
    </div>
    <hr>
    <button data-type="modal" data-target="modal-2">
        Open Modal 2
    </button>
    <div id="modal-2" class="modal">
        <div class="modal-content shadow animate-zoom">
            <header class="container success">
                <span class="btn display-topright close">&times;</span>
                <h2>Modal Header</h2>
            </header>
            <div class="container">
                <p>Some text..</p>
                <p>Some text..</p>
            </div>
            <footer class="container warning">
                <p>Modal Footer</p>
            </footer>
        </div>
    </div>
    <hr>

    <script>
        var buttons = document.querySelectorAll('[data-type=modal]');
        for (var b = buttons.length - 1; b >= 0; b--) {
            buttons[b].addEventListener('click', function () {
                if (this.dataset.target) {
                    var modal = document.getElementById(this.dataset.target);
                    if (modal) {
                        modal.style.display = 'block';
                        let closes = modal.getElementsByClassName('close');
                        for (var c = closes.length - 1; c >= 0; c--) {
                            closes[c].addEventListener('click', function () {
                                modal.style.display = 'none';
                            });
                        }
                    }
                }
            });
        }
    </script>

    <style>
        body {
            padding-bottom: 100px;
        }

    </style>
<?php
$view->endBlock();
