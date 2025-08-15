<!-- the below php code is used to display the banner details in the dashboard page -->
<?php

include 'connection.php';
$sql = "SELECT* FROM banner where status=1";
$query = mysqli_query($conn, $sql);
$result = array();

while ($data = mysqli_fetch_assoc($query)) {
    $result[] = $data;
}

// print_r($result);die; 
// Array ( 
//   [0] => Array ( 
//     [id] => 1 
//     [banner_name] => Banner1 
//     [banner_desc] => desc1 
//     [banner_img] => 
//     [status] => 1 
//     )
//   )
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Banner</title>
</head>

<!-- css cdn -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<body>
    <!-- including sidebar.php page with addbanner.php -->
    <?php include "dashboard.php" ?>

    <!-- The main banner program starts from here  -->
    <main style="margin-top: 100px;">
    <center><h1 style="color:#ffa500;"> Banner </h1></center>
        <div class="container pt-4">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">

                            <form method="POST" action="action.php" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Banner Name</label>
                                    <input type="text" name="banner_name" value="" class="form-control"
                                        id="InputBannerName" aria-describedby="emailHelp" Required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Banner Description</label>
                                    <input type="varchar" name="banner_desc" value="" class="form-control"
                                        id="InputBannerDesc" aria-describedby="emailHelp" Required>
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Banner Img</label>
                                    <input type="file" name="img" class="form-control-file" id="BannerImage">
                                </div>

                                <center><button type="submit" name="save_banner" value="save_banner"
                                        class="btn btn-primary">Submit</button></center>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">S_No</th>
                                        <th scope="col">Banner_Name</th>
                                        <th scope="col">Banner_Desc</th>
                                        <th scope="col">Banner_Img</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($result as $vl) {
                                    ?>
                                    <tr>
                                        <th scope="row"><?php echo $vl['id'] ?></th>
                                        <td><?php echo $vl['banner_name'] ?></td>
                                        <td><?php echo $vl['banner_desc'] ?></td>
                                        <td> <img src="<?php echo $vl['banner_img'] ?>" style="height:50px"></td>
                                        <td><button class="btn btn-sm btn-success editbutton" data-toggle="modal"
                                                data-target="#myfirstmodal" data-banner_id="<?php echo $vl['id'] ?>"
                                                data-banner_name="<?php echo $vl['banner_name'] ?>"
                                                data-banner_desc="<?php echo $vl['banner_desc'] ?>"
                                                data-img="<?php echo $vl['banner_img'] ?>">
                                                edit</button>
                                            <a href="action.php?delid=<?php echo $vl['id'] ?> &Delcust=Delcust">
                                                <button class="btn btn-sm btn-danger"
                                                    onclick="return confirm('Are You Sure Want To Delete?')">delete</button></a>
                                        </td>

                                    </tr>
                                    <?php } ?>



                                    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>img1</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>img2</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>img3</td>
      <td>@twitter</td>
    </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- Modal -->
    <div class="modal fade" id="myfirstmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="action.php" enctype="multipart/form-data">

                        <input type="hidden" id="update_id" name="update_id" value="" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp" Required>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Banner Name</label>
                            <input type="text" id="banner_name_m" name="banner_name" value="" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" Required>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Banner Description</label>
                            <input type="text" id="banner_desc_m" name="banner_desc" value="" class="form-control"
                                id="exampleInputEmail1" aria-describedby="emailHelp" Required>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>



                        <!-- <img id="img_m2" src="img/Ani3.jpg"> -->
                        <img id="img_m2">


                        <div class="form-group">
                            <label for="exampleFormControlFile1">Banner image</label>
                            <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <button type="submit" name="update_banner" value="update_banner"
                            class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>
        </div>


</body>
<script>
// alert('Adding Customer Details');
$(document).ready(function() {

    $('.editbutton').click(function() {
        var banner_id = $(this).attr('data-banner_id');
        var banner_name = $(this).attr('data-banner_name');
        var banner_desc = $(this).attr('data-banner_desc');
        // alert(cust_name);

        var img = $(this).attr('data-img');
        // alert(img)

        $('#update_id').val(banner_id);
        $('#banner_name_m').val(banner_name);
        $('#banner_desc_m').val(banner_desc)

        $('#img_m2').attr('src', $img);
        // $('#cust_name_m').val(cust_name);
        // $('#cust_name_m').val(cust_name);


        // alert(cust_id);
        // alert(cust_name);
        // alert(mobile);

        // alert(img);

    });


});
</script>

<!-- Js cdn -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>

</html>