<?php

include "config.php";

if (isset($_POST['submit'])) {
   $event_name = $_POST['event_name'];
   $event_desc = $_POST['event_desc'];
   $image = $_FILES['image']['name'];
   $date=$_POST['date'];
   

   $sql = "INSERT INTO `upcoming_events`(event_name, event_desc,image,date,move_past) VALUES ('$event_name', '$event_desc', '$image', '$date', 1)";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      //echo "New record added successfully.";
      header('location:view_events.php');
      move_uploaded_file($_FILES['image']['tmp_name'], "image/$image");
   } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
}
