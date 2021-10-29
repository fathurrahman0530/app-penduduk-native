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
                <div class="form-body">
                  <table class="table">
                    <tr>
                      <th>Nama User</th>
                      <td></td>
                      <td><?= $result["nama_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Username</th>
                      <td></td>
                      <td><?= $result["username_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Keterangan</th>
                      <td></td>
                      <td><?= $result["keterangan_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Status User</th>
                      <td></td>
                      <td><?= $result["status_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Desa / Kelurahan</th>
                      <td></td>
                      <td><?= $result["desa_kelurahan_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Kecamatan</th>
                      <td></td>
                      <td><?= $result["kecamatan_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Kabupaten / Kota</th>
                      <td></td>
                      <td><?= $result["kabupaten_kota_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Provinsi</th>
                      <td></td>
                      <td><?= $result["provinsi_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>Negara</th>
                      <td></td>
                      <td><?= $result["negara_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>RT</th>
                      <td></td>
                      <td><?= $result["rt_user"]; ?></td>
                    </tr>
                    <tr>
                      <th>RW</th>
                      <td></td>
                      <td><?= $result["rw_user"]; ?></td>
                    </tr>
                  </table>
                  <a href="media.php?pages=pengguna-sistem" class="btn btn-secondary">Kembali</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>