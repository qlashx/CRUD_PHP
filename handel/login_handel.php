<?php
session_start();
include '../inc/db.php';

if (isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    // Modify the SQL query to use the variables
    $sql = "SELECT * FROM `users` WHERE `email`='$email' AND `pass`='$pass'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $res = $result->fetch_assoc();
        $_SESSION['id'] = $res['id'];
        $_SESSION['name'] = $res['name'];
        $_SESSION['email'] = $res['email'];
        $_SESSION['phone'] = $res['phone'];

        header("location: ../show-data.php");
    } else {
        $_SESSION['error'] = 1;
        header("location: ../login.php");
    }
}
//This project is a straightforward PHP and MySQL-based registration system In this project, there are two types of users: "admin" and "user". The system differentiates between these two roles to provide distinct functionalities and permissions for each user category.
