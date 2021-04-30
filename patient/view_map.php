<?php include("header.php");
	session_start();	
	$log = $_SESSION['log'];
?>
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                        <div class="table-responsive">
						 	<form method="POST" action="insert_map.php" >
						 		<h1>Select the Disease</h1><select name="map" style="width: 80%;height: 30px;margin-right: 10px">
						            <option value="typhoid">Typhoid</option>
						            <option value="jaundice">Jaundice</option>
						            <option value="swineflu">Swine Flu</option>
						            <option value="asthma">Asthma</option>
						           
						        </select>
						        <input type="submit" name="submit" value="submit" style="height: 30px">
						   	</form>   
						</div>
                	</div>
                </div>
            </div>
            
                <!-- Content Wrapper END -->
<?php include("footer.php"); ?>
