<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('default');
$view->block('contents');
?>
    <ul>
        <li>
            <a href="/examples/buttons.html">buttons</a>
        </li>
        <li>
            <a href="/examples/forms.html">forms</a>
        </li>
    </ul>
<?php
$view->endBlock();
