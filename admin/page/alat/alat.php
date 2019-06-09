            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">View Alat & Barang</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Alat & Barang
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
                      <div class="responsive-table">
                                <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Merk</th>
                                            <th>Model</th>
                                            <th>Kode Barang</th>
                                            <th>No Aset</th>
                                            <th>Kondisi Barang</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        
                                        $no = 1;
                                        $sql = $koneksi->query("Select * from alat");
                                        while ($data=$sql -> fetch_assoc()){
                                               
                                            
                                            ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['Nama Barang'];?></td>
                                        <td><?php echo $data['brand'];?></td>
                                        <td><?php echo $data['model'];?></td>
                                        <td><?php echo $data['kode'];?></td>
                                        <td><?php echo $data['n_aset'];?></td>
                                        <td><?php echo $data['status'];?></td>
                                        <td>
                                            <a href="?page=alat&action=edit&id=<?php echo $data['id'];?>" class="btn btn-info"><i class="fa fa-edit "></i> Edit</a>
                                            <a onclick="return confirm('anda yakin ingin menghapus Alat ini..?')" href="?page=alat&action=delete&id=<?php echo $data['id'];?>" class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</a>
                                        </td>
                                        </tr>
                                        
                                    
                                    <?php } ?>
                                    </tbody>
                                </table></div>
                            <a href="?page=alat&action=add" class="btn btn-success" style="margin-top: 10px"><i class="glyphicon glyphicon-plus"></i> Tambah Alat</a>
                        <a href="./page/report/export-alat-2-excel.php" class="btn btn-default" style="margin-top: 10px"><i class="fa fa-print 1x"></i> Export To Excel </a>
                        <a href="./page/report/export-alat-2-pdf.php" class="btn btn-default" style="margin-top: 10px"><i class="fa fa-print"></i> Export To PDF </a>
                        </div></div></div></div>