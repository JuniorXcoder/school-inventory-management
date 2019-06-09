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
$nama_d = $_POST['nama_d'];
$nama_b =  $_POST['nama_b'];
$nama = "$nama_d $nama_b";;
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$simpan = $_POST['simpan'];
//MySqli Insert Query
if($simpan){
	$select = $mysqli->query("SELECT * FROM `admin` WHERE `username`='$username'");
$row1 = mysqli_num_rows($select);
if ($row1 == "0") {
$insert_row = $mysqli->query("INSERT INTO `admin`(`nama`, `username`, `email`, `password`) VALUES ('$nama','$username','$email', MD5('".$password."') )");

if($insert_row){
	?>
	<script type="text/javascript">
		alert("Anggota Berhasil Terdaftar");
  		window.location.href="index.php?page=anggota";
	</script>
	<?php
}else{
    die('Error : ('. $mysqli->errno .') '. $mysqli->error);
}
}else{
	?>
	<script type="text/javascript">
		alert("Username telah terdaftar");
  		window.location.href="index.php?page=anggota&action=add";
	</script>
	<?php
}
}
?>

