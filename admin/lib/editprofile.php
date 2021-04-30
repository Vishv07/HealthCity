
<?php
session_start();

require "connection.php";
require 'dao.php';
require 'model.php';
require 'validation.php';

extract($_POST);
  if (isset($_POST['submit']))
{

   $query =" UPDATE user_master
   SET 
   fname='$fname',
   lname='$lname',
   email='$email',
   contact_no='$contact_no',
   address1='$address1',
   address2='$address2',
   country='$country',
   city='$city',
   state='$state',
   pincode='$pincode'
   WHERE user_id ='$editid'";


   if (mysqli_query($con, $query)) {

        
               
                header("Location:../viewprofile.php");        
               
            } else {
                echo "Something is wrong";
            }
        
        
 }       
       
?>