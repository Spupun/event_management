<?php
include "config.php";

$id = $_GET['updateid'];
// var_dump($id); die;
$sql = "SELECT * FROM `carrier` WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$job_vacancies = $row['job_vacancies'];
$job_desc = $row['job_desc'];
$qualification = $row['qualification'];
$experience = $row['experience'];
$location = $row['location'];

if (isset($_POST['submit'])) {
   $job_vacancies = $_POST['job_vacancies'];
   $job_desc = $_POST['job_desc'];
   $qualification = $_POST['qualification'];
   $experience = $_POST['experience'];
   $location = $_POST['location'];


   $sql = "UPDATE `carrier` SET `job_vacancies` ='$job_vacancies', `job_desc`='$job_desc', `qualification`='$qualification' ,`experience` ='$experience',`location`='$location' WHERE id=$id";
   // var_dump($sql);die;

   $result = mysqli_query($conn, $sql);

   if ($result) {
      //  echo "Updated successfully.";
      header('location:view_job.php');
    //   move_uploaded_file($_FILES['image']['tmp_name'], "image/$image");

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

            <label>Job Vacncies</label>
            <input type="text" class="form-control" placeholder="Enter services" name="job_vacancies" autocomplete="off" value="<?php echo $job_vacancies ?>">
         </div>
         <div class="form-group">
            <label>Job Desc</label>
            <input type="text" class="form-control" placeholder="Enter service desc" name="job_desc" autocomplete="off" value="<?php echo $job_desc ?>">
         </div>
         <div class="form-group">
            <label>Qualification</label>
            <input type="text" class="form-control" placeholder="Enter image" name="qualification" autocomplete="off" value="<?php echo $qualification ?>">
         </div>
         <div class="form-group">
            <label>Experience</label>
            <input type="text" class="form-control" placeholder="Enter image" name="experience" autocomplete="off" value="<?php echo $experience ?>">
         </div>
         <div class="form-group">
            <label>Location</label>
            <input type="text" class="form-control" placeholder="Enter location" name="location" autocomplete="off" value="<?php echo $location ?>">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </form>
   </div>

   <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>
