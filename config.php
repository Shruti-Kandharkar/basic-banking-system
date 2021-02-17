<?php

	$servername = "localhost";
        $username = "id16105386_shruti123";
        $password = "LvT@Kyrll]C&&8-A";
        $database = "id16105386_dummy";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $database);

	if(!$conn){
		die("Unable to connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>



