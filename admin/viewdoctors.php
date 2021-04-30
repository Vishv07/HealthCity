 <?php

    require 'lib/dao.php';
      $d = new dao();
      session_start();
    include "header.php";



?>
  


 <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header no-gutters">
                        <div class="row align-items-md-center">
                            <div class="col-md-6">
                                <div class="media m-v-10">
                                    <div class="avatar avatar-cyan avatar-icon avatar-square">
                                        <i class="anticon anticon-star"></i>
                                    </div>
                                    <div class="media-body m-l-15">
                                        <h6 class="mb-0">All Members (9)</h6>
                                        <span class="text-gray font-size-13">Dev Team</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right m-v-10">
                                    <div class="btn-group">
                                        <button id="list-view-btn" type="button" class="btn btn-default btn-icon">
                                            <i class="anticon anticon-ordered-list"></i>
                                        </button>
                                        <button id="card-view-btn" type="button" class="btn btn-default btn-icon active">
                                            <i class="anticon anticon-appstore"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-11 mx-auto">
                            <!-- Card View -->
                            <div class="row" id="card-view">
                                <?php
    
           $q5 = $d->select("user_master","role_id=1");
          //$data = mysqli_query($con,$q);
          $i = 0; 
          while( $result = mysqli_fetch_array($q5)){

        
        $img1 = "assets/images/profilepic/".$result['profile_pic'];
        if($result['status']==0)
        {
            $label = "Unverfied"." <i class='anticon anticon-close' style='color:red !important;'></i>";
        }
        else{
            $label = "VerifIed"." <i class='anticon anticon-check' style='color:green !important;'></i>";
        }
      
         ?>
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-body" style="">
                                            <div class="m-t-20 text-center">
                                                <form action="viewdetails.php" method="post">
                                                    <input type="hidden" name="editid" value="<?php echo $result['login_id']?>">
                                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                                    <img src="<?php echo $img1 ?>" alt="">
                                                </div>
                                                <h4 class="m-t-30"><?php echo $result['fname']." ".$result['lname'];?></h4>
                                                 <span ><b>Status : &nbsp;</b><b id="gn" style="display: inline-block;"> <?php echo  $label; ?></b></span>
                                                 <span ><b>Registration Number : &nbsp;</b><b id="gn" style="display: inline-block;"> <?php echo  "1546348"; ?></b></span>
                                            </div>
                                            
                                            <div class="text-center m-t-30">
                                                <button type="submit" name="Update" class="btn btn-primary btn-tone">
                                                <i class="anticon anticon-check"></i>
                                                    <span class="m-l-5">View Details</span></button>
                                            
                                            </div>
                                        </form>
                                        </div>
                                    </div>

                                </div>

                          <?php  } ?>
                            </div>
                            <div class="row d-none" id="list-view">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Email</th>
                                                                <th>Social</th>
                                                                <th></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="media align-items-center">
                                                                        <div class="avatar avatar-image">
                                                                            <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                                                        </div>
                                                                        <div class="media-body m-l-15">
                                                                            <h6 class="mb-0">Erin Gonzales</h6>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>erin.gon@gmail.com</td>
                                                                <td>
                                                                    <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                                        <i class="anticon anticon-facebook"></i>
                                                                    </button>
                                                                    <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                                        <i class="anticon anticon-twitter"></i>
                                                                    </button>
                                                                    <button class="m-r-5 btn btn-icon btn-hover btn-rounded">
                                                                        <i class="anticon anticon-instagram"></i>
                                                                    </button>
                                                                </td>
                                                                <td class="text-right">
                                                                    <a href="profile.html" class="btn btn-primary btn-tone">
                                                                        <i class="anticon anticon-mail"></i>
                                                                        <span class="m-l-5">Contact</span>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            
                                                           
                                                        </tbody>
                                                    </table>
                                                </div>
                                        </div>
                                    </div>
                                </div>
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
    <script src="assets/js/pages/profile.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/members.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:30 GMT -->
</html>