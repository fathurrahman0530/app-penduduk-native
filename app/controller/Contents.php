<?php 

$page = (isset($_GET['pages'])) ? $_GET['pages'] : '';

switch ($page) {
  case 'dashboard':
    include "views/dashboard/index.php";
    break;

  case 'kdDataPenduduk':
    include "views/kelola-data/data-penduduk.php";
    break;

  case 'kdDataKK':
    include "views/kelola-data/data-kk.php";
    break;

  case 'galeri':
    include "views/galeri.php";
    break;

  case 'insertGallery':
    include "views/gallery/insertGallery.php";
    break;

  case 'showGallery':
    include "views/gallery/showGallery.php";
    break;

  case 'mutasi':
    include "views/kelola-data/data-mutasi.php";
    break;

  case 'pengguna-sistem':
    include "views/settings/pengguna-sistem.php";
    break;

  case 'detailPengguna':
    include "views/settings/detailPengguna.php";
    break;

  case 'insertPengguna':
    include "views/settings/insertPengguna.php";
    break;

  case 'editPengguna':
    include "views/settings/updatePengguna.php";
    break;

  case 'insertDataPenduduk':
    include "views/kelola-data/penduduk/insertPenduduk.php";
    break;

  case 'detailPenduduk':
    include "views/kelola-data/penduduk/showPenduduk.php";
    break;

  case 'editPenduduk':
    include "views/kelola-data/penduduk/updatePenduduk.php";
    break;

  case 'insertDataKK':
    include "views/kelola-data/kartu-keluarga/insertKartuKeluarga.php";
    break;

  case 'detailKK':
    include "views/kelola-data/kartu-keluarga/showKartuKeluarga.php";
    break;

  case 'editKK':
    include "views/kelola-data/kartu-keluarga/updateKartuKeluarga.php";
    break;

  case 'mutasiPenduduk':
    include "views/kelola-data/penduduk/mutasiPenduduk.php";
    break;
  
  default:
    include "views/dashboard/index.php";
    break;
}