<?php include("header.php"); ?>
            <!-- Page Container START -->
            <div class="page-container">
            	<?php $id=$_GET['id'];?>
                <!-- Content Wrapper START -->
                <div class="main-content">
                	<button class="btn btn-success btn-tone m-r-5" style="margin-left:20px;float: right" onclick="window.location='add_record.php?id=<?php echo $id; ?>'">New Health Record</button><br/><br/>
                    <div class="row">
                        <?php
                       
                        $sql1="SELECT * FROM patient_master WHERE login_id='$id'";
                        $res=mysqli_query($con,$sql1);
                        // $sql2="SELECT * FROM patient_master";
                        // $res2=mysqli_query($con,$sql2);
                        ?>
                        <div class="table-responsive">
                        	
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
						                <th scope="col">Time</th>
						            </tr>
						    	</thead>
						    	<tbody>
						<?php
						$a=1;
                        while($row = mysqli_fetch_array($res))
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
						                <td><?php echo $sm; ?></td>

						                <td><?php echo $row['checkup_time']; ?></td>
						            </tr>
						           <?php
						           $a++;
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
