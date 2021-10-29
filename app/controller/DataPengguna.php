<?php 

  session_start();

  include "../../config/db.php";

  // var_dump($_POST);

  if (!isset($_GET['deletePengguna'])) {
    $namaUser       = $_POST['nameUser'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];
    $keterangan     = $_POST['keterangan'];
    $statusUser     = $_POST['statusUser'];
    $dkUser         = $_POST['desaKelurahan'];
    $kecamatanUser  = $_POST['kecamatan'];
    $ktUser         = $_POST['kabupatenKota'];
    $provinsiUser   = $_POST['provinsi'];
    $negaraUser     = $_POST['negara'];
    $rtUser         = $_POST['rtUser'];
    $rwUser         = $_POST['rwUser'];
    $hasPWD         = password_hash($password, PASSWORD_DEFAULT);
  }

  if (isset($_POST['savePengguna'])) {
    
    $check      = "SELECT * FROM user WHERE username_user = '$username'";
    $queryCheck = mysqli_query($conn, $check);

    if (mysqli_num_rows($queryCheck) > 0) {
      
      echo "
        <script LANGUAGE = 'JavaScript'>
          window.alert('Username yang anda masukkan telah terdaftar');
          window.location.href = '../../media.php?pages=insertPengguna';
        </script>
      ";

    } else {
      
      $queryData  = "INSERT INTO user VALUES (
        NULL,
        '$namaUser',
        '$username',
        '$hasPWD',
        '$keterangan',
        '$statusUser',
        '$dkUser',
        '$kecamatanUser',
        '$ktUser',
        '$provinsiUser',
        '$negaraUser',
        '$rtUser',
        '$rwUser'
      )";
      $query      = mysqli_query($conn, $queryData);

      if ($query == true) {
        
        echo "
          <script LANGUAGE = 'JavaScript'>
            window.alert('Data berhasil ditambahkan');
            window.location.href = '../../media.php?pages=pengguna-sistem';
          </script>
        ";

      } else {
        
        echo mysqli_error($conn);

      }

    }

  }

  if (isset($_POST['updatePengguna'])) {

    $idUser         = $_POST['idUser'];
    
    $updatePengguna       = "UPDATE user SET
      nama_user           = '$namaUser',
      username_user       = '$username',
      password_user       = '$hasPWD',
      keterangan_user     = '$keterangan',
      status_user         = '$statusUser',
      desa_kelurahan_user = '$dkUser',
      kecamatan_user      = '$kecamatanUser',
      kabupaten_kota_user = '$ktUser',
      provinsi_user       = '$provinsiUser',
      negara_user         = '$negaraUser',
      rt_user             = '$rtUser',
      rw_user             = '$rwUser'
      WHERE id_user       = '$idUser'
    ";

    $queryUpdate          = mysqli_query($conn, $updatePengguna);

    if ($queryUpdate == true) {
      
      echo "
        <script LANGUAGE = 'JavaScript'>
          window.alert('Data user berhasil diupdate');
          window.location.href = '../../media.php?pages=pengguna-sistem';
        </script>
      ";

    } else {
      
      echo mysqli_error($conn);

    }

  }

  if (isset($_GET['deletePengguna'])) {

    $id   = $_GET['deletePengguna'];
    
    $deletePengguna = "DELETE FROM user WHERE id_user = '$id'";
    $queryDelete    = mysqli_query($conn, $deletePengguna);

    if ($queryDelete == true) {
      
      echo "
        <script LANGUAGE = 'JavaScript'>
          window.alert('Data user berhasil dihapus');
          window.location.href = '../../media.php?pages=pengguna-sistem';
        </script>
      ";

    } else {
      
      echo mysqli_error($conn);

    }

  }