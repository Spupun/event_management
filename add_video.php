<?php

include "config.php";

if (isset($_POST['submit'])) {
    $video_title = $_POST['video_title'];
    $video = $_FILES['video']['name'];
    $video_desc = $_POST['video_desc'];



    $sql = "INSERT INTO video(video_title,video,video_desc) VALUES ('$video_title', '$video', '$video_desc')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
       // header('location:view_job.php');
    //    echo "<script>alert('video inserted succefully')</script>";
    echo  "<Script>alert('Record Inserted successfully !!!');
    window.location.href = './view_video.php';
    </Script>";
       move_uploaded_file($_FILES['video']['tmp_name'], "video/$video");

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
    <title>Add video</title>
</head>

<body>
    <div class="container my-5">


        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>video Title</label>
                <input type="text" class="form-control" name="video_title" placeholder="Enter video title" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>video</label>
                <input type="file" class="form-control" name="video" placeholder="upload video" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>video_desc</label>
                <input type="text" class="form-control" name="video_desc" placeholder="Enter video desc" autocomplete="off" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


</body>

</html>
