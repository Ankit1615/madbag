
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="HKM">
    <meta name="keyword" content="book bed">
    <title>Hospital Management system</title>
    <link rel="stylesheet" href="main.css">  
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">    
      <!--Import Google Icon Font-->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--cdn of semantic ui-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <!--cdn for bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--font awosome-->
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        <style>
        table tr td{
            text-align: center;
            font-weight:600!important;
            
        }
        .details h3 .rounded{
         text-align: center;
            border-radius:50%!important; 
        }
        
   
@media  (max-width:768px)
{
  
  
}
        </style>
</head>
<body>

<nav >
            <div class="nav-wrapper"  style="background: linear-gradient(to right, #01074c, #1babd7);">
              <a href="index.php" class="brand-logo"><span style="color:blue;">Mad</span><span style="color:red;">Bag+<span></span></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger "><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li ><a href="index.php" style=" text-shadow: 4px 4px 6px #000000;color:white">Home</a></li>
                <li><a href="badges.html">service</a></li>
                <li><a href="faq.html">FAQ</a></li>                
                <li><a href="feedback.php">Feedback form</a></li>
                <li><a href="emergency.php">Emergency</a></li>
                <li ><button style="background:#01074c;"><a href="login_hosp.php" style="color:white;">Login</a></button></li>
              </ul>
            </div>
          </nav>
      
         

        <?php
          include 'nav.php';
        ?>

        <div class="section " style="background-image: url('./image/pattern.png'); font-family: 'Times New Roman', Times, serif;text-align: center;text-transform: capitalize;">
        <?php
        $name = $_GET['hospital'];
        $q = "SELECT * FROM choose_hosp WHERE hosp_name='$name'";
        $result = mysqli_query($conn, $q); 
        $row = mysqli_fetch_assoc($result);
        $dept = $row['id'];
        $q1 = "SELECT * FROM hosp_dept WHERE choose_hosp_id='$dept'";
        $result1 = mysqli_query($conn, $q1); 
        $img = "SELECT * FROM tbl_images WHERE id='$dept'";
        $result2 = mysqli_query($conn, $img); 
        $row2 = mysqli_fetch_assoc($result2);
      
        ?>
        <div class="details m-5 ">
        <div class="">
        <?php 
         echo '            
         <img class="rounded mb-3" height="100"  src="data:image/jpeg;base64,'.base64_encode($row2['name'] ).'" >                                                         
         '; 
         ?>
        <h3><b><?php
        echo $name;?></b></h3>
        <table class="table table-striped mt-5">
        <tr style="font-size:19px;font-weight:900";>
        <th>S NO.</th>
        <th>Content</th>
        <th>Details</th>

        </tr>
        <tr >
        <td>1.</td>
        <td>Hospital Type</td>
        <td><?php echo $row['hosp_type'];?></td>
        </tr>
        <tr >
        <td>2.</td>
        <td> Website</td>
        <td><?php echo $row['hosp_website'];?></td>
        </tr>
        <tr >
        <td>3.</td>
        <td> Category</td>
        <td><?php echo $row['hosp_category'];?></td>
        </tr>
        <tr >
        <td>4.</td>
        <td> Head Officer Name</td>
        <td><?php echo $row['nodal_name'];?></td>
        </tr>
        <tr >
        <td>5.</td>
        <td> Email</td>
        <td><?php echo $row['email'];?></td>
        </tr>
        <tr >
        <td>6.</td>
        <td> Mobile No.</td>
        <td><?php
        if(!empty($row['mobile']))
        echo $row['mobile'];
        else
        echo " --- ";
       ?></td>
        </tr>
        <tr >
        <td>7.</td>
        <td> Land Line No.</td>
        <td><?php 
        if(!empty($row['land_line']))
        echo $row['land_line'];
        else
        echo " --- ";?></td>
        </tr>
        <tr>
        <td>8.</td>
        <td> Address</td>
        <td><?php echo $row['hosp_address'];?></td>
        </tr>
        <tr>
        <td>9.</td>
        <td> Active/Inactive</td>
        <td><?php $ac = $row['enable'];
         if($ac == "yes")
         echo "Currently In Service";
         else 
         echo "Currently Not In Service";        
        ?></td>
        </tr>
        <tr>
        <td>10.</td>
        <td> Department's</td>
        <td >
        
        <?php 
       
        while($row1 = mysqli_fetch_assoc($result1))
        {
        ?>
        <li ><?php echo $row1['dept'];?></li>
        <?php
        }
        ?>
      
        </td>
        </tr>
        <tr>
        </table>
        </div>
        </div>
        </div>
         
<?php include 'footer.php';?>
<script src="main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script src="main.js"></script>
</body>
</html>