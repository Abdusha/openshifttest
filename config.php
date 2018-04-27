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

<<<<<<< HEAD
	if (mysqli_connect_errno()){
		die("Disconnect. ".mysqli_connect_error());
	} 
=======
	$conn = mysqli_connect($dbhost, $dbserver, $dbuname, $dbpass);
	if ($conn) {
		echo "Berhasil Connect";
	}
>>>>>>> 0619b4b3d829a53f73098a6487fac7e5726a7570
	else{
		echo "Connected to database";
	}
?>
