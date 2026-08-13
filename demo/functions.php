<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

// get the active url 
function isUrlActive($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}


// if user not match return an error
function authorize($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}