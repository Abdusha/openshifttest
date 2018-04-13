<?php 
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbserver = getenv("databaseserver");
	$dbuser = getenv("databaseuser");
	$dbpass = getenv("databasepass");
	$dbname = getenv("databasename");

	$conn = mysqli_connect($dbhost, $dbserver, $dbuname)
	if (!$conn) {
		die("gagal connect")
	}
	else{
		echo "Berhasil connect";
	}
?>