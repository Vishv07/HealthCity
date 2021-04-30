<!DOCTYPE html>
<html lang="en">
<?php

session_start();
$data =  $_SESSION['otp'];
extract($_POST);
 $cc = $_SESSION['cardno'];
if(isset($_POST['submit']) && isset($onetime))
{

  if($data == $onetime)
  {

            $_SESSION['log'] = $cc;
           
          header("Location:view_record.php"); 

      }

      else {
   $_SESSION['nomatch'] = "<b>Please Re-Enter The OTP Its doesn't Match!!<b>"; 
    echo "doesnt match!!";
  }
}
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
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('../assets/images/patient.jpg')">
            <div class="d-flex flex-column justify-content-between w-100">
               
                <div class="container d-flex h-100">
                    
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" style="height: 90px"src="../assets/images/logo.png">
                                        <h2 class="m-b-0">ENTER YOUR OTP</h2>
                                    </div>
                                    <form method="POST" action="verify.php"> 
                                        <div class="form-group">
                                            <label class="control-label">OTP [6-DIGIT OTP]</label>
                                            <label class="control-label"><?php  echo  $data;?></label>
             
                    <input class="form-control"  name="onetime" type="text" id="pincode-input2"  >
                        <?php
                        if(isset($_SESSION['nomatch'])){
                  echo "<span style='color:red !important';>".$_SESSION['nomatch']."</span>";
                  unset($_SESSION['nomatch']);
                }
                ?>
                                        </div>
                                    
                                        <div class="row">
                               
                               
                            </div>
                                        <div class="form-group">
                                           
                                                
                                              <center>  <button class="btn btn-success" name="submit">Check </button></center>
                                   
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

    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/sign-up-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:56 GMT -->
</html>