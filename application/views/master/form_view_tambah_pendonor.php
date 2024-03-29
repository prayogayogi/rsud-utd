<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h2>
        Tambah Data Pendonor
      </h2>
    </section>
    <div class="row">
      <section class="kontent">
        <form action="<?= base_url('dashboard/aksi_tambahdataRsud') ?>" method="post">
          <div class="row mt-2">
            <div class="col-12 col-md-6">
              <div class="form-group">
                <label for="nama_pendonor">Nama Pendonor</label>
                <input type="text" name="nama_pendonor" id="nama_pendonor" placeholder="Masukan Nama Pendonor" class="form-control" value="<?php echo set_value('nama_pendonor'); ?>" autofocus autocomplete="off">
                <?= form_error('nama_pendonor', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="gender" name="jenis_kelamin">Pilih</label>
                  </div>
                  <select class="custom-select form-control" id="gender" name="jenis_kelamin">
                    <option selected>Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
                <?= form_error('jenis_kelamin', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" id="nama_pasien" placeholder="Masukan Nama Pasien" class="form-control" value="<?php echo set_value('nama_pasien'); ?>" autocomplete="off">
                <?= form_error('nama_pasien', '<small class="text-danger ml-2">', '</small>') ?>
                <small id="emailHelp" class="form-text text-muted">Jika tidak untuk pasien. Isi Dengan (Stok Utd)</small>
              </div>
              <div class="form-group">
                <label for="ruang_pasien">Ruang Pasien</label>
                <input type="text" name="ruang_pasien" id="ruang_pasien" placeholder="Masukan Ruang Pasien" class="form-control" value="<?php echo set_value('ruang_pasien'); ?>" autocomplete="off">
                <?= form_error('ruang_pasien', '<small class="text-danger ml-2">', '</small>') ?>
                <small id="emailHelp" class="form-text text-muted">Jika tidak untuk pasien. Isi Dengan (Stok Utd)</small>
              </div>
              <div class="form-group">
                <label for="gol_darah">Gol Darah</label>
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="gol_darah" name="gol_darah">Pilih</label>
                  </div>
                  <select class="custom-select form-control" id="gol_darah" name="gol_darah">
                    <option selected>Gol Darah</option>
                    <option value="A">Gol A</option>
                    <option value="B">Gol B</option>
                    <option value="AB">Gol AB</option>
                    <option value="O">Gol O</option>
                  </select>
                </div>
                <?= form_error('gol_darah', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" class="form-control" value="<?php echo set_value("alamat"); ?>" autocomplete="off">
                <?= form_error('alamat', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="agama" name="agama">Pilih</label>
                  </div>
                  <select class="custom-select form-control" id="agama" name="agama">
                    <option selected>Agama</option>
                    <option value="islam">Islam</option>
                    <option value="keristen katolik">Keristen Katolik</option>
                    <option value="keristen protestan">Keristen Protestan</option>
                    <option value="hindu">Hindu</option>
                    <option value="buddha">Buddha</option>
                    <option value="khonghucu">Khonghucu</option>
                  </select>
                </div>
                <?= form_error('agama', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="no_tali">No Tali</label>
                <input type="text" name="no_tali" id="no_tali" placeholder="Masukan No Tali" class="form-control" value="<?php echo set_value('no_tali'); ?>" autocomplete="off">
                <?= form_error('no_tali', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
              <div class="form-group">
                <label for="Pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="Pekerjaan" placeholder="Masukan Pekerjaan" class="form-control" value="<?php echo set_value('pekerjaan'); ?>" autocomplete="off">
                <?= form_error('pekerjaan', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
            </div>

            <div class="col-12 col-md-6">
              <div class="form-group">
                <label for="bb_tensi">Bb Tensi</label>
                <input type="text" name="bb_tensi" id="bb_tensi" placeholder="Tensi Pendonor" class="form-control" value="<?php echo set_value('bb_tensi'); ?>" autocomplete="off">
                <?= form_error('bb_tensi', '<small class="text-danger ml-2">', '</small>') ?>
                <small id="emailHelp" class="form-text text-muted">Tensi Darah Minimal Harus 110</small>
              </div>
              <div class="form-group">
                <label for="hb">Hb </label>
                <input type="text" name="hb" id="hb" placeholder="Hb Pendonor" class="form-control" value="<?php echo set_value('hb'); ?>" autocomplete="off">
                <?= form_error('hb', '<small class="text-danger ml-2">', '</small>') ?>
                <small id="emailHelp" class="form-text text-muted">Hb Darah Minimal Harus 12</small>
              </div>

              <div class="form-group mb-3">
                <label for="no_hp">No Hanphone</label>
                <input type="number" name="no_hp" id="no_hp" placeholder="Masukan No Hanphone" class="form-control" value="<?php echo set_value('no_hp'); ?>" autocomplete="off">
                <?= form_error('no_hp', '<small class="text-danger ml-2">', '</small>') ?>
              </div>

              <input type="hidden" name="petugas" id="petugas" value="<?= $user1['nama'] ?>">
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Resset</button>
              <button type="submit" class="btn btn-primary">Save Data</button>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>