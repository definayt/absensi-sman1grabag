<script>
      function show_password(){
        var password = document.getElementById('password_update');
        if (password.type === "password") {
          password.type = "text"
        }
        else{
          password.type = "password";
        }
      }
</script> 
<div class="box box-header">
  <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
    <div class="form-msg">
      <div class="msg" style="display:none;">
        <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </div>
    
    <h3 style="display:block; text-align:center;">Ubah Data Pegawai</h3>

    <form id="form_update_pegawai" method="POST" enctype="multipart/form-data" action="<?php echo base_url('Pegawai/prosesUpdate/'.$dataPegawai->NIP)?>">
      <input type="hidden" name="foto_lama" value="<?php echo $dataPegawai->foto; ?>">
      <input type="hidden" name="NIP" value="<?php echo $dataPegawai->NIP; ?>">
      <div class="input-group form-group">
        <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-user"></i>
        </span>  
        <input type="text" class="form-control" placeholder="Nama Pegawai" name="nama_pegawai" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama_pegawai; ?>">
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-map-marker"></i>
        </span>
        <input type="text" class="form-control" placeholder="Alamat" name="alamat" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->alamat; ?>">
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-user"></i>
        </span>
        <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->email; ?>">
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-lock"></i>
        </span>
        <input type="password" class="form-control" placeholder="Password" name="password" id="password_update" aria-describedby="sizing-addon2">
      </div>
      <div class="input-group form-group">
        <input type="checkbox" onclick="show_password()"> Tampilkan Password
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-pushpin"></i>
        </span>
        <select class="form-control" name="status" aria-describedby="sizing-addon2">
          <option value="Aktif"<?php if($dataPegawai->status==='Aktif') echo 'selected="selected"' ;?>>Aktif</option>
          <option value="Aktif"<?php if($dataPegawai->status==='Aktif') echo 'selected="selected"' ;?>>Aktif</option>
          <option value="Pindah"<?php if($dataPegawai->status==='Pindah') echo 'selected="selected"' ;?>>Pindah</option>
          <option value="Cuti"<?php if($dataPegawai->status==='Cuti') echo 'selected="selected"' ;?>>Cuti</option>
          <option value="Keluar"<?php if($dataPegawai->status==='Keluar') echo 'selected="selected"' ;?>>Keluar</option>
          <option value="Pensiun"<?php if($dataPegawai->status==='Pensiun') echo 'selected="selected"' ;?>>Pensiun</option>
        </select>
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-camera"></i>
        </span>  
        <input type="file" class="form-control" placeholder="Foto" name="foto">
      </div>
      <div class="input-group form-group">
        <span class="input-group-addon" id="sizing-addon2">
          <i class="glyphicon glyphicon-briefcase"></i>
        </span>  
        <select name="id_jabatan" class="form-control select2" aria-describedby="sizing-addon2">
          <?php
          foreach ($dataJabatan as $jabatan) {
            ?>
            <option value="<?php echo $jabatan->id_jabatan; ?>" <?php if($jabatan->id_jabatan == $dataPegawai->id_jabatan){echo "selected='selected'";} ?>><?php echo $jabatan->nama_jabatan; ?></option>
            <?php
          }
          ?>
        </select>
      </div>

      
      <div class="form-group">
        <div class="col-md-12">
            <button type="submit" class="form-control btn btn-success"> <i class="glyphicon glyphicon-ok"></i> Ubah Data</button>

        </div>
      </div>
    </form>
    <br><br>
    <div class="col-md-12">
      <a href="<?php echo base_url('Pegawai')?>">
        <button class="form-control btn btn-primary"> <i class="glyphicon glyphicon-remove"></i> Batalkan</button>  
      </a>
    </div>
  </div>
</div>