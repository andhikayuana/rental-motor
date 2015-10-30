<form id="frm_operator" name="frm_operator" method="post" action="<?=$url;?>">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required value="<?=(isset($model->nama))?$model->nama:'';?>">
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select class="form-control" id="jk" name="jk" required>
            <option> - Pilih - </option>
            <option value="L" <?=(isset($model) && $model->jk=='L')?'selected':'';?>>Laki-Laki</option>
            <option value="P" <?=(isset($model) && $model->jk=='P')?'selected':'';?>>Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Alamat" required value="<?=(isset($model->alamat))?$model->alamat:'';?>">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required value="<?=(isset($model->username))?$model->username:'';?>">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required value="<?=(isset($model->password))?$model->password:'';?>">
    </div>
    <button type="submit" name="submit" value="1" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>