<?php 

  include "app/controller/ShowPengguna.php";

?>

<section class="section">
  <div class="card">
    
    <div class="card-body">
    <a href="media.php?pages=insertPengguna" class="btn btn-primary mb-4">Add Data Pengguna</a>
      <div class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-columns">
        
        <div class="dataTable-container">
          <table class="table table-striped dataTable-table" id="showDataKK">
            <thead>
              <tr>
                <th data-sortable="">No</th>
                <th data-sortable="">Nama User</th>
                <th data-sortable="">Username</th>
                <th data-sortable="">Status User</th>
                <th data-sortable="">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php 
              
                $no = 1;

                foreach ($showPengguna as $sp) :
              
              ?>
              <tr>
                  <td><?= $no++; ?></td>
                  <td><?= $sp['nama_user']; ?></td>
                  <td><?= $sp['username_user']; ?></td>
                  <td><?= $sp['status_user']; ?></td>
                  <td>
                    <a href="media.php?pages=detailPengguna&id=<?= $sp['id_user']; ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    <a href="media.php?pages=editPengguna&id=<?= $sp['id_user']; ?>" class="btn btn-success"><i class="far fa-edit"></i></a>
                    <a href="app/controller/DataPengguna.php?deletePengguna=<?= $sp['id_user']; ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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