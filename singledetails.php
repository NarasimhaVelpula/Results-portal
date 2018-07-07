<?php
include 'config.php';
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}

$m=$_SESSION['mm'];
$s=$_SESSION['ms'];
$num=$_SESSION['username'];
?>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<title>
mid details
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

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 
</head>
<body>
<?php
if($s=="1")
{
	if($m=='m1')
		$tab="mid1";
	else
		$tab="mid2";
}
if($s=="2")
{
	if($m=='m1')
		$tab="mid3";
	else
		$tab="mid4";
}
if($s=="3")
{
	if($m=='m1')
		$tab="mid5";
	else
		$tab="mid6";
}
if($s=="4")
{
	if($m=='m1')
		$tab="mid7";
	else
		$tab="mid8";
}
if($s=="5")
{
	if($m=='m1')
		$tab="mid9";
	else
		$tab="mid10";
}
if($s=="6")
{
	if($m='m1')
		$tab="mid11";
	else
		$tab="mid12";
}
if($s=="7")
{
	if($m=='m1')
		$tab="mid13";
	else
		$tab="mid14";
}
if($s=="8")
{
	if($m=='m1')
		$tab="mid15";
	else
		$tab="mid16";
}
{
	
	
	
		  echo $pr="<table  style='border:0.1px solid black;'> <tr style='background-color:#F4F6F6' > <th>hallno &emsp; </th> <th> name &emsp; </th> <th> subject &emsp; </th><th> Descriptive &emsp; </th><th>online &emsp;</th><th>Assignment &emsp;</th><th>Total &emsp;</th></tr> ";

	$query="select * from $tab where hallno='$num' ";

	$sql=mysqli_query($con,$query);
	
	{
		
	
	while($result=mysqli_fetch_array($sql))
{
	?>
	<tr>
<td><?php echo $result['hallno']; ?>&emsp;</td>
<td><?php echo $result['name'] ;?>&emsp;</td>
<td><?php echo $result['subject'];  ?>&emsp;</td>
<td><?php echo $result['descriptive'];  ?>&emsp;</td>
<td><?php echo $result['online']; ?>&emsp;</td>
<td><?php echo $result['assignment']; ?>&emsp;</td>
<td><?php echo $result['total']; ?>&emsp;</td>
</tr> 
<?php
}
	}
	
	}
	?>
	</table>
</body>
</br>
</br>
<center>
<FORM>
<button onclick="myFunction()" class="btn btn-primary button-loading">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>


</form>
</center>
