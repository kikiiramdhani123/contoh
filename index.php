<!DOCTYPE html>
<html>
<head>
<!-- Bootstrap -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="asset/css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		include("koneksi.php");
	?>

<?php
session_start();
if(isset($_SESSION['sessionLogin'])) {
  
?>
	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Sistem Absen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Data User <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tambah_user.php">Tambah User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="code4.php">Logout</a>
      </li>
      
    </ul>
    
  </div>
</nav>

<center><h1>Selamat Datang, <?php echo $_SESSION['sessionLogin'] ;  ?> di Sistem Absensi SMK Darussa'adah</h1></center>

	<!-- ini adalah kode untuk keterangan berhasil-->
	<div class="span1"></div>
	<div class="span11">
	<center><h3>MANAGE USERS</h3></center>
	<?php if (!empty($_GET['update'])){
	if ($_GET['update']==1)
		echo "<p class='message'> <h4>Data user berhasil diupdate</h4></p>";

	else if ($_GET['update']==2)
		echo "<p class='message'> <h4>Data user berhasil ditambahkan</h4></p>";

	else if ($_GET['update']==3)
		echo "<p class='message'> <h4>Data user berhasil dihapus</h4></p>";
	}?>

	<?php
		$no=1;
		$sqlCount = "select count(username) from user";
		$query = mysqli_query($conn, $sqlCount) or die(mysql_error());
		$rsCount = mysqli_fetch_array($query);
		$banyakData = $rsCount[0];
		$page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 5;
		$mulai_dari = $limit * ($page - 1);
		$sql_limit = "select * from user order by username limit $mulai_dari, $limit";

		$hasil = mysqli_query($conn, $sql_limit) or die(mysql_error());
		if(mysqli_num_rows($hasil)==0){
			echo "<p class='message'>Data tidak ditemukan!</p>";
		}
	?>
	<!-- ini adalah kode HTML untuk membuat tabel -->
	<table class="table table-hover">
		<thead>
			<tr class="success">
			<td>No</td>
			<td>Username</td>
			<td>Password</td>
			<td>Level</td>
			<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				$no=$no+(($page-1)*$limit);
				//Buang field ke dalam array
				while ($data=mysqli_fetch_array($hasil)){
			?>
				<tr class="success">
				<td><?php echo $no;?></td>
				<td><?php echo $data[0]; ?></td>
				<td><?php echo $data[1]; ?></td>
				<td><?php echo $data[2]; ?></td>
				<td>
				<a href= "update_user.php?id='<?php echo

				$data[0];?>'" class="update">Update</a>

				<a href= "hapus_user.php?id=<?php echo $data[0];?>" class="delete" onclick= "return confirm('Anda yakin menghapus data user <?php echo $data[0];?>?')">Hapus</a>
				</td>
				</tr>
			<?php 
				$no++;
				}
			?>
		</tbody>
	</table>

	<?php 
		{}
	?>

	<div class="pagination pagination-right">
	<?php
		$banyakHalaman = ceil($banyakData / $limit);
		echo 'Page ';
		for($i = 1; $i <= $banyakHalaman; $i++){
			if($page != $i){
				echo '<a href="index.php?page='.$i.'">'.$i.'</a> ';
			}else{
				echo "$i ";
			}
		}
	?>
	</div>

	<a href="tambah_user.php" button class="btn btn-warning" type="button">Tambah Data</a></button>

	</div>
	</div>

	<?php
}else{
  echo '<script type="text/javascript">
      alert("Anda Belum Login!");
      window.location.href="code2.php";
    </script>';
}
?>
</body>
</html>