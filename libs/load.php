<?php

include_once 'includes/Mic.class.php';
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

function signup($user, $pass, $email, $phone)
{


    $servername = "mysql.selfmade.ninja:3306";
    $username = "briyankan";
    $password = "Briyan2303";
    $dbname = "briyankan_clickora";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO `auth` (`username`, `password`, `email`, `phone`, `blocked`, `active`)
    VALUES ('$user', '$pass', '$email', '$phone', '0', '1');";
    $error = false;


    if ($conn->query($sql) === true) {
        $error = false;
    } else {
        //echo "Error: " . $sql . "<br>" . $conn->error;
        $error = $conn->error;
    }

    $conn->close();
    return $error;
}
