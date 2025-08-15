<?php include "admin/connection.php";
$sql = "SELECT * FROM banner where status=1";
$query = mysqli_query($conn, $sql);
$singlebanner = mysqli_fetch_assoc($query);
// Array ( [id] => 1 [banner_name] => Banner1 [banner_desc] => Desc1 [banner_img] => img/book-img.png [status] => 1 )
// print_r($singlebanner);
// die;

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Website</title>

    <link rel="stylesheet" href="resource/style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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






    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html" id="logo"><span>TARIQUE</span><br>TOUR & TRAVEL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#book">Book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#packages">Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallary">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>

                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button> -->

                <li class="nav-item">

                    <a class="nav-link" href="admin/login.php" style="margin-right:20% !important;"> Login</a>

                </li>

                <!-- <li class="nav-item">
                        <a class="nav-link" href="#register" style="margin-left: 2px;">Register</a>
                    </li> -->
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->







    <!-- Home Section Start -->
    <div class="home"
        style="background: url(<?php echo $singlebanner['banner_img'] ?>); background-position: center; background-size: cover;">
        <div class="content">
            <h5>Welcome To World</h5>
            <h1>Visit Anywhere <span class="changecontent"></span></h1>
            <p>
                "Once a year,go someplace you've never been before."
            </p>
            <a href="#book">Book Places</a>
        </div>
    </div>
    <!-- Home Section End -->





    <!-- Section Book Start -->

    <section class="book" id="book">
        <div class="container">

            <div class="main-text">
                <h1><span>B</span>ook</h1>
            </div>

            <div class="row">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/book-img.png" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <form action="admin/action.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="name" class="form-control" placeholder="Name"><br>
                        <input type="number" name="mobile" class="form-control" placeholder="Mobile Number"><br>

                        <input type="number" name="aadhaar" class="form-control" placeholder="Aadhaar Number"><br>

                        <input type="text" name="place" class="form-control" placeholder="Where To"><br>
                        <input type="text" name="quantity" class="form-control" placeholder="How Many"><br>
                        <input type="date" name="arrival" class="form-control" placeholder="Arrivals"><br>
                        <input type="date" name="leaving" class="form-control" placeholder="Leaving"><br>
                        <textarea class="form-control" rows="5" name="details" placeholder="Other Details"></textarea>
                        <input type="submit" name="save" value="Book Now" class="submit">

                    </form>
                </div>

            </div>
        </div>
    </section>
    <!-- Section Book End -->








    <!-- Section Packages Start -->
    <section class="packages" id="packages">
        <div class="container">

            <div class="main-txt">
                <h1><span>P</span>ackages</h1>
            </div>

            <div class="row" style="margin-top: 30px;">

                <div class="col-md-4 py-3 py-md-0">

                    <div class="card" align="center">
                        <img src="./img/uk.png" alt="">
                        <div class="card-body">
                            <h3>United Kingdom</h3>
                            <p>
                                When it comes to one of the top tourist destinations in the world, the United Kingdom is
                                never behind. </p>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star  "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <a href="#book">Book Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card" align="center">
                        <img src="./img/france.png" alt="">
                        <div class="card-body">
                            <h3>France</h3>
                            <p>
                                France's scenery is as diverse as it is beautiful, with the glittering coastlines of the
                                French Riviera.</p>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <a href="#book">Book Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card" align="center">
                        <img src="./img/pakistan.png" alt="">
                        <div class="card-body">
                            <h3>Pakistan</h3>
                            <p>
                                Natural beauty is un matched. Pakistan have world most beautiful places for visit,
                                specially at its best in northern areas of Pakistan and Kashmir region.</p>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <a href="#book">Book Now</a>
                        </div>
                    </div>

                </div>



            </div>



            <div class="row" style="margin-top: 30px;">

                <div class="col-md-4 py-3 py-md-0">

                    <div class="card" align="center">
                        <img src="./img/italy.png" alt="">
                        <div class="card-body">
                            <h3>Italy</h3>
                            <p>Italy is famous for the Renaissance and the incredible artists it produced. Italy is
                                famous for its tourism, its art cities and unique scenery.</p>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <a href="#book">Book Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card" align="center">
                        <img src="./img/india.png" alt="">
                        <div class="card-body">
                            <h3>India</h3>
                            <p>
                                31 Amazing Things - India Is Famous For | WildlifeZones
                                India is amongst the top 10 countries in the world in terms of the number of World
                                Heritage Sites.</p>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <a href="#book">Book Now</a>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card" align="center">
                        <img src="./img/us.png" alt="">
                        <div class="card-body">
                            <h3>United States</h3>
                            <p>
                                The USA is the home of entertainment. It is the perfect family holiday destination. With
                                Disneyland, Universal Studios, Hollywood, casinos in Las Vegas.</p>
                            <div class="star">
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star checked"></i>
                                <i class="fa-solid fa-star "></i>
                                <i class="fa-solid fa-star "></i>
                            </div>
                            <h6>Price: <strong>$500</strong></h6>
                            <a href="#book">Book Now</a>
                        </div>
                    </div>

                </div>



            </div>


        </div>
    </section>
    <!-- Section Packages End -->







    <!-- Section Services Start -->
    <section class="services" id="services">
        <div class="container">

            <div class="main-txt">
                <h1><span>S</span>ervices</h1>
            </div>

            <div class="row" style="margin-top: 30px;">

                <div class="col-md-4 py-3 py-md-0">

                    <div class="card">
                        <i class="fas fa-hotel"></i>
                        <div class="card-body">
                            <h3>Affordable Hotel</h3>
                            <p></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card">
                        <i class="fas fa-utensils"></i>
                        <div class="card-body">
                            <h3>Food & Drinks</h3>
                            <p></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card">
                        <i class="fas fa-bullhorn"></i>
                        <div class="card-body">
                            <h3>Safty Guide</h3>
                            <p></p>
                        </div>
                    </div>

                </div>



            </div>


            <div class="row" style="margin-top: 30px;">

                <div class="col-md-4 py-3 py-md-0">

                    <div class="card">
                        <i class="fas fa-globe-asia"></i>
                        <div class="card-body">
                            <h3>Around The World</h3>
                            <p></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card">
                        <i class="fas fa-plane"></i>
                        <div class="card-body">
                            <h3>Fastest Travel</h3>
                            <p></p>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 py-3 py-md-0">

                    <div class="card">
                        <i class="fas fa-hiking"></i>
                        <div class="card-body">
                            <h3>Adventures</h3>
                            <p></p>
                        </div>
                    </div>

                </div>



            </div>

        </div>
    </section>
    <!-- Section Services End -->




    <!-- Section Gallary Start -->
    <section class="gallary" id="gallary">
        <div class="container">

            <div class="main-txt">
                <h1><span>G</span>allery</h1>
            </div>

            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/g1.png" alt="" height="230px">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/g2.png" alt="" height="230px">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/g3.png" alt="" height="230px">
                    </div>
                </div>
            </div>


            <div class="row" style="margin-top: 30px;">
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/g4.png" alt="" height="230px">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/g5.png" alt="" height="230px">
                    </div>
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/g6.png" alt="" height="230px">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Section Gallary End -->







    <!-- About Start -->
    <section class="about" id="about">
        <div class="container">

            <div class="main-txt">
                <h1>About <span>Us</span></h1>
            </div>

            <div class="row" style="margin-top: 50px;">

                <div class="col-md-6 py-3 py-md-0">
                    <div class="card">
                        <img src="./img/about-img.png" alt="">
                    </div>
                </div>

                <div class="col-md-6 py-3 py-md-0">
                    <h2 style="color: #ffa500;">How Travel Agency Work</h2>
                    <p><b>Tarique Tour & Travel</b> is a family-owned tour operator and travel agency located in
                        Ranchi,Jharkhand.

                        We specialize in tours to different countries of the world but are always expanding and
                        enhancing our wide range of
                        offers, as well as adding new and exciting tours of Britain, Italy, India, France and
                        the Pakistan.

                        A family-owned business based in Ranchi,Jharkhand, <b>Tarique Tour & Travel</b> was founded in
                        2023
                        <b>Tarique Ansari</b> and since that humble beginning it has grown into a trusted resource that
                        has
                        helped tens
                        of thousands of people better enjoy their travel.
                    </p>
                    <button id="about-btn">Read More...</button>
                </div>

            </div>

        </div>
    </section>
    <!-- About End -->








    <!-- Footer Start -->
    <footer id="footer">
        <h1><span>TARIQUE</span>TOUR & TRAVEL</h1>
        <p></p>
        <div class="social-links">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-youtube"></i>
            <i class="fa-brands fa-pinterest-p"></i>
        </div>
        <div class="credit">
            <p>Designed By <a href="#">TARIQUE</a></p>
        </div>
        <div class="copyright">
            <p>&copy;Copyright Tarique. All Rights Reserved</p>
        </div>
    </footer>
    <!-- Footer End -->










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>