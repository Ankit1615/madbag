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
                <h1 class="header" Style="font-size:25px"><i class="far fa-check-circle"></i> Department's & Defination</h1>
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
  <i class="far fa-hand-point-down"></i> List Of Existing Departments
  </div>
  <div class="card-body patient"  > 
  <table id="example" class="table table-striped" >
  <thead>
            <tr>
                <th>S NO. </th>
                <th>Department</th>
                <th>Defination</th>                                                
            </tr>
        </thead>
        <tbody>
            <?php
              $s=0;             
              
                $p = "SELECT * FROM all_dept_name";
                $result3 = mysqli_query($conn, $p);            
               
                    while($row3 = mysqli_fetch_assoc($result3))
                     {
                        $s++;
                                                                                                                                                                                                  
                        ?>

                        <tr>
                <td><?php echo "<b>".$s."</b>";?> </td>
                <td><?php echo "<b style='font-weight:550'>".$row3['dept']."<b>";?></td>                
                <td><?php echo $row3['defination'];?></td>                  
            </tr>
            <?php
                        
                     
                    }
                   
            ?>
           
           
  </tbody>
</table>
 

</main>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="main.js"></script>
    <script>
      
        $(document).ready(function() {
            $('#example').DataTable();
        } );
</script>
</body>
</html>