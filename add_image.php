<?php

include "config.php";

if (isset($_POST['submit'])) {
    $image_title = $_POST['image_title'];
    $image = $_FILES['image']['name'];
    $image_desc = $_POST['image_desc'];



    $sql = "INSERT INTO image(image_title,image,image_desc) VALUES ('$image_title', '$image', '$image_desc')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
       // header('location:view_job.php');
       echo "<script>alert('Image inserted succefully')</script>";
       move_uploaded_file($_FILES['image']['tmp_name'], "image/$image");

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
    <title>Add Image</title>
</head>

<body>
    <div class="container my-5">


        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Image Title</label>
                <input type="text" class="form-control" name="image_title" placeholder="Enter image title" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" placeholder="upload image" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Image_desc</label>
                <input type="text" class="form-control" name="image_desc" placeholder="Enter image desc" autocomplete="off" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


</body>

</html>
