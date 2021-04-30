<?php
	include "connection.php";	
		$disease = $_POST['disease'];
		$reason=$_POST['reason'];
		$symptom=$_POST['symptom'];
		$height=$_POST['height'];
		$weight=$_POST['weight'];
		$prescription=$_POST['prescription'];
		$report=$_POST['report'];
		$id=$_GET['id'];
		$sql="SELECT * FROM user_master WHERE login_id='$id'";
		$q=mysqli_query($con,$sql);
		$no=mysqli_fetch_array($q);
		$reg_no=$no['patient_number'];
		$query = "INSERT INTO `patient_master`(`login_id`, `patient_number`, `disease_description`, `reason_visit`, `height`, `weight`, `prescription`,`symptoms`,`Report`) VALUES ('$id','$reg_no','$disease','$reason','$height','$weight','$prescription','$symptom','$report')";
		$sql1=mysqli_query($con,$query);	
		header("location:index.php?flag=5");	
?>