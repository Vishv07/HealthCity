<!DOCTYPE html>
<html lang="en">
<?php
    include "connection.php";
    session_start();
    error_reporting(E_ERROR | E_PARSE);
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


<!-- Mirrored from themenate.com/enlink-bs/dist/sign-up-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:56 GMT -->
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
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('../assets/images/patient3.jpg')">
            <div class="d-flex flex-column justify-content-between w-100">
                <div class="container d-flex h-100">
                    
                    <div class="row align-items-left w-100">

                        <div class="col-md-7 col-lg-5 m-h-auto">
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
                                        
                                        header("refresh:0; url=sign_up.php?flag=3");
                                      }
                                    }       
                                }
                                else
                                {
                                    echo "<br/><h1 style='background-color:white'><font style='color:red'> Incorrect OTP...</font></h1>";
                                }
                              }
                        ?>
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" style="height: 90px"src="../assets/images/logo.png">
                                        <h2 class="m-b-0">Sign In</h2>
                                    </div>
                                    <form method="POST"> 
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                           <input type="text" name="otp_num" class="form-control" placeholder="Enter OTP" style="color: black" required /> 
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Password:</label>
                                           <input type="password" pattern=.{8,12} name="pass1" id="pass1" class="form-control" placeholder="Enter New Password"  style="color: black" required />
                                        </div>

                                            <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Confirm Password*:</label>
                                           <input type="password" pattern=.{8,12} name="pass2" id="pass2" class="form-control" placeholder="Re Enter New Password" style="color: black" oninput="check(this)" required /> 
                                        </div>
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
                               
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                                
                                                <button class="btn btn-success" name="submit">Sign In</button>
                                            </div>
                                        </div>
                                         </div>
                            </div>
                            
                                    </form>

                                </div>
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

    }
?>  

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>
<?php
}
?>

<!-- Mirrored from themenate.com/enlink-bs/dist/sign-up-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:56 GMT -->
</html>