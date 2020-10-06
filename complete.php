 <?php
                    session_start();
                   include 'config.php';
                    echo $_SESSION['proof'];
                    
                    ?>

        
        <style>
          .back:hover{
            color:white;
          }
        </style>
    
 
        
                  <div class="row">
                    
          <div class="col-12 col-md-12 col-lg-12 col-sm-12 ">
            <div class="card">
                <div class="card-header" style="background-color: #5cc1e0;">
                   Confirmation details
                </div>
                <br>
                <div class="card-body verify">
               
                  <?php                                                                               
                    $q = "SELECT id FROM patient_details WHERE id = (SELECT MAX(id) FROM patient_details)";
                    $result = mysqli_query($conn, $q);
                    if (mysqli_num_rows($result) > 0) {                      
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row["id"];
                        }
                      
                        $patient = "SELECT * FROM patient_details WHERE id = $id";                        
                        $res = mysqli_query($conn, $patient);
                        $row1 = mysqli_fetch_assoc($res);  
                        $patient_id = $row1['id']; 
                                        
                      }                       
                      else {
                        echo "0 results";
                      }          
                      //<?php echo $row1['fname']; echo " "; echo $row1['middle']; echo " "; echo $row1['lname'];        
                      
                  ?>
                         <div class="row">                        
                         <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                         <div id="content">
                <p class="card-text "> <b>Appointment No. : </b><?php  echo $row1['token_no']; ?></p>
                <p class="card-text "> <b>Patient Name : </b><?php echo $row1['intial'];echo " "; echo $row1['fname']; echo " "; echo $row1['middle']; echo " "; echo $row1['lname'];  ?></p>
                <p class="card-text "> <b>Gender : </b><?php  echo $row1['gender']; ?></p>
                <p class="card-text "> <b>Age : </b><?php 
                                                                $dob=$row1['birthday'];
                                                                $diff = (date('Y') - date('Y',strtotime($dob)));
                                                                echo $diff; echo " "; echo "years";
                                                              ?></p>
                <p class="card-text "> <b>Father Name : </b><?php echo $row1['fathername']; ?> </p>               
                <p class="card-text "> <b>Mobile No. : </b><?php echo $row1['mobile']; ?> </p>
                <p class="card-text "> <b>Address : </b><?php echo $row1['address'];echo ", "; echo $row1['state']; echo ", "; echo $row1['pin']; ?> </p>
                      </div>
                </div>                
                <div class="col-12 col-md-6 col-lg-6 col-sm-12">
                <div id="content-2">
                <?php
                  
                       $hosp = "SELECT * FROM selected_h WHERE id = '$patient_id'";
                       $res2 = mysqli_query($conn, $hosp);
                       $hos = mysqli_fetch_assoc($res2); 
                          
                               
                ?>
                <p class="card-text "> <b>Hospital Name : </b><?php  echo $hos['hosp_name']; ?></p>
                <p class="card-text "> <b>Hospital Department : </b><?php echo $hos['hosp_dept'];?></p>
                <?php

                        $book = "SELECT * FROM selected_date WHERE patient_id = $patient_id";
                        $res3 = mysqli_query($conn, $book);
                        $date = mysqli_fetch_assoc($res3); 
                            

                ?>        
                <p class="card-text "> <b>Date Of Appointment : </b><?php  $Date = $date['date'];;
                                                              $new = date("d/m/Y", strtotime($Date));
                                                              echo  $new;
                                                              ?> </p>
                <?php

                
                      $id = "SELECT * FROM id_proof WHERE patient_id = $patient_id";
                      $res4 = mysqli_query($conn, $id);
                      $proof = mysqli_fetch_assoc($res4); 
                          

                ?>
                <p class="card-text "> <b>ID Type : </b><?php echo $proof['id_type']; ?> </p>
                <p class="card-text "> <b>ID No. : </b><?php echo $proof['id_no']; ?> </p>
                <p class="card-text "> <b>Email ID : </b><?php echo $row1['email']; ?> </p>
                </div> 
                <div id="content-3" style="display:none;">
                  <p><b>Please should bring neccsessay documents indicating refferals without which appointment shall stand canceled.</b></p>
                </div> 
                </div>
                </div>
                  
                                                   
                  <form >
                      
                      <a href="appointment.php" class="btn back"  style="background-color: #5cc1e0;text-decoration:none;">Back</a>
                      <input type="button" class="btn" onclick="convert_html()"  style="background-color: #5cc1e0;" value="Print PDF" >
                  </form>
                  
                </div>
              </div>
          </div>
        </div>
    </div>
    </div>
    
      
    <script>
   
   function convert_html()
   {
       var doc = new jsPDF();
       doc.setFontSize(25)
doc.setTextColor(0, 0, 255)
doc.text(85, 25, 'Mad')
doc.setTextColor(255, 0, 0)

doc.text(102, 25, 'Bag')

doc.setFontSize(15)
doc.setTextColor(0, 0, 0)
doc.text(60, 35, 'We’re Right Where You Need Us.')

doc.setFontSize(15)
doc.setTextColor(0, 0, 0)
doc.line(78, 57, 132, 57)
doc.text(80, 55, 'APPOINTMENT SLIP')

       var elementHTML = $('#content').html();
      
       doc.fromHTML(elementHTML,10,70,{
           'width' : 170
           
       });

       var elementHTML2 = $('#content-2').html();
      
      doc.fromHTML(elementHTML2,120,70,{
          'width' : 170
          
      });
      var elementHTML2 = $('#content-3').html();
      
      doc.fromHTML(elementHTML2,8,250,{
          'width' : 170
          
      });
     doc.setFontSize(10)
doc.setTextColor(0, 0, 0)
doc.text(3, 275, 'Print out the appointment slipis preferred but not essential.However having your appointment number is essential.You are requested ')
doc.setFontSize(10)
doc.setTextColor(0, 0, 0)
doc.text(3, 280, 'to visit the hospital registration counter for check-in as per the date and time given above.In case you are not able to report on ')
doc.setFontSize(10)
doc.setTextColor(0, 0, 0)
doc.text(3, 285, 'the day of appointment,please cancel the appointment online at least one day prior to day of appointment.')
       doc.save('sample.pdf');
       }
   
   </script>
<script src="jsPDF/dist/jspdf.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>