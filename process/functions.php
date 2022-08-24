<?php

function emptyInputRegister($username, $first_name, $middle_name, $last_name, $suffix_name, $password1, $password2) {
    $result = "";

    if(empty($username) || empty($first_name) || empty($middle_name) || empty($last_name) || empty($suffix_name) || empty($password1) || empty($password2)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}



function pwdMatch($password1, $password2) {
    $result = "";

    if($password1 !== $password2){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}



function uidExists($dbcon, $username) {
    $sql = "SELECT * FROM tbl_users WHERE username = ?;";
    $stmt = mysqli_stmt_init($dbcon);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header('location: ../register.php?error=stmtfailed1');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}



function createUser($dbcon, $username, $first_name, $middle_name, $last_name, $suffix_name, $password1) {
    $sql = "INSERT INTO tbl_users (username, password, first_name, middle_name, last_name, suffix) VALUES (?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($dbcon);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../register.php?error=stmtfailed2");
        exit();
    }

    $hashed_pass = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssss", $username, $hashed_pass, $first_name, $middle_name, $last_name, $suffix_name);
    mysqli_stmt_execute($stmt);
    header('location: ../register.php?error=none');
}



function emptyInputLogin($username, $password) {
    $result = "";

    if(empty($username) || empty($password)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}



function loginUser($dbcon, $username, $password) {
    $uidExists = uidExists($dbcon, $username);

    if($uidExists === false){
        header('location: ../login.php?error=wronglogin');
        exit();
    }

    $hash_pass = $uidExists['password'];
    $check_pass = password_verify($password, $hash_pass);

    if($check_pass === false) {
        header('location: ../login.php?error=wronglogin');
        exit();
    }
    elseif($check_pass === true) {
        session_start();

        $_SESSION['userid'] = $uidExists['user_id'];
        $_SESSION['username'] = $uidExists['username'];
        header('location: ../admin_index_page.php');
        exit();
    }
}