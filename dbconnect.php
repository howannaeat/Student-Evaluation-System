<?php

$serverName = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "student_evaluation";

$dbcon = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

if(!$dbcon) {
    die("Connection failed: " . mysqli_connect_error());
}

// try{
//     $dbcon = new mysqli('localhost', 'root', '', 'student_evaluation');
//     mysqli_set_charset($dbcon, 'utf8');
// }

// catch (Exception $e){
//     print "The system is busy please try later.";
// }

// catch (Error $e){
//     print "The system is busy please try again later.";
// }