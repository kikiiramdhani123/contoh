<?php
include("koneksi.php");
$username=$_POST['username'];
$password=$_POST['password'];
$level=$_POST['level'];
$input="insert into user(username,password,level) values ('$username','$password','$level')";
if ($username=="" or $password==""){
	echo '<script type="text/javascript">
		var answer = alert("Data masih belum lengkap")
		window.location = "tambah_user.php";
		</script>';
}
else{
	$hasil=mysqli_query($conn, $input);
	if ($hasil){
		header('location:index.php?update=2');
	}else{
		echo '<script type="text/javascript">
		var answer = alert("Sudah ada user dengan username tersebut")
		window.location = "index.php";
		</script>';
	}
}
?>