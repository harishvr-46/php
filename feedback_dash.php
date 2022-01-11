<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>feedback Dashboard</title>
</head>
<style>
    .row {
        color: black;
    }
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

    if(isset($_POST["submit"])){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $company = $_POST['company'];


        $rating = $_POST['rating'];
        $rating1 = $_POST['rating1'];
        $rating2 = $_POST['rating2'];
        $rating3 = $_POST['rating3'];
        $rating4 = $_POST['rating4'];
        // echo "$username. ':'. $email". ':'. "$mobile". ':'. "$company";

        $files = $_FILES['file']; 
        $filename = $files['name'];
        $fileerror = $files['error'];
        $filetmp = $files['tmp_name'];
        $fileext = explode('.', $filename); 
        $filecheck = strtolower(end($fileext)); 
        $fileextstored = array('png', 'jpg', 'jpeg'); 

        if(in_array($filecheck, $fileextstored)){
            $destination = 'images/updated'.$filename;
            move_uploaded_file($filetmp, $destination);
            // Query to insert name, email, phone, company and Image in DATABASE

            $leftquery = "INSERT INTO `customer_feedback`(`username`, `email`, `mobile`, `company_name`, `image`, `tlr`, `tat`, `ra`, `cw`, `omyr`) VALUES ('$username','$email','$mobile','$company','$destination', '$rating', '$rating1', '$rating2', '$rating3', '$rating4')";
            $leftinsertquery = mysqli_query($conn, $leftquery);

        }

    }
    ?>

    <div class="container">
        <div class="row m-3">
            <div class="col-8 mx-auto mt-5 p-3 bound">

                <h2 class="text-center mt-4 mb-4"><b>Your feedback Details</b></h2>
                <!-- <h4 class="text-center bg-success">Your Details</h4> -->

                <div class="form-group  text-white p-4">

                    <div class="row">
                        <div class="col-6">

                            <div><b> Name</b> </div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo " $username";  ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">

                            <div><b> Email </b></div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo " $email";  ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">

                            <div><b> Mobile </b></div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo " $mobile";  ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">

                            <div><b> Company </b></div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo " $company";  ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div>
                                <b> Team Leads Response</b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo "$rating"; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div>
                                <b> TAT Time </b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo "$rating1"; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div>
                                <b> Requirement Analysis </b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo "$rating2"; ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">
                            <div>
                                <b> Cost Worth </b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo "$rating3"; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div>
                                <b> Outcome Met Your Requirements</b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php echo "$rating4"; ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div>
                                <b>Your Average feedback</b>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-control text-center">
                                <?php $average = ($rating+$rating1+$rating2+$rating3+$rating4)/5; echo $average; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-3 mx-auto">
                        <a href="adminlogin.php" type="button" class="btn btn-primary  mt-5">Admin Login</a>
                    </div>
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