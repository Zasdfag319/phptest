<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hakan";
$maindbKey = array($servername, $username, $password, $dbname);

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO kullanicilar(kullanici_adi, isim, soyisim, sifre) VALUES(?, ?, ?,? )");
$stmt-bind_param($kullanici_adi, $isim, $soyisim, $sifre);
?>