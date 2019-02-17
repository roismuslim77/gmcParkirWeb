<?php
// Parameter untuk database MySQL
$host = "localhost";
$user = "id6675937_gmc";
$pass = "tsani888";
$name  = "id6675937_gmc";
$table= "data";
 
// Baca parameter get  /simpandata.php?suhu=x <===
$slot1 = $_GET["slot1"];
$slot2 = $_GET["slot2"];
$slot3 = $_GET["slot3"];
$slot4 = $_GET["slot4"];
$slot5 = $_GET["slot5"];
 
// Buat koneksi ke database MySQL
$conn = new mysqli($host, $user, $pass, $name);
 
// Periksa apakah koneksi sudah berhasil
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$hapus = "TRUNCATE `data`";
$input = "INSERT INTO `data` (`id`, `created_at`, `slot1`, `slot2`, `slot3`, `slot4`, `slot5`) VALUES (NULL,CURRENT_TIMESTAMP,'$slot1','$slot2','$slot3','$slot4','$slot5')";

$hasil2 = $conn->query($hapus);
$hinput = $conn->query($input);
if (($hasil2 && $hinput) === TRUE) {
    echo "Sukses..";
} else {
    echo "Error: ". $conn->error;
}
$conn->close();
?>