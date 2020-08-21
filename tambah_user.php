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

	<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="#">Sistem Absen</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Data User <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="tambah_user.php">Tambah User</a>
      </li>
      
    </ul>
    
  </div>
</nav>
	<div class="container">
	<div class="row">
	<div class="span2"></div>
	<div class="span8">

	<center><h3>TAMBAH DATA USER</h3>
	<form action="tambah_user2.php" method="post">
		<table width="319" border="0">
			<tr>
				<td width="152">Username</td>
				<td width="157"><input name="username" type="text" id="username" size="20" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input name="password" type="text" id="password" size="20" /></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>
				<select name='level'>
					<option value='user'>User</option>
					<option value='admin'>Admin</option>
				</select>
				</td>
			</tr>
		</table>
	<br/>

		<table width border="0">
			<tr>
				<td width="92"><button class="btn btn-warning" type="submit">Simpan</button></td>
				<td width="92"><a href="index.php" button class="btn btn-warning" type="button">Batal</a></button></td>
			</tr>
		</table>
	</center>
	</form>

	</div>
	</div>
	</div>
</body>
</html>