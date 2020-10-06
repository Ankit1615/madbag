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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"> 
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"> 
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
                <h1 class="header" Style="font-size:25px"><i class="far fa-check-circle"></i> Start & Stop Service</h1>
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
    
  <div class="card-body">
  <div class="con">
  </div>
  <div class="row">
  <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
  
  <label for="dept">SELECT YOUR OPTIONS <span style="color:red">*</span></label>
  <select class="form-control" id="dept" >
  <option value="" selected>Select Your Option</option>
    <option value="yes">YES</option>
    <option value="no">NO</option>
  </select>
  </div>
  <div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4">
  <input type="button" class="btn" id="btn" value="SAVE" style="background-color: #5cc1e0;" onclick="save(<?php echo $id;?>)">
  </div>
  </div>
  <div>
  <label for="">YES :- MEANS START THE SERVICE .</label>
  </div>
  <div>
  <label for="">NO :- MEANS STOP THE SERVICE .</label>
  </div>
  </div>
  </div>
  </div>    
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="main.js"></script>
    <script>
    function save(data){
        var service = $("#dept").find("option:selected").val(); 
        console.log(service);
        if(service == ""){             
            $(".con").html("<div class='alert alert-danger' role='alert'>Please select the option!</div>");
}
else{
    var input = {
        "service" :service,
        "data" :data
    }
    $.ajax({
      type: "POST",
      url: "service.php",         
      data : input,
      beforeSend: function(){
        $("#btn").html("loading..");
      },
      success: function(response){
        $(".con").html("<div class='alert alert-success' role='alert'>Your response is successfully updated!</div>");
      }
      
  });
}

    }
    </script>
    </body>
    </html>