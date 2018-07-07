<?php
include 'config.php';ini_set('max_execution_time', 300);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}
$ref=$_GET['ref'];
$val=$_GET['val'];
$tot=$_GET['tot'];
$num=$_SESSION['username'];
$tot=$_GET['tot'];

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

Description : Result of <?php echo $ref;?> B.Tech (R13) <?php echo $val; ?> Semester Regular/Supply Examinations NOV-2017
<br>
</center>
</fieldset>
<br>
  


<?php

	if($val=='I')
	{
		if($ref=='I')
			$tab='sem1';
		if($ref=='II')
			$tab='sem3';
		if($ref=='III')
			$tab='sem5';
		if($ref=='IV')
			$tab='sem7';
	}
	if($val=='II')
	{
		if($ref=='I')
			$tab='sem2';
		if($ref=='II')
			$tab='sem4';
		if($ref=='III')
			$tab='sem6';
		if($ref=='IV')
			$tab='sem8';
	}
	
	$query="select * from $tab where hallno='$num'";
	$sql=mysqli_query($con,$query);
	@$rc=mysqli_num_rows($sql);
	if($rc==0)
		echo "<h2>invalid number</h2>";
	else
	{
		
	echo $r="<center style='font-weight:bold';> .$num.<center>";
	  echo $pr="<table  style='border:0.1px solid black;'> <tr style='background-color:#F4F6F6' > <th>Subject code &emsp; </th> <th> Subject Name &emsp; </th> <th> Internals&emsp; </th><th> Externals &emsp; </th><th>Credits</th></tr> ";
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

echo "</table>";
?>
<br>
<br>
<table>
<tr> <td style='background-color:red;color:white; font-weight:bold;'>  Total =<?php echo $total  ?> &emsp;</td> <td style='background-color:green;color:white; font-weight:bold;'>  PERCENTAGE=<?php echo (($total/$tot)*100)  ?> &emsp;</td> </tr>
</table>;
<?php
	}


?>


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
© Nani Narasimha. All Rights Reserved.
</center>
</body>
</html>
