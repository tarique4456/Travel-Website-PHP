<?php

include 'connection.php';
$sql = "SELECT* FROM contact where status=1";
$query = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($query)) {
    $result[] = $data;
}
// print_r($result);die; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<style>
    .search {
        position: absolute;
        margin-top: -40px;
        margin-left: 40%;
        height: 40px;
        width: 250px;
        border-radius: 5px;
        border: solid black;
    }

    thead {
        font-size: 18px;
        font-family: sans-serif;
        color: #01ca8b;
    }

    tbody {
        color: darkslategrey;
        font-size: 15px;
        font-weight: 600;
        font-family: 'Courier New', Courier, monospace;
    }

    .but {
        border: 1px;
    }
</style>

<body>
<?php
    include("navbar.php");
    ?>
    <?php
    include("sidebar.php");
    ?>
    
    <main style="margin-top:100px;">
        <div style="padding-left: 80%;">

        </div>

        <div class="container-fluid" style="margin-top:30px; margin-bottom:5%;">
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-left: 35%; color:#ffa500;">Contact Dashboard</h2>

                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">SNo</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile No</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Detail</th>



                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($result as $vl) {
                                    ?>
                                        <tr>
                                            <th scope="row">
                                                <?php echo $vl['id']
                                                ?>
                                            </th>
                                            <td>
                                                <?php echo $vl['name'] ?>
                                            </td>
                                            <td>
                                                <?php echo $vl['number'] ?>
                                            </td>
                                            <td>
                                                <?php echo $vl['email'] ?>
                                            </td>
                                            <td>
                                                <?php echo $vl['detail'] ?>
                                            </td>




                                            </a>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>