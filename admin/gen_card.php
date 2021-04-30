<?php

	require 'lib/dao.php';
	  $d = new dao();
	  session_start();
	include "header.php";


?>
 <!-- Page Container START -->
  <link type="text/css" rel="stylesheet" href="assets/css/custom.css" />
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Generate Health Card</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <a href="#" class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Home</a>
                                <a class="breadcrumb-item" href="#">Patient</a>
                                <span class="breadcrumb-item active">Generate Health Card</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4>Generate Health Card</h4>
                            <p>DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, built upon the foundations of progressive enhancement, that adds all of these advanced features to any HTML table. Below is an example of zero configuration.</p>
                            <div class="m-t-25">
                                <table id="data-table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Generate</th>
                                             <th>Action</th>
                                            
                                        </tr>
                                    </thead>
<?php

                $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'phpqrcode/temp'.DIRECTORY_SEPARATOR;
    
    //html PNG location prefix
    $PNG_WEB_DIR = 'phpqrcode/temp/';

    include "phpqrcode/qrlib.php";    
    
    //ofcourse we need rights to create temp dir
    if (!file_exists($PNG_TEMP_DIR))
        mkdir($PNG_TEMP_DIR);
    
    
    $filename = $PNG_TEMP_DIR.'test.png';
    
    //processing form input
    //remember to sanitize user input in real-life solution !!!
    $errorCorrectionLevel = 'L';
    if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
        $errorCorrectionLevel = $_REQUEST['level'];    

    $matrixPointSize = 4;
    if (isset($_REQUEST['size']))
        $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);


   
        
    //display generated file

    /*echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';  */

    ?>
                                 
                                    <tbody>
                                    	    <?php
    $a=0;
           $q5 = $d->select("user_master","");
          //$data = mysqli_query($con,$q);
          $i = 0; 
          while( $result = mysqli_fetch_array($q5)){

$qrdata = "192.168.43.10/Healthcity/patient/view_record.php?log1=".$result['card_id'];

             if (isset($qrdata)) { 
    
        //it's very important!
        if (trim($qrdata) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        $filename = $PNG_TEMP_DIR.'test'.md5($qrdata.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
        QRcode::png($qrdata, $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    } else {    
    
        //default data
        echo 'You can provide data in GET parameter: <a href="?data=like_that">like that</a><hr/>';    
        QRcode::png('PHP QR Code :)', $filename, $errorCorrectionLevel, $matrixPointSize, 2);    
        
    }    
        
        $img1 = "assets/images/profilepic/1581489425.IMG_4409.jpg";

       $var =$PNG_WEB_DIR.basename($filename);
           
         
      ?>	
                                        <tr>
                                          <td ><?php echo $result['fname']." ".$result['lname'];?></td>
                                         <td><?php echo $result['email']; ?></td>
                                            <td><?php echo $result['phone_no']; ?></td>
                                            <td><a href="#" class=" openmodal  btn-primary btn-xs" data-toggle="modal" data-target="#myModal"
											
											data-gender = "<?php echo $result['gender'];?>" data-bdate="<?php echo $result['dob'];?>"
											data-img = "<?php echo $img1; ?>" data-cardid= "<?php echo $result['card_id'];?>"

                                            data-name="<?php echo $result['fname']." ".$result['lname'];?>"

                                                data-qr = "<?php echo $var;   ?>"

                                            	style="color: white; border: 2px solid white;">Generate</a></td>
                                            <td> <a  href="editpatient.php?id=<?php echo $result['login_id']; ?>" class="btn btn-icon btn-hover btn-sm btn-rounded pull-right">
                                                    <i class="anticon anticon-edit"></i>
                                                </a>
                                                <button class="btn btn-icon btn-hover btn-sm btn-rounded">
                                                    <i class="anticon anticon-delete"></i>
                                                </button></td>
                                      
                                        </tr>
                                    <?php  }  ?>
                                        
                                    </tbody>
                                    
                                </table>
                            </div>
                           
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <!-- Quick View END -->

        </div>
    </div>
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <i class="anticon anticon-close"></i>
                </button>
            </div>
            <div class="modal-body" style=" background-color: gray">
                 
                                   
                                    <div class="row" id="card-view" >
                                        <div class="col-md-2"></div>
                                      <div class="col-md-8" >
                                    <div class="card"  >
                                        <div class="card-body" >
                                            <div class="m-t-20 text-center"style="border: 2px ridge  #1DC5B9;  border-radius: 15px; padding: 0px;   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2); " >
                                                <br>
                                            	<center><b>Health - Card</b></center>
                                            	<br>
                                                <div class="avatar avatar-image" style="height: 100px; width: 100px;">
                                                    <img  id="photo" src=""  alt="">
                                                </div>
                                                <h4 class="m-t-30" id="name1"></h4>
                                                <span ><b>Gender : &nbsp;</b><b id="gn" style="display: inline-block;"></b></span>
                                                <br>
                                                <span ><b>Birthdate : &nbsp;</b><b id="bd" style="display: inline-block;"></b></span>
                                                <br>
                                                <span ><b>HealthCard-ID : &nbsp;</b><b id="Health_Id" style="display: inline-block;"></b></span>
                                                <center><img  id="qr" src=""  alt=""></center> <br>
                                            </div>
                                                 
                                           
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                  
                                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button"   onclick="myFunction()" class="btn btn-primary">Print</button>
            </div>
        </div>
    </div>
</div>

    <script type="text/javascript">
        

        var ld = document.getElementById('loading');


        function f1()
        {


            ld.style.display = 'none';
        }

        function myFunction() {
  window.print();
}
    </script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        	
        	$(document).ready(function () {
			    $(".openmodal").click(function () {
			 		var a = $(this).attr('data-img');
                    var b =$(this).attr('data-qr');
			 		$('#photo').attr("src",a);
                    $('#qr').attr("src",b);
			        $('#name1').text($(this).data('name'));
			          $('#gn').text($(this).data('gender'));
			           $('#bd').text($(this).data('bdate'));
			            $('#Health_Id').text($(this).data('cardid'));
			        
			        $('#myModal').modal('show');
			    });
			});
          
</script>
    <!-- Core Vendors JS -->
    <script src="assets/js/vendors.min.js"></script>

    <!-- page js -->
    <script src="assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/pages/datatables.js"></script>

    <!-- Core JS -->
    <script src="assets/js/app.min.js"></script>

</body>


<!-- Mirrored from themenate.com/enlink-bs/dist/data-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 08 Feb 2020 05:06:21 GMT -->
</html>