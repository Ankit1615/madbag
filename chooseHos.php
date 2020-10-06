<?php

error_reporting(E_ALL & ~ E_NOTICE);
include 'config.php';
?>


          <div class="main">                         
              <div class="container">
          <div class="card ">
            <div class="card-header text-white " style="background-color: #5cc1e0;">
            <i class="far fa-hospital fa-3x" style="border:none"></i><span class="ml-3" style="font-size: 20px;">Choose Hospital</span>
            </div>
            <div class="row">
            <div class="col-md-6">                
          <form  class="my-3 ml-3  form-group">
              Select Hospital <span style="color: red;">*</span>
              <select class="form-control my-2 mb-4 "  name="hospital" id="hospname" onchange="myfun(this.value)">
              <option value="Select Your Hospital" disabled selected>Select Your Option</option>

              <?php
                $q = "SELECT * FROM choose_hosp WHERE enable='yes' ";
                $result = mysqli_query($conn,$q);
               
                while($rows = mysqli_fetch_array($result))
                {
                ?>
                <option value="<?php echo $rows['id']; ?>"> <?php echo $rows['hosp_name']; ?></option> 
                 <?php
                }
                            
              ?>
                
            </select>
            <div class="" style="display:none;"> <p id="demo" ></p></div>
            Select Department <span style="color: red;">*</span>
              <select class="form-control my-2 mb-3 " id="hospital" name="hospital" >          
                
            </select>
            
           
            
               <input type="button" name="submit" class="btn my-3 " value="PROCCED" style="background-color:#5cc1e0" onclick="choose_hosp()">                             
          </form>        
            </div>
            <div class="col-md-6 ">
            <img src="/image/4447.jpg" height="100%" width="100%" alt="">
            </div>
          </div>
          </div>
         </div>
         </div>
          
    
     
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function myfun(data)
        {
          document.getElementById("demo").innerHTML = data ;
        console.log(data);
            $.ajax({
                url : "choose_database.php",
                type : "POST",
                data : { datavalue: data},
                success : function (result)
                {
                    $("#hospital").html(result);
                }
            });
        }


        
        function choose_hosp()
        {
         
          var hosp_name = $('#hospname').find('option:selected').text();         
          var hosp_dept = $("#hospital").find("option:selected").text();
          var dept = $("#hospital").find("option:selected").val();
          var data=$("#demo").text();
          console.log(data);
          console.log(dept);
          console.log(hosp_dept);   
          var input = {
          "hosp_name": hosp_name,
          "hosp_dept" : hosp_dept,
          "data":data
          };

          $.ajax({
            type: "POST",
            url: "selected_hosp.php",    
            cache: false,
            data : input,
            beforeSend: function(){
              $("#submit").text("Loading...");
            },
            success: function(response){            
              window.location.href = "calender.php?hospital=" + dept + "&dept=" + hosp_dept;

             
            }
  });
}



    </script>

