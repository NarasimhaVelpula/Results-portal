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
<html>
<table style="border:1px solid black;">
<tr style="border:1px solid black;"><th style="border:1px solid black;">hallno</th>
<?php
$query="select distinct subject from $sem where ((substr(hallno,1,2)='$yyy' and substr(hallno,5,1)='1') or (substr(hallno,1,2)='$y' and substr(hallno,5,1)='5')) ";
$sql=mysqli_query($con,$query);
$i=0;

while($r=mysqli_fetch_array($sql))
{
	$sub[$i]=$r[0];
	$i++;
	?>
	<th style="border:1px solid black;"><?php echo $r[0]; ?></th>
<?php
}
echo "</tr>";
$query="SELECT distinct hallno from $sem where ((substr(hallno,1,2)='$yyy' and substr(hallno,5,1)='1') or (substr(hallno,1,2)='$y' and substr(hallno,5,1)='5')) order by hallno ";
$sql=mysqli_query($con,$query);
$j=0;
while($r=mysqli_fetch_array($sql))
{
	echo "<tr style='border:1px solid black;'><td style='border:1px solid black;'> $r[0] </td>";
	for($j=0;$j<$i;$j++)
	{
		
	$query=$query="SELECT external,internal from $sem where( ((substr(hallno,1,2)='$yyy' and substr(hallno,5,1)='1') or (substr(hallno,1,2)='$y' and substr(hallno,5,1)='5')) and (subject='$sub[$j]' and hallno='$r[0]')) order by hallno;";
$sq=mysqli_query($con,$query);

while($rc1=mysqli_fetch_array($sq))
{
$tot=$rc1['external']+$rc1['internal'];

	?>
	<td style="border:1px solid black;"><?php echo $tot; ?></td>
	<?php
}
}
echo "</tr>";
}
echo "</table>";

echo "<fieldset>";
							echo "</br>";
							echo "</br>";
							
							echo "Semister:&emsp;"; echo $sem;
							echo "</br>";
							
					$new=$yy+4;
						echo "Batch:&emsp;" ;echo $yy; echo "-"; echo $new;
							echo "</br>";
						$yyy=substr($yy,2,2);
						$y=$yyy+1;
						$query="select distinct hallno from $sem where (((substr(hallno,1,2)='$yyy' and substr(hallno,4,2)='b1') or (substr(hallno,1,2)='$y' and substr(hallno,4,2)='b5'))) ";
	$sql1=mysqli_query($con,$query);
	$rc1=mysqli_num_rows($sql);
	
	$query="select hallno from $sem where (credits<=0 and ((substr(hallno,1,2)='$yyy' and substr(hallno,4,2)='b1') or (substr(hallno,1,2)='$y' and substr(hallno,4,2)='b5'))) group by hallno ";
	$sql=mysqli_query($con,$query);
	$rc2=mysqli_num_rows($sql);
	
	echo " <label style='color:red;'> Number of students Failure:$rc2</label></br>";
	$count=$rc1-$rc2;
	echo " <label style='color:green;'> Number of students Passed:$count</label></br>";
	echo "<label style='color:blue;'> pass percentage:";echo (($rc1-$rc2)/($rc1))*100; echo "</label>";
	echo "</br>";
	echo " <label style='color:red;'>  Failures are: </label>";
	while($row=mysqli_fetch_array($sql))
	{
		echo $row[0];
		echo "&emsp;";
	}
	echo "</fieldset>";
	
?>
</table>
</html>
<FORM>
<button onclick="myFunction()" class="btn btn-primary button-loading">Print this page</button>

<script>
function myFunction() {
    window.print();
}
</script>


</form>