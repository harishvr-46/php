<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <link rel="stylesheet" href="./css/style.css">
    <!--  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!--  -->
    <!-- AJAX -->
    <script src="./js/jquery-3.6.0.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <title>Admin Panel</title>
</head>

<body>
    <div class="container-fluid m-0 p-0">
        <h1 class="text-center  text-light p-3 m-0 "
            style="background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(180,180,179,0.9724264705882353) 100%, rgba(0,212,255,1) 100%);"><b> Feedback Submissions</b></h1>
        <div class="table-responsive">
            <table class="table  table-dark table-striped table-hover ">
                <thead class=" bg-secondary">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Phone</th>
                    <th>Company</th> -->
                    <th class="text-center">Image</th>
                    <th class="text-center">Feedback</th>
                    <!-- <th>Delete</th> -->
                </thead>
                <tbody>
                    <?php
                    include 'db.php';
                    $displayquery = "SELECT * FROM customer_feedback";
                    $query = mysqli_query($conn, $displayquery);
                    $number = 1;
                    while ($result = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td>
                            <?php echo $number; ?>
                        </td>
                        <td>
                            <?php echo $result['username']; ?>
                        </td>
                        <td>
                            <?php echo $result['email']; ?>
                        </td>
                        <!-- <td>
                                <?php echo $result['mobile']; ?>
                            </td>
                            <td>
                                <?php echo $result['company_name']; ?>
                            </td> -->
                        <td class="text-center">
                            <img class="img" src="<?php echo $result['image']; ?>" alt="" width="150px" height="150px">
                        </td>
                        <td class=" text-center">
                            <button type="button" class="btn btn-success btn-modal" data-toggle="modal"
                                data-id="<?php echo $result['id']; ?>" data-target="#exampleModal">
                                Details
                            </button>
                            <!-- <button class="btn btn-danger delete-btn" data-ids="<?php echo $result['id'];?>" >Delete</button> -->
                            <!-- </td>
							 <?//php echo $result['status']; ?>
                            <td>  -->
                        </td>
                    </tr>
                    <?php
                    $number++;
                    }
                    ?>
                </tbody>
            </table>
            <div class="show">

            </div>
        </div>
    </div>



    <!-- Modal begining -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Feedback Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div id="modal" class="modal-body">

                    <div id="records_content"></div>

                </div>
                <div class="modal-footer">
                     <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> --> 

<!--                           
            <button type="button" class="btn btn-success" onclick="Approve('.$row['id'].')">Approve</button>
            
            <button type="button" class="btn btn-warning" onclick="DisApprove('.$row['id'].')">Disapprove</button>
           
            <button type="button" class="btn btn-danger" onclick="DeleteUser('.$row['id'].')">Delete</button>  -->

                </div> 
            </div>
        </div>
    </div>
    <!-- model ending -->

    <!-- Optional JavaScript -->
    <script>
        //AJAX CODE to view data in MODAL
        $("body").delegate(".btn-modal", "click", function () {
            var request = { id: $(this).attr('data-id') };
            //    var request={ id: $(this).data('id') };  //you could also use this
            $.ajax({
                url: "model.php",
                data: request,
                dataType: "html",
                type: 'POST',
                success: function (data) {
                    $("#records_content").html(data);
                },
            });
        });


        // AJAX CODE to delete the entry
        function DeleteUser(deleteid) {
            var conf = confirm("Are you sure you want to delete?");
            if (conf == true) {
                $.ajax({
                    url: "model.php",
                    type: "post",
                    data: { deleteid: deleteid },
                    success: (data, status) => {
                        location.reload();
                    }
                })
            }
        }



        //CODE to APPROVE
        function Approve(approveid) {
            var conf = confirm("Are you sure you want to approve?");
            if (conf == true) {
                $.ajax({
                    url: "model.php",
                    type: "post",
                    data: { approveid: approveid },
                    success: (data, status) => {
                        location.reload();
                    }
                })
            }
        }

        //CODE to DISAPPROVE
        function DisApprove(disapproveid) {
            var conf = confirm("Are you sure you want to Disapprove?");
            if (conf == true) {
                $.ajax({
                    url: "model.php",
                    type: "post",
                    data: { disapproveid: disapproveid },
                    success: (data, status) => {
                        location.reload();
                    }
                })
            }
        }
    </script>
</body>

</html>