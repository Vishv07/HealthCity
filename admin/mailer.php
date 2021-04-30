<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

require "lib/model.php";
extract($_POST);


class mailer{
    function f1($email,$order_no,$user_id,$string,$status)
{

$conn= mysqli_connect('localhost','root','','loremginzo');
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
$o = new model();
$str = "select * from  user_master where  user_id = '$user_id'";
$result = mysqli_query($conn,$str);
$data = mysqli_fetch_array($result);
$user_name = $data['fname'];
$date = date('d/m/Y');

 // Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

try {

    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'collegeportal188@gmail.com';                 // SMTP username
    $mail->Password = '9714142188';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // enablesble TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
     $mail->setFrom('collegeportal188@gmail.com', 'LoremGinzo');
  
    $mail->addAddress($email,$user_name);     // Add a recipient
        
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = '';
    $mail->Body    = "Dear ".$user_name."<br> <br>Greetings From LoremGinzo!<br> <br>This is with refrence to your order no.".$order_no ."  Placed with us Dated <b>".$date ."</b> for ".$string.". We Would Like to infrom you that your order has been ".$status." successfully.<br>Your refference number for order tracking is".$reff_no." <br><br><br> Thank You For Shopping With LoremGinzo! <br> Team LoremGinzo [ www.LoremGinzo.com ]";
    $mail->AltBody = "dsaucausdc";
    $mail->send();
    echo 'sent';
header("Location:index.php");  
   /* $_SESSION['otp']= "$ans";
    $_SESSION['uid']=$data['u_id'];
    $_SESSION['name']=$data['u_fname'];
    header("location:otp.php"); 
    exit();*/
        } 
        catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }


}//function

}//class
?>