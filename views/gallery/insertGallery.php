<div class="page-content">
  <section class="row">
    <div class="col-12 col-lg">
      <div class="row" id="table-hover-row">
        <div class="col-12">
          <div class="card col-lg-6">
            <div class="card-content">
              <div class="card-body">
                <form class="form form-horizontal" enctype="multipart/form-data" action="app/controller/DataGallery.php" method="POST">
                  <div class="form-body">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="judul">Judul Image</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" name="judul" class="form-control" id="judul">
                      </div>
                      <div class="col-md-4">
                        <label for="image">Image</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="file" name="image" class="form-control" id="image" required>
                      </div>
                      <div class="col-md-4">
                        <label for="keterangan">Keterangan Image</label>
                      </div>
                      <div class="col-md-8 form-group">
                        <input type="text" name="keterangan" class="form-control" id="keterangan">
                      </div>
                      <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" name="saveGallery" class="btn btn-primary me-1 mb-1">Save</button>
                        <a href="media.php?pages=galeri" class="btn btn-secondary me-1 mb-1">Back To</a>
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