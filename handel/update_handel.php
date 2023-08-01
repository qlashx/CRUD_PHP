<?php
session_start();
include '../inc/db.php';
if (isset($_POST['submit'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
    $id = $_SESSION['id'];
    $sql = "UPDATE users SET `name`='$name' , `email`='$email', `phone`='$phone' WHERE `id`='$id'";
    $res = mysqli_query($conn, $sql);
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    header('location:../show-data.php');
}
