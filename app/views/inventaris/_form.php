<form id="frm_inventaris" name="frm_inventaris" method="post" action="<?=$url?>">
    <div class="form-group">
        <label for="motor">Motor</label>
        <select class="form-control" id="id_motor" name="id_motor" required>
            <option value=""> - Pilih - </option>
            <?php foreach ($listMotor as $row): ?>
                <?php if (isset($model) && $row->id_motor == $model->id_motor): ?>
                    <option value="<?=$row->id_motor;?>" selected><?=$row->nama_motor;?></option>
                <?php else: ?>
                    <option value="<?=$row->id_motor;?>"><?=$row->nama_motor;?></option>
                <?php endif ?>                
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="no_pol">No. Polisi</label>
        <input type="text" class="form-control" id="no_pol" name="no_pol" placeholder="No. Polisi" required value="<?=(isset($model->no_polisi))?$model->no_polisi:'';?>">
    </div>
    <div class="form-group">
        <label for="no_mesin">No. Mesin</label>
        <input type="text" class="form-control" id="no_mesin" name="no_mesin" placeholder="No. Mesin" required value="<?=(isset($model->no_mesin))?$model->no_mesin:'';?>">
    </div>
    <button type="submit" name="submit" value="1" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>