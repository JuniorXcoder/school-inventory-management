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
$aset = $_POST['aset'];
$status = $_POST['status'];
$update = $_POST['update'];
$id = $_POST['id'];
//MySqli Insert Query
//MySqli Update Query
if($update){
$change = $mysqli->query("UPDATE `alat` SET `n_aset`='Null' WHERE id='$id'");
if ($change){
$count = $mysqli->query("SELECT * FROM `alat` WHERE `n_aset`='$aset'");
$count1 = mysqli_num_rows($count);
if ($count1 == 0) {
$results = $mysqli->query("UPDATE `alat` SET `Nama Barang`='$barang',`brand`='$brand',`model`='$model',`kode`='$kode',`n_aset`='$aset',`status`='$status' WHERE id='$id'");

//MySqli Delete Query
//$results = $mysqli->query("DELETE FROM products WHERE ID=24");

if($results){
    print 'Success! record updated / deleted';
    header("location: ../../index.php?page=alat");
}
else{
    print 'Error : ('. $mysqli->errno .') '. $mysqli->error;
}
}else{?>
<script type="text/javascript">
	alert("No Aset Telah terdaftar, silahkan masukan no aset lain");
</script><?php
}
}else{
       	die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}

}
?>