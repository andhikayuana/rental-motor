        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-fw fa-forward"></i>
                            Peminjaman
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <a href="<?=$this->location('peminjaman/create');?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Tambah Data</a><br><br>
                            
                        <table id="dataTable" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tgl Sewa</th>
                                    <th>Pelanggan</th>
                                    <th>Jaminan</th>
                                    <th>Tgl Mulai</th>
                                    <th>Tgl Akhir</th>
                                    <th>Inventaris</th>
                                    <th width="80">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($model as $row): ?>
                                    <tr>
                                        <td><?=$row->id_sewa;?></td>
                                        <td><?=date('Y-m-d',strtotime($row->tgl_sewa)) ;?></td>
                                        <td><?=$row->pelanggan->nama;?></td>
                                        <td><?=$row->jaminan;?></td>
                                        <td><?=date('Y-m-d',strtotime($row->tgl_mulai));?></td>
                                        <td><?=date('Y-m-d',strtotime($row->tgl_akhir));?></td>
                                        <td><?=$row->inventaris->motor->nama_motor;?></td>
                                        <td>
                                            <a href="<?=$this->location('peminjaman/update/'.$row->id_sewa);?>" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                            <a href="<?=$this->location('peminjaman/delete/'.$row->id_sewa);?>" class="btn btn-danger"  onclick="return confirm('Hapus data?');"><i class="fa fa-fw fa-remove"></i></a>
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
    