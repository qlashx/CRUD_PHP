<?php
session_start();
include '../inc/db.php';
if (isset($_POST['submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
    $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    // insert into data base
    $check = "SELECT * FROM users  WHERE `name`='$name' AND `email`='$email' AND `phone`='$phone' AND `pass`='$pass' ";
    $res = mysqli_query($conn, $check);
    if ($res->num_rows == 0) {
        $sql = "INSERT INTO users (name, email, phone,pass)
    VALUES ('{$name}', '{$email}', '{$phone}','{$pass}')";
        $ress = mysqli_query($conn, $sql);
        header("location:../login.php");
    } else {
        $_SESSION['error'] = 1;
        header("location:../register.php");
    }
}
