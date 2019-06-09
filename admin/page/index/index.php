<?php
$sqlCommand1 = "SELECT COUNT(*) FROM `transaksi` WHERE `status`='Dipinjam' AND `status`='Hilang' "; 
$query1 = mysqli_query($koneksi, $sqlCommand1) or die (mysqli_error($koneksi)); 
$row1 = mysqli_fetch_row($query1);
mysqli_free_result($query1); 
$sqlCommand2 = "SELECT COUNT(*) FROM `transaksi` WHERE `jam_keluar` LIKE '%$hari%'"; 
$query2 = mysqli_query($koneksi, $sqlCommand2) or die (mysqli_error($koneksi)); 
$row2 = mysqli_fetch_row($query2);
mysqli_free_result($query2); 
$sqlCommand3 = "SELECT COUNT(*) FROM `alat`"; 
$query3 = mysqli_query($koneksi, $sqlCommand3) or die (mysqli_error($koneksi)); 
$row3 = mysqli_fetch_row($query3);
mysqli_free_result($query3); 
$sqlCommand4 = "SELECT COUNT(*) FROM `admin`"; 
$query4 = mysqli_query($koneksi, $sqlCommand4) or die (mysqli_error($koneksi)); 
$row4 = mysqli_fetch_row($query4);
mysqli_free_result($query4); 
mysqli_close($koneksi);
?>
            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">Beranda</h3>
                      <p class="animated fadeInDown">
                        Home
                      </p>
                  </div>
                </div>
            </div>
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Transaksi</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="fa fa-exchange icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1><?php echo "$row2[0]"  ?></h1>
                                        <p>Transaksi Peminjaman Hari ini</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Transaksi</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="fa fa-envelope-o icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1><?php echo "$row1[0]"  ?></h1>
                                        <p>Barang Belum di kembalikan</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="panel box-v1">
                                      <div class="panel-heading bg-white border-none">
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-left padding-0">
                                          <h4 class="text-left">Alat & Barang</h4>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                           <h4>
                                           <span class="fa fa-bell-o icons icon text-right"></span>
                                           </h4>
                                        </div>
                                      </div>
                                      <div class="panel-body text-center">
                                        <h1><?php echo "$row3[0]"  ?></h1>
                                        <p>Alat & Barang Dalam Database</p>
                                        <hr/>
                                      </div>
                                    </div>
                                </div>