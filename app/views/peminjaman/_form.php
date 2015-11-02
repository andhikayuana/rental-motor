<form id="frm_peminjaman" name="frm_peminjaman" method="post" action="<?=$url;?>">
    <div class="col-md-6">
        <div class="panel panel-success">
            <div class="panel-heading">Pelanggan</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="tgl_sewa">Tgl. Sewa</label>
                    <input type="text" class="form-control" id="tgl_sewa" name="tgl_sewa" required readonly value="<?=(isset($model->tgl_sewa))?date('Y-m-d',strtotime($model->tgl_sewa)):DATE('Y-m-d');?>">
                </div>
                <div class="form-group">
                    <label for="pelanggan">Pelanggan</label>
                    <select class="form-control" id="pelanggan" name="pelanggan" required onchange="getPelanggan($(this).val())">
                        <option value=""> - Pilih - </option>
                        <?php foreach ($listPelanggan as $row): ?>
                            <?php if (isset($model) && $row->id_pelanggan == $model->id_pelanggan): ?>
                                <option value="<?=$row->id_pelanggan;?>" selected><?=$row->nama;?></option>
                            <?php else: ?>
                                <option value="<?=$row->id_pelanggan;?>"><?=$row->nama;?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" required readonly value="<?=(isset($model->pelanggan->alamat))?$model->pelanggan->alamat:'';?>">
                </div>
                <div class="form-group">
                    <label for="jaminan">Jaminan</label>
                    <input type="text" class="form-control" id="jaminan" name="jaminan" placeholder="Jaminan" required value="<?=(isset($model->jaminan))?$model->jaminan:'';?>">
                </div>
                <div class="form-group">
                    <label for="tgl_mulai">Tgl. Mulai</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tgl_mulai" name="tgl_mulai" placeholder="Tgl. Mulai" required value="<?=(isset($model->tgl_mulai))?date('Y-m-d',strtotime($model->tgl_mulai)):'';?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tgl_akhir">Tgl. Akhir</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="tgl_akhir" name="tgl_akhir" placeholder="Tgl. Akhir" required value="<?=(isset($model->tgl_akhir))?date('Y-m-d',strtotime($model->tgl_akhir)):'';?>">
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">Inventaris</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="inventaris">Inventaris</label>
                    <select class="form-control" id="inventaris" name="inventaris" required onchange="getInventaris($(this).val())">
                        <option value=""> - Pilih - </option>
                        <?php foreach ($listInventaris as $row): ?>
                            <?php if (isset($model) && $row->id_inventaris == $model->id_inventaris): ?>
                                <option value="<?=$row->id_inventaris;?>" selected><?=$row->motor->nama_motor;?></option>
                            <?php else: ?>
                                <option value="<?=$row->id_inventaris;?>"><?=$row->motor->nama_motor;?></option>
                            <?php endif ?>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="hrg_sewa">Harga Sewa</label>
                    <input type="text" class="form-control" id="hrg_sewa" name="hrg_sewa" required readonly value="<?=(isset($model->inventaris->motor->by_sewa))?$model->inventaris->motor->by_sewa:'';?>">
                </div>
                <div class="form-group">
                    <label for="no_polisi">No. Polisi</label>
                    <input type="text" class="form-control" id="no_polisi" name="no_polisi" required readonly value="<?=(isset($model->inventaris->no_polisi))?$model->inventaris->no_polisi:'';?>">
                </div>
                <div class="form-group">
                    <label for="no_mesin">No. Mesin</label>
                    <input type="text" class="form-control" id="no_mesin" name="no_mesin" required readonly value="<?=(isset($model->inventaris->no_mesin))?$model->inventaris->no_mesin:'';?>">
                </div>
            </div>
        </div>
        <button type="submit" name="submit" value="1" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
        <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
    </div>
</form>