<?php
include "config.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
}
$query = "SELECT * FROM signup WHERE email='$email'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);

    $verify = password_verify($password, $row['password']);
    if ($verify == 1) {
        echo "<script>alert('login sucessful')</script>";
        header("location:admin_home.php");
    } else {
        echo "<script>alert('password did not match !!')</script>";
    }
}
mysqli_close($conn);
