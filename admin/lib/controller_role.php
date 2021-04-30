<?php
session_start();

require("dbconnect.php");	
require 'dao.php';
require 'model.php';
require 'validation.php';
$d = new dao();
$m = new model();
$v=new Validation();
if(isset($_GET['id']))
{
	extract($_GET);
	$q = $d->delete("role_master","role_id='$_GET[id]'");
	if($q>0)
	{
		/*$_SESSION['msg'] = "data deleted.";*/
		header("location:../view_role.php");
		exit();
	}
	else
	{
		/*$_SESSION['msg'] = "data not deleted.";*/
		header("location:../view_role.php");
		exit();
	} 
}
extract($_POST);
$counter = 0;
if($v->onlycharwithspaces2($role))
{
	$counter++;
}
else{
	$_SESSION['role'] = "only Charcter!!";
 if (isset($_POST['btnupdate']))
		{
		header("location:../edit_role.php");
		exit();
		}
	  else
		{
		header("location:../role.php");
		exit();
	}
		
}


if($v->duplicationcheck2("role_master","role_name='$role'"))
{
	$counter++;
}
else{

	$_SESSION['exist'] = "already exist!!";
	 if (isset($_POST['btnupdate']))
		{
		header("location:../edit_role.php");
		exit();
		}
	  else
		{
		header("location:../role.php");
		exit();
	}

}
if ($counter == 2)
	{
	if (isset($_POST) && !empty($_POST))
		{
		if (isset($_POST['Insert']))
			{
			$m->set_data("role",$role);
			$a = array('role_name'=>$m->get_data(test_input('role')));
			$q = $d->insert("role_master",$a);
			if ($q > 0){
				echo "Inserted ";
				}
			  else
				{
				echo "Something is wrong";
				}
			}

		if (isset($_POST['btnupdate']))
			{
				extract($_POST);
			$m->set_data("role",$role);
			$a = array('role_name'=>$m->get_data(test_input('role')));
			$q = $d->update("role_master",$a,"role_id='$editID'");
			if ($q > 0)
				{
				header("location:../view_role.php");
				}
			  else
				{
				echo "Something is wrong";
				}
			}
		}
	}
  else
	{
	if (isset($_POST['btnupdate']))
		{
		header("location:../edit_role.php?id=$editID");
		exit();
		}
	  else
		{
		header("location:../role.php");
		exit();
		}
	}

?>