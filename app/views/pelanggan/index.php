        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-fw fa-users"></i>
                            Data Pelanggan
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                
                 <div class="row">
                    <div class="col-lg-12">

                        <a href="<?=$this->location('pelanggan/create');?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Tambah Data</a><br><br>
                        
                        <table id="dataTable" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Telepon</th>
                                    <th>Identitas</th>
                                    <th width="130">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php foreach ($model as $row): ?>
                                    <tr>
                                        <td><?=$row->id_pelanggan;?></td>
                                        <td><?=$row->nama;?></td>
                                        <td><?=$row->alamat;?></td>
                                        <td><?=$row->telp;?></td>
                                        <td><?=$row->identitas;?></td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i></a>
                                            <a href="<?=$this->location('pelanggan/update/'.$row->id_pelanggan);?>" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></a>
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
    
