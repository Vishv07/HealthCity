<?php include("header.php"); ?>
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
                        
                        ?>
 						<div class="table-responsive">
						    <table class="table table-hover">
						        <thead>
						            <tr>
						                <th scope="col">Sr.no</th>
						                <th scope="col">Name</th>
						                <th scope="col">Email</th>
						            	<th scope="col">Phone</th>
						                <th scope="col">BG</th>
						                <th scope="col">DOB</th>
						                <th scope="col">Card_id</th>
						                <th scope="col">Profile_Pic</th>
						                <th scope="col">Action</th>
						            </tr>
						    	</thead>
						    	<tbody>
						<?php
						$a=1;
                        while($id=mysqli_fetch_array($res))
                        {
                        	
                ?>      
						            <tr>
						                <th scope="row"><?php echo $a; ?></th>
						                <td><?php echo $id['fname'];?></td>
						                <td><?php echo $id['email'];?></td>
						                <td><?php echo $id['phone_no'];?></td>
						                <td><?php echo $id['blood_group'];?></td>
						                <td><?php echo $id['dob'];?></td>
						                <td><?php echo $id['card_id'];?></td>
						                <td><img src="<?php echo $id['profile_pic']; ?>" height="50" width="50" border="1px" alt="profile pic"></td>
						                <td><button class="btn btn-success btn-tone m-r-5" style="margin-left:20px;" onclick="window.location='view_details.php?id=<?php echo $id['login_id'];?>'">View Details</button></td>
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
