<?php
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operation</title>
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
        <button class="btn btn-primary"><a href="add_user.php">Add User</a></button>

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql = "SELECT * FROM `about_us`where is_deleted=0";
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    // while ($row = mysqli_fetch_assoc($result)) {
                    //     $id = $row['id'];
                    //     $name = $row['name'];
                    //     $title = $row['title'];
                    //     $description = $row['description'];
                    //     $image = $row['image'];

                    //     echo '<tr>
                    //         <th scope="row">' . $id . '</th>
                    //         <td>' . $name . '</td>
                    //         <td>' . $title . '</td>
                    //         <td>' . $description . '</td>
                    //         <td><img src="image/'. $image . '" alt="image"></td>
                    //         <td>
                    //             <button class="btn btn-primary"><a href="update_user.php?updateid=' . $id . '">Update</a></button>
                    //             <button class="btn btn-danger"><a href="delete_user.php?deleteid=' . $id . '">Delete</a></button>
                    //         </td>
                    //     </tr>';

                    foreach ($result as $key => $value) {
                ?>
                        <tr>
                            <td><?= $value['id'] ?></td>
                            <td><?= $value['name'] ?></td>
                            <td><?= $value['title'] ?></td>
                            <td><?= $value['description'] ?></td>
                            <td><img src="image/<?= $value['image'] ?>" alt="image"></td>
                            <td>
                                <a href="update_user.php?updateid=<?= $value['id'] ?>" class="btn btn-primary text-light">Update</a>
                                <a href="delete_user.php?deleteid=<?= $value['id'] ?>" class="btn btn-danger text-light">Delete</a>
                            </td>

                        </tr>







                <?php }
                } ?>


            </tbody>
        </table>
    </div>
</body>

</html>