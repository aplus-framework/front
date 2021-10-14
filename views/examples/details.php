<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <details>
        <div>Ok</div>
        <div>Ok</div>
    </details>
    <hr>
    <details>
        <summary>Summary</summary>
        <div>Ok</div>
        <div>Ok</div>
    </details>
    <hr>
    <details>
        <summary>Summary</summary>
        <div>Ok</div>
        <div>Ok</div>
        <details open>
            <summary>It has the open attribute</summary>
            <div>Ok</div>
            <div>Ok</div>
            <details>
                <summary>Mamamia</summary>
                <div>Ok</div>
                <div>Ok</div>
                <details class="mar-b-2 primary">
                    <summary class="success">Summary</summary>
                    <div>Ok</div>
                    <div>Ok</div>
                </details>
                <details>
                    <summary>Summary</summary>
                    <div>Ok</div>
                    <div>Ok</div>
                </details>
            </details>
        </details>
    </details>
    <style>
        body {
            padding-bottom: 100px;
            margin: 1rem;
        }
    </style>
<?php
$view->endBlock();
