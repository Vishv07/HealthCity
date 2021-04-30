<?php include("header.php"); ?>
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    
                    	<form method="POST">
                        <input type="text" style="margin-bottom: 10px " class="form-control" placeholder="Enter Name..." name="name">
                        <button class="btn btn-success btn-tone m-r-5" name="search">Search</button>
                    </form>
                        <?php
                    	if(isset($_POST['search']))
                    	{
                        $search=$_POST['name'];
                        $sql1="SELECT * FROM user_master WHERE fname LIKE '%$search%' and role_id='2'";
                        $res=mysqli_query($con,$sql1);
                        ?>
                        <div class="table-responsive">
						    <table class="table table-hover">
						        <thead>
						            <tr>
						                <th scope="col">Sr.no</th>
						                <th scope="col">Name</th>
						                <th scope="col">Email</th>
						            	<th scope="col">Phone</th>
						                <th scope="col">Blood Group</th>
						                <th scope="col">DOB</th>
						                <th scope="col">Profile_Pic</th>
						                <th scope="col">Action</th>
						            </tr>
						    	</thead>
						    	<tbody>
						<?php
						$a=1;
                        while($row = mysqli_fetch_array($res))
                        {
                        	$i=$row['login_id'];
                ?>      
						            <tr>
						                <th scope="row"><?php echo $a; ?></th>
						                <td><?php echo $row['fname'];?></td>
						                <td><?php echo $row['email'];?></td>
						                <td><?php echo $row['phone_no'];?></td>
						                <td><?php echo $row['blood_group'];?></td>
						                <td><?php echo $row['dob'];?></td>
						                <td><img src="<?php echo $row['profile_pic']; ?>" height="50" width="50" border="1px" alt="profile pic"></td>
						                <td><button class="btn btn-success btn-tone m-r-5" style="margin-left:20px;" onclick="window.location='view_details.php?id=<?php echo $i;?>'">View Details</button></td>
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
                <!-- Content Wrapper END -->
<?php include("footer.php"); ?>
