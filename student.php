<?php
include 'config.php';ini_set('max_execution_time', 300);
session_start();

if(@$_SESSION['user']=="") 
{
echo "<script type='text/javascript'>alert('Please Login to Continue....'); location='index.php';</script>";
}

?>
<center><h1> Exam Info Page </h1></br><h2> you can check YOUR results here</h2>
<legend>Semister Marks</legend>
<h4>
<a href="results.php?ref=I&val=I&tot=825">1-1 Results</a></br>
<a href="results.php?ref=I&val=II&tot=825">1-2 Results</a></br>
<a href="results.php?ref=II&val=I&tot=775">2-1 Results</a></br>
<a href="results.php?ref=II&val=II&tot=725">2-2 Results</a></br>
<a href="results.php?ref=III&val=I&tot=825">3-1 Results</a></br>
<a href="results.php?ref=III&val=II&tot=775">3-2 Results</a></br>
<a href="results.php?ref=IV&val=I&tot=800">4-1 Results</a></br>
<a href="results.php?ref=IV&val=II&tot=600">4-2 Results</a></br>
</br>
</br>
<a href="middet.php">MID MARKS </a></br>
</br>
</br>
<a href="final2.php?&tot=6150">TOTAL AGGRIGATE </a></br>
</h4></center>