<form id="frm_pelanggan" name="frm_pelanggan" method="post" action="<?=$url;?>">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat">
    </div>
    <div class="form-group">
        <label for="telp">Telepon</label>
        <input type="text" class="form-control" id="telp" name="telp" placeholder="Telepon">
    </div>
    <div class="form-group">
        <label for="identitas">Identitas</label>
        <input type="text" class="form-control" id="identitas" name="identitas" placeholder="Identitas">
    </div>
    <button type="submit" value="1" name="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>