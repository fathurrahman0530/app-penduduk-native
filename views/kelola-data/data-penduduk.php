<?php

// use Illuminate\Support\Facades\Date;

include "app/controller/ShowDataPenduduk.php";

?>
<section class="section">
  <div class="card">
    
    <div class="card-body">
    <a href="media.php?pages=insertDataPenduduk" class="btn btn-primary mb-4">Add Data Penduduk</a>
      <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
        
        <div class="dataTable-container">
          <table class="table table-striped dataTable-table" id="showDataPenduduk">
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
                <th data-sortable="">Status</th>
                <th data-sortable="">Action</th>
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
                  <td><?= $DP['status_warga']; ?></td>
                  <td>
                    <a href="media.php?pages=detailPenduduk&id=<?= $DP['nik_warga']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <?php if ($_SESSION['level'] == 'Admin') : ?>
                    <a href="media.php?pages=editPenduduk&id=<?= $DP['nik_warga']; ?>" class="btn btn-success"><i class="far fa-edit"></i></a>
                    <a href="app/controller/DataPenduduk.php?mutasi=true&id=<?= $DP['nik_warga']; ?>" class="btn btn-light"><i class="fas fa-file-export"></i></a>
                    <a href="app/controller/DataPenduduk.php?deleteData=true&id=<?= $DP['nik_warga']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                    <?php endif; ?>
                  </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>