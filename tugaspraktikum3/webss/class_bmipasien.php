<?php
include_once 'atas.php';
?>

<form class="form-horizontal" method="POST" action="hasilbmi.php">
<fieldset>

<!-- Form Name -->
<legend>Form isian index Massa Tubuh</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama"><i class="fa fa-user" aria-hidden="true"> Nama </i></label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Nama Lengkap" class="form-control input-md" required="">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="badan"><i class="fa fa-heart" aria-hidden="true"> Beratbadan </i></label>  
  <div class="col-md-4">
  <input id="Beratbadan" name="badan" type="text" placeholder="Masukan Berat Badan Anda (KG)" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="tinggi"><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-female" aria-hidden="true"></i> Tinggibadan</label>  
  <div class="col-md-4">
  <input id="tinggibadan" name="tinggi" type="text" placeholder="Masukan Tinggi Anda ( cm )" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="umur"><i class="fa fa-male" aria-hidden="true"></i><i class="fa fa-female" aria-hidden="true"></i> Usia</label>  
  <div class="col-md-4">
  <input id="umur" name="umur" type="text" placeholder="umur" class="form-control input-md">
  <span class="help-block">Harap Masukan Usia anda !</span>  
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radio"><i class="fa fa-mars" aria-hidden="true">  </i><i class="fa fa-venus" aria-hidden="true"></i> Jenis Kelamin</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radio-0">
      <input type="radio" name="jk" id="radio-0" value="Laki-Laki">
      Laki Laki
    </label> 
    <label class="radio-inline" for="radio-1">
      <input type="radio" name="jk" id="radio-1" value="Perempuan">
      Perempuan
    </label>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
  <button type="submit" name="proses" value="Simpan" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>


<?php
include_once 'bawah.php';
?>