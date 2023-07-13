<?php

include "config.php";

if (isset($_POST['submit'])) {
   $our_service = $_POST['our_service'];
   $service_desc = $_POST['service_desc'];
   $image = $_FILES['image']['name'];

   $sql = "INSERT INTO `services`(our_service, service_desc, image) VALUES ('$our_service', '$service_desc','$image')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      // echo "New record added successfully.";
      header('location:add_services.php');
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
   <title>Add Services</title>
</head>

<body>
   <div class="container my-5">

      <form method="post" enctype="multipart/form-data">
         <div class="form-group">
            <label>Our Services</label>
            <input type="text" class="form-control" name="our_service" placeholder="Enter services" autocomplete="off" required>
         </div>
         <div class="form-group">
            <label>Service Description</label>
            <input type="text" class="form-control"name="service_desc" placeholder="Enter user desc" autocomplete="off"required>
         </div>
         <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" name="image" autocomplete="off"required>
         </div>

         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>

   </div>






   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>