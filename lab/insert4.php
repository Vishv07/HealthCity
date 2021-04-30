<?php
	include "connection.php";	
	$i=$_GET['id'];
	$pid=$_GET['pid'];
	$report=$_GET['report'];
	$desc=$_POST['desc'];
	$lab=$_POST['lab'];
	$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"../uploads/" . $_FILES["image"]["name"]);
		$location="../uploads/" . $_FILES["image"]["name"];
		$query = "INSERT INTO `record_master`(`record_id`,`patient_id`, `card_id`,`Report`, `file_upload`, `file_description`,`lab`) VALUES ('','$pid','$i','$report','$location','$desc','$lab')";
		$sql1=mysqli_query($con,$query);	
		header("location:add_report.php?flag=5");	
?>