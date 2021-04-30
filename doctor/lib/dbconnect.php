<?php

	class dbconnect
	{
		function connect()
		{
			$connection = mysqli_connect("localhost","root","","health_city");
			return $connection;
		}
	}

?>