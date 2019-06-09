            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Pengembalian</h3>
                      <p class="animated fadeInDown">
                        Transaksi <span class="fa-angle-right fa"></span> Kembalikan Alat & Barang
                      </p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                 <div class="panel">
                    <div class="panel-heading bg-primary">
                        <h3 class="text-white">Table Transaksi Peminjaman</h3>
                         </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>Kelas Peminjam</th>
                                            <th>Alat Yang Dipinjam</th>
                                            <th>Status</th>
                                            <th>Jam Barang Keluar</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        
                                        $no = 1;
                                        $sql = $koneksi->query("SELECT * FROM `transaksi` WHERE `status`='Dipinjam'");
                                        while ($data=$sql -> fetch_assoc()){
                                            $id_alat = $data['alat'];
                                            $sql2 = $koneksi->query("SELECT * FROM `alat` WHERE `id`='$id_alat'");
                                            while ($data2 = $sql2->fetch_assoc()) {
                                                $n_aset = $data2['n_aset'];
                                                $n_barang = $data2['Nama Barang'];
                                                $hasil = "$n_barang | $n_aset";
                                            ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['n_peminjam'];?></td>
                                        <td><?php echo $data['k_peminjam'];?></td>
                                        <td><?php echo $hasil;?></td>
                                        <td><?php echo $data['status'];?></td>
                                        <td><?php echo $data['jam_keluar'];?></td>
                                        <td>
                                            <a href="?page=kembali&action=proses&id=<?php echo $data['id'];?>&alat=<?php echo $data['alat'];?>" class="btn btn-info">Kembalikan</a>
                                        </td>
                                        </tr>
                                        
                                    
                                    <?php } } ?>
                                    </tbody>
                                </table></div>
                        </div></div></div></div>