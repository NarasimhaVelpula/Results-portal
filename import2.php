<?php
include "config.php";
ini_set('max_execution_time', 300);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}

?>
<html lang="en">
 
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
 
<body>
    <div id="wrap">
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>Regulation Registration</legend>
					<center>
					<h3><p> upload a csv file with as specified columns column-1 (hallticket number) column2(Name of the student) Column3(Year of entry) <p>
					<p>** dont enter column names, directly enter data**<p></h3>
					</center>
					</br>
					</br></br>
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large" accept=".csv">
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
<h3> <label>sample for insertion file </label></h3>
 <center>
 <img src="sample2.jpg" alt"hii" >
 </center>
            </div>
            <?php
               if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["tmp_name"];		
 
 
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
			$temp=0;
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				
				$sql="select * from `students infor` where hallno='".$getData[0]."' and name='".$getData[1]."'";
					 $result = mysqli_query($con, $sql);
					 $rc=mysqli_num_rows($result);
			echo $sql;
					 if($rc==0)
					 {
	           $sql = "INSERT into `students infor` (hallno,name,year)
                   values ('".$getData[0]."','".$getData[1]."','".$getData[2]."')";
                   $result = mysqli_query($con, $sql);
		echo $sql;
					 }
					
	          
	         }
			
	         fclose($file);	
			 echo "<script> alert('data inserted succesfully'); location='sucess.php'; </script>";
		 }
	}	 
 
            ?>
        </div>
    </div>
	<center>
	<h2><a href="sucess.php"> BACK</a></center>
</body>
 
</html>
