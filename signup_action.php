<?php
include "config.php";


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    if ($password !== $confirmPassword) {
        echo "Passwords do not match. Please try again.";
    } else {
        $secure_pass = password_hash($password, PASSWORD_BCRYPT);


        $emailExistsQuery = "SELECT email FROM signup WHERE email = '$email'";
        $emailExist = mysqli_query($conn, $emailExistsQuery);
        if (mysqli_num_rows($emailExist) > 0) {
            echo "<script>alert('Email already exists. Please choose a different email.')</script>";
        } else {

            $sql = "INSERT INTO signup (name, phone, email, password) VALUES ('$name','$phone','$email','$secure_pass')";
            // $stmt = mysqli_prepare($conn, $sql);
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // echo "Registration Successfully !!";
                header("location:login.php");
            }
        }
    }
}
