<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            font-family: Arial, sans-serif;
        }

        .container {
            padding: 20px;
        }

        .table {
            background-color: #fff;
            width: 100%;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }

        .table img {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
        }

        .btn {
            margin-right: 5px;
        }

        .btn a {
            color: #fff;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <button class="btn btn-primary"><a href="add_job.php">Add Jobs</a></button>

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">Sl no.</th>
                    <th scope="col">Job Vacancies</th>
                    <th scope="col">Job Desc.</th>
                    <th scope="col">Qualification</th>
                    <th scope="col">experience</th>
                    <th scope="col">Location</th>
                    <th scope="col">Operation</th>



                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `carrier` where is_deleted =0";
                //$count =0;
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    //while ($row = mysqli_fetch_assoc($result)) {
                    // $id = $row['id'];
                    // $job_vacancies = $row['job_vacancies'];
                    // $job_desc = $row['job_desc'];
                    // $qualification = $row['qualification'];
                    // $experience = $row['experience'];
                    // $location = $row['location'];
                    // echo '<tr>

                    //     <th scope="row">' . $id . '</th>
                    //     <td>' . $job_vacancies . '</td>
                    //     <td>' . $job_desc . '</td>
                    //     <td>' . $qualification . '</td>
                    //     <td>' . $experience . '</td>
                    //     <td>' . $location . '</td>


                    //     <td>
                    //         <a href="update_job.php?updateid=<? =$value class="btn btn-primary">Update</a>

                    //         <button class="btn btn-danger"><a href="delete_job.php?deleteid=' . $id . '">Delete</a></button>
                    //     </td>
                    // </tr>';

                    // }

                    foreach ($result as $key => $value) {

                ?>

                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['job_vacancies'] ?></td>
                            <td><?= $value['job_desc'] ?></td>
                            <td><?= $value['qualification'] ?></td>
                            <td><?= $value['experience'] ?></td>
                            <td><?= $value['location'] ?></td>
                            <td>
                                <a href="update_job.php?updateid=<?= $value['id'] ?>" class="btn btn-primary text-light">Update</a>
                                <a href="delete_job.php?deleteid=<?= $value['id'] ?>" class="btn btn-danger text-light">Delete</a>
                            </td>
                        </tr>
                <?php }
                } ?>






                <!-- else {
                    echo '<tr><td colspan="6">No users found.</td></tr>';
                }
                ?> -->
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary ml-2"><a href="admin_home.php">Back</a></button>

</body>

</html>





<!-- <button class="btn btn-primary"><a href="update_job.php?updateid=' . $id . '">Update</a></button> -->