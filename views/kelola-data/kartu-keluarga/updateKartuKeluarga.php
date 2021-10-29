<?php 

  $id         = $_GET['id'];

  $check      = "SELECT * FROM kartu_keluarga WHERE nomor_keluarga = '$id'";
  $queryCheck = mysqli_query($conn, $check);
  $result     = mysqli_fetch_assoc($queryCheck);

?>
<div class="page-content">
  <section class="row">
    <div class="col-12 col-lg">
      <div class="row" id="table-hover-row">
        <div class="col-12">
          <div class="card col-lg-6">
            <div class="card-content">
              <div class="card-body">
                <form class="form form-horizontal" action="app/controller/DataKK.php" method="POST">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label>Nomor KK</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="nomorKK" class="form-control" name="nomorKK" value="<?= $result['nomor_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>NIK Kepala Keluarga</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="nikKepalaKeluarga" class="form-control" name="nikKepalaKeluarga" value="<?= $result['id_kepala_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Alamat KK</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="alamatKK" class="form-control" name="alamatKK" value="<?= $result['alamat_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Desa / Kelurahan KK</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="dkKartuKeluarga" class="form-control" name="dkKartuKeluarga" value="<?= $result['desa_kelurahan_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Kecamatan KK</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kecamatanKK" class="form-control" name="kecamatanKK" value="<?= $result['kecamatan_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Kabupaten / Kota KK</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="ktKartuKeluarga" class="form-control" name="ktKartuKeluarga" value="<?= $result['kabupaten_kota_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Provinsi Kartu Keluarga</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="provinsiKartuKeluarga" class="form-control" name="provinsiKartuKeluarga" value="<?= $result['provinsi_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Negara Kartu Keluarga</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="negaraKartuKeluarga" class="form-control" name="negaraKartuKeluarga" value="<?= $result['negara_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>RT Kartu Keluarga</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rtKartuKeluarga" class="form-control" name="rtKartuKeluarga" value="<?= $result['rt_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>RW Kartu Keluarga</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rwKartuKeluarga" class="form-control" name="rwKartuKeluarga" value="<?= $result['rw_keluarga']; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Kode Pos Kartu Keluarga</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kpKartuKeluarga" class="form-control" name="kpKartuKeluarga" value="<?= $result['kode_pos_keluarga']; ?>">
                      </div>
                      <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" name="updateDataKK" class="btn btn-primary me-1 mb-1">Save</button>
                        <a href="media.php?pages=kdDataKK" class="btn btn-secondary me-1 mb-1">Back To</a>
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