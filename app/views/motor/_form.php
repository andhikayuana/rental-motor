<form id="frm_motor" name="frm_motor" method="post" action="<?=$url;?>" enctype="multipart/form-data">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required value="<?=(isset($model->nama_motor))?$model->nama_motor:'';?>">
    </div>
    <div class="form-group">
        <label for="tahun">Tahun</label>
        <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun" required value="<?=(isset($model->th_keluar))?$model->th_keluar:'';?>"
    </div>
    <div class="form-group">
        <label for="by_sewa">Biaya Sewa</label>
        <input type="text" class="form-control" id="by_sewa" name="by_sewa" placeholder="Biaya Sewa" required value="<?=(isset($model->by_sewa))?$model->by_sewa:'';?>">
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input type="file" class="form-control" id="gambar" name="gambar" placeholder="Gambar" required value="<?=(isset($model->gambar))?$model->gambar:'';?>">
    </div>
    <button type="submit" value="1" name="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>