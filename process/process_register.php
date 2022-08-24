<?php

if(isset($_POST['register'])) {

    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $suffix_name = $_POST['suffix_name'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    require_once '../dbconnect.php';
    require_once 'functions.php';

    if(emptyInputRegister($username, $first_name, $middle_name, $last_name, $suffix_name, $password1, $password2) !== false) {
        header("location: ../register.php?error=emptyinput");
        exit();
    }
    
    if(pwdMatch($password1, $password2) !== false) {
        header("location: ../register.php?error=passwordsdontmatch");
        exit();
    }

    if(uidExists($dbcon, $username) !== false) {
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createUser($dbcon, $username, $first_name, $middle_name, $last_name, $suffix_name, $password1);

    
}

else {
    header("location: ../register.php");
}