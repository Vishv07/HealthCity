<!DOCTYPE html>
<html lang="en">
<?php

session_start();
require "lib/dbconnect.php";
require 'lib/dao.php';
require 'lib/model.php';
$d = new dao();
$m = new model();

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


    <?php
    extract($_POST);
    $id = $cardid;
    require 'sms.php';
    $s= new sms();

$q = $d->select("user_master","card_id = '$id'");

$result = mysqli_fetch_array($q);

$contact_no = $result['phone_no'];
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;
    $_SESSION['cardno'] = $id;
    $s->sendotp($contact_no,$otp);




    ?>
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
                                        <h2 class="m-b-0">OTP VERFICATION</h2>
                                        
                                    </div>
                                    
                                    <form method="POST" action="verify.php"> 
                                        <div class="form-group">
                                            <label class="control-label">Contact No:</label>
                                             <input class="form-control"  name="number" type="text" value="<?php echo $result['phone_no']; ?>" readonly />
                                             <input type="hidden" name="cardno1" value="<?php echo $id;
                                             ?>">
                                        </div>
                                    
                                        <div class="row">
                               
                               
                            </div>
                                        <div class="form-group">
                                           
                                                
                                              <center>  <button class="btn btn-success" name="submit">Sent OTP</button></center>
                                   
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