<!-- This code is for not returning to dashboard page after logout. -->

<?php
session_start();
// print_r($_SESSION);die;
if(!isset($_SESSION['admin'])){
    header('Location:login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="../img/index/icons/iconall.jpeg" type="Image/jpeg">

</head>

<body>
    <?php include ("dashboard.php");?>
    
    <main style="margin-top: 90px; margin-left:50px;">
        <h4 style="color:#ffa500; margin-left:33%;" class="my-2">Admin Dashboard</h4>
            <div class="container-fluid">
                <div class="col-md-12 my-1">
                    <div class="row">
                        <div class="col-md-3 bg-success mx-2" style="height: 130px;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h5 class="my-1 text-white text-center" style="font-size: 40px;">1</h5>
                                        <h5 class="text-white">Total</h5>
                                        <h5 class="text-white">Admin</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="#"><i class="fa-solid fa-user-gear fa-3x" style="color: white; margin-left: -40px; margin-top: 60px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-3 bg-info mx-2" style="height: 130px;">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-1 text-white text-center" style="font-size: 40px;">70</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">User</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#"><i class="fa-solid fa-user-doctor fa-3x" style="color: white; margin-left: -40px; margin-top: 60px"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-warning mx-2" style="height: 130px;">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-1 text-white text-center" style="font-size: 40px;">45</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Contacts</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#"><i class="fa-solid fa-hospital-user fa-3x" style="color: white; margin-left: -40px; margin-top: 60px"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-1 text-white text-center" style="font-size: 40px;">10</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Report</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#"><i class="fa-sharp fa-solid fa-flag fa-3x" style="color: white; margin-left: -40px; margin-top: 60px"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-1 text-white text-center" style="font-size: 40px;">50</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Enquiry</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#"><i class="fa-solid fa-envelope fa-3x" style="color: white; margin-left: -40px; margin-top: 60px"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px;">
                            <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h5 class="my-1 text-white text-center" style="font-size: 40px;">500000</h5>
                                            <h5 class="text-white">Total</h5>
                                            <h5 class="text-white">Income</h5>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#"><i class="fa-sharp fa-solid fa-sack-dollar fa-3x" style="color: white; margin-left: -40px; margin-top: 60px"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
    </main>
</body>
</html>