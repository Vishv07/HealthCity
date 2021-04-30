<?php
    //error_reporting(E_ERROR | E_PARSE);
    include("header.php");
    include ("connection.php");
    session_start();
    if(!isset($_SESSION['log']))
    {
        header("location:sign_up.php");
    }
    else
    { 
        $log = $_SESSION['log'];
        $a = "SELECT * FROM user_master WHERE email='$log'";
        echo $a;
        $aa = mysqli_query($con,$a);
        $value = mysqli_fetch_array($aa);
        $id = $value['login_id'];
        $fname=$value['fname'];
        $lname=$value['lname'];
        $email = $value['email'];
        $phone = $value['phone_no'];
        $address=$value['address'];
        $state=$value['state'];
        $city=$value['city'];
        $sql1 = "SELECT profile_pic FROM user_master WHERE login_id='$id'";
        $result2 = mysqli_query($con,$sql1);
        $value2 = mysqli_fetch_array($result2);
        $def =$value2['profile_pic'];
?>
    <?php
        if(isset($_POST['submit']))
        { 
            if($_FILES["image"]["name"] != "")
            {
                $fname = $_POST['fname'];
                $lname= $_POST['lname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $city=$_POST['city'];
                $state=$_POST['state'];
                $email = $_POST['email'];
                $file=$_FILES['image']['tmp_name'];
                $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
                $image_name=addslashes($_FILES['image']['name']);
                move_uploaded_file($_FILES["image"]["tmp_name"],"../assets/images/".$_FILES["image"]["name"]);  
                $location="../assets/images/" . $_FILES["image"]["name"];
                $updated2 = mysqli_query($con,"UPDATE `user_master` SET `fname`='$fname',`lname`='$lname', `email`='$email',`phone_no`='$phone',`address`='$address',`profile_pic`='$location',`state`='$state',`city`='$city' WHERE login_id='$id'");
                var_dump($updated2);
                if($updated2)
                {
                    echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Update');window.location.href='index.php?flag=1';</script>");      
                }
                else
                {
                    echo "<font style='color:red'>Error...</font>";
                }
            }
            else
            {
                $fname = $_POST['fname'];
                $lname= $_POST['lname'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $city=$_POST['city'];
                $state=$_POST['state'];
                $email = $_POST['email'];
                $updated2 = mysqli_query($con,"UPDATE `user_master` SET `fname`='$fname',`lname`='$lname', `email`='$email',`phone_no`='$phone',`address`='$address',`state`='$state',`city`='$city' WHERE login_id='$id'");

                if($updated2)
                {
                    echo ("<script LANGUAGE='JavaScript'>window.alert('Succesfully Update');window.location.href='index.php?flag=1';</script>");       
                }
                else
                {
                    echo "<font style='color:red'>Error...</font>";
                }
            }
        }
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<style>
    #myDiv 
    {
      border: 2px solid lightgray;
      height:210px;
      width:210px;
      float: left;
    }
</style>
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    
                    	 <form class="form-horizontal login_validator" method="POST" enctype="multipart/form-data" style="margin-top: -20px">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">First Name*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="fname" class="form-control" value="<?php echo $fname; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Last Name*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="lname" class="form-control" placeholder="Enter lastname ..." value="<?php echo $lname; ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="email" class="col-form-label">Email*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-envelope text-primary"></i></span>
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email ..."  value="<?php echo $email; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="phone" class="col-form-label">Phone*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-phone text-primary"></i></span>
                                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 6 or 7 or 8 or 9'  value="<?php echo $phone; ?>" required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" name="address"  class="form-control"  value="<?php echo $address; ?>">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">State*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" name="state"  class="form-control"  value="<?php echo $state; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">City*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="text" name="city"  class="form-control"  value="<?php echo $city; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="profile" class="col-form-label">Profile Pic*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-plus text-primary"></i></span>
                                                    <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="profile" class="col-form-label"></label>
                                            </div>
                                      <div id="myDiv" align="center" > 
                                        <!--<p class="square"> -->
                                        <img src="<?php echo $def; ?>" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
                                        <script type="text/javascript">
                                          function readURL(input) {
                                            if (input.files && input.files[0]) {
                                              var reader = new FileReader();

                                              reader.onload = function (e) {
                                                $('#profile-img-tag').attr('src', e.target.result);
                                              }
                                              reader.readAsDataURL(input.files[0]);
                                            }
                                          }
                                          $("#profile-img").change(function(){
                                            readURL(this);
                                          });
                                        </script>
                                      </div> 

                                        </div>
                                            <br/>
                                            <br/>
                                    <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                                <button class="btn btn-success btn-tone m-r-5" type="submit" name="submit">
                                                    <i class="fa fa-user"></i>
                                                    Submit
                                                </button>
                                                <button class="btn btn-danger btn-tone m-r-5" type="reset" id="clear">
                                                    <i class="fa fa-refresh"></i>
                                                    Reset
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </form>
                            
                    </div>
                </div>
            </div>
             <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script>
    $(document).ready(function () 
    {
        $('#datepicker').datepicker
        ({    
            endDate: '+1d',
            autoclose: true
        });  });
    </script>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
<?php
  }
?>
<?php include("footer.php"); ?>