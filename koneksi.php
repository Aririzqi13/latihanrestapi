<?php
	
	    $server = "localhost";
	    $user = "root";
	    $pass = "root";
	    $db = "wsmhs";
	
	    $conn = mysqli_connect($server, $user, $pass, $db);
	    if (!$conn) {
	        die("gagal!");
	    } 
	
	?>
