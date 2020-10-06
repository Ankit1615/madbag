<?php
               include 'config.php';
               $service = $_POST['service'];
               $id = $_POST['data'];
               $q="UPDATE choose_hosp SET  enable='$service' WHERE id = $id ";
               $result = mysqli_query($conn, $q);
               if($result){
                   echo "yes";
               }
               else
               {
                   echo "no";
               }

 ?>              