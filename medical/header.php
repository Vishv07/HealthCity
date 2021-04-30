<?php
    include "connection.php";
    session_start();
    if(!isset($_SESSION['log']))
    {
        header("location:sign_up.php");
    }
    else
    {
        $log = $_SESSION['log'];
        $sql = "SELECT * FROM user_master WHERE email='$log'";
        $result = mysqli_query($con,$sql);
        $value = mysqli_fetch_array($result);
        $sql1 = "SELECT profile_pic FROM user_master WHERE email='$log'";
        $result2 = mysqli_query($con,$sql1);
        $value2 = mysqli_fetch_array($result2);
        $def =$value2['profile_pic'];
        $id = $value['login_id'];
        $name= $value['fname'];

}?>
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
    <!-- page css -->
    <link href="assets/vendors/select2/select2.css" rel="stylesheet">
    <!-- page js -->
    <!-- page css -->
    <link href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">
    
</head>
<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="index.php">
                        <img src="../assets/images/logo.png" alt="Logo" height="70px">
                        <img class="logo-fold" src="../assets/images/logo.png" alt="Logo" height="50px">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="index.php">
                        <img src="../assets/images/logo.png" alt="Logo">
                        <img class="logo-fold" src="../assets/images/logo.png" alt="Logo">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="<?php echo $def ?>"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="<?php echo $def ?>" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold"><?php echo $name;?></p>
                                        </div>
                                    </div>
                                </div>
                                <a href="edit_user.php" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="logout.php" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <!-- <li class="nav-item dropdown open">
                            <a class="dropdown-toggle" href="index.php">
                                <span class="icon-holder">
                                    <i class="anticon anticon-dashboard"></i>
                                </span>
                                <span class="title">Dashboard</span>
                                
                            </a>
                            
                        </li> -->
                       
                        <!-- <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                   <i class="fas fa-file-medical-alt"></i>
                                </span>
                                <span class="title">View Records</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="add_patient.php"><span class="icon-holder">
                                        <i class="anticon anticon-user-add"></i>
                                    </span>
                                        &nbsp;Add Patient</a>
                                </li>
                                <li>
                                    <a href="view_record.php"><span class="icon-holder"><i class="fas fa-book-open"></i></span>
                                        &nbsp;View HealthRecord</a>
                                </li>
                                
                                
                            </ul>
                        </li> -->

<!-- <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                   <i class="fas fa-notes-medical"></i>
                                </span>
                                <span class="title">Reports</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="add_patient.php"><span class="icon-holder">
                                        <i class="anticon anticon-user-add"></i>
                                    </span>
                                        &nbsp;Add Patient</a>
                                </li>
                                <li>
                                    <a href="view_report.php"><span class="icon-holder"><i class="fas fa-book-open"></i></span>
                                        &nbsp;View Reports</a>
                                </li>
                                
                                
                            </ul>
                        </li> -->
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                   <i class="fas fa-capsules"></i>
                                </span>
                                <span class="title">Medicines</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- <li>
                                    <a href="add_patient.php"><span class="icon-holder">
                                        <i class="anticon anticon-user-add"></i>
                                    </span>
                                        &nbsp;Add Patient</a>
                                </li> -->
                                <li>
                                    <a href="view_prescription.php"><span class="icon-holder"><i class="fas fa-book-open"></i></span>
                                        &nbsp;View Prescription</a>
                                </li>
                                
                                
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-profile"></i>
                                </span>
                                <span class="title">Profile</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="edit_user.php"> <span class="icon-holder">
                                    <i class="anticon anticon-edit"></i>
                                </span>&nbsp;Edit Profile</a>
                                </li>
                                <li>
                                    <a href="logout.php"> <span class="icon-holder">
                                    <i class="anticon anticon-logout"></i>
                                </span>&nbsp;Logout</a>
                                </li>
                                
                                
                            </ul>
                        </li>
                        </ul>

                </div>
            </div>
            <!-- Side Nav END -->