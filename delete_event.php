<?php

include 'config.php';
 if(isset($_GET['deleteid'])){
      $id =$_GET['deleteid'];

      //$sql = "delete from `services` where id = $id";
      $sql = "UPDATE upcoming_events SET is_deleted=1 where id = $id";

      $result =mysqli_query($conn,$sql);
      if($result){
        // echo "Deleted successfully";
        header("location:view_events.php");
      }
      else{
        die(mysqli_error($conn));
      }
 };

?>
