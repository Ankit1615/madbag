<?php
session_start();
include 'config.php';
$id = $_POST['data'];

$q = "SELECT * FROM patient_details WHERE id= $id";
$result = mysqli_query($conn,$q);
$row = mysqli_fetch_assoc($result);

$r = "SELECT * FROM selected_date WHERE patient_id= $id";
$result1 = mysqli_query($conn,$r);
$row1 = mysqli_fetch_assoc($result1);

$i = "SELECT * FROM id_proof WHERE patient_id= $id";
$result2 = mysqli_query($conn,$i);
$row2 = mysqli_fetch_assoc($result2);
?>

    <br>
    <div class="row">
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Patient Name : </b></label> <span> <?php echo $row['intial']." ".$row['fname']." ".$row['middle']." ".$row['lname'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Appointment No. : </b></label> <span> <?php echo $row['token_no'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Date Of Appointment : </b></label> <span> <?php echo $row1['date'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Father Name : </b></label> <span> <?php echo $row['fathername'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> ID Type : </b></label> <span> <?php echo $row2['id_type'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> ID No. : </b></label> <span> <?php echo $row2['id_no'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Email ID : </b></label> <span> <?php echo $row['email'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Mobile No. : </b></label> <span> <?php echo $row['mobile'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Gender : </b></label> <span> <?php echo $row['gender'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Age : </b></label> <span> <?php $today = date("y");echo $row['birthday'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Address : </b></label> <span> <?php echo $row['address'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> State : </b></label> <span> <?php echo $row['state'];?></span>
        </div>
        <div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
        <label for="p1" style="font-size:13px"><b> Pin : </b></label> <span> <?php echo $row['pin'];?></span>
        </div>
        
</div>
<div class="col-12 col-sm-6 col-xs-12 col-md-6 col-lg-6">
            <div class="btn " style="background-color: #5cc1e0;"><a href="appointment_list.php"  class="text-white"> Back</a></div>
        </div>
