<?php
include "config.php";

$id = $_GET['updateid'];
// var_dump($id); die;
$sql = "SELECT * FROM `upcoming_events` WHERE id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$event_name = $row['event_name'];
$event_desc = $row['event_desc'];
$image = $row['image'];
$date = $row['date'];

if (isset($_POST['submit'])) {
   $event_name = $_POST['event_name'];
   $event_desc = $_POST['event_desc'];
   $image = $_FILES['image']['name'];
   $date = $_POST['date'];


   $sql = "UPDATE `upcoming_events` SET `event_name` ='$event_name', `event_desc`='$event_desc', `image`='$image' ,`date` ='$date' WHERE id=$id";
   // var_dump($sql);die;

   $result = mysqli_query($conn, $sql);

   if ($result) {
      //  echo "Updated successfully.";
      header('location:view_events.php');
     move_uploaded_file($_FILES['image']['tmp_name'], "image/$image");

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

            <label>Event name</label>
            <input type="text" class="form-control" placeholder="Enter events" name="event_name" autocomplete="off" value="<?php echo $event_name ?>">
         </div>
         <div class="form-group">
            <label>Event Desc</label>
            <input type="text" class="form-control" placeholder="Enter event desc" name="event_desc" autocomplete="off" value="<?php echo $event_desc ?>">
         </div>
         <div class="form-group">
            <label>Image</label>
            <input type="file" class="form-control" placeholder="Enter image" name="image" autocomplete="off" value="<?php echo $image ?>">
         </div>
         <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" placeholder="Enter date" name="date" autocomplete="off" value="<?php echo $date ?>">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Update</button>
      </form>
   </div>
</body>

</html>
