<form>
    <div class="form-group">
        <label for="motor">Motor</label>
        <select class="form-control" id="motor">
            <option> - Pilih - </option>
        </select>
    </div>
    <div class="form-group">
        <label for="no_pol">No. Polisi</label>
        <input type="text" class="form-control" id="no_pol" placeholder="No. Polisi">
    </div>
    <div class="form-group">
        <label for="no_mesin">No. Mesin</label>
        <input type="text" class="form-control" id="no_mesin" placeholder="No. Mesin">
    </div>
    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-save"></i> Simpan</button>
    <button type="reset" class="btn btn-success" onclick="self.history.back();"><i class="fa fa-fw fa-arrow-left"></i> Kembali</button>
</form>