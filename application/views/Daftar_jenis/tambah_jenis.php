<div class="container mx-auto ">
    <div class="col-md-5  mx-auto bg-primary">
  <small class="text-center">Tambah Jenis</small>
    <form action="<?= base_url() ?>daftar_jenis/simpan" method="post">
  <div class="form-group">
    <label for="jenis">Jenis</label>
    <input type="text" class="form-control" name="jenis" id="jenis">
   </div>
  <div class="form-group">
    <label for="ket_jenis">Ket Jenis</label>
    <input type="text" class="form-control" name="ket_jenis" id="ket_jenis">
  </div>
  <button type="submit" class="btn btn-success mb-5">Submit</button>
  <a href="<?= base_url('daftar_jenis')?>" class="btn btn-danger">Cencle</a>
  <br>
</form>   
    </div>
</div>