<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HealthCity</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo.png">
    <!-- page css -->
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!--global styles-->
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <!-- end of global styles-->
    <link rel="stylesheet" href="vendors/chartist/css/chartist.min.css" />
    <link rel="stylesheet" href="vendors/circliful/css/jquery.circliful.css">
    <link rel="stylesheet" href="css/pages/index.css">
    <link rel="stylesheet" href="#" id="skin_change" />
    <!--plugin styles-->
    <link rel="stylesheet" href="vendors/select2/css/select2.min.css"/>
    <link rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="css/pages/dataTables.bootstrap.css"/>
    <!-- end of plugin styles -->
    <!--Page level styles-->
    <link rel="stylesheet" href="css/pages/tables.css"/>
    <!--Mobile first-->
    <link rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico" />
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!-- end fo global styles-->
    <!-- plugin styles-->
    <link rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" />
    <link rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
    <!--end of page level css-->
    <link rel="stylesheet" href="#" id="skin_change" />
    <!--end of page level css-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/logo1.ico"/>
    <!-- global styles-->
    <link rel="stylesheet" href="css/components.css"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <!--End of global styles-->
    <link rel="stylesheet" href="css/pages/mail_box.css"/>
    <link rel="stylesheet" href="#" id="skin_change"/>
</head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <style>
    #myDiv
    {
      border: 2px solid lightgray;
      height:210px;
      width:250px;
      float: left;
    }
  </style>
<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-5 d-none d-lg-flex bg" style="background-image:url('../assets/images/medical2.png');">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div>
                           <h1 class="text-black m-b-20 font-weight-normal"><b>HealthCity</b></h1>
                            <p class="text-black font-size-20  opacity-08" style="color:black; text-shadow: 1px 1px blue; background-color: white"><b>Health City is a web portal and Data Analysis Tool which help to generate health card for every citizen.</b></p>                        </div>
                    </div>
                </div>
                <div class="col-lg-7 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <h2 style="margin-top: 20px">Register</h2>
                                <p class="m-b-30" >Create your account to get access</p>
                               <form class="form-horizontal login_validator" action="insert3.php" method="post" enctype="multipart/form-data" style="margin-top: -20px">
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
                                                    <input type="text" name="fname" class="form-control" placeholder="Enter name ..." required>
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
                                                    <input type="text" name="lname" class="form-control" placeholder="Enter lastname ..." required>
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
                                                    <input type="email" name="email" class="form-control" placeholder="Enter Email ...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="pwd" class="col-form-label">Password*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                                     <input type="password"pattern=.{8,12} title="Enter 8 to 12 characters" name="pass1" id ="pass1" class="form-control" placeholder="Enter Password ..." required />                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="cpwd" class="col-form-label">Confirm Password*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"><i class="fa fa-lock text-primary"></i></span>
                                                    <input type="password" name="pass2" pattern=.{8,12} title="Enter 8 to 12 characters" id="pass2" class="form-control" placeholder="Re-Enter Password ..." oninput="check(this)" required />
                                                    <script language='javascript' type='text/javascript'>
                                                        function check(input) {
                                                            if (input.value != document.getElementById('pass1').value) {
                                                                input.setCustomValidity('Password Must be Matching.');
                                                            } else {
                                                                // input is valid -- reset the error message
                                                                input.setCustomValidity('');
                                                            }
                                                        }
                                                    </script>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Qualification*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="qualify" class="form-control" placeholder="Enter Qualification ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">License Number*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="text" name="lic" class="form-control" placeholder="Enter Number ..." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Blood Group*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <select name="bg" class="form-control">   
                                                      <option value="Select">Select</option>}  
                                                      <option value="A+">A+</option>  
                                                      <option value="A-">A-</option>  
                                                      <option value="B+">B+</option>  
                                                      <option value="B-">B-</option>  
                                                      <option value="O+">O+</option>  
                                                      <option value="O-">O-</option>  
                                                      <option value="AB+">AB+</option>  
                                                      <option value="AB-">AB-</option>  
                                                    </select>  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">DOB*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                    <input type="date" name="date" class="form-control" placeholder="Enter name ..." required>
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
                                                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone no ..." pattern="[6789][0-9]{9}" oninput="setCustomValidity('')" title='Enter 10 Digit mobile number starting with 6 or 7 or 8 or 9' required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group gender_message row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label class="col-form-label">Gender *</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="custom-controls-stacked">
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio1" type="radio" name="gender" value="male" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Male</span>
                                                    </label>
                                                    <label class="custom-control custom-radio">
                                                        <input id="radio2" type="radio" name="gender" value="female" class="custom-control-input">
                                                        <span class="custom-control-label"></span>
                                                        <span class="custom-control-description">Female</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="address" class="col-form-label">Address*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    
                                                    <textarea name="address" cols="100" rows="2" style="overflow-y: scroll;"></textarea>
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
                                                    <input type="text" name="state"  class="form-control">
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
                                                    <input type="text" name="city"  class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-center text-lg-right">
                                                <label class="col-form-label">Profile Pic</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                              <input type="file" id="profile-img" name="image" accept="image/png,image/jpg,image/jpeg" class="form-control" placeholder="" class="btn btn-warning fileinput-exists">
                                                <div id="myDiv" align="center" class="col-xl-9 col-lg-12" style="margin-top:10px;margin-left: 40px"> 
                                                    <!--<p class="square"> -->
                                                  <img src="../assets/images/default.png" id="profile-img-tag" alt="Profile Pic" width="200px" height="200px" style="border:5px solid #ffffff; background-color: #ffffff;" />
                                                    <script type="text/javascript">
                                                    function readURL(input)
                                                    {
                                                        if (input.files && input.files[0]) 
                                                        {
                                                            var reader = new FileReader();
                                                            reader.onload = function (e) 
                                                            {
                                                                $('#profile-img-tag').attr('src', e.target.result);
                                                            }
                                                            reader.readAsDataURL(input.files[0]);
                                                        }
                                                    }
                                                    $("#profile-img").change(function()
                                                    {
                                                        readURL(this);
                                                    });
                                                </script>
                                                </div> 
                                            </div>
                                        </div>
                                            <br/>
                                            <br/>
                                    <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                                <button class="btn btn-success btn-tone m-r-5" type="submit" name="submit">
                                                    <i class="fa fa-user"></i>
                                                    Add User
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
                </div>
            </div>
        </div>
    </div>
    
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>
    <script src="js/components.js"></script>
<script src="js/custom.js"></script>

<!-- end of global scripts-->
<!-- plugin scripts -->
<script src="vendors/select2/js/select2.js"></script>
<script src="vendors/datatables/js/jquery.dataTables.js"></script>
<script src="vendors/datatables/js/dataTables.bootstrap.js"></script>
<!-- end plugin scripts -->
<!--Page level scripts-->
<script src="js/pages/advanced_tables.js"></script>
<script src="js/components.js"></script>
<script src="js/custom.js"></script>
<!-- end of global scripts-->
<!-- plugin scripts-->
<script src="js/pluginjs/jasny-bootstrap.js"></script>
<script src="vendors/holderjs/js/holder.js"></script>
<script src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<!-- end of plugin scripts-->
<script src="js/pages/validation.js"></script>
   <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
    <!-- ./wrapper -->
    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="bower_components/raphael/raphael.min.js"></script>
    <script src="bower_components/morris.js/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="bower_components/moment/min/moment.min.js"></script>
    <script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/sign-up-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:53 GMT -->
</html>