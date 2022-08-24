<?php

include '../dbconnect.php';

if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once '../dbconnect.php';
    require_once 'functions.php';

    if(emptyInputLogin($username, $password) !== false) {
        header('location: ../login.php?error=emptyinput');
        exit();
    }

    loginUser($dbcon, $username, $password);

}
else {
    header('location: ../login.php');
    exit();
}

    // $username = mysqli_real_escape_string($dbcon, $_POST['username']);
    // $password = mysqli_real_escape_string($dbcon, $_POST['password']);

    // //get password from db
    // $dbpassword = "SELECT * FROM tbl_users WHERE username = '$username'";
    // $pass_db = password_verify($password, $dbpassword);
    

    // $login_query = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password' LIMIT 1";
    // $login_query_run = mysqli_query($dbcon, $login_query);

    // if(mysqli_num_rows($login_query_run) > 0) {
    //     foreach($login_query_run AS $data) {
    //         $username = $data['username'];
    //         $user_name = $data['first_name']. '' . $data['last_name'];
    //         $userlevel = $data['user_level'];
    //     }

    //     $_SESSION['auth'] = true;
    //     $_SESSION['user_level'] = "$userlevel";
    //     $_SESSION['auth_user'] = [
    //         'user_id' => $user_id,
    //         'user_name' => $user_name,
    //     ];

    //     if($_SESSION['user_level'] == "1") {
    //         $_SESSION['message'] = "Welcome to dashboard!";
    //         header("location: ../admin_index_page.php");
    //         exit(0);
    //     } elseif($_SESSION['user_level'] == "0") {
    //         $_SESSION['message'] = "You are logged in!";
    //         header("location: ../admin_index_page.php");
    //         exit(0);
    //     }

    // } else {
    //     $_SESSION['message'] = "Invalid email or password";
    //     header('location: ../login.php');
    //     exit(0);
    // }
// } else {
//     $_SESSION["message"] = "You are not allowed to access this file";
//     header("location: ../login.php");
//     exit(0);
// }
