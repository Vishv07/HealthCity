<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HealthCity</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo.png">
    <!-- page css -->
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
</head>
<body>
    <div class="app">
        <div class="container-fluid p-0 h-100">
            <div class="row no-gutters h-100 full-height">
                <div class="col-lg-5 d-none d-lg-flex bg" style="background-image:url('../assets/images/LAB1.jpg');">
                    <div class="d-flex h-100 p-h-40 p-v-15 flex-column justify-content-between">
                        <div style="margin-top: 5%">
                             <h1 class="text-white m-b-20 font-weight-normal"><b>HealthCity</b></h1>
                            <p class="text-black font-size-20  opacity-08" style="color:black; text-shadow: 1px 1px blue; background-color: white"><b>Health City is a web portal and Data Analysis Tool which help to generate health card for every citizen.</b></p>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-7 bg-white">
                    <div class="container h-100">
                        <div class="row no-gutters h-100 align-items-center">
                            <div class="col-md-8 col-lg-7 col-xl-6 mx-auto">
                                <?php
                        if(isset($_GET['flag']))
                        {
                            if($_GET['flag']==1)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:20px'><b>OOPS!!   Incorrect Details...😐</b></font></center><br/>";
                            
                            }
                            else if($_GET['flag']==2)
                            {
                                echo "<center><font style='color:red; text-align:center;font-size:20px'><b>OOPS !! Contact Admin...😐</b></font></center><br/>";
                            
                            }
                            else if($_GET['flag']==3)
                            {
                                echo "<center><font style='color:blue; text-align:center;font-size:20px'><b>Password Changed Successfully...🙂</b></font></center><br/>";
                            
                            }
                             else if($_GET['flag']==4)
                            {
                                echo "<center><font style='color:blue; text-align:center;font-size:20px'><b>He/She is not medicalist...😐</b></font></center><br/>";
                            
                            }
                            else if($_GET['flag']==5)
                            {
                                echo "<center><font style='color:blue; text-align:center;font-size:20px'><b>User already exists...😐</b></font></center><br/>";
                            
                            }
                            else
                            {
                            }
                        }
                    ?>  
                                <h2>Sign Up</h2>
                                <p class="m-b-30">Login to access our services</p>
                                                        <form action="check.php" id="login_validator" method="POST">
                            <div class="form-group" >
                                <label for="email" class="col-form-label text-black" > <h4><b>E-mail</b></h4></label>
                                <div class="input-group input-group-append ">
                                    <input type="email" class="form-control b_r_20" id="email" name="email" placeholder="E-mail" >
                                    <span class="input-group-text" style="background-color:black">
                                        <i class="fa fa-envelope text-primary"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label text-black"><h4><b>Password</b></h4></label>
                                <div class="input-group input-group-append">
                                    <input type="password" class="form-control b_r_20" id="password" name="password" placeholder="Password" >
                                    <span class="input-group-text" style="background-color:black">
                                        <i class="fa fa-key text-primary"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-t-10">
                                    <a href="register.php" class="forgottxt_clr text-black"><i class="fa fa-external-link"></i> Register Now</a>
                                </div>
                                <div class="col p-l-0 m-t-10">
                                    <div class="float-right">
                                        <a href="forgot.php" class="forgottxt_clr text-black">Forgot password ?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success btn-tone m-r-5 btn-block b_r_20 m-t-20">LOG IN</button>
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

</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/sign-up-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:53 GMT -->
</html>