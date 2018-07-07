<?php
include 'config.php';
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}

?>
<head>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<div class="container">
<div class="jumbotron">
  <h1>HI <?php echo $_SESSION['username'];?></h1> 
  
  <p></p> 
</div>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 
</head>
<body>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
</head>
<body>

<div class="navbar">
  <a href="final.php" >Final Report of Student</a>
 <a href="middetails.php" >MID MARKS  Details</a>
  <a href="semsister.php" >SEMISTER MARKS DETAILS</a>
  <a data-toggle="tooltip" data-placement="top" title="Logout" href="pass1.php">Change password</a>
  <a href="logout.php">logout</a>
</div>
 <div id="wrap">
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>mid marks entry</legend>
						Select the batch by year of entry:&emsp;<select name="opt">
							<option value="">select a batch</option>
							
						<?php $sql="select distinct year from `students infor`";
					$res=mysqli_query($con,$sql);
						while($r=mysqli_fetch_array($res))
						{
							?>
	<option value="<?php echo $r['year'];?>" > <?php echo $r['year'];?></option>
						<?php
						}
						?>
						</select>
						
	
	</br>
	</br>

	Select the semister:&emsp; <select name="sem">
	
	<option value=""> Select Semister</option>
	<?php $sql="select distinct semister from `regulations`";
					$res=mysqli_query($con,$sql);
						while($r=mysqli_fetch_array($res))
						{
							?>
	<option value="<?php echo $r['semister'];?>" > <?php echo $r['semister'];?></option>
						<?php
						}
						?>
	</select>
	</br>
	</br>
	Select the Regulation:&emsp; <select name="reg">
	
	<option value=""> Select Regulation</option>
	<?php $sql="select distinct reg from `regulations`";
					$res=mysqli_query($con,$sql);
						while($r=mysqli_fetch_array($res))
						{
							?>
	<option value="<?php echo $r['reg'];?>" > <?php echo $r['reg'];?></option>
						<?php
						}
						?>
	</select>
	</br>
		</br>
	<input type=submit  name="gd" class="btn btn-success">
	</br>
		</br>
</form>
	<?php 

	?>


</form>
</body>
<div id="wrap">
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>Pass Percentage Details</legend>
						Select the batch by year of entry:&emsp;<select name="y">
							<option value="1">select a batch</option>
							
						<?php $sql="select distinct year from `students infor`";
					$res=mysqli_query($con,$sql);
						while($r=mysqli_fetch_array($res))
						{
							?>
	<option value="<?php echo $r['year'];?>" > <?php echo $r['year'];?></option>
						<?php
						}
						?>
						</select>
						
	
	</br>
	</br>

	Select the semister:&emsp; <select name="s">
	
	<option value="1"> Select Semister</option>
	<option value="sem1"> sem1</option>
	<option value="sem2"> sem2</option>
	<option value="sem3"> sem3</option>
	<option value="sem4"> sem4</option>
	<option value="sem5"> sem5</option>
	<option value="sem6"> sem6</option>
	<option value="sem7"> sem7</option>
	<option value="sem8"> sem8</option>
	</select>
		</br>
	</BR>
	 <input type=submit  name="gdk" class="btn btn-success"></a>
	 
	
		
</form>
<?php
 if(isset($_POST["gd"]))
 {
	 if($_POST['sem']!="")
	 {
	if($_POST['opt']!="")
	{
	if($_POST['reg']!="")
	{
			   
				   $sem=$_POST['sem'];
				   $year=$_POST['opt'];
				    $reg=$_POST['reg'];
				   $_SESSION['sem'] = $sem;
				    $_SESSION['reg'] = $reg;
				    $_SESSION['year'] = $year;
					echo "<script type='text/javascript'>location.href='mid.php';</script>";
	}
	}
	 }
			   }
			   if(isset($_POST['gdk']))
			   {
				   $s=$_POST['s'];
				    $y=$_POST['y'];
					if($s!="1")
					{
						if($y!="1")
						{
							$_SESSION['yy']=$y;
							$_SESSION['ss']=$s;
							echo "<script> location='passper.php' </script>";
						}
					}
			   }
			   ?>