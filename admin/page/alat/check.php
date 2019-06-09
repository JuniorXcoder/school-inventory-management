<?php
$con = mysqli_connect('localhost', 'root', '', 'db_alat'); /// koneksi

///get data
$_Session['n'] = $_POST['jumlah']; // membaca jumlah data
$_Session['barang'] = $_POST['barang'];
$_Session['brand'] = $_POST['brand'];
$_Session['model'] = $_POST['model'];
$_Session['kode'] = $_POST['kode'];
$_Session['assets'] = $_POST['asset'];
$_Session['status'] = $_POST['status'];
$n = $_Session['n'];
$barang = $_Session['barang'];
$brand = $_Session['brand'];
$model = $_Session['model'];
$kode = $_Session['kode'];
$assets = $_Session['assets'];
$status = $_Session['status'];
$simpan = $_POST['simpan'];
///end get data

///sql query
if($simpan){
$sqlCommand1 = "SELECT * FROM `alat` WHERE `n_aset` LIKE '%$assets%'"; 
$query1 = mysqli_query($con, $sqlCommand1) or die (mysqli_error($con)); 
$row1 = mysqli_num_rows($query1);
	if ($row1 == 0) {
	?>
	<script type="text/javascript">
		window.location.href = "?page=alat&action=add&request=proses&n=<?php echo "$n"; ?>&barang=<?php echo "$barang" ?>&brand=<?php echo "$brand" ?>&model=<?php echo "$model" ?>&kode=<?php echo "$kode" ?>&assets=<?php echo "$assets" ?>&status=<?php echo "$status" ?>"
		</script><?php
}else{
	?><script type="text/javascript">
		alert("No Assets Telah Terdaftar Silahkan Masukan No Assets Lain")
		window.location.href="?page=alat&action=add";
	</script><?php
}
}
?>