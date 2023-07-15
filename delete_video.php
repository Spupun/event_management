<?php

include 'config.php';
 if(isset($_GET['deleteid'])){
      $id =$_GET['deleteid'];

      //$sql = "delete from `services` where id = $id";
      $sql = "UPDATE video SET is_deleted=1 where id = $id";

      $result =mysqli_query($conn,$sql);
      if($result){
         echo "script>alert('Deleted successfully')</script>";
        header("location:view_video.php");
      }
      else{
        die(mysqli_error($conn));
      }
 };

?>
