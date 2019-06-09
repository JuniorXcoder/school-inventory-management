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

$n = $_POST['jum']; // membaca jumlah data


$submit = $_POST['submit'];
//MySqli Insert Query
if($submit){
	for ($i=1; $i<=$n; $i++)
{
	$barang = $_POST['barang'.$i];
	$brand = $_POST['brand'.$i];
	$model = $_POST['model'.$i];
	$kode = $_POST['kode'.$i];
	$assets = $_POST['asset'.$i];
	$status = $_POST['status'.$i];

    if ((!empty($assets)))
    {
	 $results = $mysqli->query("INSERT INTO `alat`(`Nama Barang`, `brand`, `model`, `kode`, `n_aset`, `status`) VALUES('$barang', '$brand', '$model', '$kode', '$assets', '$status')");
       if ($results){
        ?>
        <script type="text/javascript">
          alert("Insert Barang Sukses");
          window.location.href="../../index.php?page=alat";
        </script><?php
       }
       else{
       	die('Error : ('. $mysqli->errno .') '. $mysqli->error);
       }
    }
}
}

?>

