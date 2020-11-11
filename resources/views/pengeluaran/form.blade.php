{{ csrf_field() }}

<div class="form-group">
 <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
 <div class="col-sm-3">
 <input type="text" name="tanggal" id="tanggal" class="form-control" value="{{ $tanggal ?? '' }}" >
 </div>
</div>

<div class="form-group">
 <label for="nominal" class="col-sm-2 control-label">Nominal</label>
 <div class="col-sm-3">
 <input type="text" name="nominal" id="nominal" class="form-control" value="{{ $nominal ?? '' }}" >
 </div>
</div>


<div class="form-group">
 <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
 <div class="col-sm-3">
 <input type="text" name="keterangan" id="keterangan" class="form-control" value="{{ $keterangan ?? '' }}" >
 </div>
</div>

<div class="form-group">
 <div class="col-sm-offset-2 col-sm-10">
 <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
 <a href="{{ route('pengeluaran.index') }}" class="btn btn-primary" role="button">Batal</a>
 </div>
</div>