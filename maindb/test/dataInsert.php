<?php 
include 'maindbConn.php';
echo $maindbKey;

$sql = "INSERT INTO masa3 (isim, soyisim, eposta, kyt_trhi) 
	VALUES ('Hakan', 'Başol', 'hakanbasol319@gmail.com', CURRENT_TIMESTAMP)";

if (mysqli_query($conn, $sql)) {
	echo "New record inserted succesfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

