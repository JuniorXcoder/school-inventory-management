            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Proses Add Alat & Barang</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Alat & Barang <span class="fa-angle-right fa"></span> Input Alat & Barang <span class="fa-angle-right fa"></span> Proses Input Alat & Barang
                      </p>
                  </div>
                </div>
            </div>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  <div class="panel">
                    <div class="panel-heading bg-primary"><h3 class="text-white">Proses Input Alat & Barang</h3></div>
<div class="panel-body">
    <div class="table-responsive">
<form method="post" action="page/alat/submit_alat.php">
<table border="1" class="table table-striped table-bordered table-hover">
<tr>
	<th>No</th>
	<th>Nama Barang</th>
	<th>Merk</th>
	<th>Model</th>
	<th>Kode Barang</th>
	<th>No Asset</th>
	<th>Kondisi Barang</th>
</tr>

<?php
$n = $_GET['n']; // membaca jumlah data
$barang = $_GET['barang'];
$brand = $_GET['brand'];
$model = $_GET['model'];
$kode = $_GET['kode'];
$assets = $_GET['assets'];
$status = $_GET['status'];

for ($i=1; $i<=$n; $i++)
{
  echo "<tbody><tr>
  <td><input class='form-control' type='text' name='no".$i."' value='".$i."'></td>
  <td><input class='form-control' type='text' name='barang".$i."' value='$barang'></td>
  <td><input class='form-control' type='text' name='brand".$i."' value='$brand'></td>
  <td><input class='form-control' type='text' name='model".$i."' value='$model'></td>
  <td><input class='form-control' type='text' name='kode".$i."' value='$kode'></td>
  <td><input class='form-control' type='text' name='asset".$i."' value='$assets-00$i'></td>
  <td><select class='form-control' name='status".$i."'>
        <option>Tersedia</option>
        <option>Tidak Tersedia</option>
        <option>Rusak</option>
      </select>

  </td>
  </tr></tbody>";
}
?>

</table>
</div>
<input type="hidden" name="jum" value="<?php echo $n; ?>">
<input type="submit" name="submit" value="Simpan" class="btn btn-primary">
</div></div></div></div>