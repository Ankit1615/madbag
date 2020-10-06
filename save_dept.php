<?php
           include 'config.php';
                $id=$_POST['data'];
                $dept = $_POST['dept'];               
                 $hosp1 = "SELECT * FROM hosp_dept WHERE choose_hosp_id=$id AND dept='$dept'";
                 $result1 = mysqli_query($conn,$hosp1);
                 if (mysqli_num_rows($result1) == 0) {
                    $q = "INSERT INTO hosp_dept (choose_hosp_id,dept,enable)
                    VALUES ($id, '$dept','Yes')";                    
                    $result = mysqli_query($conn, $q);                    
                 }                
                        
                 else{
                     echo "<div class='alert alert-danger' role='alert'>
                     This is Allready choosen.
                   </div>";               
                 }
            
?>
 