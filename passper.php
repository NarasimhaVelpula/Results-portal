<?php
include 'config.php';
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}
$sem=$_SESSION['ss'];
$yy=$_SESSION['yy'];
$yyy=substr($yy,2,2);
	$y=$yyy+1;

?>

<center><img src="vsm1.jpg" alt="Mountain View" style="width:300px; height:100px;">   
<form action="" method="post" >

Select the subject:&emsp;<select name="opt">
	<option value="" class="input-large">select a subject</option>
	<?php 

	$query="SELECT distinct subcode,subject from $sem where (substr(hallno,1,2)='$yyy' or (substr(hallno,1,2)='$y' and substr(hallno,4,2)='5A')) ";
	
	$sql=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($sql))
	{
		?>
		<option value="<?php echo $row[0];?>"><?php echo $row[0]; echo ":"; echo $row[1];  ?></option>
	<?php
	}
	
	?>
</select>
<input type=submit  name="gd" class="btn btn-success">
</form>
</center>
<?php

if(isset($_POST['gd']))
{
	
	
	$opt=$_POST['opt'];
	$query="select * from $sem where subcode='$opt' and credits>0  and (substr(hallno,1,2)='$yyy' or (substr(hallno,1,2)='$y' and substr(hallno,4,2)='95')) ";
	$sql=mysqli_query($con,$query);
	$rc1=mysqli_num_rows($sql);

	$query="select * from $sem where subcode='$opt' and credits<=0 and (substr(hallno,1,2)='$yyy' or (substr(hallno,1,2)='$y' and substr(hallno,4,2)='95')) ";
	$sql=mysqli_query($con,$query);
	$rc2=mysqli_num_rows($sql);
	$rc3=$rc1+$rc2;
	$per=$rc1/($rc1+$rc2);
	$per=$per*100;

	$query="select distinct subject from $sem where subcode='$opt'";
	
	$sql1=mysqli_query($con,$query);
	$sub=mysqli_fetch_array($sql1);
	$s=$sub['subject'];
	
	?>
	<center>
	<fieldset>
	<table style='border:0.1px solid black;'>
	<tr>
	<th> Subject </th><th> attempted </th> <th>passed</th> <th> failed</th>
	
	</tr>
	<tr>
	<td> <?php echo$s  ?> &emsp;</td> <td> &emsp;<?php echo $rc3; ?></td>
	<td><?php echo $rc1?></td> <td> <?php echo $rc2 ?></td>
	</tr>
	<tr>
	<td>
		Percentage: &emsp;<?php echo $per ?>
		</td>
	</tr>
	</fieldset>
	 </table>
	<?php 
	echo "<div style='color:red;'> Failures are :";
	while($row=mysqli_fetch_array($sql))
	{
		echo $row['hallno'];
		
		echo "</br>";
	}
	echo "</div>";
	
}

?>
<a href="marks.php" >BACK</a>
 