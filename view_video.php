<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>videos</title>
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
        <button class="btn btn-primary"><a href="add_video.php">Add video</a></button>

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">video Title</th>
                    <th scope="col">video</th>
                    <th scope="col">video desc</th>
                    <!-- <th scope="col">Action</th> -->

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `video` where is_deleted =0";
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    foreach ($result as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['video_title'] ?></td>
                            <td>
                            <video width="320" height="240" controls>
                                    <source src="video/<?= $value['video'] ?>" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </td>
                            <td><?= $value['video_desc'] ?></td>
                            <td>
                                <a href="update_video.php?updateid=<?= $value['id'] ?>" class="btn btn-primary text-light">Update</a>
                                <a href="delete_video.php?deleteid=<?= $value['id'] ?>" class="btn btn-danger text-light">Delete</a>

                            </td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary ml-2"><a href="admin_home.php">Go to home page</a></button>

</body>

</html>
