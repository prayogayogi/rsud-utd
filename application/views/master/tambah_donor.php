<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Pendonor
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col">
          <a href="<?= base_url('dashboard/tambahPendonor') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus mr-1"></i>Tambah Data</a>
        </div>

        <!-- <div class="col-4">
          <form action="<?= base_url('dashboard/tambah_data_pendonor') ?>" method="POST" class="d-inline-flex">
            <div class="input-group mb-3">
              <input type="text" name="kyword" class="form-control" placeholder="Search Keyword" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">Search</button>
              </div>
            </div>
          </form>
        </div> -->

      </div>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gol Darah</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Action</th>
            <th>Keterangan</th>
          </tr>

          <?php
          foreach ($pendonor as $data) : ?>
            <tr>
              <td><?= ++$start ?></td>
              <td><?= $data['nama_pendonor'] ?></td>

              <!-- gol A -->
              <?php if ($data['gol_darah'] == "A") { ?>
                <td><span class="badge bg-success">
                    <?= $data['gol_darah']; ?>
                  </span></td>
              <?php } ?>

              <!-- gol B -->
              <?php if ($data['gol_darah'] == "B") { ?>
                <td><span class="badge bg-primary">
                    <?= $data['gol_darah']; ?>
                  </span></td>
              <?php } ?>

              <!-- gol AB -->
              <?php if ($data['gol_darah'] == "AB") { ?>
                <td><span class="badge bg-danger">
                    <?= $data['gol_darah']; ?>
                  </span></td>
              <?php } ?>

              <!-- gol O -->
              <?php if ($data['gol_darah'] == "O") { ?>
                <td><span class="badge bg-warning">
                    <?= $data['gol_darah']; ?>
                  </span></td>
              <?php } ?>


              <td><?= $data['jenis_kelamin'] ?></td>
              <td>
                <?php if ($data['alamat_pendonor'] != '') { ?>
                  <?= $data['alamat_pendonor'] ?>
                <?php } else { ?>
                  <a class="text-info">Tidak Ada</a>
                <?php } ?>
              </td>
              <td>
                <?php if ($data['no_hp'] != ('')) { ?>
                  <?= $data['no_hp']; ?>
                <?php } else { ?>
                  <a class="text-info">Tidak Ada</a>
                <?php } ?>

              </td>
              <td>

                <div class="btn-group">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle mr-1 mb-1" type="button" data-toggle="dropdown">
                      Option
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item text-success" data-toggle="modal" data-target="#exampleModalEditDataPendonor<?= $data['id']; ?>" href="#">Ubah</a>

                      <a class="dropdown-item text-danger tombol-hapuss" href="<?= base_url('dashboard/hapusDataPendonor/') . $data['id']; ?>">Hapus</a>

                    </div>
                  </div>
                </div>

              </td>
              <?php
              if (time() >= ($data['tgl_donor'] + 7776000) && $data['hiv'] === ('-') && $data['hcv'] === ('-') && $data['hbsag'] === ('-') && $data['sypilis'] === ('-')) { ?>

                <!-- bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-info">Bisa</span></td>
              <?php } else { ?>

                <!-- tidak bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-danger"> Tidak bisa</span></td>
              <?php } ?>
            </tr>
          <?php endforeach; ?>
        </table>
        <?= $this->pagination->create_links(); ?>
      </div>
    </section>

    <!-- Modal Edit Data Pendonor-->
    <?php foreach ($pendonor as $data) : ?>
      <div class="modal fade" id="exampleModalEditDataPendonor<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data Pendonor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('dashboard/editDataPendonor') ?>" method="post">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" value="<?= $data['nama_pendonor'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="gender">Jenis Gol Darah</label>
                  <input type="text" name="gol_darah" id="nama" value="<?= $data['gol_darah'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <input type="text" name="alamat" id="alamat" value="<?= $data['alamat_pendonor']; ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="tgl_donor">Tanggal Donor</label>
                  <input type="text" id="tgl_donor" value="<?= date('d-m-Y', $data['tgl_donor']) ?>" readonly class="form-control">
                </div>
                <div class="form-group">
                  <label for="hiv">Hiv</label>
                  <input type="text" name="hiv" id="hiv" value="<?= $data['hiv'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="hcv">Hcv</label>
                  <input type="text" name="hcv" id="hcv" value="<?= $data['hcv'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="hbsag">HbSag</label>
                  <input type="text" name="hbsag" id="hbsag" value="<?= $data['hbsag'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sypilis">Sypilis</label>
                  <input type="text" name="sypilis" id="sypilis" value="<?= $data['sypilis'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="no hp">No Hp</label>
                  <input type="number" name="no_hp" id="no hp" value="<?= $data['no_hp'] ?>" class=" form-control">
                </div>
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>


    <!-- Modal Detail Pendonor-->
    <div class="modal fade" id="exampleModaldetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Detail Data Pendonor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <section class="detailPendonor">
              <div class="row">
                <div class="col">

                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>