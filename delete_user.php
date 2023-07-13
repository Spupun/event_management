<?php

include 'config.php';
 if(isset($_GET['deleteid'])){
      $id =$_GET['deleteid'];

      // $sql = "UPDATE from `about_us` SET is_deleted = 1 where id = $id";
      $sql = "UPDATE  about_us SET is_deleted = 1 where id =$id";

      $result =mysqli_query($conn,$sql);
      if($result){
        // echo "Deleted successfully";
        header("location:operation_user.php");
      }
      else{
        die(mysqli_error($conn));
      }
 };

?>