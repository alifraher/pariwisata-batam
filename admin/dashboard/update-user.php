<<<<<<< HEAD
<?php
include "../koneksi.php";
$user_id       = $_POST['user_id'];
$username      = $_POST['username'];
$password      = $_POST['password'];
$fullname      = $_POST['fullname'];
$no_hp         = $_POST['no_hp'];

$query = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', fullname='$fullname', no_hp='$no_hp' WHERE user_id='$user_id'")or die(mysql_error());
if ($query){
header('location:user.php');	
} else {
	echo "gagal";
    }
=======
<?php
include "../koneksi.php";
$user_id       = $_POST['user_id'];
$username      = $_POST['username'];
$password      = $_POST['password'];
$fullname      = $_POST['fullname'];
$no_hp         = $_POST['no_hp'];

$query = mysqli_query($koneksi, "UPDATE user SET username='$username', password='$password', fullname='$fullname', no_hp='$no_hp' WHERE user_id='$user_id'")or die(mysql_error());
if ($query){
header('location:user.php');	
} else {
	echo "gagal";
    }
>>>>>>> f7976112f70f9e8d744805a8661a87c7bf4047b6
?>