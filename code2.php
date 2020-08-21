<?php
include("koneksi.php");
session_start();
if(isset($_POST['Login'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$data = mysqli_query($conn, "SELECT * from user ");

	while ($d=mysqli_fetch_array($data)) {
		if($user == $d['username'] && $pass == $d['password']){
			$_SESSION['sessionLogin'] = $user;
			header("location:index.php");
		} 
		else {
			echo '
			<script type="text/javascript">
				alert("Username dan password salah!");
				window.location.href="code2.php";
			</script> ';	
		}
	}
	
} else {
?>
	<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</head>
	<body background="image/bg.png">
		
		
		<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<center><h1>FORM LOGIN</h1></center>
			<table width="319" border="0" class="table table-dark">
				<tr>
					<td width="152">Username</td>
					<td width="157"><input class="form-control" type="text" name="user"></td>
				</tr>
				<tr>
					<td width="152">Password</td>
					<td width="157"><input class="form-control" type="password" name="pass"></td>
				</tr>
				<tr>
					<td width="92"><button class="btn btn-warning" type="submit" class="btn btn-primary" name="Login">Login</button></td>
					<td width="92"><a href="index.php" button class="btn btn-warning" type="button">Batal</a></button></td>
				</tr>
			</table>

<br>


		</form>
		</div>
	</div>
</div>		
		</form>		
	</body>
	</html>
<?php
}
?>