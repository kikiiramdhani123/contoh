<?php
include("koneksi.php");
//ambil nilai variabel no yang diambil dari form POST
$no=$_POST['no'];
$username=$_POST['username'];
$username2=$_POST['username2'];
$password=$_POST['password'];
$level=$_POST['level'];
$sql="UPDATE user SET username='$username', password='$password', level='$level' WHERE username='$username2'";
//lakukan query update
if(empty($username)){
	echo "<p class='message'>Gagal : Username tidak boleh kosong</p>";?>
	<a href='update_user.php?id=<?php echo $no;?>'class='back'>Batal</a>
	<?php
}
else{
	$update = mysqli_query($conn, $sql);
	if($update){
		header('location:index.php?update=1');
		//echo $sql;
	}
	else{
		echo "<p class='message'>Gagal: sudah ada data ".$username."</p>";?>
		<br />
		<a href="update_user.php?id=<?php echo $no;?>" class="back">Batal</a>
		<?php 
	}
}
?>