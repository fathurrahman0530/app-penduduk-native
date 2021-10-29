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
                      <div class="col-md-4">
                        <label>NIK Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="nikPenduduk" class="form-control" name="nikPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Nomor KK</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="nomorKK" class="form-control" name="nomorKK">
                      </div>
                      <div class="col-md-4">
                        <label>Nama Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="namaPenduduk" class="form-control" name="namaPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Tempat Lahir</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="tempatLahir" class="form-control" name="tempatLahir">
                      </div>
                      <div class="col-md-4">
                        <label>Jenis Kelamin</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenisKelamin" id="laki-laki" value="L">
                          <label class="form-check-label" for="laki-laki">Laki - Laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="jenisKelamin" id="perempuan" value="P">
                          <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <label>Tanggal Lahir</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="date" id="tanggalLahir" class="form-control" name="tanggalLahir">
                      </div>
                      <div class="col-md-4">
                        <label>Alamat Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="alamatPenduduk" class="form-control" name="alamatPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Alamat KTP Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="alamatKTPPenduduk" class="form-control" name="alamatKTPPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Desa / Kelurahan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="dkPenduduk" class="form-control" name="dkPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Kecamatan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kecamatanPenduduk" class="form-control" name="kecamatanPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Kabupaten Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="kabupatenPenduduk" class="form-control" name="kabupatenPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Provinsi Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="provinsiPenduduk" class="form-control" name="provinsiPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Negara Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="negaraPenduduk" class="form-control" name="negaraPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>RT Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rtPenduduk" class="form-control" name="rtPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>RW Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="rwPenduduk" class="form-control" name="rwPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Agama</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <select name="agama" class="form-select" id="agama">
                          <option value="NULL">Agama</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen">Kristen</option>
                          <option value="Katholik">Katholik</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Budha">Budha</option>
                          <option value="Khonghucu">Khonghucu</option>
                        </select>
                      </div>
                      <div class="col-md-4">
                        <label>Pendidikan Terakhir Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="pTerakhirPenduduk" class="form-control" name="pTerakhirPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Pekerjaan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="pekerjaanPenduduk" class="form-control" name="pekerjaanPenduduk">
                      </div>
                      <div class="col-md-4">
                        <label>Status Perkawinan Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="sPerkawinanPenduduk" class="form-control" name="sPerkawinanPenduduk">
                      </div>

                      <div class="col-md-4">
                        <label>Status Penduduk</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" id="statusPenduduk" class="form-control" name="statusPenduduk">
                      </div>
                      <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" name="saveDataPenduduk" class="btn btn-primary me-1 mb-1">Save</button>
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