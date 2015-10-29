<form>
    <div class="form-group">
        <label for="pelanggan">Pelanggan</label>
        <select class="form-control" id="pelanggan">
            <option> - Pilih - </option>
        </select>
    </div>
    <div class="form-group">
        <label for="jaminan">Jaminan</label>
        <input type="text" class="form-control" id="jaminan" placeholder="Jaminan">
    </div>
    <div class="form-group">
        <label for="tgl_mulai">Tgl. Mulai</label>
        <input type="text" class="form-control" id="tgl_mulai" placeholder="Tgl. Mulai">
    </div>
    <div class="form-group">
        <label for="tgl_akhir">Tgl. Akhir</label>
        <input type="text" class="form-control" id="tgl_akhir" placeholder="Tgl. Akhir">
    </div>
    <div class="form-group">
        <label for="inventaris">Inventaris</label>
        <select class="form-control" id="inventaris">
            <option> - Pilih - </option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>