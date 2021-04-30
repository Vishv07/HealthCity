
<?php

session_start();

include "header.php";




?>


  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.6/Chart.bundle.min.js">
        
    </script>
     <div class="page-container ">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row bg-white">
                       <div class="col-lg-12 bg-white">
                    
                            <div class="col-lg-12">
                                <br>
                                <h2> Enter Records</h2>
                             
                                <form action="dianalysis.php"  method="post"  enctype="multipart/form-data" >
                             <div class="form-row">
                                     <div class="form-group col-md-3">
                                        <label for="inputState">City</label>
                                        <select id="inputState" class="form-control"  name="city">
                                            <option >All </option>
                                            <option value="Ahmedabad" selected>Ahmedabad</option>
                                            <option value="Vadodara">Vadodara</option>
                                            <option value="Anand">Anand</option>
                                            <option value="ChhotaUdaipur">Chhota Udaipur</option>
                                            <option value="Dahod">Dahod</option>
                                            <option value="Kheda">Kheda</option>
                                            <option value="Mahisagar">Mahisagar</option>
                                            <option value="Panchmahal">Panchmahal</option>
                                            <option value="Gandhinagar">Gandhinagar</option>
                                            <option value="Aravalli">Aravalli</option>
                                            <option value="Banaskantha">Banaskantha</option>
                                            <option value="Mehsana">Mehsana</option>
                                            <option value="Patan">Patan</option>
                                            <option value="Sabarkantha">Sabarkantha</option>
                                            <option value="Rajkot">Rajkot</option>
                                            <option value="Botad">Bhavnagar</option>
                                             <option value="Devbhoomi Dwarka">Devbhoomi Dwarka</option>
                                              <option value="Amreli">Amreli</option>
                                               <option value="Gir Somnath">Gir Somnath</option>
                                                <option value="Jamnagar">Jamnagar</option>
                                                 <option value="Junagadh">Junagadh</option>
                                                  <option value="Morbi">Morbi</option>
                                                   <option value="Porbandar">Porbandar</option>
                                                    <option value="Surendranagar">Surendranagar</option>
                                                      <option value="Kachchh">Kachchh</option>
                                                    <option value="Surat">Surat</option>
                                                      <option value="Bharuch">Bharuch</option>
                                                    <option value="Dang">Dang</option>
                                                      <option value="Narmada">Narmada</option>
                                                    <option value="Navsari">Navsari</option>
                                                      <option value="Tapi">Tapi</option>
                                                    <option value="Valsad">Valsad</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputCity">Age</label>
                                        <select id="inputSsdtate" class="form-control"  name="age">
                                             <option  value="15" >13-17</option>
                                            <option  value="20" selected>18-24</option>
                                            <option value="30">25-34</option>
                                             <option value="40">35-44</option>
                                              <option value="50">44-54</option>
                                               <option value="60">55-64</option>
                                               <option value="70">65+</option>
                                        </select>
                                    </div>

                                   <div class="form-group col-md-3">
                                        <label for="input2"  >Gender</label>
                                        <select id="gender" class="form-control" name="gender">
                                            <option >All </option>
                                            <option value="Male" selected=>Male</option>
                                             <option value="Female">FeMale</option>
                                        </select>
                                    </div>
                                      <div class="form-group col-md-3">
                                        <label for="inputZip">Submit</label>
                                        <input type="Submit" class="form-control btn btn-primary" style="color: white;" id="inputZip">
                                    </div>
                                </div>

                                </form>
                            </div>
                        </div>  
                    </div>


                    <div class="row">
                        
<canvas id="myChart2" height="1200" width="400"></canvas>
<script type="text/javascript">
<?php


    $city = $_POST['city'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
   $command = escapeshellcmd("C:\Users\Krishna\AppData\Local\Programs\Python\Python37\python.exe prevailDisease.py ".$city." ".$age." ".$gender);
    $output = shell_exec($command);


   


?>
var zz = "<?php  echo $output ?>";

bmi = zz.split('#')
    bmiLabels = bmi[0].split(',')
bmiLabelsCount = bmi[1].split(',')
console.log(bmiLabels)
console.log(bmiLabelsCount)
var chartData = {

    // labels: ["January", "February", "March", "April", "May", "June"],
    labels: bmiLabels,
    datasets: [
        {

            fillColor: "#3e95cd",
            strokeColor: "#3e95cd",
             backgroundColor: ["#8e5ea2"],
            // data: [60, 80, 81, 56, 55, 40]
            data: bmiLabelsCount
        }
    ]



};

var barOptions = {

 scales: {
            yAxes: [{

                barThickness: 2,  // number (pixels) or 'flex'
                maxBarThickness: 2 // number (pixels)
            }]
        },
         title: {
        display: true,
        text: 'CITY-AGE-GENDER WISE DISEASES'
      },
  
  events: false,
  showTooltips: false,
  animation: {
    duration: 500,
     
    easing: "easeOutQuart",


    onComplete: function () {
        var ctx = this.chart.ctx;
        ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontFamily, 'normal', Chart.defaults.global.defaultFontFamily);
        ctx.textAlign = 'left';
        ctx.textBaseline = 'bottom';
        
        this.data.datasets.forEach(function (dataset) {
            console.log(dataset);
            for (var i = 0; i < dataset.data.length; i++) {
                var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model,
                    scale_max = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._yScale.maxHeight;
                    left = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.left;
                    offset = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._xScale.longestLabelWidth;
                ctx.fillStyle = '#ffffff';
                var y_pos = model.y - 5;
                var label = model.label;
                // Make sure data value does not get overflown and hidden
                // when the bar's value is too close to max value of scale
                // Note: The y value is reverse, it counts from top down
                if ((scale_max - model.y) / scale_max >= 0.93)
                    y_pos = model.y + 20; 
                // ctx.fillText(dataset.data[i], model.x, y_pos);
                ctx.fillText(label, left + 10, model.y + 8);
            }
        });               
    }
  }

};

var ctx = document.getElementById("myChart2").getContext("2d");
var myBar = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartData,
                options: barOptions
            });



            </script>

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

    
    <!-- Core Vendors JS -->



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