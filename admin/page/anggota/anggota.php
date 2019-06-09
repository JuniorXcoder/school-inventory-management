            <div class="panel box-shadow-none content-header">
                <div class="panel-body">
                  <div class="col-md-12">
                      <h3 class="animated fadeInLeft">View Anggota</h3>
                      <p class="animated fadeInDown">
                        Home <span class="fa-angle-right fa"></span> Anggota
                      </p>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                  <div class="panel">
                    <div class="panel-heading bg-primary"><h3 class="text-white">Table Anggota</h3></div>
                        <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        
                                        $no = 1;
                                        $sql = $koneksi->query("Select * from admin");
                                        while ($data=$sql -> fetch_assoc()){
                                               
                                            
                                            ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['nama'];?></td>
                                        <td><?php echo $data['username'];?></td>
                                        <td><?php echo $data['email'];?></td>
                                        <td style="text-align: center;">
                                            <a href="?page=anggota&action=edit&id=<?php echo $data['id'] ?>" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</a>
                                            <a onclick="return confirm('anda yakin ingin menghapus Anggota ini..?')" href="?page=anggota&action=delete&id=<?php echo $data['id'] ?>" class="btn btn-danger"><i class="fa fa-trash "></i> Delete</a>
                                        </td>
                                        </tr>
                                        
                                    
                                    <?php } ?>
                                    </tbody>
                                </table></div>
                            <a href="?page=anggota&action=add" class="btn btn-success" style="margin-top: 10px"><i class="glyphicon glyphicon-plus"></i> Tambah anggota</a>
                        </div></div></div></div>
