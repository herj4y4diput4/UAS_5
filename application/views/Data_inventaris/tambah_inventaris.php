<div class="container mx-auto">
    <div class="col-md-5  mx-auto bg-primary">
  <small class="text-center">Tambah Inventaris</small>
  
    <form action="<?= base_url() ?>data_inventaris/simpan" method="post">
  <div class="form-group">
    <label for="tanggal">Tanggal</label>
    <input type="date" class="form-control" name="tanggal" id="tanggal"  >
   </div>
  <div class="form-group">
    <label for="kode_inventaris">Kode Inventaris</label>
    <input type="text" class="form-control" name="kode_inventaris" id="kode_inventaris" >
  </div>
  <div class="form-group">
    <label for="ket_tahun">ID Jenis</label>
    <select class="form-control form-control-lg">
  <?php foreach($inventaris2 as $row){ ?>
   <option name="id_jenis"><?= $row['id_jenis'] ?></option>
<?php
  }
?>
  </select>
  </div>
  <div class="form-group">
    <label for="ket_tahun">ID Sumber</label>
    <select class="form-control form-control-lg">
  <?php foreach($inventaris2 as $row){ ?>
   <option name="id_sumber"><?= $row['id_sumber'] ?></option>
<?php
  }
?>
  </select>
  </div>
  <div class="form-group">
    <label for="ket_tahun">ID tahun</label>
    <select class="form-control form-control-lg">
  <?php foreach($inventaris2 as $row){ ?>
   <option name="id_tahun"><?= $row['id_tahun'] ?></option>
<?php
  }
?>
  </select>
  </div>
  <div class="form-group">
    <label for="id_ruang">ID ruang</label>
    <select class="form-control form-control-lg" >
  <?php foreach($inventaris2 as $row){ ?>
   <option name="id_ruang"><?= $row['id_ruang'] ?></option>
<?php
  }
?>
  </select>
  </div>
  <div class="form-group">
    <label for="ket_tahun">ID satuan</label>
    <select class="form-control form-control-lg">
  <?php foreach($inventaris2 as $row){ ?>
   <option name="id_satuan"><?= $row['id_satuan'] ?></option>
<?php
  }
?>
  </select>
  </div>
  <div class="form-group">
    <label for="ket_tahun">ID kondisi</label>
    <select class="form-control form-control-lg">
  <?php foreach($inventaris2 as $row){ ?>
   <option name="id_kondisi"><?= $row['id_kondisi'] ?></option>
<?php
  }
?>
  </select>
  </div>
  <div class="form-group">
    <label for="nama_barang">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" id="nama_barang" >
  </div>
  <div class="form-group">
    <label for="merek">Merek</label>
    <input type="text" class="form-control" name="merek" id="merek" >
  </div>
  <div class="form-group">
    <label for="seri">Seri</label>
    <input type="text" class="form-control" name="seri" id="seri" >
  </div>
  <div class="form-group">
    <label for="nilai_wajar">Nilai Wajar</label>
    <input type="text" class="form-control" name="nilai_wajar" id="nilai_wajar" >
  </div>
  <div class="form-group">
    <label for="gambar">Gambar</label>
    <input type="file"  name="gambar" id="gambar" >
  </div>
  <button type="submit" class="btn btn-success">Tambah</button>
 <a href="<?= site_url("data_inventaris") ?>" class="btn btn-danger">Cancle</a> 

  <br>
</form>   
    </div>
</div>