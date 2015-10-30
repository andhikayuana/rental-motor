        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-fw fa-bicycle"></i>
                            Data Motor
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                
                <div class="row">
                    <div class="col-lg-12">

                        <a href="<?=$this->location('motor/create');?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Tambah Data</a><br><br>
                        
                        <table id="dataTable" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tahun</th>
                                    <th>Biaya Sewa</th>
                                    <th>Gambar</th>
                                    <th width="80">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                            <?php foreach ($model as $row): ?>
                                <tr>
                                    <td><?=$row->id_motor;?></td>
                                    <td><?=$row->nama_motor;?></td>
                                    <td><?=$row->th_keluar;?></td>
                                    <td><?=$row->by_sewa;?></td>
                                    <td><?=$row->gambar;?></td>
                                    <td>
                                        <a href="<?=$this->location('motor/update/'.$row->id_motor);?>" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                        <a href="<?=$this->location('motor/delete/'.$row->id_motor);?>" class="btn btn-danger" onclick="return confirm('Hapus data?');"><i class="fa fa-fw fa-remove"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.row -->
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    