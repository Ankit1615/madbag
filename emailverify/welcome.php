<?php
session_start();
include_once("config.php");
if($_SESSION['login'])
{
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CodeWithSuneja | PHP Email Verification Script </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="http://www.CodeWithSuneja.com">Home</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="http://www.CodeWithSuneja.com">All Demos</a></li>	
			<li><a href="http://www.CodeWithSuneja.com">Contact</a></li>
			
		</ul>
		
	</div>
</nav>

<div class="container-fluid">
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>PHP Email Verification Script </h3>
		<hr >
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
     <tr><th>Welcome :
    <td ><font color="#FF0000"><?php echo $_SESSION['name']; ?></font> ||   <a href="logout.php">Logout</a></td>
  </tr>
  <tr>
    <th height="62" scope="row"> </th>
    <td width="71%"></td>
  </tr>
 
</table>
 </form>
 
      </div>
    </div>
    <hr>
        
   
  </div>
</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
<?php
} else {
header('location:logout.php');	
}

?>