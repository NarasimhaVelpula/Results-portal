<?php
include 'config.php';
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}

?>
<Html>
<head>
<title>
mid details
</title>
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
 
  
</div>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
 
</head>
<body>
 <div id="wrap">
        <div class="container">
            <div class="row">
 
                <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>
 
                        <!-- Form Name -->
                        <legend>mid marks Details</legend>
						
						</br>
						Select mid &emsp;<select name="mid">
						<option value="not">Select mid</option>
						<option value="m1">MID-I</option>
						<option value="m2">MID-II</option>
						</select>
						</br>
						</br>
						Select Semister &emsp;<select name="sem">
						<option value="not">Select Semister</option>
						<option value="1">Sem-I</option>
						<option value="2">Sem-II</option>
						<option value="3">Sem-II-I</option>
						<option value="4">Sem-II-II</option>
						<option value="5">Sem-III-I</option>
						<option value="6">Sem-III-II</option>
						<option value="7">Sem-IV-I</option>
						<option value="8">Sem-IV-II</option>
						</select>
						</br>
						</br>
						<button type="submit"class="btn btn-success" name="submit" value="submit" id="submit" >SUBMIT</button>
						</form>
						</body>
						<?PHP
						if(isset($_POST['submit']))
						{
							
							$_SESSION['mm']=$_POST['mid'];
							$_SESSION['ms']=$_POST['sem'];
							if(($_POST['opt']!="not"))
							{
								echo "done";
								if(($_POST['mid']!="not"))
								{
									echo "done1";
									if(($_POST['sem']!="not"))
									{
										echo "done3";
										echo "<script> location.href='singledetails.php' </script>";
									}
								}
							}
						}
						?>
						