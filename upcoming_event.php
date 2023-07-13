
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Upcoming events</title>
</head>

<body>
    <div class="container my-5">
        <form action="upcoming_event_action.php" method="post"  enctype="multipart/form-data">
            <div class="form-group">
                <label>Event_Name</label>
                <input type="text" class="form-control" name="event_name" placeholder="Enter upcoming event" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Event_desc</label>
                <input type="text" class="form-control" name="event_desc" placeholder="Enter event description" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image" placeholder="Enter image" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date" placeholder="Enter experience" autocomplete="off" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>


</body>

</html>
