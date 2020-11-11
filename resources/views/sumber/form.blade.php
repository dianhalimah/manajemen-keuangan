{{ csrf_field() }}
<div class="form-group">
 <label for="nama" class="col-sm-2 control-label">Nama</label>
 <div class="col-sm-10">
 <input type="text" name="nama" class="form-control" value="{{ $nama ?? '' }}" >
 </div>
</div>
<div class="form-group">
 <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
 <div class="col-sm-10">
 <input type="text" name="keterangan" class="form-control" value="{{ $keterangan ?? '' }}" >
 </div>
</div>
<div class="form-group">
 <div class="col-sm-offset-2 col-sm-10">
 <input type="submit" class="btn btn-success btn-md" name="simpan" value="Simpan">
 <a href="{{ route('sumber.index') }}" class="btn btn-primary" role="button">Batal</a>
 </div>
</div>