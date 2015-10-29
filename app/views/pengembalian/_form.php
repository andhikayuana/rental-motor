<form>
    <div class="form-group">
        <label for="peminjaman">Peminjaman</label>
        <select class="form-control" id="peminjaman">
            <option> - Pilih - </option>
        </select>
    </div>
    <div class="form-group">
        <label for="tgl_kembali">Tgl. Kembali</label>
        <input type="text" class="form-control" id="tgl_kembali" placeholder="Tgl. Kembali">
    </div>
    <div class="form-group">
        <label for="denda">Denda</label>
        <input type="text" class="form-control" id="denda" placeholder="Denda">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>