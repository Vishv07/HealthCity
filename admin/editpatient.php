<?php



     require 'lib/dao.php';
      $d = new dao();
      session_start();
     include "header.php";

extract($_GET);


  
           $q5 = $d->select("user_master","login_id='$id'");
          //$data = mysqli_query($con,$q);
          $i = 0; 
          while( $result = mysqli_fetch_array($q5)){

        
        $img1 = "assets/images/profilepic/".$result['profile_pic'];
      
          $options = $result['blood_group'];
         
?>
            <!-- Page Container START -->
              <link type="text/css" rel="stylesheet" href="assets/css/custom.css" />
            <div class="page-container ">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row bg-white">
                       <div class="col-lg-8 bg-white">
                    
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <br>
                                <h2>Edit Patient</h2>
                                <p class="m-b-30"> Edit Patient Details</p>
                                <form action="lib/controller_patient.php"  method="post"  enctype="multipart/form-data" >
                                    <input type="hidden" name="editid" value="<?php echo $id?>">
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">First Name:</label>
                                        <input type="text" class="form-control" name="fname" placeholder="First Name" value="<?php echo $result['fname']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="userName">Last Name:</label>
                                        <input type="text" class="form-control" name="lname" placeholder="last Name" value="<?php echo $result['lname']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Email:</label>
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $result['email']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Contact No:</label>
                                        <input type="text" class="form-control" name="cn" placeholder="Contact Number" value="<?php echo $result['phone_no']; ?>">
                                    </div>
                                   <div class="form-group">
                                            <label>Date Of Birth</label>
                                            <div class="input-affix m-b-10">
                                                <i class="prefix-icon anticon anticon-calendar"></i>
                                                <input type="text" class="form-control datepicker-input" name="dob" value="<?php echo $result['dob']; ?>" placeholder="Pick a date">
                                            </div>
                                        </div>
                                    <div class="form-control">
                                         <label>Gender</label>
                                        <div>
                                        <input id="radio1" name="gender" type="radio" value="male" <?php if($result['gender']=='male') {echo  "checked"; } ?>>
                                        <label for="radio1">Male</label>


                                        <input id="radio2" name="gender" type="radio" value="Female" <?php if($result['gender']=='Female') {echo  "checked"; } ?>>
                                        <label for="radio2">Female</label>
                                    </div>
                                    </div>
                                    <br>    
                                
                                   <div class="form-group ">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new img-thumbnail text-xs-center">
                                                           <img src="<?php echo $img1;?>" data-src="<?php echo $img1;?>" alt="not found" style="width: 230px; height: 170px;">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                                        <div class="m-t-20 text-xs-center">
                                                            <span class="btn btn-primary btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="img1"></span>
                                                            <a href="#" class="btn btn-warning fileinput-exists"
                                                                data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                    </div>
                                     <div class="form-group">
                                        <label class="font-weight-semibold" for="email">State:</label>
                                        <input type="text" class="form-control" name="state" placeholder="State" value="<?php echo $result['state']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label class="font-weight-semibold" for="email">City:</label>
                                        <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $result['city']; ?>">
                                    </div>
                                     <div class="form-group">
                                        <label class="font-weight-semibold" for="email">Address</label>
                                        <textarea class="form-control" name="add"> <?php echo $result['address']; ?> </textarea>

                                    </div>
                                 <div class="form-group">
                                    <label>Blood Group: &nbsp; </label>
            
                                        <select class="select2"  name="bg" class="form-control-lg" style="width: 100px !important;" >
                                            <option value="A+"  <?php if($options=="A+") echo "selected"; ?> >A+</option>
                                            <option value="A-" <?php if($options=="A-") echo "selected"; ?>>A-</option>
                                            <option value="B+" <?php if($options=="B+") echo "selected"; ?> >B+</option>
                                            <option value="B-" <?php if($options=="B-") echo "selected"; ?>>B-</option>
                                             <option value="O+" <?php if($options=="O+") echo "selected"; ?>>O+</option>
                                            <option value="O-"<?php if($options=="O-") echo "selected"; ?> >O-</option>
                                             <option value="AB+" <?php if($options=="AB+") echo "selected"; ?>>AB+</option>
                                            <option value="AB-" <?php if($options=="AB-") echo "selected"; ?>>AB-</option>
                                        </select>
                                    </div>          

                                   
                                    <div class="form-group">
                                        <div class="d-flex align-items-center justify-content-between p-t-15">
                                            
                                            <button class="btn btn-primary" type="submit" name="Update" >Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>  
                    </div>
                </div>  
                
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0">Copyright © 2019 Theme_Nate. All rights reserved.</p>
                        <span>
                            <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                            <a href="#" class="text-gray">Privacy &amp; Policy</a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->

            <!-- Search Start-->
            <div class="modal modal-left fade search" id="search-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Search</h5>
                            <button type="button" class="close" data-dismiss="modal">
                                <i class="anticon anticon-close"></i>
                            </button>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="input-affix">
                                <i class="prefix-icon anticon anticon-search"></i>
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Files</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-cyan avatar-icon">
                                        <i class="anticon anticon-file-excel"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                        <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-blue avatar-icon">
                                        <i class="anticon anticon-file-word"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                        <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-purple avatar-icon">
                                        <i class="anticon anticon-file-text"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                        <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-red avatar-icon">
                                        <i class="anticon anticon-file-pdf"></i>
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                        <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-30">
                                <h5 class="m-b-20">Members</h5>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                                        <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                        <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                    </div>
                                </div>
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                        <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                    </div>
                                </div>
                            </div>   
                            <div class="m-t-30">
                                <h5 class="m-b-20">News</h5> 
                                <div class="d-flex m-b-30">
                                    <div class="avatar avatar-image">
                                        <img src="assets/images/others/img-1.jpg" alt="">
                                    </div>
                                    <div class="m-l-15">
                                        <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting Fonts</a>
                                        <p class="m-b-0 text-muted font-size-13">
                                            <i class="anticon anticon-clock-circle"></i>
                                            <span class="m-l-5">25 Nov 2018</span>
                                        </p>
                                    </div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <!-- Search End-->


            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="primary">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->
        </div>
    </div>
<?php  }?>
    
    <!-- Core Vendors JS -->
<script type="text/javascript" src="assets/js/alert.js"></script>



      <?php if(isset($_SESSION['city'])){?>
        <script>
          swal("Patient Registerd SuccessFully! ","");
         
        </script>   
    <?php }
     unset($_SESSION['city']);?>



    <script type="text/javascript">
        

        var ld = document.getElementById('loading');


        function f1()
        {


            ld.style.display = 'none';
        }
    </script>

   <!-- Core Vendors JS -->

    <script src="assets/js/vendors.min.js"></script>
 
    <!-- page js -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/vendors/quill/quill.min.js"></script>
    <script src="assets/js/pages/form-elements.js"></script>
   <script type="text/javascript" src="assets/js/pluginjs/jasny-bootstrap.js"></script>
    <!-- Core JS -->
   
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:03:21 GMT -->
</html>