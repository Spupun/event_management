<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">SL No</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Messages</th>
                    <!-- <th scope="col">Operations</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `contact_us`";
                $result = mysqli_query($conn, $sql);
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $firstname = $row['firstname'];
                        $lastname = $row['lastname'];
                        $email = $row['email'];
                        $phone = $row['phone'];
                        $message = $row['message'];


                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $firstname . '</td>
                            <td>' . $lastname . '</td>
                            <td>' . $email . '</td>
                            <td>' . $phone . '</td>
                            <td>' . $message . '</td>
                           
                        </tr>';
                    }
                } else {
                    echo '<tr><td colspan="6">No users found.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <button class="btn btn-primary"><a href="admin_home.php" class="text-light my-5">Go to Home</a></button>

</body>

</html>




<!-- 
<td>
    <button class="btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button>
</td> -->