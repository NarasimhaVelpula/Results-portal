<?php
include 'config.php';
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}
else
{
	 $user=$_SESSION['username'];
	 $sql="select password from logins where username='$user'";
	 $dat=mysqli_query($con,$sql);
	 while($res=mysqli_fetch_array($dat))
	 {
		 $pass=$res['password'];
	 }	 
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
                        <legend>CHANGE PASSWORD</legend>
 
                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">CURRENT PASSWORD</label>
                            <div class="col-md-4">
                                <input type="password" name="oldpass" id="file" class="input-large" >
                            </div>
                        </div>
 
                        <!-- Button -->
                       <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">NEW PASSWORD</label>
                            <div class="col-md-4">
                                <input type="password" name="newpass" id="file" class="input-large" >
															
							
                            </div>
							
							
                        </div>
				&emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &emsp;&emsp; &emsp; &emsp;
				<button type="submit"class="btn btn-success" name="submit" value="submit" id="submit" >SUBMIT</button>	
                    </fieldset>
                </form>
		<?php
		if(isset($_POST['submit']))
		{
			$op=$_POST['oldpass'];
			$np=$_POST['newpass'];
			$sql="select `password` from stafflogins where username='$user' and `password`='$op'";
			$res=mysqli_query($con,$sql);
			$rc=mysqli_num_rows($res);
			if($rc==1)
			{
				$sql="update stafflogins set `password`='$np' where username='$user'";
			$res=mysqli_query($con,$sql);
				echo "<script type='text/javascript'>alert('updated successfully'); location='marks.php';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('wrong password'); location='marks.php';</script>";
		}
		}
		?>