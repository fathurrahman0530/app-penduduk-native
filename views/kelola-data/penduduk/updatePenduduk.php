<?php 

  include "app/controller/ShowDataPenduduk.php";

?>

<div class="page-content">
  <section class="row">
    <div class="col-12 col-lg">
      <div class="row" id="table-hover-row">
        <div class="col-12">
          <div class="card col-lg-6">
            <div class="card-content">
              <div class="card-body">
                <form class="form form-horizontal" action="app/controller/DataPenduduk.php" method="POST">
                  <div class="form-body">
                    <div class="row">
                      <input type="text" name="idPenduduk" value="<?= $result['id_warga']; ?>" hidden>
                      <div class="col-md-4">
                        <label>NIK Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="nikPenduduk" class="form-control" name="nikPenduduk" value="<?= $result["nik_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Nomor KK</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="nomorKK" class="form-control" name="nomorKK" value="<?= $result["nomor_kk"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Nama Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="namaPenduduk" class="form-control" name="namaPenduduk" value="<?= $result["nama_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Tempat Lahir</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="tempatLahir" class="form-control" name="tempatLahir" value="<?= $result["tempat_lahir_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Jenis Kelamin</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenisKelamin" id="laki-laki" value="L" <?= $result['jenis_kelamin_warga'] == 'L' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P" <?= $result['jenis_kelamin_warga'] == 'P' ? 'checked' : ''; ?>>
                          <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label>Tanggal Lahir</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="date" id="tanggalLahir" class="form-control" name="tanggalLahir" value="<?= $result["tanggal_lahir_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Alamat Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="alamatPenduduk" class="form-control" name="alamatPenduduk" value="<?= $result["alamat_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Alamat KTP Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="alamatKTPPenduduk" class="form-control" name="alamatKTPPenduduk" value="<?= $result["alamat_ktp_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Desa / Kelurahan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="dkPenduduk" class="form-control" name="dkPenduduk" value="<?= $result["desa_kelurahan_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Kecamatan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kecamatanPenduduk" class="form-control" name="kecamatanPenduduk" value="<?= $result["kecamatan_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Kabupaten Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kabupatenPenduduk" class="form-control" name="kabupatenPenduduk" value="<?= $result["kabupaten_kota_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Provinsi Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="provinsiPenduduk" class="form-control" name="provinsiPenduduk" value="<?= $result["provinsi_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Negara Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="negaraPenduduk" class="form-control" name="negaraPenduduk" value="<?= $result["negara_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>RT Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rtPenduduk" class="form-control" name="rtPenduduk" value="<?= $result["rt_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>RW Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rwPenduduk" class="form-control" name="rwPenduduk" value="<?= $result["rw_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Agama</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <select name="agama" class="form-select" id="agama">
                          <option value="NULL">Agama</option>
                          <option value="islam">Islam</option>
                          <option value="kristen">Kristen</option>
                          <option value="katholik">Katholik</option>
                          <option value="hindu">Hindu</option>
                          <option value="budha">Budha</option>
                          <option value="khonghucu">Khonghucu</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label>Pendidikan Terakhir Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="pTerakhirPenduduk" class="form-control" name="pTerakhirPenduduk" value="<?= $result["pendidikan_terakhir_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Pekerjaan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="pekerjaanPenduduk" class="form-control" name="pekerjaanPenduduk" value="<?= $result["pekerjaan_warga"]; ?>">
                      </div>
                      <div class="col-md-4">
                        <label>Status Perkawinan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="sPerkawinanPenduduk" class="form-control" name="sPerkawinanPenduduk" value="<?= $result["status_perkawinan_warga"]; ?>">
                      </div>

                      <div class="col-md-4">
                        <label>Status Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="statusPenduduk" class="form-control" name="statusPenduduk" value="<?= $result["status_warga"]; ?>">
                      </div>
                      <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" name="editDataPenduduk" class="btn btn-primary me-1 mb-1">Update</button>
                        <a href="media.php?pages=kdDataPenduduk" class="btn btn-secondary me-1 mb-1">Back To</a>
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