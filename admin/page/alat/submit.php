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
$barang = $_POST['barang'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$kode = $_POST['kode'];
$asset1 = $_POST['asest1'];
$asset2 = $_POST['asset2'];
$aset = $asset1 - $asset2;
$jumlah = $_POST['jumlah'];
$status = $_POST['status']

$simpan = $_POST['simpan'];
//MySqli Insert Query
if($simpan){
$insert_row = $mysqli->query("INSERT INTO `alat`(`Nama Barang`, `brand`, `model`, `kode`, `jumlah`, `n_aset`, `status`) VALUES('$barang', '$brand', '$model', '$kode', '$jumlah', '$aset', '$status')");

if($insert_row){
    print 'Success! ID of last inserted record is : ' .$mysqli->insert_id .'<br />';
    header("location: index.php?page=alat");
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}}
?>

