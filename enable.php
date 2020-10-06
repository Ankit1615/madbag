<?php
              include 'config.php';
                $id= $_POST['id'];       
                $edit = $_POST['update'];                
                               
                if($edit == 0){                                                                               
                    $q = "DELETE FROM hosp_dept WHERE id = $id";
                    $result = mysqli_query($conn,$q);  
                                
                }
            
?>
 