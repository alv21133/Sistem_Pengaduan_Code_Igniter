 <div class="loader"></div>


 <div class="was-validated" style="margin-left:5%;margin-right:5%;margin-top:7%">
 <?php 
 echo form_open_multipart('Welcome/kirim/');
 ?>
  <div class="mb-3">
    <label for="validationTextarea">Detail Kerusakan</label>
    <textarea name="deskrip" class="form-control is-invalid" id="validationTextarea" placeholder="Diskripsi kerusakan yang anda temui..." required></textarea>
    <div class="invalid-feedback">
      Diskripsi Kerusakan
    </div>
  </div>

  <div class="form-group">
    <select name="ruang"class="custom-select" required>
      <option value="">Silahkan pilih </option>
      <option value="531">5.3.1</option>
      <option value="423">4.2.3</option>
      <option value="735">7.3.5</option>
      <option value="lab241">Lab 241</option>
      <option value="Dosen">Ruang Dosen</option>
    </select>
    <div class="invalid-feedback">Lokasi Kerusakan </div>
  </div>

 
  <div class="custom-file">
    <input name="poto" type="file" class="btn btn-outline-success"  style="padding-right:69%">
    <div class="invalid-feedback">Upload file pendukung</div>
  </div>

  <div class="form-group">
     <div class="form-row">
            <div class="col-sm-3"style="margin-top:4%">
            <input type="text" name="tgl"class="form-control" value="<?php echo date('d-m-Y');?>">
            </div>
            <div class="invalid-feedback">Lokasi Kerusakan </div>
  </div>
  </div>

  <input type="submit" class="btn btn-info" style="margin-left:45%; padding-left:2%;padding-right:2%" value="Kirim">
</div>

<?php

form_close();

?>




