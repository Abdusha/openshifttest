<?php
	//config your database
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbserver = getenv("databaseserver");
	$dbuser = getenv("databaseuser");
	$dbpass = getenv("databasepass");
	$dbname = getenv("databasename"); 
	// $dbhost = "localhost";
	// $dbuser = "root";
	// $dbpass = "";
	// $db = "db_1301150053";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if (mysqli_connect_errno()){
		die("Disconnect. ".mysqli_connect_error());
	} 
	else{
		echo "Connected";
	}
?>
