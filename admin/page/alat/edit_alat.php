<?php
$id= $_GET['id'];
$sql = $koneksi->query("SELECT * FROM `alat` WHERE id='$id'");

$show = $sql->fetch_assoc()
?>
            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Edit Alat & Barang</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Alat & Barang <span class="fa-angle-right fa"></span> Edit Alat & Barang
                      </p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  <div class="panel">
                    <div class="panel-heading bg-primary">
                        <h3 class="text-white">Table Alat & Barang</h3></div>
                    <div class="panel-body">

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="page/alat/sub_edit.php">
                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <div class="form-group">
            <label>Nama Barang :</label>
            <input type="text" class="form-control" name="barang" value="<?php echo $show['Nama Barang'];?>" required/>
        </div>
       <div class="form-group">
            <label>Merk :</label>
            <input type="text" class="form-control" name="brand" value="<?php echo $show['brand']; ?>" required/>
        </div>
        <div class="form-group">
            <label>Model :</label>
            <input type="text" class="form-control" name="model" value="<?php echo $show['model']; ?>" required/>
        </div>
        <div class="form-group">
            <label>Kode Barang :</label>
            <input type="text" class="form-control" name="kode" value="<?php echo $show['kode']; ?>" required/>
        </div>
        <div class="form-group">
            <label>No Aset :</label>
            <input type="text" class="form-control" name="aset" value="<?php echo $show['n_aset']; ?>" required/>
        </div>
        <div class="form-group">
            <label>Kondisi Barang :</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status" id="optionsRadios1" value="Tersedia" <?=$show['status']=="Tersedia" ? "checked" : ""?> />Tersedia
                </label>
                <label>
                    <input type="radio" name="status" id="optionsRadios1" value="Tidak Tersedia" <?=$show['status']=="Tidak Tersedia" ? "checked" : ""?>/>Tidak Tersedia
                </label>
                <label>
                    <input type="radio" name="status" id="optionsRadios1" value="Rusak" <?=$show['status']=="Rusak" ? "checked" : ""?>/>Rusak
                </label>
                <label>
                    <input type="radio" name="status" id="optionsRadios1" value="Dipinjam" <?=$show['status']=="Dipinjam" ? "checked" : ""?>/>Dipinjam
                </label>
            </div></div>
                <div>
                     <input type="submit" name="update" value="Simpan" class="btn btn-primary"></div>
            </form>
    </div>
    </div>
</div>
</div>