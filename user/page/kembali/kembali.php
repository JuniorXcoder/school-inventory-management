<?php

$id = $_GET['id'];
$alat = $_GET['alat'];
date_default_timezone_set('Asia/jakarta');
$jam = date('d-m-Y H:i');
$sql = $koneksi->query("UPDATE `transaksi` SET `status`='Dikembalikan',`jam_kembali`='$jam' WHERE `id`='$id'");
$sql = $koneksi->query("UPDATE `alat` SET `status`='Tersedia' WHERE `n_aset`='$alat'");
?>
<script type="text/javascript">
alert("Barang Berhasil Di kembalikan!");
window.location.href="../../../index.php"
</script>