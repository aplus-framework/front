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
            <a href="/examples/lists.html">lists</a>
        </li>
        <li>
            <a href="/examples/flexbox.html">flexbox</a>
        </li>
        <li>
            <a href="/examples/forms.html">forms</a>
        </li>
        <li>
            <a href="/examples/layout-example.html">layout-example</a>
        </li>
        <li>
            <a href="/examples/tables.html">tables</a>
        </li>
        <li>
            <a href="/examples/typography.html">typography</a>
        </li>
    </ul>
<?php
$view->endBlock();
