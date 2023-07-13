<?php
include "config.php";

$id = $_GET['updateid'];
$sql = "select * from  `about_us` where id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$title = $row['title'];
$description = $row['description'];
$image = $row['image'];

if (isset($_POST['submit'])) {
   $name = $_POST['name'];
   $title = $_POST['title'];
   $description = $_POST['description'];
   $image = $_FILES['image']['name'];

   $sql = "UPDATE `about_us` SET id=$id, name='$name', title='$title', description='$description', image='$image' WHERE id='$id'";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      //  echo "Updated successfully.";
      header('location:operation_user.php');
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

      <form method="post"  enctype="multipart/form-data">
         <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value="<?php echo $name ?>">
         </div>
         <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" placeholder="Enter your email" name="title" autocomplete="off" value="<?php echo $title ?>">
         </div>
         <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" placeholder="Enter your email" name="description" autocomplete="off" value="<?php echo $description ?>">
         </div>
         <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" placeholder="Enter image" name="image" autocomplete="off" value="<?php echo $image ?>">
         </div>

         <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </form>

   </div>






   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>