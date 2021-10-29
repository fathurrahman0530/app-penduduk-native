<?php 

$page = (isset($_GET['pages'])) ? $_GET['pages'] : '';

switch ($page) {
  case 'dashboard':
    echo "Dashboard";
    break;

  case 'kdDataPenduduk':
    echo "Data Penduduk";
    break;

  case 'kdDataKK':
    echo "Data Kartu Keluarga";
    break;

  case 'galeri':
    echo "Gallery";
    break;

  case 'insertGallery':
    echo "Insert Gallery";
    break;

  case 'showGallery':
    echo "Show Gallery";
    break;

  case 'mutasi':
    echo "Data Mutasi";
    break;

  case 'pengguna-sistem':
    echo "Pengguna Sistem";
    break;

  case 'detailPengguna':
    echo "Detail Pengguna";
    break;

  case 'insertPengguna':
    echo "Insert Pengguna";
    break;

  case 'editPengguna':
    echo "Edit Pengguna";
    break;

  case 'insertDataPenduduk':
    echo "Tambah Data Penduduk";
    break;

  case 'detailPenduduk':
    echo "Identitas Penduduk";
    break;

  case 'editPenduduk':
    echo "Edit Data Penduduk";
    break;

  case 'mutasiPenduduk':
    echo "Mutasi Penduduk";
    break;

  case 'insertDataKK':
    echo "Tambah Data Kartu Keluarga";
    break;

  case 'detailKK':
    echo "Tampilan Kartu Keluarga";
    break;

  case 'editKK':
    echo "Edit Data Kartu Keluarga";
    break;
  
  default:
    echo "Dashboard";
    break;
}