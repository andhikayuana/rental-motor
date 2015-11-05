<form id="frm_pengembalian" name="frm_pengembalian" method="post" action="<?=$url;?>">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">Peminjaman</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="peminjaman">Peminjaman</label>
                    <select class="form-control" id="peminjaman" name="peminjaman" required onchange="getPeminjaman($(this).val())">
                        <option value=""> - Pilih - </option>
                        <?php foreach ($listPeminjaman as $row): ?>
                            <?php if (isset($model) && $row->id_sewa == $model->sewa->id_sewa): ?>
                                <option value="<?=$row->id_sewa;?>" selected>no peminjaman = <?=$row->id_sewa;?></option>        
                            <?php else: ?>
                                <option value="<?=$row->id_sewa;?>">no peminjaman = <?=$row->id_sewa;?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <input type="text" class="form-control" id="pelanggan" name="pelanggan" required readonly value="<?=(isset($model->sewa->pelanggan->nama))?$model->sewa->pelanggan->nama:'';?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required readonly value="<?=(isset($model->sewa->pelanggan->alamat))?$model->sewa->pelanggan->alamat:'';?>">
                </div>
                <div class="form-group">
                    <label for="jaminan">Jaminan</label>
                    <input type="text" class="form-control" id="jaminan" name="jaminan" required readonly value="<?=(isset($model->sewa->jaminan))?$model->sewa->jaminan:'';?>">
                </div>
                <div class="form-group">
                    <label for="tgl_mulai">Tgl. Mulai</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tgl_mulai" placeholder="Tgl. Mulai" required readonly disabled value="<?=(isset($model->sewa->tgl_mulai))?date('Y-m-d',strtotime($model->sewa->tgl_mulai)):'';?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tgl_akhir">Tgl. Akhir</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tgl_akhir" placeholder="Tgl. Akhir" required readonly disabled value="<?=(isset($model->sewa->tgl_akhir))?date('Y-m-d',strtotime($model->sewa->tgl_akhir)):'';?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tgl_kembali">Tgl. Kembali</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tgl_kembali" name="tgl_kembali" placeholder="Tgl. Kembali" required value="<?=(isset($model->tgl_kembali))?date('Y-m-d',strtotime($model->tgl_kembali)):'';?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="terlambat">Terlambat</label>
                    <input type="text" class="form-control" id="terlambat" required readonly>
                </div>
                <div class="form-group">
                    <label for="denda">Denda</label>
                    <input type="text" class="form-control" id="denda" name="denda" placeholder="Denda" required value="<?=(isset($model->denda))?$model->denda:'';?>">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-warning">
            <div class="panel-heading">Inventaris</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="inventaris">Inventaris</label>
                    <input type="text" class="form-control" id="inventaris" name="inventaris" required readonly value="<?=(isset($model->sewa->inventaris->motor->nama_motor))?$model->sewa->inventaris->motor->nama_motor:'';?>">
                </div>
                <div class="form-group">
                    <label for="hrg_sewa">Harga Sewa</label>
                    <input type="text" class="form-control" id="hrg_sewa" name="hrg_sewa" required readonly value="<?=(isset($model->sewa->inventaris->motor->by_sewa))?$model->sewa->inventaris->motor->by_sewa:'';?>">
                </div>
                <div class="form-group">
                    <label for="no_polisi">No. Polisi</label>
                    <input type="text" class="form-control" id="no_polisi" name="no_polisi" required readonly value="<?=(isset($model->sewa->inventaris->no_polisi))?$model->sewa->inventaris->no_polisi:'';?>">
                </div>
                <div class="form-group">
                    <label for="no_mesin">No. Mesin</label>
                    <input type="text" class="form-control" id="no_mesin" name="no_mesin" required readonly value="<?=(isset($model->sewa->inventaris->no_mesin))?$model->sewa->inventaris->no_mesin:'';?>">
                </div>
            </div>
        </div>
        <button type="submit" name="submit" value="1" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
        <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
    </div>
</form>