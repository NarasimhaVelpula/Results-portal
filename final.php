<?php
include 'config.php';ini_set('max_execution_time', 300);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}

?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<title>
Welcome to jntuk official
</title>
<style type="text/css">
	body {
		font-family:arial;
		 
	}
	
	</style>
</head>
<body>
 
<center>
<img src="vsm1.jpg" style="position:static;
    top: 0%;
    left: 0%;
    width:50%; height:20%;" alt="Mountain View">
	<img src="exam.jpg" style="position:static;
    top: 0%;
    right: 0%;
    width:20%; height:20%;" alt="Mountain View">
<br>
<br>
<br>

<fieldset style="width:700px; background-color:  #e6faff; color:#0059b3" >
<center>

Description : final Report of a Student
<br>
</center>
</fieldset>
<br>
  
<form action="" method="post">
<tag style="font-weight: bold;">Enter Hall Ticket Number # :</tag>&emsp;<input type="text" name="num" placeholder="hallticket.no" style=" height:35;width:250" >
<button type="submit" name="submit" style="background-color:#0000b3; color:white; font-weight: bold;height:35;width:100;" >SEARCH </button>
<br>
<br>
<br>
</form>

<?php
if(isset($_POST['submit']))

{
	$_SESSION['num']=$_POST['num'];
	if(isset($_POST['num']))
	{
		echo "<script> location.href='fin.php'</script>";
	
	}
}

	
?>







<br>
<h1><p><a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">Logout</a></p> </h1>
</center>
</body>
</html>
