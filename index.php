<?php
if (isset($_POST['submit'])) {
    include 'db.php';
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">


    <title>Customer Feedback</title>
    <!-- Font-Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- css -->
    <link rel="stylesheet" href="css/style.css">





    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./dropify/dist/css/dropify.css"> -->


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <!-- dropify -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</head>
<style>

    body{
        /* background: rgb(80, 73, 100); */
        background-image: url(galaxy.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }
    #h11{
  animation-name: contain1;
  animation-duration: 3s;
}
@keyframes contain1{
    0% {
        transform: translateX(-50%);
    }
    100%{
        transform: translateX(0%);
    }
}
     #rateh3 {
  animation-name: contain2;
  /* animation-delay: ; */
  animation-iteration-count:inifinite;
} 
 @keyframes contain2 {
    0%{color: #000000;}
    25%{color: #473934;}
    50%{color: #87724e;}
    75%{color: #9e9b46;}
    100%{color: #b3ff00;}
}


</style>

<body>








    <div class="container-fluid ">
        <div class="row">

            <div class="col-10 mx-auto  mt-5 p-4 bound mb-5">
                <div class="col-8 mx-auto">
                    <h2 class="text-center" id="h11"><b>Customer Feedback</b></h2>




                    <form action="feedback_dash.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Mobile</label>
                            <input type="tel" name="mobile" id="mobile" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="name">Company</label>
                            <input type="text" name="company" id="company" class="form-control">
                        </div>

                        <div class="form-group">
                            <h6>upload your Image here</h6>
                            <div class="container" style="width:100%;">
                                <input name="file" type="file" id="file" class="dropify" data-height="150"  />
                            </div>
                            <script>
                                $('.dropify').dropify();
                            </script>
                        </div>
                        <!-- <div class="text-center">
                            <input type="submit" value="Submit" name="submit" class="btn btn-success ">
                        </div> -->





                </div>
                <!-- second container -->


                <div class="col-7 mx-auto mt-5 justofy-content-center">
                    <h3 class="text-center mb-5 mt-2 " id="rateh3"><b>Ratings</b></h3>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <span>Team Leads Response: </span>
                            </div>
                            <div class="col-4">
                                <div id="rateyo"></div>
                                <!-- <input type="text" name="tlr" placeholder="Entery" id=""> -->
                                <input type="hidden" name="rating" id="rating">
                            </div>
                        </div>
                    </div><br>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <span>TAT Time: </span>
                            </div>
                            <div class="col-4">
                                <!-- <input type="text" name="tat" placeholder="Entery" id=""> -->
                                <div id="rateyo1"></div>
                                <input type="hidden" name="rating1" id="rating1">
                            </div>
                        </div>
                    </div><br>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <span>Requirement Analysis: </span>
                            </div>
                            <div class="col-4">
                                <!-- <input type="text" name="ra" placeholder="Entery" id=""> -->
                                <div id="rateyo2"></div>
                                <input type="hidden" name="rating2" id="rating2">

                            </div>
                        </div>
                    </div><br>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <span>Cost Worth: </span>
                            </div>
                            <div class="col-4">
                                <!-- <input type="text" name="cw" placeholder="Entery" id=""> -->
                                <div id="rateyo3"></div>
                                <input type="hidden" name="rating3" id="rating3">

                            </div>
                        </div>
                    </div><br>


                    <div class="form-group">
                        <div class="row">
                            <div class="col-5">
                                <span>Outcome met your requirement: </span>
                            </div>
                            <div class="col-4">
                                <!-- <input type="text" name="omyr" placeholder="Entery" id=""> -->
                                <div id="rateyo4"></div>

                                <input type="hidden" name="rating4" id="rating4">
                            </div>
                        </div>
                    </div><br>


                    <div class="form-group text-center">
                        <input type="submit" value="Submit" class="btn btn-success" name="submit" style="width: 200px">
                    </div>
                </div>
            </div>

            </form>


        </div>
    </div>



    <!-- JavaScript & JQUERY  -->

    <script>
        $(() => {
            $("#rateyo").rateYo({
                onSet: (rating, rateYoInstance) => {
                    console.log("rating")
                    $("#rating").val(rating);
                }
            })

            $("#rateyo1").rateYo({
                onSet: (rating1, rateYoInstance) => {
                    $("#rating1").val(rating1);
                }
            })

            $("#rateyo2").rateYo({
                // fullStar: true,
                onSet: (rating2, rateYoInstance) => {
                    $("#rating2").val(rating2);
                }
            })



            $("#rateyo3").rateYo({
                onSet: (rating3, rateYoInstance) => {
                    $("#rating3").val(rating3);
                }
            })


            $("#rateyo4").rateYo({
                onSet: (rating4, rateYoInstance) => {
                    $("#rating4").val(rating4);
                }
            })


        });
    </script>






    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>