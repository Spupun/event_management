<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
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
            table-layout: fixed;
            /* Ensures the table layout does not change */
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
            /* Centers the content horizontally */
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

        /* Additional styles for responsiveness */
        @media (max-width: 576px) {

            .table th,
            .table td {
                font-size: 14px;
            }

            .table img {
                width: 60px;
                height: 60px;
            }
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Event Name</th>
                    <th scope="col">Event desc</th>
                    <th scope="col">Image</th>
                    <th scope="col">Date</th>
                    <!-- <th scope="col">Operation</th> -->
                    <!-- <th scope="col">Past Events</th> -->



                </tr>
            </thead>
            <tbody>
                <?php
                $currentDate = date("Y-m-d");

                $sql = "SELECT * FROM `upcoming_events` where move_past =1 AND `date` < '$currentDate'";
                //$count =0;
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    foreach ($result as $key => $value) {

                ?>

                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['event_name'] ?></td>
                            <td><?= $value['event_desc'] ?></td>
                            <td><img src="image/<?= $value['image'] ?>" alt="image"></td>
                            <td><?= $value['date'] ?></td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary ml-2"><a href="admin_home.php">Back</a></button>

</body>

</html>





<!-- <button class="btn btn-primary"><a href="update_job.php?updateid=' . $id . '">Update</a></button> -->
