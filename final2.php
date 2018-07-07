<?php
include 'config.php';ini_set('max_execution_time', 300);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}
$num=$_SESSION['username'];
$query="select name from `students infor` where hallno='$num'";

$sql=mysqli_query($con,$query);
while($r=mysqli_fetch_array($sql))
{
	$name=$r[0];
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
Number:<?php echo $num; ?>
</br>
Name: <?php echo $name; ?>
</center>
</fieldset>
<br>
  


<?php
$total1=0;$total2=0;$total3=0;$total4=0;$total5=0;$total6=0;$total7=0;$total8=0;
$temp=0;
$tot=0;


		  echo $pr="<table  style='border:0.1px solid black; font-size:7px;'> <tr style='background-color:#F4F6F6' > <th>Subject code &emsp; </th> <th> Subject Name &emsp; </th> <th> Internals&emsp; </th><th> Externals &emsp; </th><th>Credits</th></tr> ";

		$query="select * from sem1 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
	echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1st year-1st sem</td><td></td><td></td><td></td></center></tr>";
	{
		
	echo $r="<center style='font-weight:bold';>Roll Number- .$num.<center>";
	  $total=0;
	while($result=mysqli_fetch_array($sql))
{
	?>
	
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
$total1=($total/825)*100;
$temp++;
	}
	}
$query="select * from sem2 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
			echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1st year-2nd  sem</td><td></td><td></td><td></td></center></tr>";
	
	$total=0;
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
	$total2=($total/825)*100;
$temp++;

	}
	$query="select * from sem3 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
		echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2nd year-1st sem</td><td></td><td></td><td></td></center></tr>";
	$total=0;
	
	 
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
	$total3=($total/775)*100;
$temp++;

	}
		$query="select * from sem4 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
		$total=0;
	echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;2nd year-2nd sem</td><td></td><td></td><td></td></center></tr>";
	
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
	$total4=($total/725)*100;
$temp++;

	}
		$query="select * from sem5 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
		echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3rd year-1st sem</td><td></td><td></td><td></td></center></tr>";
	$total=0;
	
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
	$total5=($total/775)*100;
$temp++;

	}
		$query="select * from sem6 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
		echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;3rd year-2nd sem</td><td></td><td></td><td></td></center></tr>";
	
	$total=0;
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
	$total6=($total/825)*100;
$temp++;

	}
	
		$query="select * from sem7 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
		echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4th year-1st sem</td><td></td><td></td><td></td></center></tr>";
	$total=0;
	
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
	$total7=($total/800)*100;
$temp++;

	}
		$query="select * from sem8 where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc>0)
	{
		
	echo "<tr style='background-color:black;color:white; font-weight:bold;'><td></td><center> <td >&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;4th year-2nd sem</td><td></td><td></td><td></td></center></tr>";
	$total=0;
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['subcode']; ?>&emsp;</td>
<td><?php echo $result['subject'] ;?>&emsp;</td>
<td><?php echo $result['internal']; $total=$total+$result['internal']; ?>&emsp;</td>
<td><?php echo $result['external']; $total=$total+$result['external']; ?>&emsp;</td>
<td><?php echo $result['credits']; ?>&emsp;</td>
</tr> 
<?php
}
$tot=$tot+$total;
	$total1=($total/600)*100;
$temp++;

	}
	
	
	echo "</table>";
	$total=$total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8;
	$total=$total/$temp;

	
?>
<br>
<br>
<table>
<tr> <td style='background-color:red;color:white; font-weight:bold;'>  Total =<?php echo $tot;  ?> &emsp;</td><td style='background-color:green;color:white; font-weight:bold;'>  Total =<?php echo ($total);  ?> &emsp;</td>  </tr>
</table>;



<br>
<FORM>
<button onclick="myFunction()" class="btn btn-primary button-loading">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>


</form>

<hr>

<br>
<p><a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">logout</a></p> 
</center>
</body>
</html>
