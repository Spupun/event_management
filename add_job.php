<?php

include "config.php";

if (isset($_POST['submit'])) {
    $job_vacancies = $_POST['job_vacancies'];
    $job_desc = $_POST['job_desc'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $location = $_POST['location'];


    $sql = "INSERT INTO carrier(job_vacancies,job_desc,qualification,experience,location) VALUES ('$job_vacancies', '$job_desc', '$qualification', '$experience','$location')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('New job added successfully.')</script>";
        header('location:view_job.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Add Job</title>
</head>

<body>
    <div class="container my-5">


        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Job Vacancies</label>
                <input type="text" class="form-control" name="job_vacancies" placeholder="Enter job details" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Job_desc</label>
                <input type="text" class="form-control" name="job_desc" placeholder="Enter job description" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Qualification</label>
                <input type="text" class="form-control" name="qualification" placeholder="Enter qualification" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Experience</label>
                <input type="text" class="form-control" name="experience" placeholder="Enter experience" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Location</label>
                <input type="text" class="form-control" placeholder="Enter location" name="location" autocomplete="off" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>






    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>