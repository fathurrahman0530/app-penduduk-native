<?php 

    $dataPenduduk   = mysqli_query($conn, "SELECT * FROM warga");
    $penduduk       = mysqli_num_rows($dataPenduduk);

    $dataKK         = mysqli_query($conn, "SELECT * FROM kartu_keluarga");
    $kk             = mysqli_num_rows($dataKK);

    $dataMutasi     = mysqli_query($conn, "SELECT * FROM warga WHERE status_warga = 'Mutasi'");
    $mutasi         = mysqli_num_rows($dataMutasi);

    $fakeRT         = mysqli_query($conn, "SELECT * FROM tb_rt");
    $RT             = mysqli_num_rows($fakeRT);

    $fakeRW         = mysqli_query($conn, "SELECT * FROM tb_rw");
    $RW             = mysqli_num_rows($fakeRW);

?>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <div class="col-6 col-lg-2 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon purple">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data Penduduk</h6>
                                    <h6 class="font-extrabold mb-0"><?= $penduduk; ?> Orang</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon blue">
                                        <i class="fas fa-copy"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data Kartu Keluarga</h6>
                                    <h6 class="font-extrabold mb-0"><?= $kk; ?> Kartu Keluarga</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="fas fa-file-export"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data Mutasi</h6>
                                    <h6 class="font-extrabold mb-0"><?= $mutasi; ?> Orang</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data RT</h6>
                                    <h6 class="font-extrabold mb-0"><?= $RT; ?> RT</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-2 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="stats-icon green">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h6 class="text-muted font-semibold">Data RW</h6>
                                    <h6 class="font-extrabold mb-0"><?= $RW; ?> RW</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>