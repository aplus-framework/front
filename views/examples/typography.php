<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Headers</h2>

    <h1>H1 Tag</h1>
    <h2>H2 Tag</h2>
    <h3>H3 Tag</h3>
    <h4>H4 Tag</h4>
    <h5>H5 Tag</h5>
    <h6>H6 Tag</h6>

    <h2>Paragraphs</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <h2>Serif</h2>

    <p class="serif">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <h2>Text Size</h2>
    <p class="text-tiny">.text-tiny</p>
    <p class="text-small">.text-small</p>
    <p class="text-medium">.text-medium</p>
    <p class="text-large">.text-large</p>
    <p class="text-large-1">.text-large-1</p>
    <p class="text-large-2">.text-large-2</p>
    <p class="text-large-3">.text-large-3</p>
    <p class="text-jumbo">.text-jumbo</p>
    <p class="text-jumbo serif">.text-jumbo.serif</p>

    <h2>Text Align</h2>
    <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <h2>Text Wide</h2>
    <p class="text-wide">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <h2>code and pre</h2>
    <p>Lorem ipsum dolor sit amet,
        <code>consectetur</code> adipisicing elit, sed do eiusmod tempor incididunt
        <code>ut labore et</code> dolore magna aliqua. Ut enim ad minim <code>veniam</code>.
    </p>
    <pre>if (foo === 'bar') {
	console.log('foo is equals bar');
} else {
	bug 0123456789
}</pre>
    <pre><code>if (foo === 'bar') {
	console.log('foo is equals bar');
} else {
	bug 0123456789
}</code></pre>
    <hr>
    <p>You can use the mark tag to
        <mark>highlight</mark>
        text.
    </p>
    <p>
        <del>This line of text is meant to be treated as deleted text.</del>
    </p>
    <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
    <p>
        <ins>This line of text is meant to be treated as an addition to the document.</ins>
    </p>
    <p><u>This line of text will render as underlined</u></p>
    <p>
        <small>This line of text is meant to be treated as fine print.</small>
    </p>
    <p><strong>This line rendered as bold text.</strong></p>
    <p><em>This line rendered as italicized text.</em></p>

    <h2>Links</h2>
    <p>
        <a href="#">Link</a>
    </p>
    <p>
        <a href="#">Link Focus/Active</a>
    </p>

    <style>
        body {
            padding-bottom: 100px;
            margin: 10px
        }
    </style>
<?php
$view->endBlock();
