<?php
include 'inc/db.php';
session_start();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `users` WHERE `id`='$id'";
    $res = mysqli_query($conn, $sql);
    $_SESSION['del'] = 1;
    header("location:all.php");
} else {
    header("location:all.php");
}
