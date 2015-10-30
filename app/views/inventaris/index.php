        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-fw fa-tasks"></i>
                            Inventaris
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">

                        <a href="<?=$this->location('inventaris/create');?>" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Tambah Data</a><br><br>
                        
                        <table id="dataTable" class="display" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th width="130">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>
                                        <a href="#" class="btn btn-primary"><i class="fa fa-fw fa-eye"></i></a>
                                        <a href="<?=$this->location('inventaris/update');?>" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></a>
                                    </td>
                                </tr>

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
    