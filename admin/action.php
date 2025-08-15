<!-- login -->
<?php
include("connection.php");

if (isset($_POST['login'])) {


    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $error = array();
    if (empty($username)) {
        $error['admin'] = "Enter Username";
    } else if (empty($password)) {
        $error['admin'] = "Enter Password";
    }

    if (count($error) == 0) {
        $query = "SELECT * FROM admin where username ='$username' AND password ='$password'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            session_start();
            $_SESSION['admin'] = $username;
            echo "<script LANGUAGE='javascript'>window.alert('Login successfully');
            window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Invalid Username or password')</script>";
        }
    }
}
?>

<!-- addbanner -->
<?php
include 'connection.php';


// The below code is used for adding banner name, description and banner image to the database.
if (isset($_POST["save_banner"])) {

    // print_r($_POST);die;
    // Array ( 
    // [banner_name] => Banner3 
    // [banner_desc] => desc3 
    // [save_banner] => save_banner 
    // )

    $banner_name = $_POST["banner_name"];
    $banner_desc = $_POST["banner_desc"];



    // print_r($_FILES['img']);die;
    // Array ( 
    //     [name] => Hulk3.jpg 
    //     [type] => image/jpeg 
    //     [tmp_name] => C:\xampp\tmp\phpDCF6.tmp 
    //     [error] => 0 
    //     [size] => 67820 
    //     )

    $img = $_FILES['img'];
    $imgname = $img['name'];          // Uesd to store image Name i.e Captain1.jpg
    $imgpath = $img['tmp_name'];      // C:\xampp\tmp\phpD1CA.tmp
    $error = $img['error'];           // 0
    if ($error == 0) {
        $final_img = 'img/' . $imgname;     // where img is folder Name
        move_uploaded_file($imgpath, $final_img);
    }

    $sql = "INSERT INTO banner (`banner_name`,`banner_desc`,`banner_img`) values('$banner_name', '$banner_desc', '$final_img')";
    $response = mysqli_query($conn, $sql);

    if ($response == true) {
        echo '<script LANGUAGE="javascript">
        window.alert("Saved Successfully!");
        window.location.href="addbanner.php"
        </script>';
    } else {
        echo '<script LANGUAGE="javascript">
        window.alert("Data Not Saved!");
        window.location.href="addbanner.php"
        </script>';
    }
}

// edit baneer
if (isset($_POST['update_banner'])) {
    // Array ( [update_id] => 6
    // [cust_name] => Rahul Raj [mobile] => 8724354657
    // [address] => Ranchi [email] => [update_cust] => update_cust )
    $update_id = $_POST['update_id'];
    $banner_name = $_POST['banner_name'];
    $banner_desc = $_POST['banner_desc'];

    $img = $_FILES['img'];
    $imgname = $img['name']; // Uesd to store image Name i.e Captain1.jpg
    $imgpath = $img['tmp_name']; // C:\xampp\tmp\phpD1CA.tmp
    $error = $img['error']; // 0
    if ($error == 0) {
        $final_img = 'img/' . $imgname; // where image is folder Name
        move_uploaded_file($imgpath, $final_img);
    }

    //     $sql = "INSERT INTO banner
    // (`banner_name`, `banner_desc`,`img`) values(
    // '$banner_name', '$banner_desc','$final_img')";


    $sql = "UPDATE banner SET banner_name='$banner_name', banner_desc='$banner_desc',banner_img='$final_img' WHERE id='$update_id'";
    // print_r($sql);
    // die;

    $query = mysqli_query($conn, $sql);
    if ($query == true) {
        echo '<script LANGUAGE="javascript">
window.alert("Updated Successfully!");
window.location.href = "addbanner.php"
</script>';
    } else {
        echo '<script LANGUAGE="javascript">
window.alert("Not Updated!");
window.location.href = "addbanner.php"
</script>';
    }
}


// delete
if (isset($_GET['Delcust'])) {



    $delete_id = $_GET['delid'];
    $sql = "UPDATE banner set status='0' where id='$delete_id'";

    $query = mysqli_query($conn, $sql);
    if ($query == true) {
        echo '<script LANGUAGE="javascript">
     window.alert("Delete Successfully!");
     window.location.href="addbanner.php"
     </script>';
    } else {
        echo '<script LANGUAGE="javascript">
     window.alert("Not Deleted!");
     window.location.href="addbanner.php"
     </script>';
    }
}
?>

<!-- book section -->
<?php

include "connection.php";
if (isset($_POST["save"])) {

    // print_r($_POST);die;

    $name = $_POST["name"];
    $mobile = $_POST["mobile"];
    $aadhaar = $_POST["aadhaar"];
    $where = $_POST["place"];
    $quantity = $_POST["quantity"];
    $arrival = $_POST["arrival"];
    $leaving = $_POST["leaving"];
    $details = $_POST["details"];




    $sql = "INSERT INTO booktable (`name`,`mobile`,`aadhaar`,`place`,`quantity`,`arrival`,`leaving`,`details`) values ('$name','$mobile','$aadhaar','$where','$quantity','$arrival','$leaving','$details')";

    // print_r($sql);
    // die;

    $response = mysqli_query($conn, $sql);

    if ($response == true) {
        echo '<script LANGUAGE="javascript">
  window.alert("Booked Successfully!");
  window.location.href="../index.php"
  </script>';
    } else {
        echo '<script LANGUAGE="javascript">
  window.alert(" Not Booked!");
  window.location.href="../index.php"
  </script>';
    }
}

?>

<!-- contact us -->
<?php

include "connection.php";
if (isset($_POST["send"])) {

    // print_r($_POST);die;

    $name = $_POST["name"];
    $mobile = $_POST["number"];
    $aadhaar = $_POST["email"];
    $where = $_POST["detail"];


    // print_r($_sql);
    // die;


    $sql = "INSERT INTO contact (`name`,`number`,`email`,`detail`) values ('$name','$mobile','$aadhaar','$where')";

    // print_r($sql);
    // die;

    $response = mysqli_query($conn, $sql);

    if ($response == true) {
        echo '<script LANGUAGE="javascript">
  window.alert("Sent Successfully!");
  window.location.href="../index.php"
  </script>';
    } else {
        echo '<script LANGUAGE="javascript">
  window.alert(" Not Sent!");
  window.location.href="../index.php"
  </script>';
    }
}

?>