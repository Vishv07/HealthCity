<?php
session_start();
/*error_reporting(0);*/
require("lib/dbconnect.php");
require 'lib/dao.php';
require 'lib/model.php';


$d = new dao();
$m = new model();

extract($_POST);
$status =1;
$uid = $editid;
if (isset($_POST) && !empty($_POST)) {
      
        
        if (isset($_POST['Update'])) {


      
            
            $m->set_data("status", $status);

            
            
            
            $a = array(
                'status' => $m->get_data(test_input('status'))
                
                
                
            );


            $q = $d->update("user_master", $a ,"login_id='$editid'");
          
            if ($q > 0) {
               $_SESSION['updatedone']="ok";
               header("location:viewdetails.php?editid= $uid");
                echo "insert";
            } else {
                echo "Something is wrong";
            }
            
        }
    }

?>