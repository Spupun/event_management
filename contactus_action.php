<?php
include "config.php";


if (isset($_POST['send'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];           
    $phone = $_POST['phone'];
    $message = $_POST['message'];

   

            $sql = "INSERT INTO contact_us (firstname,lastname,email,phone, message) VALUES ('$firstname','$lastname','$email','$phone','$message')";
            // $stmt = mysqli_prepare($conn, $sql);
            $result = mysqli_query($conn, $sql);
            if ($result) {
                 echo "Datasubmitted Successfully !!";
                // header("location:login.php");
            }
        }
