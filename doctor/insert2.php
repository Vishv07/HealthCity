<?php
include "connection.php";	
extract($_POST);
$sm =" ";

if($Symptom1!="" AND  $Symptom2=="" AND $Symptom3=="")
{
	
	$sm = $Symptom1;
}
if($Symptom1!="" &&  $Symptom2!="" && $Symptom3=="")
	
{
	
	$sm = $Symptom1."##".$Symptom2;
}
 
if($Symptom1!="" &&  $Symptom2!="" && $Symptom3!="")
{
	
	$sm = $Symptom1."##".$Symptom2."##".$Symptom3;
}

$ds =" ";

if($Disease1!="" AND  $Disease2=="" AND $Disease3=="")
{
	
	$ds = $Disease1;
	$a="SELECT * FROM disease WHERE name='$Disease1'";
	$q=mysqli_query($con,$a);
	$y=mysqli_fetch_array($q);
	$count=mysqli_num_rows($q);
	if($count==0)
	{
	 	$sq="INSERT INTO disease(name) VALUES('$Disease1')";
	 	$sqo=mysqli_query($con,$sq);
	}
	else
	{
	 	$sw="UPDATE disease SET count=(count+1) WHERE name='$Disease1'";
	 	$sp=mysqli_query($con,$sw);
	}
}
if($Disease1!="" &&  $Disease2!="" && $Disease3=="")	
{
	
	$ds = $Disease1."##".$Disease2;
	$a="SELECT * FROM disease WHERE name='$Disease1'";
	var_dump($a);
	$q=mysqli_query($con,$a);
	$y=mysqli_fetch_array($q);
	$count=mysqli_num_rows($q);
	if($count==0)
	{
	 	$sq="INSERT INTO disease(name) VALUES('$Disease1')";
	 	$sqo=mysqli_query($con,$sq);
	}
	else
	{
	 	$sw="UPDATE disease SET count=(count+1) WHERE name='$Disease1'";
	 	$sp=mysqli_query($con,$sw);
	}
	$a1="SELECT * FROM disease WHERE name='$Disease2'";
	$q1=mysqli_query($con,$a1);
	$y1=mysqli_fetch_array($q1);
	$count1=mysqli_num_rows($q1);
	if($count1==0)
	{
	 	$sq1="INSERT INTO disease(name) VALUES('$Disease2')";
	 	$sqo1=mysqli_query($con,$sq1);
	}
	else
	{
	 	$sw1="UPDATE disease SET count=(count+1) WHERE name='$Disease2'";
	 	$sp1=mysqli_query($con,$sw1);
	}
}
 
if($Disease1!="" &&  $Disease2!="" && $Disease3!="")
{
	
	$ds = $Disease1."##".$Disease2."##".$Disease3;
	$a="SELECT * FROM disease WHERE name='$Disease1'";
	var_dump($a);
	$q=mysqli_query($con,$a);
	$y=mysqli_fetch_array($q);
	$count=mysqli_num_rows($q);
	if($count==0)
	{
	 	$sq="INSERT INTO disease(name) VALUES('$Disease1')";
	 	$sqo=mysqli_query($con,$sq);
	}
	else
	{
	 	$sw="UPDATE disease SET count=(count+1) WHERE name='$Disease1'";
	 	$sp=mysqli_query($con,$sw);
	}
	$a1="SELECT * FROM disease WHERE name='$Disease2'";
	$q1=mysqli_query($con,$a1);
	$y1=mysqli_fetch_array($q1);
	$count1=mysqli_num_rows($q1);
	if($count1==0)
	{
	 	$sq1="INSERT INTO disease(name) VALUES('$Disease2')";
	 	$sqo1=mysqli_query($con,$sq1);
	}
	else
	{
	 	$sw1="UPDATE disease SET count=(count+1) WHERE name='$Disease2'";
	 	$sp1=mysqli_query($con,$sw1);
	}
	$a2="SELECT * FROM disease WHERE name='$Disease3'";
	$q2=mysqli_query($con,$a2);
	$y2=mysqli_fetch_array($q2);
	$count2=mysqli_num_rows($q2);
	if($count2==0)
	{
	 	$sq2="INSERT INTO disease(name) VALUES('$Disease3')";
	 	$sqo2=mysqli_query($con,$sq2);
	}
	else
	{
	 	$sw2="UPDATE disease SET count=(count+1) WHERE name='$Disease3'";
	 	$sp2=mysqli_query($con,$sw2);
	}
}
function otpprog($name,$no)
        {
            $authKey = "271014AjOTFTYQeWd5e575cddP1";
            $senderId = "BHUMII";
            //$message = urlencode($msg);
            $postData = array(
            'authkey' => $authKey,
            'mobiles' => $no,
            'message' => "Hello ".$name." is spreaded",
            'sender' => $senderId,
            );
            $url="http://api.msg91.com/api/sendhttp.php";
            $ch = curl_init($url);
            curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData
            //,CURLOPT_FOLLOWLOCATION => true
            ));
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            $response = curl_exec($ch);
            //Print error if any
            if(curl_errno($ch))
            {
                echo 'error:' . curl_error($ch);
            }
            curl_close($ch);
        }



		$disease = $ds;
		$reason=$_POST['reason'];
		$symptom=$sm;
		$height=$_POST['height'];
		$weight=$_POST['weight'];
		$prescription=$_POST['prescription'];
		$report=$_POST['report'];
		$id=$_GET['id'];
		$hospital=$_POST['hospital'];
		$sql="SELECT * FROM user_master WHERE login_id='$id'";
		$q=mysqli_query($con,$sql);
		$no=mysqli_fetch_array($q);
		$inc = $no['access_count']+1;
		$reg_no=$no['card_id'];
		$query = "INSERT INTO `patient_master`(`login_id`, `card_id`, `disease_description`, `reason_visit`, `height`, `weight`, `prescription`, `symptoms`, `Report`,`hospital`) VALUES ('$id','$reg_no','$disease','$reason','$height','$weight',
		'$prescription','$symptom','$report','$hospital')";

		$update = "UPDATE user_master SET access_count = $inc where login_id = '$id'";

		$q2 = mysqli_query($con,$update);

		echo $update;

		$sql1=mysqli_query($con,$query);	

		$gf="SELECT * FROM disease WHERE status=0 AND count>=10";
		$qh=mysqli_query($con,$gf);
		$hg="SELECT phone_no FROM user_master WHERE status=1";
		$ok=mysqli_query($con,$hg);
		$qi=mysqli_fetch_array($qh);
	
		$qi=mysqli_fetch_array($qh);
		
		
			$st=$qi['status'];
		
			$name=$qi['name'];

			if($st==0)
			{

				while($qd=mysqli_fetch_array($ok))
				{
					
					$no=$qd['phone_no'];
        			otpprog($name,$no);
    			}
        
			}
			$de5="UPDATE disease SET status=1 WHERE name='$name'";
        	$ef=mysqli_query($con,$de5);
	
		header("location:view_details.php?id=$id");	
?>