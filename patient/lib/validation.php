<?php
/*require 'dbconnect.php';*/
class Validation
{
    
    
    
    public function nameValidation($name)
    {
        $flag = false;
        if ($name == "") {
            $flag = false;
        } else {
            $flag = true;
        }
        return $flag;
    }
    
    public function emailValidation($email)
    {
        $flag = false;
        $email = trim($email);
       if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $flag = false; 
        } else {
            $flag = true;
        }
        return $flag;
    }
    public function usernamevalidation($name)
    {
        $flag = false;
        $name = trim($name);
       if ( !preg_match ("^[_A-z0-9]*((|s)*[_A-z0-9])*$",$name)){
            $flag = false; 
        } else {
            $flag = true;
        }
        return $flag;
    }

      public function onlychar($name)
    {
        $flag=false;
        $name = trim($name);
        if ( !preg_match ("/^[a-zA-Z]+$/",$name)) {
            $flag = false;
          } else {
            $flag = true;
        }
        return $flag;
    }
     public function onlycharwithspaces2($name)
    {
        $flag=false;
        $name = trim($name);
        if ( !preg_match ("/^[a-zA-Z][a-zA-Z\s\w+]*$/",$name)) {
            $flag = false;
          } else {
            $flag = true;
        }
        return $flag;
    }
        public function onlycharwithspaces($name)
    {
        $flag=false;
        $name = trim($name);
        if ( !preg_match ("/^[a-zA-Z]+([a-zA-Z]+\s)*[a-zA-Z]+$/",$name)) {
            $flag = false;
          } else {
            $flag = true;
        }
        return $flag;
    }
          
public function contact($name)
    {
        $flag=false;
         $name = trim($name);
        if ( !preg_match ("/^[_0-9]((-|\s)[_0-9])*$/",$name)) {
            $flag = false;
          } else {
            $flag = true;
        }
        return $flag;
    }
        
 public function duplicationcheck($name,$tablename,$colname)
 {
    $l = "localhost";
    $r = "root";
    $p = "";
    $db = "spars";
    $conn = mysqli_connect($l,$r,$p,$db);
    $str = "select * from $tablename where $colname = '$name'";
    /*echo $str;*/
    $result = mysqli_query($conn,$str);
    /*echo mysqli_error($result);*/
 /*   exit();*/
 $data = mysqli_num_rows($result);
    if ($data>0) {
         $flag = false;
        return $flag;
    }
    else 
    {
       $flag = true;
       return $flag;
    }
 }
  public function duplicationcheck2($tablename,$condition)
 {
    $l = "localhost";
    $r = "root";
    $p = "";
    $db = "spars";
    $conn = mysqli_connect($l,$r,$p,$db);
    $str = "select * from $tablename where $condition";
   
    /*echo $str;*/
    $result = mysqli_query($conn,$str);
  /*  mysqli_error($result);
    exit();*/
    /*echo mysqli_error($result);*/
 /*   exit();*/
 $data = mysqli_num_rows($result);
    if ($data>0) {
         $flag = false;
        return $flag;
    }
    else 
    {
       $flag = true;
       return $flag;
    }
 }
  public function address($name)
    {
        $flag=false;
 $name = trim($name);
 $len= strlen($name);
        if ($len>50 || $len==0) {
            $flag = false;
          } else {
            $flag = true;
        }
        return $flag;
    }
    public function numchar($name)
    {
        $flag=false;
 $name = trim($name);
       if (!preg_match("/^[_A-z0-9]*((-|\s)*[_A-z0-9])*$/", $name)) {
            $flag = false;
          } else {
            $flag = true;
        }
        return $flag;
    } 
       public function onlychardot($name)
    {
        $flag=false;
        $name = trim($name);
        if ( !preg_match ("/^[a-zA-Z\.]+$/",$name)) {
            $flag = false;
          } else {
            $flag = true;
        }
        return $flag;
    }

    public function agecheck($birthdate)
    {
        $flag=false;
         $birthdate = new DateTime($birthdate);
        $today   = new DateTime('today');
        $age = $birthdate->diff($today)->y;
        if ($age>=18) {
            $flag = true;
        }
        else {
            $flag = false;
        }
        return $flag;
    }
    }


?>