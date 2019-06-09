<?php
$koneksi = new mysqli("localhost", "root", "", "db_alat");

$filename = "report_transaksi_harian_(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: application/vdn.ms-excel");

?>
<h2>Laporan transaksi</h2> 

<table border="1">
	<tr>
	    <th>No</th>
	    <th>Nama Peminjam</th>
	    <th>Kelas Peminjam</th>
	    <th>Jenis Kelamin</th>
	    <th>Alat</th>
	    <th>status</th>
	    <th>Jam Keluar</th>
	    <th>Jam Kembali</th>
	    <th>Nama Pengembali</th>
	    <th>Kelas Pengembali</th>
	    <th>Jenis Kelamin</th>
	</tr>
<?php
	$no = 1;
	$sql = $koneksi->query("SELECT * FROM transaksi");
	while ($data=$sql -> fetch_assoc()) { 
		include 'gender.php';
?>
	<tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $data['n_peminjam'];?></td>
        <td><?php echo $data['k_peminjam'];?></td>
        <td><?php echo $g;?></td>
        <td><?php echo $data['alat'];?></td>
        <td><?php echo $data['status'];?></td>
        <td><?php echo $data['jam_keluar'];?></td>
        <td><?php echo $data['jam_kembali'];?></td>
        <td><?php echo $data['n_pengembali'];?></td>
        <td><?php echo $data['k_pengembali'];?></td>
        <td><?php echo $g2;?></td>
</tr>
    <?php }?>
</table>