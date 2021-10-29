<?php 

  include "app/controller/ShowPengguna.php";

?>
<div class="page-content">
  <section class="row">
    <div class="col-12 col-lg">
      <div class="row" id="table-hover-row">
        <div class="col-12">
          <div class="card col-lg-6">
            <div class="card-content">
              <div class="card-body">
                <form class="form form-horizontal" action="app/controller/DataPengguna.php" method="POST">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label>Nama User</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="nameUser" class="form-control" name="nameUser" value="<?= $result['nama_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Usernmae</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="username" class="form-control" name="username" value="<?= $result['username_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Password</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="password" id="password" class="form-control" name="password">
                      </div>
                      <div class="col-md-4">
                        <label>Keterangan</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="keterangan" class="form-control" name="keterangan" value="<?= $result['keterangan_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Status User</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="statusUser" id="admin" value="Admin" <?= $result['status_user'] == 'Admin' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="admin">Admin</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="statusUser" id="rt" value="RT" <?= $result['status_user'] == 'RT' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="rt">RT</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="statusUser" id="rw" value="RW" <?= $result['status_user'] == 'RW' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="rw">RW</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label>Desa Kelurahan</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="desaKelurahan" class="form-control" name="desaKelurahan" value="<?= $result['desa_kelurahan_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Kecamatan</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kecamatan" class="form-control" name="kecamatan" value="<?= $result['kecamatan_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Kabupaten Kota</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kabupatenKota" class="form-control" name="kabupatenKota" value="<?= $result['kabupaten_kota_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Provinsi</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="provinsi" class="form-control" name="provinsi" value="<?= $result['provinsi_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Negara</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="negara" class="form-control" name="negara" value="<?= $result['negara_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>RT</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rtUser" class="form-control" name="rtUser" value="<?= $result['rt_user']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>RW</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rwUser" class="form-control" name="rwUser" value="<?= $result['rw_user']; ?>">
                      </div>
                      <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" name="updatePengguna" class="btn btn-primary me-1 mb-1">Update</button>
                        <a href="media.php?pages=pengguna-sistem" class="btn btn-secondary me-1 mb-1">Back To</a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>