<?php
	include "connection.php";	
		$name = $_POST['fname'];
		$lname=$_POST['lname'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$passx = $_POST['pass1'];
		$pass1=md5($passx);
		$passy = $_POST['pass2'];
		$pass2=md5($passy);
		$gender = $_POST['gender'];
		$bg=$_POST['bg'];
		$date=$_POST['date'];
		$qualify=$_POST['qualify'];
		$lic=$_POST['lic'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$file = $_FILES['image']['tmp_name'];
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		move_uploaded_file($_FILES["image"]["tmp_name"],"../assets/images/" . $_FILES["image"]["name"]);
		$location="../assets/images/" . $_FILES["image"]["name"];
		
				$query = "INSERT INTO `user_master`(`login_id`, `fname`, `lname`, `email`, `phone_no`, `dob`, `password`, `role_id`, `active`, `status`, `gender`, `address`, `profile_pic`, `blood_group`, `state`, `city`) VALUES ('','$name','$lname','$email','$phone','$date','$pass1','4','1','0','$gender','$address','$location','$bg','$state','$city')";
				$result = mysqli_query($con,$query);
				$s="SELECT login_id FROM user_master WHERE email='$email'";
				$a=mysqli_query($con,$s);
				$q=mysqli_fetch_array($a);
				$p=$q['login_id'];
				$query1 = "INSERT INTO `laboratary_master`(`laboratary_id`, `login_id`, `license_number`, `qualification`) VALUES ('','$p','$lic','$qualify')";
				$result1 = mysqli_query($con,$query1);
				require_once 'PHPMailer-master/src/PHPMailer.php';
  		  		require_once 'PHPMailer-master/src/Exception.php';
  		  		require_once 'PHPMailer-master/src/SMTP.php';
		  		$to=$email;
		 	 	$subject="HealthCity Registration";
		  		$msg="Hi, you are successfully registered and you are under verification...";
		  		$mail = new PHPMailer\PHPMailer\PHPMailer(true);                      // Passing `true` enables exceptions
			    //Server settings
			    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
			    $mail->isSMTP();                                      // Set mailer to use SMTP
			    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
			    $mail->SMTPAuth = true;                               // Enable SMTP authentication
			    $mail->Username = 'sbhumi921@gmail.com';                 // SMTP username
			    $mail->Password = 'bhumi@123';                           // SMTP password
			    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
			    $mail->Port = 587;                                    // TCP port to connect to
			    //Recipients
			    $mail->setFrom('sbhumi921@gmail.com');
			    $mail->addAddress($to);
			    $mail->isHTML(true);                                  // Set email format to HTML
			    $mail->Subject = $subject;
			    $mail->Body    = $msg;
			    if(!$mail->send()) 
			    {
				    echo 'Message could not be sent.';
				    echo 'Mailer Error: ' . $mail->ErrorInfo;
				}
 				else 
 				{
				  	echo "inserted successfully....";	
					header("location:under_verification.php");
				}
?>