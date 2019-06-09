<?php

$id = $_GET['id'];
$koneksi->query("delete from admin where id = '$id'");
    
    ?>

	<script type="text/javascript">
		alert("Anggota Berhasil Di Hapus");
		window.location.href="?page=anggota";
	</script>