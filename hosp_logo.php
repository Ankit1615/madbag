<?php
session_start();
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">

    <link href="styles.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="multidatespicker.js" type="text/javascript"></script>


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
    .card  #insert
      {
          margin-top:12px;
          
         
      }

}



@media (min-width:576px) and (max-width:768px)
{
    .save{
        padding-top:0px;
    }
    .card  #insert
      {
          margin-top:12px;
         
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
                <h1 class="header" Style="font-size:25px"><i class="far fa-check-circle"></i> Hospital Logo</h1>
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
    <div class="card-header text-white" style="background-color: #5cc1e0;">
  <i class="far fa-hand-point-down"></i> Upload Images
  </div>
  <div class="card-body patient"  > 

  <form method="post" enctype="multipart/form-data">  
  <div class="row">
  <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xs-12 col-xl-6">
  <input type="file" name="image" id="image" /> 
</div>
<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xs-12 col-xl-6">              
    <input type="submit" name="insert" id="insert" value="Insert" class="btn " onclick="insert()" style="background-color: #5cc1e0;" />  
</div>
</div>
             
                </form>  
                <br />  
                <br />  
              <div class="image">
              <?php
if(isset($_POST["insert"]))  
{      
     $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
     $query = " UPDATE tbl_images SET  name='$file' WHERE id = $id "; 
    
     if(mysqli_query($conn, $query))  
     {  
          echo '<script>window.location.assign("hosp_logo.php?hospital='.$id.'.&id='.$rand.'")</script>';  
     }  
}
 
                 
     echo '            
     <img class="ui medium  image" src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" style="width:450px;height:300px;">                                  
                   
     ';  

              ?>
              </div>
              

  </div>
  </div>
  </div>
  
    </main>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--cdn of javascript for semantic ui--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.js"></script>
    <script src="main.js"></script>
    <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 }); 

 </script> 
    </body>
    </html>