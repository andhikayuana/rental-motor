        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-fw fa-edit"></i>
                            Update Peminjaman
                        </h1>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <?php $this->outputPartial('peminjaman/_form',['url'=>$this->location('peminjaman/update/'.$model->id_sewa),'model'=>$model,'listPelanggan'=>$listPelanggan,'listInventaris'=>$listInventaris]); ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    