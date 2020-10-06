<?php 
             
        
     
               $query = "SELECT * FROM tbl_images";  
               $result = mysqli_query($conn, $query);  
               $row = mysqli_fetch_array($result) ;                 
                    echo '            
                    <img class="ui medium  image" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" style="width:450px;height:200px;">                                  
                                  
                    ';  
               
               ?>  