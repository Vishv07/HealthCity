
<?php
session_start();
/*error_reporting(0);*/
require("dbconnect.php");
require 'dao.php';
require 'model.php';


$d = new dao();
$m = new model();

extract($_POST);
$counter = 1;


if($state == 'Gujarat')
{

  $prefix = 'GJ';
}

  $n=10; 

    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) 
    { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    $cardno =  $prefix.$randomString;

if(isset($_FILES['img1'])){


 
      $file_name = $_FILES['img1']['name'];
      $file_size = $_FILES['img1']['size'];
      $file_tmp = $_FILES['img1']['tmp_name'];
      $file_type = $_FILES['img1']['type'];
      $tmp = explode('.',$_FILES['img1']['name']);
      $file_ext = end($tmp);
    /*  $file_ext=strtolower(end(explode('.',$_FILES['profilepic']['name'])));*/
      $expensions= array("jpeg","jpg","png","PNG","JPEG","JPG");
      
      if(in_array($file_ext,$expensions) == false){
          $_SESSION['fmsg']="extension not allowed, please choose a JPEG,JPG or PNG file.";

      } 
          else {
             if($file_size > 9999999) {
              $_SESSION['fmsg'] = "File size must be less than 2 MB" ;


          }

       else {

        $counter++;
       }
        $counter++;}
   } else { $_SESSION['fmsg']="Empty not allowed";

    }



if ($counter == 3) {
    if (isset($_POST) && !empty($_POST)) {
      
        
        if (isset($_POST['insert'])) {



              $file_name = round(microtime(true)).".".$file_name;
            move_uploaded_file($file_tmp,"../assets/images/profilepic/".$file_name);
            
            $m->set_data("fname", $fname);
            $m->set_data("lname", $lname);
            $m->set_data("city", $city);
            $m->set_data("state", $state);
            $m->set_data("gender", $gender);
            $m->set_data("dob", $dob);
            $m->set_data("email", $email);
            $m->set_data("cn", $cn);
            $m->set_data("add", $add);
            $m->set_data("bg", $bg);
             $m->set_data("file_name", $file_name);
                $m->set_data("cardno", $cardno);
            $m->set_data("pass", $pass);
            
            
            
            $a = array(
                'fname' => $m->get_data(test_input('fname')),
                'lname' => $m->get_data(test_input('lname')),
                'city' => $m->get_data(test_input('city')),
                'state' => $m->get_data(test_input('state')),
                'gender' => $m->get_data(test_input('gender')),
                'dob' => $m->get_data(test_input('dob')),
                'email' => $m->get_data(test_input('email')),
                'phone_no' => $m->get_data(test_input('cn')),
                'blood_group' => $m->get_data(test_input('bg')),
                'password' => $m->get_data(test_input('pass')),
                 'card_id' => $m->get_data(test_input('cardno')),
                  'profile_pic' => $m->get_data(test_input('file_name')),
                'address' => $m->get_data(test_input('add'))
                
                
            );
            $q = $d->insert("user_master", $a);
            
            if ($q > 0) {
               $_SESSION['city']="ok";
               header("location:../addpatient.php");
             echo "insert";
            } else {
                echo "Something is wrong";
            }
            
        }
    }
} 

echo $counter;



    if (isset($_POST) && !empty($_POST)) {
      
        
        if (isset($_POST['Update'])) {


        if(isset($_FILES['img1'])){
        

            $file_name = round(microtime(true)).".".$file_name;
             move_uploaded_file($file_tmp,"../assets/images/profilepic/".$file_name);
             $m->set_data("file_name", $file_name);
}
            
            $m->set_data("fname", $fname);
            $m->set_data("lname", $lname);
            $m->set_data("city", $city);
            $m->set_data("state", $state);
            $m->set_data("gender", $gender);
            $m->set_data("dob", $dob);
            $m->set_data("email", $email);
            $m->set_data("cn", $cn);
            $m->set_data("add", $add);
            $m->set_data("bg", $bg);
         
            
            
            $a = array(
                'fname' => $m->get_data(test_input('fname')),
                'lname' => $m->get_data(test_input('lname')),
                'city' => $m->get_data(test_input('city')),
                'state' => $m->get_data(test_input('state')),
                'gender' => $m->get_data(test_input('gender')),
                'dob' => $m->get_data(test_input('dob')),
                'email' => $m->get_data(test_input('email')),
                'phone_no' => $m->get_data(test_input('cn')),
                'blood_group' => $m->get_data(test_input('bg')),
                'address' => $m->get_data(test_input('add'))
                
                
            );



              if(isset($_FILES['img1'])){
                if ($_FILES['img1']['error'] == 0) {
                  $a['profile_pic'] = $m->get_data(test_input('file_name'));
                }
              }


            $q = $d->update("user_master", $a ,"login_id='$editid'");
          
            if ($q > 0) {
               $_SESSION['updatedone']="ok";
               header("location:../gen_card.php");
                echo "insert";
            } else {
                echo "Something is wrong";
            }
            
        }
    }
?>
