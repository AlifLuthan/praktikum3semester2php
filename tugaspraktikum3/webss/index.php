<?php
include_once 'atas.php';
?>

<form class="form-horizontal" method="POST" action="nilai_siswa.php">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Siswa STT NF</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Mahasiswa</label>  
  <div class="col-md-4">
  <input name="nama" type="text" placeholder="Mahasiswa / Mahasiswi" class="form-control input-md">
  <span class="help-block">Masukan Nama Lengkap Anda</span>  
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="buttondropdown">Mata Kuliah</label>
  <div class="col-md-4">
        <select class="form-select" name="matkul" aria-label="Default select example">
        <option selected>Harap Pilih !!!</option>
        <option value="DDP">Dasar Dasar Pemograman</option>
        <option value="WEB">Pemograman Website</option>
        <option value="BD">Basis Data</option>
    </div>
</div>
</select>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UTS</label>  
  <div class="col-md-4">
  <input type="text" name="nilai_uts" value="" placeholder="Masukan Angka" class="form-control input-md">
  <span class="help-block">Harap Masukan Nilai!</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai UAS</label>  
  <div class="col-md-4">
  <input type="text" name="nilai_uas" value="" placeholder="Masukan Angka" class="form-control input-md">
  <span class="help-block">Harap Masukan Nilai!</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input type="text" name="nilai" placeholder="Masukan Angka" class="form-control input-md">
  <span class="help-block">Harap Masukan Nilai!</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4">
    <button type="submit" name="proses" value="Simpan" class="btn btn-primary">Simpan</button>
  </div>
</div>

</fieldset>
</form>

<?php
include_once 'bawah.php';
?>