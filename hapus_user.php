<?php
include("koneksi.php");
$id=$_GET['id'];
$query = mysqli_query($conn,"delete from user where username='$id'") or die(mysql_error());
//kembali ke halaman user.php
header('location:index.php?update=3');
exit;
?>