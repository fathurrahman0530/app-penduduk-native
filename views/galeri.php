<?php 

  include "app/controller/ShowGallery.php";

?>
<section class="section">
  <div class="card">

    <div class="card-body">
      <a href="media.php?pages=insertGallery" class="btn btn-primary mb-4">Add Gallery</a>
      <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">

        <div class="dataTable-container">
          <table class="table table-striped dataTable-table" id="showDataGallery">
            <thead>
              <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              
                $no   = 1;

                foreach ($showData as $sd) :
              
              ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $sd['judul']; ?></td>
                <td><?= $sd['keterangan']; ?></td>
                <td>
                  <a href="media.php?pages=detailGallery%idGallery=<?= $sd['id_galeri']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                  <a href="app/controller/DataGallery.php?delete=<?= $sd['id_galeri']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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