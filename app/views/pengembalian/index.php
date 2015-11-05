        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-fw fa-backward"></i>
                            Pengembalian
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12"> 

                        <a href="<?=$this->location('pengembalian/create');?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Tambah Data</a><br><br>

                        <table id="dataTable" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pelanggan</th>
                                    <th>Inventaris</th>
                                    <th>Tgl Akhir</th>
                                    <th>Tgl Kembali</th>
                                    <th>Denda</th>
                                    <th width="80">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($model as $row): ?>
                                    <tr>
                                        <td><?=$row->id_kembali;?></td>
                                        <td><?=$row->sewa->pelanggan->nama;?></td>
                                        <td><?=$row->sewa->inventaris->motor->nama_motor;?></td>
                                        <td><?=date('Y-m-d',strtotime($row->sewa->tgl_akhir));?></td>
                                        <td><?=date('Y-m-d',strtotime($row->tgl_kembali));?></td>
                                        <td><?=$row->denda;?></td>
                                        <td>
                                            <a href="<?=$this->location('pengembalian/update/'.$row->id_kembali);?>" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                            <a href="<?=$this->location('pengembalian/delete/'.$row->id_kembali);?>" class="btn btn-danger"  onclick="return confirm('Hapus data?');"><i class="fa fa-fw fa-remove"></i></a>
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
    