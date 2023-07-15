<?php
include "config.php";

$id = $_GET['updateid'];
// var_dump($id); die;
$sql = "SELECT * FROM `video` WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$video_title = $row['video_title'];
$video = $row['video'];
$video_desc = $row['video_desc'];


if (isset($_POST['submit'])) {
   $video_title = $_POST['video_title'];
   $video = $_FILES['video'];
   $video_desc = $_POST['video_desc'];


   $sql = "UPDATE `video` SET `video_title` ='$video_title', `video`='$video', `video_desc`='$video_desc' WHERE id=$id";
   // var_dump($sql);die;

   $result = mysqli_query($conn, $sql);

   if ($result) {
      //  echo "Updated successfully.";
      header('location:view_video.php');
       move_uploaded_file($_FILES['video']['tmp_name'], "video/$video");

   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
$conn->close();
?>


<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <title>operation</title>
</head>

<body>
   <div class="container my-5">
      <form method="post" enctype="multipart/form-data">
         <div class="form-group">

            <label>video Title</label>
            <input type="text" class="form-control" placeholder="Enter video title" name="video_title" autocomplete="off" value="<?php echo $video_title ?>">
         </div>
      
         <div class="form-group">
            <label>video</label>
            <input type="file" class="form-control" placeholder="Enter video" name="video" autocomplete="off" value="<?php echo $video ?>">
         </div>
         <div class="form-group">
            <label>video desc</label>
            <input type="text" class="form-control" placeholder="Enter video desc" name="video_desc" autocomplete="off" value="<?php echo $video_desc ?>">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </form>
   </div>
</body>

</html>

