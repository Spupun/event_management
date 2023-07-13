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
        <button class="btn btn-primary"><a href="add_services.php">Add Services</a></button>

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Our services</th>
                    <th scope="col">Service Desc</th>
                    <th scope="col">Image</th>
                    <th scope="col">Operation</th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `services` where is_deleted =0";
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $our_service = $row['our_service'];
                        $service_desc = $row['service_desc'];
                        $image = $row['image'];

                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $our_service . '</td>
                            <td>' . $service_desc . '</td>
                            <td><img src="image/'. $image . '" alt="image"></td>
                            <td>
                                <button class="btn btn-primary"><a href="update_service.php?updateid=' . $id . '">Update</a></button>
                                <button class="btn btn-danger"><a href="delete_service.php?deleteid=' . $id . '">Delete</a></button>
                            </td>
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">No users found.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    <button class="btn btn-primary ml-2"><a href="admin_home.php">Go to home page</a></button>

</body>

</html>
