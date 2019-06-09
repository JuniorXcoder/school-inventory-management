            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Tambah Alat & Barang</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Alat & Barang <span class="fa-angle-right fa"></span> Input Alat & Barang
                      </p>
                  </div>
                </div>
            </div>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  <div class="panel">
                    <div class="panel-heading bg-primary"><h3 class="text-white">Table Alat & Barang</h3></div>
<div class="panel-body">

    <div class="row">
        <div class="col-md-12">
            <form method="POST" action="?page=alat&action=add&request=check">
        <div class="form-group">
            <label>Nama Barang :</label>
            <input type="text" class="form-control" name="barang" required/>
        </div>
       <div class="form-group">
            <label>Merk :</label>
            <input type="text" class="form-control" name="brand" required/>
        </div>
        <div class="form-group">
            <label>Model :</label>
            <input type="text" class="form-control" name="model" required/>
        </div>
        <div class="form-group">
            <label>Kode Barang :</label>
            <input type="text" class="form-control" name="kode" required/>
        </div>
        <div class="form-group">
            <label>Jumlah Barang :</label>
            <input type="number" class="form-control" name="jumlah" required/>
        </div>
        <div class="form-group">
            <label>No Aset :</label>
            <div class="input-group">
                <input type="text" class="form-control" name="asset" required/>
                <span class="input-group-addon">001</span>

            </div>
        </div>
        <div class="form-group">
            <label>Kondisi Barang :</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="optionsRadios1" value="Tersedia" />Tersedia
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="optionsRadios1" value="Tidak Tersedia" />Tidak Tersedia
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="status" id="optionsRadios1" value="Rusak" />Rusak
                    </label>
                </div>
        </div>
                <div>
                     <input type="submit" name="simpan" value="Simpan" class="btn btn-primary"></div>
            </form>
    </div>
    </div>
</div>
</div>