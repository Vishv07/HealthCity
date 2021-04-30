<?php
	include "connection.php";
	session_start();
	if(!isset($_SESSION['email_id']))
	{
		header("location:sign_up.php");
	}
	else
	{
		$req = $_SESSION['email_id'];		
		$qry = "SELECT login_id FROM user_master WHERE email='$req' OR phone_no='$req'";
		$result = mysqli_query($con,$qry);
		$value = mysqli_fetch_array($result);
		$id = $value['login_id'];
		$sql = "SELECT otp FROM tb1_otp WHERE otp_id = (SELECT MAX(otp_id) FROM tb1_otp WHERE login_id='$id' )";
		$result1 = mysqli_query($con,$sql);
		$value1 = mysqli_fetch_array($result1);
		$otp = $value1['otp'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HealthCity</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo.png">
    <!-- page css -->
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
</head>
<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-5 d-none d-lg-flex bg" style="background-image:url('../assets/images/medical6.jpg');">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div style="margin-top: 35%">
                            <h1 class="text-black m-b-20 font-weight-normal"><b>HealthCity</b></h1>
                            <p class="text-black font-size-20  opacity-08" style="color:black; text-shadow: 1px 1px blue; background-color: white"><b>Health City is a web portal and Data Analysis Tool which help to generate health card for every citizen.</b></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                      <?php
                        if(isset($_GET['flag']))
                        {
                            if($_GET['flag']==1)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:15px'>OOPS!!   Incorrect Details.... :(</font></center><br/>";
                            
                            }
                            else if($_GET['flag']==2)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:15px'>OOPS !! Contact Admin :(</font></center><br/>";
                            
                            }
                            else
                            {
                            }
                        }
                    ?>
                                <h2>Change Password</h2>
                                <p class="m-b-30">Enter the password you want to set</p>
                            <form  method="post" style="color: black">
				      <div class="form-group has-feedback">
				        <input type="text" name="otp_num" class="form-control" placeholder="Enter OTP" style="color: black" required /> 
				        <span class="glyphicon glyphicon glyphicon-ok-circle form-control-feedback"></span>
				      </div>
				      <div class="form-group has-feedback">
				        <input type="password" name="pass1" id="pass1" class="form-control" placeholder="Enter New Password" pattern=.{8,12} style="color: black" required />
				        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				      </div>
					  <div class="form-group has-feedback">
				        <input type="password" name="pass2" id="pass2" class="form-control" placeholder="Re Enter New Password" pattern=.{8,12} style="color: black" oninput="check(this)" required />
				        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
						<script language='javascript' type='text/javascript'>
										function check(input) {
											if (input.value != document.getElementById('pass1').value) {
												input.setCustomValidity('Password Must be Matching.');
											} else {
												// input is valid -- reset the error message
												input.setCustomValidity('');
											}
										}
						</script>
				      </div>
				      <div class="row">
				       <div class="col-xs-12">
				          <button type="submit" name="submit" class="btn btn-success btn-tone m-r-5 btn-block btn-flat">Change</button>
				        </div></div>
						<?php
							  if(isset($_POST['submit']))
							  {
								  $otp_num = $_POST['otp_num'];
								  $passx = $_POST['pass1'];
								  $passw1=md5($passx);
								  $passy = $_POST['pass2'];
								  $passw2=md5($passy);							
								  if($otp==$otp_num)
								  {
									if($passw1==$passw2)
									{
									  $update = "UPDATE user_master SET password='$passw1' WHERE login_id='$id'";
									  $up = mysqli_query($con,$update);
									  if($up)
									  {
										echo "<br/><h4><font style='color:green'>Password Change Successfully....</font></h4>";
										unset($_SESSION['email_id']);
										session_destroy();
										header("refresh:5; url=sign_up.php");
									  }
									}		
								}
								else
								{
									echo "<br/><font style='color:red'>OOPS!!! Incorrect OTP :(</font>";
								}
							  }
						?>
    				</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php
    if(isset($_POST['submit']))
    {
        $otp_num = $_POST['otp_num'];
        if($otp_num==$otp)
        {
            $update = "UPDATE user_master SET status='1' WHERE login_id='$id'";
            $result2 = mysqli_query($con,$update);
            if($result2)
            {
                header("location:sign_up.php?flag=3");
            }
        }
        else
        {
           header("location:verification.php?flag=1");
        }
    }
?>  

    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/sign-up-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:53 GMT -->
</html>
<?php
}
?>