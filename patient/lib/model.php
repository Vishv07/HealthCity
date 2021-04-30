<?php
	
	class model
	{
		private $ary;
		function set_data($name,$value)
		{
			$this->ary[$name]=$value;
		}
		function get_data($name)
		{
			return $this->ary[$name];
		}
	}
	function test_input($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = strip_tags($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>