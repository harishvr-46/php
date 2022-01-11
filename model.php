<?php 
include 'db.php';
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $displayquery = "SELECT * FROM customer_feedback where id='$id'";
    $res = mysqli_query($conn, $displayquery) or die("error");

    if(mysqli_num_rows($res)>0){

        while($row = mysqli_fetch_array($res)){
            $average = (($row['tlr']+$row['tat']+$row['ra']+$row['cw']+$row['omyr'])/5);
            $status = $row['status'];
            $data ='<table class="table table-bordered table-striped table-dark">
            <tr>
            <th>Name 
            <td>'.$row['username'].'</td>
            </th>
            </tr>
            <tr>
            <th>Email
             <td>'.$row['email'].'</td>
             </th>
            </tr>
            <tr>
            <th>Mobile 
            <td>'.$row['mobile'].'</td>
            </th>
            </tr>
            <tr>
            <th>Company 
            <td>'.$row['company_name'].'</td>
            </th>
            </tr>
            <tr>
            <th>Team Lead Response</th>
            <td>
            <div id="rateyo"></div>
            <script>
                $("#rateyo").rateYo({
                    rating: '.$row['tlr'].'
            })
            </script>
            </td>
            </tr>
            
            <tr>
            <th>TAT Time</th>
            <td>
            <div id="rateyo1"></div>
            <script>
                $("#rateyo1").rateYo({
                    rating: '.$row['tat'].'
            })
            </script>
            </td>
            </tr>
            <tr>
            <th>Requirement Analysis</th>
            <td>
            <div id="rateyo2"></div>
            <script>
                $("#rateyo2").rateYo({
                    rating: '.$row['ra'].'
            })
            </script>
            </td>
            </tr>
            <tr>
            <th>Cost Worth</th>
            <td>
            <div id="rateyo3"></div>
            <script>
                $("#rateyo3").rateYo({
                    rating: '.$row['cw'].'
            })
            </script>
            </td>
            </tr>
            <tr>
            <th>Output Met Your Requirement</th>
            <td>
            <div id="rateyo4"></div>
                <script>
                    $("#rateyo4").rateYo({
                        rating: '.$row['omyr'].'
                })
                </script>
            </td>
            </tr>
            <tr>
            <th>Average Rating</th>
            <td>
            <div id="rateyo5"></div>
                <script>
                    $("#rateyo5").rateYo({
                        rating: '.$average.'
                    })
                </script>
            </td>
            </tr>
           
            <tr>
            <th>Status</th>
            <td id="status_code">
            <script type="text/javascript">
                if ('.$status.' == "0") {
                    document.getElementById("status_code").innerHTML = "<span>Pending</span>"
                }
                else if ('.$status.' == "1") {
                    document.getElementById("status_code").innerHTML = "<span>Approved</span>"
                }
                else if ('.$status.' == "-1") {
                    document.getElementById("status_code").innerHTML = "<span>Disapproved</span>"
                }
            </script>
            </td>
            </tr>
            ';
            $data .= '
            
            <td>
            <button type="button" class="btn btn-success" onclick="Approve('.$row['id'].')">Approve</button>
            
            <button type="button" class="btn btn-secondary" onclick="DisApprove('.$row['id'].')">Disapprove</button>
            </td>
            <td>
            <button type="button" class="btn btn-danger" onclick="DeleteUser('.$row['id'].')">Delete</button>
            </td>
           
            
             ';
            $data .= '</table>';
             echo $data;
        }
    }
    }


    //Delete USER RECORDS
    if(isset($_POST['deleteid'])){
        $userid = $_POST['deleteid'];
        $deletequery = "DELETE FROM `customer_feedback` WHERE id='$userid'";
        mysqli_query($conn, $deletequery);
    }


    //Approve User Details
    if(isset($_POST['approveid'])){
        $approveid = $_POST['approveid'];
        $approvequery = "UPDATE `customer_feedback` SET `status`='1' WHERE id='$approveid'";
        $res = mysqli_query($conn, $approvequery);
        if($res){
            echo "Successfully Approved";
        }
    }
    
    
    //Disapprove User Details
    if(isset($_POST['disapproveid'])){
        $disapproveid = $_POST['disapproveid'];
        $disapprovequery = "UPDATE `customer_feedback` SET `status`='-1' WHERE id='$disapproveid'";
        $res = mysqli_query($conn, $disapprovequery);
        if($res){
            echo "Successfully DisApproved";
        }
    }