<?php

// Create connection
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "skillindia";
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}

?>