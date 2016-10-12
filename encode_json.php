<?php

		$servername = "localhost";
		$username = "project1";
		$password = "project123";
		$db = "project";


		// Create connection
		$conn= mysqli_connect($servername, $username, $password , $db);

		// Check connection
		if ($conn->connect_error)
		{
		die("Connection failed: " . $conn->connect_error);
		} 
		
		

		$select="SELECT * FROM `Stack` ";
		$fetch=mysqli_query($conn,$select);
		$row=mysqli_fetch_array($fetch);
		$i=0;
		$array = array();
		while ($row)
		{
			$val=array ($row[1],$row[2],$row[3]); 
			$array[$i] = $val;
			$row=mysqli_fetch_array($fetch);
			$i++;
		}
		echo json_encode($array);
		
?>
