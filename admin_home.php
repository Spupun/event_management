<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
            overflow: hidden;
            background-color: darkcyan;
        }

        .navbar a {
            float: left;
            font-size: 16px;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar .logout {
            align-items: end;
        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: red;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }
    </style>
</head>

<body style="background-color:white;">

    <div class="navbar">
        <a href="#home">Home</a>
        <div class="dropdown">
            <button class="dropbtn">About us
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="add_user.php">Add About us</a>
                <a href="operation_user.php">View details</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Services
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="add_services.php">Add Services</a>
                <a href="view_services.php">View Services</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Carrier
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="add_job.php">Add job</a>
                <a href="view_job.php">View Job</a>
            </div>
        </div>


        <div class="dropdown">
            <button class="dropbtn">Gallery
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Images</a>
                <a href="#">Videos</a>
            </div>
        </div>
        

        <div class="dropdown">
            <button class="dropbtn">Event
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Past</a>
                <a href="#">Upcoming</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">Contactus
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="contactus.php">Add contact</a>
                <a href="view_contact.php">View Contact details</a>
            </div>
        </div>
        <div class="logout"> <a href="logout.php">Logout</a></div>
    </div>
    </div>








</body>

</html>