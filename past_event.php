<?php
include "config.php";

if (isset($_GET)) {
    $id = $_GET['pastid'];
    // $upcoming_events = "upcoming_events";
    // $past_events = "past_events";
    $selectQuery = "SELECT * FROM upcoming_events where id ='$id'";
    $result = mysqli_query($conn, $selectQuery);
    // echo '<pre>';print_r($result);die;

    if ($result && mysqli_num_rows($result) > 0) {
        // while ($row = mysqli_fetch_assoc($result)) {
            // $event_name = $row['event_name'];
            // $event_desc = $row['event_desc'];
            // $image = $row['image'];
            // $date = $row['date'];
            // $move_past = $row['move_past'];


            // $insertQuery = "INSERT INTO $past_events (event_name, event_desc,image,date) VALUES ('$event_name', '$event_desc','$image','$date')";

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
          
    } else {
        echo "Error selecting records: " . mysqli_error($conn);
    }
mysqli_close($conn);
