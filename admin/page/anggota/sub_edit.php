<?php
$id = $_GET['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$old_pass = $_POST['old_pass'];
$new_pass = $_POST['new_pass'];
$submit = $_POST['simpan'];

if ($submit) {
	$edit = $koneksi->query("UPDATE `admin` SET `username`='Null' WHERE `id`='$id'");
	$select = $koneksi->query("SELECT * FROM `admin` WHERE `username`='$username'");
	$row1 = mysqli_num_rows($select);
	if ($row1 == "0") {
		$check = $koneksi->query("SELECT * FROM `admin` WHERE `id`='$id' AND `password`=md5('".$old_pass."')");
		$row = mysqli_fetch_row($check);
		if ($row == 0) {
		?>
			<script type="text/javascript">
				alert("Password Lama Salah");
	          	window.location.href="index.php?page=anggota&action=edit&id=<?php echo $id; ?>";
			</script>
		<?php
		}else{
			$update = $koneksi->query("UPDATE `admin` SET `nama`='$nama',`username`='$username',`email`='$email',`password`=MD5('".$new_pass."') WHERE `id`='$id'");
			if ($update) {
				?>
				<script type="text/javascript">
					alert("Update data anggota sukses");
	          		window.location.href="index.php?page=anggota";
				</script>
				<?php
				session_destroy();
			}
		}
	}else{
		?>
			<script type="text/javascript">
				alert("Username Telah Terdaftar");
	          	window.location.href="index.php?page=anggota&action=edit&id=<?php echo $id; ?>";
			</script>
		<?php
	}
}
?>