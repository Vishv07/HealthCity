<?php include("header.php");
$id=$_GET['id']; ?>
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
    <link rel="shortcut icon" href="assets/images/logo.png">
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
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                        <form class="form-horizontal login_validator" action="insert2.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" style="margin-top: -20px">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Disease Description*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <input placeholder="Disease1" name="Disease1">&nbsp;&nbsp;
                                                    <input placeholder="Disease2" name="Disease2">&nbsp;&nbsp;
                                                     <input placeholder="Disease3" name="Disease3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Reason Visit*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <textarea placeholder="Enter Reason" name="reason" cols="100" rows="2" style="overflow-y: scroll;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Symptoms*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <input placeholder="Symptom1" name="Symptom1">&nbsp;&nbsp;
                                                    <input placeholder="Syptom2" name="Symptom2">&nbsp;&nbsp;
                                                     <input placeholder="Symptom3" name="Symptom3">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Prescription*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <textarea placeholder="Enter Prescription1, Prescription2..." name="prescription" cols="100" rows="2" style="overflow-y: scroll;"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Report*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <select name="report">
                                                    <option selected>select</option>
                                                       <option value="xray" >X-RAY</option>
                                                       <option value="sonography">UltraSonography</option>
                                                       <option value="BloodReport">Complete Blood Count</option>
                                                       <option value="diabetes">Diabetes</option>
                                                       <option value="urine">Urine Routine and Micro...</option>
                                                        <option value="esr">Erythrocrate Sedimentation Rate</option>
                                                   </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Height*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <input type="text" name="height" placeholder="height">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Weight*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <input type="text" name="weight" placeholder="weight">
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group row m-t-25">
                                            <div class="col-lg-3 text-lg-right">
                                                <label for="u-name" class="col-form-label">Hospital Name*</label>
                                            </div>
                                            <div class="col-xl-9 col-lg-8">
                                                <div class="input-group input-group-prepend">
                                                    <span class="input-group-text border-right-0 rounded-left"> 
                                                        <i class="fa fa-user text-primary"></i>
                                                    </span>
                                                   <input type="text" name="hospital" placeholder="Hospital Name">
                                                </div>
                                            </div>
                                        </div>

                                    <div class="form-group row">
                                            <div class="col-lg-9 ml-auto">
                                                <button class="btn btn-success btn-tone m-r-5" type="submit" name="submit">
                                                    <i class="fa fa-user"></i>
                                                    Add Record
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
                <!-- Content Wrapper END -->
<?php include("footer.php"); ?>
