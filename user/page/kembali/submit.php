<?php
$koneksi = new mysqli ("localhost", "root", "", "db_alat");
$id = $_POST['id'];
$alat = $_POST['alat'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$jk = $_POST['gender'];
$status = $_POST['status'];
date_default_timezone_set('Asia/jakarta');
$jam = date('d-m-Y H:i');
$sql = $koneksi->query("UPDATE `transaksi` SET `status`='Dikembalikan',`jam_kembali`='$jam',`n_pengembali`='$nama',`k_pengembali`='$kelas',`jk_pengembali`='$jk' WHERE `id`='$id'");
$sql = $koneksi->query("UPDATE `alat` SET `status`='$status' WHERE `id`='$alat'");
?>
<script type="text/javascript">
alert("Barang Berhasil Di kembalikan!");
window.location.href="../../../index.php"
</script>