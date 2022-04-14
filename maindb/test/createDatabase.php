<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

$sql = "DROP DATABASE zasdfag";

if (mysqli_query($conn, $sql)) {
	echo "Database created successfully";
} else {
	echo "Error creating database: " . mysql_error($conn);	
}

mysql_close($conn);
?>