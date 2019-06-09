<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_alat";
// Create connection
$mysqli =  mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($mysqli->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

//values to be inserted in database table
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$gender = $_POST['gender'];
$alat = $_POST['assets'];
date_default_timezone_set('Asia/jakarta');
$simpan = $_POST['simpan'];
$jam = date('d-m-Y H:i');
//MySqli Insert Query
if($simpan){
$insert = $mysqli->query("SELECT * FROM `alat` WHERE `n_aset`='$alat'");
$data = $insert->fetch_assoc();
$relasi = $data['id'];
$insert_row = $mysqli->query("INSERT INTO `transaksi`(`n_peminjam`, `k_peminjam`, `jk_peminjam`, `alat`, `status`, `jam_keluar`) VALUES('$nama', '$kelas', '$gender', '$relasi', 'Dipinjam', '$jam')"); $mysqli -> query("UPDATE `alat` SET `status`='Dipinjam' WHERE `n_aset`='$alat'");
if($insert_row){
?> <script type="text/javascript">
alert("Data Barang Berhasil di Input!");
window.location.href="../../../index.php";
</script><?php
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}}
?>

