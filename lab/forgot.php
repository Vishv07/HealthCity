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
                <div class="col-lg-5 d-none d-lg-flex bg" style="background-image:url('../assets/images/lab3.jpg');">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div style="margin-top: 10%">
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
                                echo "<center><font style='color:red; text-align:center;font-size:15px'>OOPS!!Incorrect E-Mail.... :(</font></center><br/>";
                            
                            }
        
                        }
                    ?>          <h2>Password Assistance</h2>
                                <p class="m-b-30">Enter Email Address to reset password</p>
                            <form action="" method="POST">
                            <div class="form-group" >
                                <label for="email" class="col-form-label text-black" > <h4><b>E-mail</b></h4></label>
                                <div class="input-group input-group-append ">
                                    <input type="text" class="form-control b_r_20" id="email" name="email-phone" placeholder="E-mail">
                                    <span class="input-group-text" style="background-color:black">
                                        <i class="fa fa-envelope text-primary"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" name="submit" class="btn btn-success btn-tone m-r-5 btn-block b_r_20 m-t-20">Generate OTP</button>
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
<?php
    if(isset($_POST['submit']))
    {
        include "connection.php";   
        session_start();
        $id = $_POST['email-phone'];
        $_SESSION['email_id'] = $id;
        require_once 'PHPMailer-master/src/PHPMailer.php';
        require_once 'PHPMailer-master/src/Exception.php';
        require_once 'PHPMailer-master/src/SMTP.php';
        $otp = rand(100000,999999);
        $to=$id;
        $subject="HealthCity OTP MAIL";
        $msg="Hi, your OTP for password is <b> ".$otp."</b>";
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
            $sql = "SELECT * FROM user_master WHERE email='$id' AND role_id=4";
            $result = mysqli_query($con,$sql);
            $value = mysqli_fetch_array($result);
            echo $sql;
            $id = $value['login_id'];
            if($value)
            {
                $qry = "INSERT INTO tb1_otp(otp_id,login_id,otp) VALUES('','$id','$otp')";
                $result1 = mysqli_query($con,$qry);
                if($result1 AND $result)
                {
                    header("location:otp.php");
                }
                else
                {
                    echo "<br/><font style='color:red'>OOPS!!! Incorrect OTP :(</font>";
                }
            }
            else
            {
                    header("location:forgot.php?flag=1");
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