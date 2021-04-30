
<?php
session_start();
/*error_reporting(0);*/
require("dbconnect.php");
require 'dao.php';
require 'model.php';
require 'validation.php';
require '../abc.php';


$d = new dao();
$m = new model();
$v = new Validation();

extract($_POST);
$counter = 0;
if ($state ==-1 || $city ==-1  || $cat == -1) {
    
    $_SESSION['drpdwn'] = "please Select One Option!!";
}

else {
    $counter++;
}



if ($v->onlychar($fn)) {
    $counter++;
} else {
    $_SESSION['fnerr'] = "only Charcter!!";
}
if ($v->onlychar($ln)) {
    $counter++;
} else {
    $_SESSION['lnerr'] = "only Charcter!!";
}
if ($v->agecheck($date)) {
    $counter++;
} else {
    $_SESSION['dateerr'] = "please select proper date";
    if (isset($_POST['btnupdate'])) {
        //header("location:../edit_sport_manager.php?id=$editID");
        exit();
    } else {
        header("location:../adduser.php");
        exit();
    }
}
if ($v->emailValidation($email)) {
    $counter++;
} else {
    $_SESSION['emailerr'] = "Invalid Email";
    if (isset($_POST['btnupdate'])) {
        header("location:../edit_sport_manager.php?id=$editID");
        exit();
    } else {
        header("location:../adduser.php");
        exit();
    }
}


if ($v->duplicationcheck2("user_master", "u_email='$email' and u_id!='$editID'")) {
    $counter++;
} else {
    $_SESSION['emailerr'] = "already exist!!";
    if (isset($_POST['btnupdate'])) {
        header("location:../adduser.php");
        exit();
    } else {
              header("location:../adduser.php");

        exit();
    }
}


if ($counter == 6) {
    if (isset($_POST) && !empty($_POST)) {
      
        
        if (isset($_POST['btnupdate'])) {
            
            $m->set_data("fn", $fn);
            $m->set_data("ln", $ln);
            $m->set_data("city", $city);
            $m->set_data("state", $state);
            $m->set_data("gender", $gender);
            $m->set_data("date", $date);
            $m->set_data("email", $email);
            $m->set_data("cn", $cn);
            $m->set_data("cat", $cat);
            
            
            
            $a = array(
                'u_fname' => $m->get_data(test_input('fn')),
                'u_lname' => $m->get_data(test_input('ln')),
                'city_id' => $m->get_data(test_input('city')),
                'state_id' => $m->get_data(test_input('state')),
                'u_gender' => $m->get_data(test_input('gender')),
                'u_bdate' => $m->get_data(test_input('date')),
                'u_email' => $m->get_data(test_input('email')),
                'u_contactno' => $m->get_data(test_input('cn')),
                'sc_id' => $m->get_data(test_input('cat'))
                
                
            );
            $q = $d->update("user_master", $a, "u_id='$editID'");
            
            if ($q > 0) {
              
              $_SESSION['city']="ok";
              header("location:../edit_profile.php");
            } else {
                echo "Something is wrong";
            }
            
        }
    }
} else {
    if (isset($_POST['btnupdate'])) {
        /*header("location:../edit_sport_manager.php?id=$editID");*/
        exit();
    } else {
            header("location:../edit_profile.php");

        exit();
    }
}

?>
