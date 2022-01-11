<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">

  <title>Admin login</title>
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

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: adminpage.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM admin_login WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
  $num = mysqli_num_rows($result);
  if($num == 1){
    header("location: adminpage.php");
  }
  else{
    echo '<script type ="text/JavaScript">';  
    echo 'alert("Wrong Credentials")';  
    echo '</script>';  
  }
}

?>



  <div class="container-fluid ">
    <div class="row">

      <div class="col-10 mx-auto  mt-5 p-4 bound mb-5">
        <div class="col-8 mx-auto">
          <!-- <h2 class="text-center"><b>Rating</b></h2> -->
          <h1 class="page-header my-4">Admin Login </h1>
          <form action="" method="POST">
            <div class="form-input">
              <label for="name">UserName</label>
              <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-input">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" placeholder=" Password">
            </div>

            <div class="row justify-content-center mb-3">
              <button type="submit" name="submit" class="btn btn-success mt-3 justify-content-center">Login</button>

              <!-- <a type="submit" class="" >Login</a> -->

              <a href="register.php" type="button" class="btn btn-primary ml-4 mt-3">Register</a>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>