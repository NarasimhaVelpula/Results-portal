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
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
  <h1>HI <?php echo $_SESSION['username'];?></h1> 
  <p><a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">logout</a></p> 
  <p><a data-toggle="tooltip" data-placement="top" title="Logout" href="pass.php">Change password</a></p> 
  <p><a data-toggle="tooltip" data-placement="top" title="Logout" href="https://www.ilovepdf.com/pdf_to_excel">To change pdf to excel</a></p> 
</div>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 
</head>
 
<body>
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 15px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 12px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="staff.php">Create Staff User</a>
  <a href="import1.php">Regulation Entry</a>
  <a href="import2.php">Student Entry</a>
  <a href="final.php">Final Report of the Student</a>
   <a href="studentlogin.php">Single Student Equiry</a>
   <a href="middetails.php">Mid Details</a>
    <a href="semdet.php">Batch Percentage Details</a>
	<a href="semsister.php">Semister Marks</a>
</div>




<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
     
</body>
</html> 

    <div id="wrap">
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>SEMISTER MARKS ENTRY IN TABLE FORMAT ONLY</legend>
 
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large" accept=".csv">
                            </div>
                        </div>
						<div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select Semister</label>
                            <div class="col-md-4">
                                <select name="sem" >
								<option VALUE="1"> SELECT SEMISTER</option>
								<option value="1-1"> I-I</OPTION>
								<OPTION value="1-2">I-II</option>
								<option value="2-1"> II-I</OPTION>
								<OPTION value="2-2">II-II</option>
								<option value="3-1"> III-I</OPTION>
								<OPTION value="3-2">III-II</option>
								<option value="4-1"> IV-I</OPTION>
								<OPTION value="4-2">IV-II</option>
								</SELECT>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Import data</label>
                            <div class="col-md-4">
                                <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                        </div>
 
                    </fieldset>
                </form>
 
	
 
                        
            <?php
			
               if(isset($_POST["Import"]))
			   {
		$filename=$_FILES["file"]["tmp_name"];		
	if($_POST['sem']!="1")
	{
		$s=$_POST['sem'];
		echo $s;
		if($s=="1-1")
		{
			$tab='sem1';
		}
		if($s=="1-2")
		{
			$tab='sem2';
		}
		if($s=="2-1")
		{
			$tab='sem3';
		}
		if($s=="2-2")
		{
			$tab='sem4';
		}
		if($s=="3-1")
		{
			$tab='sem5';
		}
		if($s=="3-2")
		{
			$tab='sem6';
		}
		if($s=="4-1")
		{
			$tab='sem7';
		}
		if($s=="4-2")
		{
			$tab='sem8';
		}
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
			$temp=0;
	        while (($getData =fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				$dat=$getData[0];
				if(substr($dat,6,2)=="04")
				{
					$sql="select * from`".$tab."` where hallno='".$getData[0]."' and subcode='".$getData[1]."'";
					 $result = mysqli_query($con, $sql);
					 $rc=mysqli_num_rows($result);
				
					 if($rc==0)
					 {
	           $sql = "INSERT into `".$tab."`(hallno,subcode,subject,internal,external,credits)
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."')";
                   $result = mysqli_query($con, $sql);
					 }
					 else
					 {
						 $sql="update $tab set external=".$getData[4].",credits=".$getData[5]." where hallno='".$getData[0]."' and subcode='".$getData[1]."'";
					 $result = mysqli_query($con, $sql);
					 
					 }
				}
				
				
	         }
			
	         fclose($file);	
		 }
	}
			   }	   

      
?>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
