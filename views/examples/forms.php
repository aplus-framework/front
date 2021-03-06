<?php
/**
 * @var Framework\MVC\View $view
 */
$view->extends('example');
$view->block('contents');
?>
    <h2>Inputs</h2>

    <div class="container">
        <input> <input type="text" placeholder="text"> <input type="email" placeholder="email">
        <input type="password" placeholder="password"> <input type="number" placeholder="number">
        <input type="date" placeholder="date"> <select>
            <option>abcde</option>
            <option>abcde</option>
            <option>abcde</option>
        </select> <input type="checkbox" placeholder="checkbox">
        <input type="radio" placeholder="radio">
        <hr>
        <div class="row">
            <input class="col-1"> <input type="text" placeholder="text" class="col-1">
            <input type="email" placeholder="email" class="col-1">
            <input type="password" placeholder="password" class="col-1">
            <input type="number" placeholder="number" class="col-1">
            <input type="date" placeholder="date" class="col-1"> <select class="col-1">
                <option>abcde</option>
                <option>abcde</option>
                <option>abcde</option>
            </select> <input type="checkbox" placeholder="checkbox" class="col-1">
            <input type="radio" placeholder="radio" class="col-1">
        </div>
        <hr>
        <label>Label</label>
        <input type="text" placeholder="text">
        <label>Label</label>
        <input type="text" placeholder="text">
        <hr>
        <div class="row-padding stretch">
            <div class="col-6">
                <label>Label</label>
                <input type="text" placeholder="text">
            </div>
            <div class="col-6">
                <label>Label</label>
                <input type="text" placeholder="text">
            </div>
        </div>
        <div class="row-padding stretch">
            <div class="col-3">
                <label>Label</label>
                <input type="text" placeholder="text">
            </div>
            <div class="col-3">
                <label>Label</label>
                <input type="text" placeholder="text">
            </div>
            <div class="col-3">
                <label>Label</label>
                <input type="text" placeholder="text">
            </div>
            <div class="col-3">
                <label>Label</label>
                <input type="text" placeholder="text">
            </div>
        </div>
        <hr>
        <label for="c-a">Label</label>
        <input id="c-a" type="checkbox" placeholder="text" name="a">
        <label for="c-b">Label</label>
        <input id="c-b" type="checkbox" placeholder="text" name="a">
        <hr>
        <div>
            <input id="c-c" type="checkbox" placeholder="text" name="b" class="inline">
            <label for="c-c">Label</label>
        </div>
        <div>
            <input id="c-d" type="checkbox" placeholder="text" name="b" class="inline">
            <label for="c-d">Label</label>
        </div>
        <hr>
        <label for="r-a">Label</label>
        <input id="r-a" type="radio" placeholder="text" name="a">
        <label for="r-b">Label</label>
        <input id="r-b" type="radio" placeholder="text" name="a">
        <hr>
        <div>
            <input id="r-c" type="radio" placeholder="text" name="b" class="inline">
            <label for="r-c">Label</label>
        </div>
        <div>
            <input id="r-d" type="radio" placeholder="text" name="b" class="inline">
            <label for="r-d">Label</label>
        </div>
        <hr>
        <div>
            <label>Label</label>
            <input type="text" placeholder="text">
        </div>
        <div>
            <input id="r-c" type="radio" placeholder="text" name="b" class="inline">
            <label for="r-c">Label</label>
        </div>
        <div>
            <input id="r-d" type="radio" placeholder="text" name="b" class="inline">
            <label for="r-d">Label</label>
        </div>
        <hr>
        <label>Select</label>
        <select>
            <option>abcde</option>
            <option>abcde</option>
            <option>abcde</option>
        </select>
        <hr>
        <label>Select Option Groups</label>
        <select>
            <optgroup label="Country">
                <option>abcde</option>
                <option>abcde</option>
                <option>abcde</option>
            </optgroup>
            <optgroup label="City">
                <option>abcde</option>
                <option>abcde</option>
                <option>abcde</option>
            </optgroup>
        </select>
        <hr>
        <label>Select Multiple</label>
        <select multiple="multiple">
            <optgroup label="Country">
                <option>abcde</option>
                <option>abcde</option>
                <option>abcde</option>
            </optgroup>
            <optgroup label="City">
                <option>abcde</option>
                <option>abcde</option>
                <option>abcde</option>
            </optgroup>
        </select>
        <hr>
        <label>Textarea</label>
        <textarea placeholder="Write something..." class="rad-1"></textarea>
        <hr>
        <h2>Form</h2>
        <form>
            <div class="row-padding stretch">
                <div class="col-6">
                    <label for="name">Name</label>
                    <input id="name" type="text" name="name" placeholder="Your name">
                </div>
                <div class="col-6">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Your email" class="border-success active rad">
                    <span class="text-success">Email is available</span>
                </div>
            </div>
            <div class="row-padding stretch">
                <div class="col-6">
                    <label>Country</label>
                    <select name="country" class="border-error">
                        <option value="BR">Brazil</option>
                        <option value="IT">Italy</option>
                        <option value="DE">Germany</option>
                    </select> <span class="text-error">Ops! Something is wrong...</span>
                </div>
                <div class="col-6">
                    <label>Gender</label>
                    <div class="padding-xx stretch">
                        <input type="radio" name="gender" id="gender-f" class="inline">
                        <label for="gender-f">Female</label>

                        <input type="radio" name="gender" id="gender-m" class="inline">
                        <label for="gender-m">Male</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="primary">Submit</button>
            </div>
        </form>
        <hr>
        <h2>Other Form</h2>
        <form>
            <fieldset>
                <legend>Personalia</legend>
                <label>Name:</label>
                <input type="text">
                <label>Email:</label>
                <input type="text">
                <label>Date of birth:</label>
                <input type="text">
            </fieldset>
            <fieldset>
                <legend>Others</legend>
                <label>Name:
                    <small class="float-right">(required)</small>
                </label>
                <input type="text">
                <label>Email:</label>
                <input type="text">
                <label>Date of birth:</label>
                <input type="text">
            </fieldset>
            <fieldset>
                <label>Name:
                    <small class="float-right">(required)</small>
                </label>
                <input type="text">
                <label>Email:</label>
                <input type="text">
                <label>Date of birth:</label>
                <input type="text">
            </fieldset>
        </form>
    </div>

    <style>
        body {
            padding-bottom: 100px;
            margin: 10px;
        }

    </style>
<?php
$view->endBlock();
