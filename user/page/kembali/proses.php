<?php
$id = $_GET['id'];
$alat = $_GET['alat'];
$sql = $koneksi->query("SELECT * FROM `transaksi` WHERE `id`='$id'");
$sql2 = $koneksi->query("SELECT * FROM `alat` WHERE `id`='$alat'");
while ($data = $sql->fetch_assoc()) {
while ($data2 = $sql2->fetch_assoc()) {
$n_aset = $data2['n_aset'];
$n_barang = $data2['Nama Barang'];
$hasil = "$n_barang | $n_aset";
?>
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
                        <h3 class="text-white">Form Transaksi Pengembalian</h3>
</div>
<div class="panel-body">

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="page/kembali/submit.php">
              <input type="hidden" name="id" value="<?php echo $id ?>">
              <input type="hidden" name="alat" value="<?php echo $alat ?>">
        <div class="form-group">
            <label>Nama Siswa :</label>
            <input type="text" class="form-control" name="nama" value="<?php echo $data['n_peminjam'] ?>" required/>
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
              <input type="radio" name="gender" id="optionsRadios1" value="L" <?=$data['jk_peminjam']=="L" ? "checked" : ""?>/>Laki-Laki
            </label>
            <label>
              <input type="radio" name="gender" id="optionsRadios1" value="P" <?=$data['jk_peminjam']=="P" ? "checked" : ""?>/>Perempuan
            </label>
          </div>
        </div>
        <div class="form-group">
            <label>Kode Barang Yang di pinjam :</label>
            <input type="text" name="alat" class="form-control" value="<?php echo $hasil ?>" disabled>
        </div>
        <div class="form-group">
            <label>Kondisi Barang :</label>
            <select name="status" class="form-control" required>
              <option value="Tersedia">Baik</option>
              <option value="Rusak">Rusak</option>
              <option value="Hilang">Hilang</option>
              <option value="Tidak Tersedia">Tidak Tersedia</option>
            </select>
        </div>
                <div>
                     <input type="submit" name="simpan" value="Kembalikan" class="btn btn-primary"></div>
            </form>
    </div>
    </div>
</div>
</div>

</form>
<?php 

} }
?>