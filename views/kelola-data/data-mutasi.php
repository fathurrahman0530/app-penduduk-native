<?php

// use Illuminate\Support\Facades\Date;

include "app/controller/ShowDataMutasi.php";

?>
<section class="section">
  <div class="card">

    <div class="card-body">
      <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">

        <div class="dataTable-container">
          <table class="table table-striped dataTable-table" id="showDataKK">
            <thead>
              <tr>
                <th data-sortable="">No</th>
                <th data-sortable="">NIK</th>
                <th data-sortable="">Nama Warga</th>
                <th data-sortable="">Jenis Kelamin</th>
                <th data-sortable="">Usia</th>
                <th data-sortable="">Pendidikan</th>
                <th data-sortable="">Pekerjaan</th>
                <th data-sortable="">Kawin</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              
                $no = 1;

                foreach ($showData as $DP) :
              
              ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $DP['nik_warga']; ?></td>
                <td><?= $DP['nama_warga']; ?></td>
                <td>
                  <?php 
                  if ($DP['jenis_kelamin_warga'] == 'L') {
                    echo "Laki - Laki";
                  } else {
                    echo "Perempuan";
                  } 
                  ?>
                </td>
                <td>
                  <?php

                  $tanggal  = new DateTime($DP['tanggal_lahir_warga']);

                  $today    = new DateTime('today');

                  $y        = $today->diff($tanggal)->y;

                  echo $y . " Tahun";

                  // var_dump($tanggal, $today);

                  ?>
                </td>
                <td><?= $DP['pendidikan_terakhir_warga']; ?></td>
                <td><?= $DP['pekerjaan_warga']; ?></td>
                <td><?= $DP['status_perkawinan_warga']; ?></td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>