<?php
include "config.php";
$id = $_GET['pastid'];
$upcoming_events = "upcoming_events";
// $past_events = "past_events";
$selectQuery = "SELECT * FROM $upcoming_events where id ='$id'";
$result = mysqli_query($conn, $selectQuery);

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $event_name = $row['event_name'];
        $event_desc = $row['event_desc'];
        $image = $row['image'];
        $date = $row['date'];
        $move_past = $row['move_past'];


        // $insertQuery = "INSERT INTO $past_events (event_name, event_desc,image,date) VALUES ('$event_name', '$event_desc','$image','$date')";

        $updateQuery ="UPDATE `upcoming_events` SET `move_past` =1 where id ='$id'";

        $result = mysqli_query($conn, $updateQuery);
        if($result){
            echo  "<Script>alert('Record moved successfully !!!')</Script>";
        }

        
    //     // Execute the insert query
    //     $insertResult = mysqli_query($conn, $insertQuery);

    //     // Check if the insert query was successful
    //     if (!$insertResult) {
    //         echo "Error inserting record: " . mysqli_error($conn);
    //     }
    // }

    // // Close the result set
    // mysqli_free_result($result);

    // // Delete the records from the source table after moving them
    // $deleteQuery = "DELETE FROM $upcoming_events where id ='$id'";
    // $deleteResult = mysqli_query($conn, $deleteQuery);

    // if (!$deleteResult) {
    //     echo "Error deleting records: " . mysqli_error($conn);
    // } else {
    //     //echo "Records moved successfully!";
    //     header("location:view_past_event.php");
    // 
}

} else {
    echo "Error selecting records: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
