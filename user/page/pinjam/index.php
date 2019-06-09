            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Peminjaman</h3>
                      <p class="animated fadeInDown">
                        Transaksi <span class="fa-angle-right fa"></span> Pinjam Alat & Barang
                      </p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                 <div class="panel">
                    <div class="panel-heading bg-primary">
                        <h3 class="text-white">Form Transaksi Peminjaman</h3>
</div>
<div class="panel-body">

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="page/pinjam/sub_pinjam.php">
        <div class="form-group">
            <label>Nama Siswa :</label>
            <input type="text" class="form-control" name="nama" required/>
        </div>
       <div class="form-group">
            <label>Kelas :</label>
            <select name="kelas" class="form-control" required>
        			<option>X-MM1</option>
        			<option>X-MM2</option>
        			<option>X-TGM</option>
        			<option>X-TKJ1</option>
        			<option>X-TKJ2</option>
        			<option>X-TKJ3</option>
        			<option>X-TKR</option>
        			<option>X-TOI</option>
        			<option>X-TPP</option>
        			<option>XI-MM</option>
        			<option>XI-TGM</option>
        			<option>XI-TKJ1</option>
        			<option>XI-TKJ2</option>
        			<option>XI-TKJ3</option>
        			<option>XI-TKR</option>
        			<option>XI-TOI</option>
        			<option>XI-TPP</option>
        			<option>XII-TGM</option>
        			<option>XII-TKJ1</option>
        			<option>XII-TKJ2</option>
        			<option>XII-TKJ3</option>
        			<option>XII-TKJ4</option>
        			<option>XII-TOI</option>
        		</select>
      </div>
        <div class="form-group">
            <label>Jenis Kelamin :</label>
<div class="radio">
	<label>
	<input type="radio" name="gender" id="optionsRadios1" value="L" checked />Laki-Laki
	</label>
	<label>
	<input type="radio" name="gender" id="optionsRadios1" value="P"/>Perempuan
	</label>
        </div>
        <div class="form-group">
            <label>Kode Barang Yang di pinjam :</label>
<?php 
$combo="<select name=assets class=form-control required>";
$sql = $koneksi->query("SELECT * FROM `alat` WHERE `status`='Tersedia'");
while ($rows = $sql->fetch_assoc()) {
	$nem = $rows['Nama Barang'];
	$n_asset = $rows['n_aset'];
	$hasil = "$nem | $n_asset";
	
	$combo.="<option value=".$n_asset.">".$hasil."</option>";
	}
	

$combo.="</select>";
echo $combo;
?>
        </div>
                <div>
                     <input type="submit" name="simpan" value="Pinjam" class="btn btn-primary"></div>
            </form>
    </div>
    </div>
</div>
</div>

</form>