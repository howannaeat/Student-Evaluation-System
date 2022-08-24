<?php

include '../dbconnect.php';

if(isset($_POST['addStudent_btn'])) {
    $first_name = mysqli_real_escape_string($dbcon, $_POST['$fname']);
    $middle_name = mysqli_real_escape_string($dbcon, $_POST['$mname']);
    $last_name = mysqli_real_escape_string($dbcon, $_POST['lname']);
    $suffix_name = mysqli_real_escape_string($dbcon, $_POST['suffix']);
    $student_id = mysqli_real_escape_string($dbcon, $_POST['studentid']);
    $address = mysqli_real_escape_string($dbcon, $_POST['address']);
    $sex = mysqli_real_escape_string($dbcon, $_POST['sex']);
    $birthdate = mysqli_real_escape_string($dbcon, $_POST['birthdate']);
    $yearlevel = mysqli_real_escape_string($dbcon, $_POST['yearlevel']);
    $acad_year = mysqli_real_escape_string($dbcon, $_POST['academicyear']);

    if($first_name == NULL || $middle_name == NULL || $last_name == NULL ||
    $suffix_name == NULL || $student_id == NULL || $address == NULL || $sex == NULL || $birthdate == NULL || $yearlevel == NULL || $acad_year == NULL) {
        $result = {
            
        }
    }
}