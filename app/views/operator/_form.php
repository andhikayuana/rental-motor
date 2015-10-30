<form>
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Nama">
    </div>
    <div class="form-group">
        <label for="jk">Jenis Kelamin</label>
        <select class="form-control" id="jk">
            <option> - Pilih - </option>
            <option value="L">Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" placeholder="Alamat">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>