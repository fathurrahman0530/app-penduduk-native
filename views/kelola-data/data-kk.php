<?php

// use Illuminate\Support\Facades\Date;

include "app/controller/ShowDataKK.php";

?>
<section class="section">
  <div class="card">
    
    <div class="card-body">
    <a href="media.php?pages=insertDataKK" class="btn btn-primary mb-4">Add Data Kartu Keluarga</a>
      <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
        
        <div class="dataTable-container">
          <table class="table table-striped dataTable-table" id="showDataKK">
            <thead>
              <tr>
                <th data-sortable="">No</th>
                <th data-sortable="">Nomor KK</th>
                <th data-sortable="">NIK Kepala Keluarga</th>
                <th data-sortable="">Alamat Kartu Keluarga</th>
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
                  <td><?= $DP['nomor_keluarga']; ?></td>
                  <td><?= $DP['id_kepala_keluarga']; ?></td>
                  <td><?= $DP['alamat_keluarga']; ?></td>
                  <td>
                    <a href="media.php?pages=detailKK&id=<?= $DP['nomor_keluarga']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <?php if ($_SESSION['level'] == 'Admin') : ?>
                    <a href="media.php?pages=editKK&id=<?= $DP['nomor_keluarga']; ?>" class="btn btn-success"><i class="far fa-edit"></i></a>
                    <a href="app/controller/DataKK.php?delete=<?= $DP['nomor_keluarga']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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