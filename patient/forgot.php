<!DOCTYPE html>
<html lang="en">


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
        <div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('../assets/images/patient1.jpg')">
            <div class="d-flex flex-column justify-content-between w-100">
                <?php
                        if(isset($_GET['flag']))
                        {
                            if($_GET['flag']==1)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:20px'><b>OOPS!! Incorrect E-Mail.... </b></font></center><br/>";
                            
                            }
        
                        }
                    ?>    
                <div class="container d-flex h-100">
                    
                    <div class="row align-items-center w-100">
                        <div class="col-md-7 col-lg-5 m-h-auto">
                            <div class="card shadow-lg">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between m-b-30">
                                        <img class="img-fluid" alt="" style="height: 90px"src="../assets/images/logo.png">
                                        <h2 class="m-b-0">Password Assistance</h2>
                                    </div>
                                    <form method="POST"> 
                                        <div class="form-group">
                                            <label class="font-weight-semibold" for="email">Email:</label>
                                            <input type="text" class="form-control b_r_20" id="email" name="email-phone" placeholder="E-mail">
                                        </div>
                               
                                        <div class="form-group">
                                            <div class="d-flex align-items-center justify-content-between p-t-15">
                                                
                                                <button class="btn btn-success" name="submit">Submit</button>
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
            $sql = "SELECT * FROM user_master WHERE email='$id' AND role_id=2";
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


<!-- Mirrored from themenate.com/enlink-bs/dist/sign-up-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:56 GMT -->
</html>