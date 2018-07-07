<?php
include 'config.php';
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}
$sem=$_SESSION['sem'];
$year=$_SESSION['year'];
$reg=$_SESSION['reg'];

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
<CENTER><IMG src="vsm1.jpg" ><h2><?php echo $sem ?> Semister MID MARKS ENTRY of <?php echo $year?> Students </H2>
<form action="" method="post">
</br>
</br>
Select Mid &emsp; :<select name="mid" REQUIRED>
<option value=""> select mid </option>
<option value="1" >mid1</option>
<option value="2"> mid2</option>
</select>
</br>
</br>
Select subject:<select name="sub" REQUIRED>
<option value=""> select subject</option>
<?php
$sql="select subjects from `regulations` where semister='".$sem."'and reg='".$reg."'";
					$res=mysqli_query($con,$sql);
						while($r=mysqli_fetch_array($res))
						{
							?>
	<option value="<?php echo $r['subjects'];?>" > <?php echo $r['subjects'];?></option>
						<?php
						}
						?>
	</select>
	</center>
	</br>
	
	<table>
	<tr><th>Hallno</th><th>name</th><th>descriptive</th><th>online</th><th>Assignment </th></tr>
	<?php 
	$sql="select hallno,name from `students infor` where year='".$year."'";
	
	$res=mysqli_query($con,$sql);
	
						while($r=mysqli_fetch_array($res))
						{
							?>
							<tr><td><input type="text"value="<?php echo $r['hallno'] ?>" name="num[]" readonly>&emsp;</td>
							
							<td><input type="text"value="<?php echo $r['name'] ?>" size="35"name="name[]" readonly> &emsp;</td>
							
							<td><input type="number"name="des[]" min="0" max="15"  >&emsp;&emsp;</td>
							<td><input type="number"name="on[]" min="0" max="10" >&emsp;</td>
							
							<td><input type="number"name="ass[]" min="0" max="5" >&emsp;</td></tr>
						<?php
						}
						
?>			
</table>
<input type=submit  name="gd" class="btn btn-success">
</form>		
<?php 
if(isset($_POST['gd']))
{
	
	$num=$_POST['num'];
	$name=$_POST['name'];
	$des=$_POST['des'];
	$on=$_POST['on'];
	$ass=$_POST['ass'];
	$count=count($num);
	$mid=$_POST['mid'];
	$sub=$_POST['sub'];
if($mid!="no")
	{
		
		if($_POST['sub']!="1")
		{
			
	if($sem==1)
	{
		if($mid==1)
			$tab='mid1';
		else
			$tab='mid2';
	}
	if($sem==2)
	{
		if($mid==1)
			$tab='mid3';
		else
			$tab='mid4';
	}
	if($sem==3)
	{
		if($mid==1)
			$tab='mid5';
		else
			$tab='mid6';
	}
	if($sem==4)
	{
		if($mid==1)
			$tab='mid7';
		else
			$tab='mid8';
	}
	if($sem==5)
	{
		if($mid==1)
			$tab='mid9';
		else
			$tab='mid10';
	}
	if($sem==6)
	{
		if($mid==1)
			$tab='mid11';
		else
			$tab='mid12';
	}
	if($sem==7)
	{
		if($mid==1)
			$tab='mid13';
		else
			$tab='mid14';
	}
	if($sem==8)
	{
		if($mid==1)
			$tab='mid15';
		else
			$tab='mid16';
	}
	$i=0;
	while($i<$count)
	{
		$sql="select * from $tab where hallno='$num[$i]' and subject='$sub'";
		$res2=mysqli_query($con,$sql);
		$rc=mysqli_num_rows($res2);
		echo $sql;
		if($rc==0)
		{
		$tot=$des[$i]+$on[$i]+$ass[$i];
		$sql="insert into `".$tab."`(hallno,name,year,subject,descriptive,online,assignment,total) values('$num[$i]','$name[$i]','$year','$sub',$des[$i],$on[$i],$ass[$i]
		,$tot);";
		
		
		$res2=mysqli_query($con,$sql);
		
		}
		else
		{
			$tot=$des[$i]+$on[$i]+$ass[$i];
			$sql="update $tab set descriptive=$des[$i],online=$on[$i],assignment=$ass[$i],total=$tot where hallno='$num[$i]' and subject='$sub'";
			$res2=mysqli_query($con,$sql);
			
		}
		$i++;
	}
		}
	}
	
}
?>
	
<h1><p><a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">Logout</a></p> </h1>