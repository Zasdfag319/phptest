<?php
include 'maindbConn.php';
echo $maindbKey;

$sql = "CREATE TABLE masa3(
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  isim VARCHAR(30),
  soyisim VARCHAR(30),
  eposta VARCHAR(50),
  kyt_trhi TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>