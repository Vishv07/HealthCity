<?php include("header.php");
	session_start();
	$log = $_SESSION['log'];
 ?>
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                	<form method="POST">
                        <input type="text" style="margin-bottom: 10px " class="form-control" placeholder="Enter Registration Number" name="name">
                        <button class="btn btn-success btn-tone m-r-5" name="search">Search</button>
                    </form>
                        <?php
                    	if(isset($_POST['search']))
                    	{
                        $search=$_POST['name'];
                        $sql1="SELECT * FROM user_master WHERE card_id LIKE '%$search%' AND role_id=2";
                        $res=mysqli_query($con,$sql1);
                        $row1=mysqli_fetch_array($res);
                        $no=$row1['card_id'];
        				$name=$row1['fname'];
        				$sql2="SELECT * FROM patient_master WHERE card_id='$no'";
        				$res1=mysqli_query($con,$sql2);
                        ?>
                        
                        <div class="table-responsive">
                        	<div style="margin-top: 20px;font-size: 20px"><b>Name: <?php echo $name;?></b><br/><b>Registration Number: <?php echo $no;?></b><br/><br/></div>
						    <table class="table table-hover">
						        <thead>
						            <tr>
						                <th scope="col">Sr.no</th>
						                
						                <th scope="col">Disease Description</th>
						                <th scope="col">Reason_Visit</th>
						            	<th scope="col">Height</th>
						                <th scope="col">Weight</th>
						                <th scope="col">Prescription</th>
						                <th scope="col">Symptoms</th>
						            </tr>
						    	</thead>
						    	<tbody>
						<?php
						$a=1;
                        while($row = mysqli_fetch_array($res1))
                        {
                        	$symptoms = $row['symptoms'];
                        	list($s1,$s2,$s3) = array_pad(explode('##', $symptoms),3,is_null($symptoms));

                        	if($s1!="" AND  $s2=="" AND $s3=="")
							{
								
								$sm = $s1;
							}
							if($s1!="" &&  $s2!="" && $s3=="")
								
							{
								
								$sm = $s1.",".$s2;
							}
							 
							if($s1!="" &&  $s2!="" && $s3!="")
							{
								
								$sm = $s1.",".$s2.",".$s3;
							}

							$ds = $row['disease_description'];
                        	list($d1,$d2,$d3) = array_pad(explode('##', $ds),3,is_null($ds));

                        	if($d1!="" AND  $d2=="" AND $d3=="")
							{
								
								$ds1 = $d1;
							}
							if($d1!="" &&  $d2!="" && $d3=="")
								
							{
								
								$ds1 = $d1.",".$d2;
							}
							 
							if($d1!="" &&  $d2!="" && $d3!="")
							{
								
								$ds1 = $d1.",".$d2.",".$d3;
							}

                        	$i=$row['login_id'];
                ?>      
						            <tr>
						                <th scope="row"><?php echo $a; ?></th>
						              
						                <td><?php echo $ds1;?></td>
						                <td><?php echo $row['reason_visit'];?></td>
						                <td><?php echo $row['height'];?></td>
						                <td><?php echo $row['weight'];?></td>
						                <td><?php echo $row['prescription'];?></td>
						                <td><?php echo $sm;?></td>
						            </tr>
						           <?php
						           $a++;
						       }
						   }
						   
						       ?>
						        </tbody>
						    </table>
						</div>
                	</div>
                </div>
            </div>
                <!-- Content Wrapper END -->
<?php include("footer.php"); ?>
