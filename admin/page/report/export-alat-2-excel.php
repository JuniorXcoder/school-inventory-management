<?php
$koneksi = new mysqli("localhost", "root", "", "db_alat");

$filename = "report_barang_(".date('d-m-Y').").xls";

header("content-disposition: attachment; filename=$filename");
header("content-type: application/vdn.ms-excel");

?>

<h2>Laporan Barang</h2> 

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Merk</th>
        <th>Model</th>
        <th>Kode Barang</th>
        <th>Nomer Aset</th>
        <th>Status</th>
    </tr>
    <?php
                                            
    $no = 1;
    $sql = $koneksi->query("Select * from alat");
    while ($data=$sql -> fetch_assoc()){
                                                   
                                                
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo $data['Nama Barang'];?></td>
        <td><?php echo $data['brand'];?></td>
        <td><?php echo $data['model'];?></td>
        <td><?php echo $data['kode'];?></td>
        <td><?php echo $data['n_aset'];?></td>
        <td><?php echo $data['status'];?></td>
    </tr>
    <?php }?>
</table>