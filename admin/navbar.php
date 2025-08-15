<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SideBar</title>

    <!-- Bootstrap cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


    <!-- Font Awesome cdn -->
    <script src="https://kit.fontawesome.com/709be8e8ff.js" crossorigin="anonymous"></script>

</head>

<style>
    body {
        background-color: #fbfbfb;
    }

    @media (min-width: 991.98px) {
        main {
            padding-left: 240px;
        }
    }

    /* Sidebar */
    .sidebar {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        padding: 58px 0 0;
        /* Height of navbar */
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
        width: 240px;
        z-index: 600;
    }

    @media (max-width: 991.98px) {
        .sidebar {
            width: 100%;
        }
    }

    .sidebar .active {
        border-radius: 5px;
        box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 0.5rem;
        overflow-x: hidden;
        overflow-y: auto;
        /* Scrollable contents if viewport is shorter than content. */
    }
</style>

<body>
    <!--Main Navigation-->

        <!-- Navbar -->
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-info bg-info fixed-top">
            <!-- Container wrapper -->
            <div class="container-fluid">

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i>
                </button>

                <!-- Brand -->
                <a class="navbar-brand" href="#">
                    <img src="../img/g4.png" height="50" alt="MDB Logo" loading="lazy" />
                    <label for="" class="text-white">TOUR AND TRAVEL</label>
                </a>

                <!-- Right links -->
                <ul class="navbar-nav ms-auto d-flex flex-row">
                    

                    <!-- Profile Pic -->
                    <li class="nav-item dropleft ">
                        <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-expanded="false">
                            <img src="../img/admin/profilepic2.png" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                            <li>
                                <a class="dropdown-item" href="#"><i class="fa-solid fa-address-card"></i> My
                                    profile</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#"> <i class="fa-solid fa-gear"></i> Settings</a>
                            </li>

                            <?php
                            if (isset($_SESSION['admin'])) {

                                $user = $_SESSION['admin'];
                                echo '
                  <li><a class="dropdown-item" href="logout.php"> <i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                  ';
                            } else {
                                echo '
                  <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
                  ';
                            }
                            ?>

                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
<!-- JS and Bundle -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

</html>