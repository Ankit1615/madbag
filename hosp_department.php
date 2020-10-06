<?php
include 'config_hosp.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="HKM">
    <meta name="keyword" content="book bed">
    <title>Hospital Management system</title>
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">  
      <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--cdn of semantic ui-->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">
       
        <!--cdn for animate css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
        <!--cdn for bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--font awosome-->
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        <style>
        
    header, main, footer {
      padding-left: 300px;
    }
    .save{
        padding-top:25px;
    }
    
    
    @media only screen and (max-width : 992px) {
      header, main, footer {
        padding-left: 0;        
      }
     .nav-wrapper .header{
          margin-top:8px;
      }
 
    }
    @media  (max-width: 576px)
{
    .save{
        padding-top:0px;
    }
    

}



@media (min-width:576px) and (max-width:768px)
{
    .save{
        padding-top:0px;
    }
    


}

@media (min-width:768px) and (max-width:992px)
{
    .save{
        padding-top:25px;
    }
    
}


@media (min-width:992px) and (max-width:1200px)
{
  
}


        
        </style>
</head>
<body>
    <header>
    <nav class="top-nav" style="background-color: #5cc1e0;">
      <div class="container"><a href="#" data-target="nav-mobile" class="top-nav sidenav-trigger full hide-on-large-only"><i class="material-icons">menu</i></a></div>
        <div class="container">
          <div class="nav-wrapper">
            <div class="row">
              <div class="col s12 m10 offset-m1 ">
                <h1 class="header" Style="font-size:25px"><i class="far fa-check-circle"></i> Fill Department</h1>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>
<?php include 'side_nav.php';?>
    <main>
    <div class="container">
    <div class="card" >
  
  <div class="card-body edit"> 
  <div class="tost"></div>   
    <form method="POST">
  <div class="row ">
  <div class="form-group col-md-6 col-12 col-sm-12">
    <label for="dept">SELECT DEPATRMENT NAME <span style="color:red">*</span></label>
    <select class="form-control" id="dept" >
    <?php 
                 
      $dept = "SELECT * FROM all_dept_name";
      $result3 = mysqli_query($conn,$dept);      
      while($row3 = mysqli_fetch_assoc($result3)) {
                  ?>

            <option value="<?php echo $row3['dept'];?>"><?php echo $row3['dept'];?></option>
                  <?php
      }
                    
    ?>           
    </select>
  </div>
  <div class=" save col-md-6 col-12 col-sm-12 ">    
    <button class="btn" style="background-color: #5cc1e0;" id="save" name="save" >SAVE</button>
  </div>
  </form>
  </div>
  </div>
</div>
</div>
<div class="container">
<div class="card">
  <div class="card-header text-white" style="background-color: #5cc1e0;">
  <i class="far fa-hand-point-down"></i> List Of Existing Departments
  </div>
  <div class="card-body">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">SL No.</th>
      <th scope="col">DEPARTMENT NAME</th>
      <th scope="col">ENABLE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    
   <?php
                         
             
             $s = 0;
             
             if (mysqli_num_rows($result8) > 0) {                      
                while($row=  mysqli_fetch_assoc($result8)) {
                    $dept = $row["dept"];
                    $s++;
                    ?>
                    <tr>
                    <th scope="row"><?php echo $s; ?></th>
                    <td><?php echo $row['dept']; ?></td>
                    <td><?php echo $row['enable']; ?></td>
                    <td><button class="btn" style="background-color: #5cc1e0;" onclick="edit(<?php echo $row['id'];?>)">EDIT</button></td>
                </tr>
        <?php                       

                }

              }                       
              else {
                echo "<span style='color:red;'>No Department Selected.  Please Select Your Department!</span>";
               
              }   
                
             
   ?>
   <div class="rand" style="display:none;">
  <?php echo $rand;?>
  </div>
  <div class="id" id="id" style="display:none;">
  <?php echo $id;?>
  </div>
  </tbody>
</table>
  </div>
</div>
</div>
    </main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
    
    <script src="main.js"></script>
    <script>


function edit(id){
  var rand = $(".rand").text();  
  var input ={
    "id" : id,
    "rand" : rand
  }
  console.log(id);
  console.log(rand);
    $.ajax({
      cache: false,
      type: "POST",
      url: "enable_dept.php",         
      data : input,
      beforeSend: function(){
        $("#save").html("loading..");
      },
      success: function(response){
        $(".edit").html(response);
      }
      
  });

}
       
$("#save").click(function(){

  var dept = $("#dept").find("option:selected").val();
  var data = document.getElementById("id").innerHTML;  
  var input={
    "data": data,
    "dept" : dept
  }
  console.log(dept);
  console.log(data);


    $.ajax({
      type: 'POST',
      url: 'save_dept.php',         
      data :input,
      beforeSend: function(){
        $('#save').html('loading..');
      },
      success: function(response){
        console.log(response);
      }          
      
  });

});        

    </script>
</body>
</html>