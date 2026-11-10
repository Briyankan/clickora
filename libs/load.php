<?php

function load_template($name)
{
    // print("including $name.php");
    // include __DIR__."/../_templates/$name.php";
    include $_SERVER['DOCUMENT_ROOT'] . "/clickora/_templates/$name.php";
}

function validate_credentials($username, $password)
{
    if ($username == "briyankanni@gmail.com" and $password == "2323") {
        return true;
    } else {
        return false;
    }
}
