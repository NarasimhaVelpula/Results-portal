<?php
include 'config.php';ini_set('max_execution_time', 3000);
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
  <p><a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">logout</a></p> 
  <p><a data-toggle="tooltip" data-placement="top" title="Logout" href="pass.php">Change password</a></p> 
 
</div>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 
</head>
<legend>CREATE  staff USER</legend>
 <form action="" method="post" >
	
	
	<table>
	<tr><td style="padding:10px;">USERNAME:<input type="text" name="user" id="user" required></td></tr>
	 	 
	<tr><td style="padding:10px;">PASSWORD:<input type="password" name="pass" id="pass" required></td></tr>
	</table>
	<button type="submit"class="btn btn-success" name="submit" value="submit" id="submit" >SUBMIT</button>
	</form>
	<?php
	if(isset($_POST['submit']))
	{
		
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$sql="select username from logins where username='$user';";
		$res2=mysqli_query($con,$sql);
		$tem=0;
		$rc1=mysqli_num_rows($res2);
		$sql="select username from stafflogins where username='$user';";
		$res2=mysqli_query($con,$sql);
		
		$rc2=mysqli_num_rows($res2);
		
		if($rc2==0)
		{
		
		
			$sql="insert into stafflogins (username,`password`) values('$user','$pass')"; 
			$res2=mysqli_query($con,$sql);
			if($res2)
			{
				echo "<script>alert('user created succesfully')</script>";
			}
			else
			{
				echo "<script> alert('username not available')</script>";
			}
		}
		else
			echo "<script> alert('username not available')</script>";
		
		}
	
	
			   
            ?>