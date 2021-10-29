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
                <div class="form-body">
                  <table class="table">
                    <tr>
                      <th>NIK Warga</th>
                      <td></td>
                      <td><?= $result["nik_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Nomor KK Warga</th>
                      <td></td>
                      <td><?= $result["nomor_kk"]; ?></td>
                    </tr>
                    <tr>
                      <th>Nama Warga</th>
                      <td></td>
                      <td><?= $result["nama_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Tempat Lahir</th>
                      <td></td>
                      <td><?= $result["tempat_lahir_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Tanggal Lahir</th>
                      <td></td>
                      <td><?= $result["tanggal_lahir_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Jenis Kelamin</th>
                      <td></td>
                      <td>
                        <?php 
                          if ($result["jenis_kelamin_warga"] == "L") {
                            echo "Laki - Laki";
                          } else {
                            echo "Perempuan";
                          }
                        ?>
                      </td>
                    </tr>
                    <tr>
                      <th>Alamat KTP</th>
                      <td></td>
                      <td><?= $result["alamat_ktp_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Alamat</th>
                      <td></td>
                      <td><?= $result["alamat_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Desa / Kelurahan</th>
                      <td></td>
                      <td><?= $result["desa_kelurahan_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Kecamatan</th>
                      <td></td>
                      <td><?= $result["kecamatan_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Kabupaten / Kota</th>
                      <td></td>
                      <td><?= $result["kabupaten_kota_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Provinsi</th>
                      <td></td>
                      <td><?= $result["provinsi_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Negara</th>
                      <td></td>
                      <td><?= $result["negara_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>RT</th>
                      <td></td>
                      <td><?= $result["rt_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>RW</th>
                      <td></td>
                      <td><?= $result["rw_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Agama</th>
                      <td></td>
                      <td><?= $result["agama_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Pendidikan Terakhir</th>
                      <td></td>
                      <td><?= $result["pendidikan_terakhir_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Pekerjaan</th>
                      <td></td>
                      <td><?= $result["pekerjaan_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Status Perkawinan</th>
                      <td></td>
                      <td><?= $result["status_perkawinan_warga"]; ?></td>
                    </tr>
                    <tr>
                      <th>Status</th>
                      <td></td>
                      <td><?= $result["status_warga"]; ?></td>
                    </tr>
                  </table>
                  <a href="media.php?pages=kdDataPenduduk" class="btn btn-secondary">Kembali</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>