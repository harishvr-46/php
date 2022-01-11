<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>register</title>
</head>
<style>
	body{
        /* background: rgb(80, 73, 100); */
		background-image: url(galaxy.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<body>
	<?php 

include 'db.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: adminlogin.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM admin_login WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO admin_login (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

	<div class="container-fluid ">
		<div class="row">

			<div class="col-10 mx-auto  mt-5 p-4 bound mb-5">
				<div class="col-8 mx-auto">

					<form action="" method="POST" class="login-email justify-content-center  ">
						<p class="login-text text-center display-4">Register</p>
						<div class="form-input">
							<input type="text" class="form-control mt-3" placeholder="Username" name="username"
								value="<?php echo $username; ?>" required>
						</div>
						<div class="form-input">
							<input type="email" placeholder="Email" class="form-control mt-3" name="email"
								value="<?php echo $email; ?>" required>
						</div>
						<div class="form-input">
							<input type="password" placeholder="Password" class="form-control mt-3" name="password"
								value="<?php echo $_POST['password']; ?>" required>
						</div>
						<div class="form-input">
							<input type="password" placeholder="Confirm Password " class="form-control mt-3"
								name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
						</div>
						<div class="form-input">
							<button name="submit" class="btn btn-primary mt-3">Register</button>
						</div>
						<p class="login-register-text mt-3">Have an account? <a href="adminlogin.php">Login Here</a>.
						</p>
					</form>



				</div>
			</div>
		</div>
	</div>


	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>