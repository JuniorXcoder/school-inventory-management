            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">View Transaksi</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Transaksi <span class="fa-angle-right fa"></span> View transaksi
                      </p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  <div class="panel">
                    <div class="panel-heading bg-primary"><h3 class="text-white">Table Transaksi</h3></div>
                        <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
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
                                    </thead>
                                    <tbody>
                                    <?php
                                        
                                        $no = 1;
                                        $sql = $koneksi->query("SELECT * FROM `transaksi`");
                                        while ($data=$sql -> fetch_assoc()){                                     
                                            ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['n_peminjam'];?></td>
                                        <td><?php echo $data['k_peminjam'];?></td>
                                        <td><?php echo $data['jk_peminjam'];?></td>
                                        <td><?php echo $data['alat'];?></td>
                                        <td><?php echo $data['status'];?></td>
                                        <td><?php echo $data['jam_keluar'];?></td>
                                        <td><?php echo $data['jam_kembali'];?></td>
                                        <td><?php echo $data['n_pengembali'];?></td>
                                        <td><?php echo $data['k_pengembali'];?></td>
                                        <td><?php echo $data['jk_pengembali'];?></td>
                                        </tr>
                                        
                                    
                                    <?php } ?>
                                    </tbody>
                                </table></div>
                        <a href="./page/report/export-transaksi-2-excel.php" class="btn btn-default" style="margin-top: 10px"><i class="fa fa-print 1x"></i> Export To Excel </a>
                        <a href="./page/report/export-transaksi-2-pdf.php" class="btn btn-default" style="margin-top: 10px"><i class="fa fa-print"></i> Export To PDF </a></div></div></div></div>