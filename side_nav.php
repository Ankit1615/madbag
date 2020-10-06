<?php
$query = "SELECT * FROM tbl_images WHERE id='$id'";  
$result6 = mysqli_query($conn, $query);  
$row = mysqli_fetch_array($result6) ;
?>

<header>

  
   
      <ul id="nav-mobile" class="sidenav sidenav-fixed">
      <li><div class="user-view">
      <div class="background" >
        <img src="image/doctor.jpg"  width="335" >
      </div>
      <a href="#user"><img class="circle bold" src="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['name']).'';?>" alt="LOGO" onerror="this.onerror=null; this.src='image/hos1.jpg'"></a>
      <a href="#name"><span class="text-dark name bold"><?php echo $row1['hosp_name']; ?></span></a>
     <a href="#email"><span class="text-dark email"> <?php echo $row1['email']; ?></span></a>
    </div></li>
        <li class="bold"><a href="hosp_department.php?hospital=<?php echo $id;?>&id=<?php echo $rand;?>" class="waves-effect waves-teal"><i class="material-icons">assignment</i>Fill Department</a></li>
        <li class="bold"><a href="configure_slot.php?hospital=<?php echo $id;?>&id=<?php echo $rand;?>" class="waves-effect waves-teal"> <i class="material-icons">event_available</i>Configure Slot</a></li>
        <li class="bold"><a href="configure_holiday.php?hospital=<?php echo $id;?>&id=<?php echo $rand;?>" class="waves-effect waves-teal"> <i class="material-icons">assignment_turned_in</i>Configure Holiday</a></li>
        <li class="bold"><a href="appointment_list.php?hospital=<?php echo $id;?>&id=<?php echo $rand;?>" class="waves-effect waves-teal"> <i class="material-icons">event_note</i>Appointment List</a></li>
        <li class="bold"><a href="start_stop_service.php?hospital=<?php echo $id;?>&id=<?php echo $rand;?>" class="waves-effect waves-teal"> <i class="material-icons">transfer_within_a_station</i>Start/Stop Service</a></li>

        <li class="bold"><a href="hosp_logo.php?hospital=<?php echo $id;?>&id=<?php echo $rand;?>" class="waves-effect waves-teal"> <i class="material-icons">add_a_photo</i>Hospital Logo Upload</a></li>
        <li class="bold"><a href="department_defination.php?hospital=<?php echo $id;?>&id=<?php echo $rand;?>" class="waves-effect waves-teal"> <i class="material-icons">event_available</i>Department's & Defination</a></li>
        
        </ul>
                          
    </header>