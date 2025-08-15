<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        text-decoration: none;
        list-style: none;
        scroll-behavior: smooth;
        font-family: 'Lato', sans-serif;
    }

    /* Navbar Start */
    #navbar {
        background: #f9f9f9;
    }

    #logo {
        font-size: 36px;
        font-weight: 550;
        color: black;
        text-shadow: 0px 1px 1px black;
        margin-bottom: 5px;
    }

    #logo span {
        color: #ffa500;
    }

    .navbar-toggler span {
        color: #ffa500;
    }

    .navbar-nav {
        margin-left: 20px;
    }

    .nav-item .nav-link {
        font-size: 16px;
        font-weight: 550;
        color: black;
        letter-spacing: 1px;
        border-radius: 3px;
        transition: 0.5s ease;
    }

    .nav-item .nav-link:hover {
        background: #ffa500;
        color: white;
    }

    #navbar form button {
        background: orange;
        color: white;
        border: none;
    }

    /* Navbar End */
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sidebar</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
</head>

<body>
    
<!-- Sidebar -->
<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
            <div class="position-sticky">
                <div class="list-group list-group-flush mx-3 mt-4">

                    <a href="index.php" class="list-group-item list-group-item-action py-2 ripple" aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-3"></i> &nbsp; <span> Main Dashboard</span>
                    </a>

                    <a href="addbanner.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fa-solid fa-image"></i> &nbsp; <span> Add Banner</span>
                    </a>

                    <!-- <a href="addpackages.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fa-solid fa-earth-americas"></i> &nbsp; <span> contact</span>
                    </a> -->
                    <a href="bookings.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fa-solid fa-earth-americas"></i> &nbsp; <span>Bookings</span>
                    </a>
                    <a href="contact.php" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fa-solid fa-earth-americas"></i> &nbsp; <span>Contact Us</span>
                    </a>

                    <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                        <i class="fa-solid fa-user"></i> &nbsp; <span> Add Employee</span>
                    </a> -->


                </div>
            </div>
        </nav>


</body>

</html>