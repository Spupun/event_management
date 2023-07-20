<?php
include "config.php";

if (isset($_GET)) {
    $id = $_GET['pastid'];

    $selectQuery = "SELECT * FROM upcoming_events where id ='$id'";
    $result = mysqli_query($conn, $selectQuery);

    if ($result && mysqli_num_rows($result) > 0) {
        
            $updateQuery = "UPDATE `upcoming_events` SET `move_past` = 1 where id ='$id'";

            $result = mysqli_query($conn, $updateQuery);
            if ($result) {
                echo  "<Script>alert('Record moved successfully !!!');
                window.location.href = './view_events.php';
                </Script>";
            }

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
          
    } 
mysqli_close($conn);
