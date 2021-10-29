<?php 

  include "app/controller/ShowDataKK.php";

?>

<dsiv class="page-content">
  <section class="row">
    <div class="col-12 col-lg">
      <div class="row">
        <div class="col-6">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <table class="table">
                  <tr>
                  <tr>
                    <td>Nomor Kartu Keluarga</td>
                    <td></td>
                    <td><?= $result['nomor_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>NIK Kepala Keluarga</td>
                    <td></td>
                    <td><?= $result['id_kepala_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td></td>
                    <td><?= $result['alamat_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>RT</td>
                    <td></td>
                    <td><?= $result['rt_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>RW</td>
                    <td></td>
                    <td><?= $result['rw_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>Kode Pos</td>
                    <td></td>
                    <td><?= $result['kode_pos_keluarga']; ?></td>
                  </tr>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-content">
              <div class="card-body">
                <table class="table">
                  <tr>
                    <td>Desa / Kelurahan</td>
                    <td></td>
                    <td><?= $result['desa_kelurahan_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>Kecamatan</td>
                    <td></td>
                    <td><?= $result['kecamatan_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>Kabupaten / Kota</td>
                    <td></td>
                    <td><?= $result['kabupaten_kota_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>Provinsi</td>
                    <td></td>
                    <td><?= $result['provinsi_keluarga']; ?></td>
                  </tr>
                  <tr>
                    <td>Negara</td>
                    <td></td>
                    <td><?= $result['negara_keluarga']; ?></td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-content">
              <table class="table">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    
                    $no = 1;

                    while ($da = mysqli_fetch_assoc($dataAnggota)) :

                  ?>
                  <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $da['nik_warga']; ?></td>
                    <td><?= $da['nama_warga']; ?></td>
                    <td><?php
                      if ($da['jenis_kelamin_warga'] == 'L') {
                        echo "Laki - Laki";
                      } else {
                        echo "Perempuan";
                      }
                    ?></td>
                    <td><?= $da['tempat_lahir_warga']; ?></td>
                    <td><?= $da['tanggal_lahir_warga']; ?></td>
                  </tr>
                  <?php endwhile; ?>
                </tbody>
              </table>
              <a href="media.php?pages=kdDataKK" class="btn btn-secondary">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</dsiv>