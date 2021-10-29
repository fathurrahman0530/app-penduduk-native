<?php 

session_start();

include "../../config/db.php";

$nomorKK            = $_POST['nomorKK'];
$idKpKeluarga       = $_POST['nikKepalaKeluarga'];
$alamatKK           = $_POST['alamatKK'];
$dkKeluarga         = $_POST['dkKartuKeluarga'];
$kecamatanKeluarga  = $_POST['kecamatanKK'];
$kkKeluarga         = htmlspecialchars($_POST['ktKartuKeluarga']);
$provinsiKeluarga   = htmlspecialchars($_POST['provinsiKartuKeluarga']);
$negaraKeluarga     = htmlspecialchars($_POST['negaraKartuKeluarga']);
$rtKeluarga         = htmlspecialchars($_POST['rtKartuKeluarga']);
$rwKeluarga         = htmlspecialchars($_POST['rwKartuKeluarga']);
$kpKeluarga         = htmlspecialchars($_POST['kpKartuKeluarga']);

if (isset($_POST['saveDataKK'])) {
  
  $check              = "SELECT * FROM kartu_keluarga WHERE nomor_keluarga = '$nomorKK'";
  $queryCheck         = mysqli_query($conn, $check);

  if (mysqli_num_rows($queryCheck) > 0) {

    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Nomor Kartu Keluarga Sudah Terdaftar');
        window.location.href = '../../media.php?pages=insertDataKK';
      </script>
    ";

  } else {
    
    $query            = "INSERT INTO kartu_keluarga VALUES (NULL, '$nomorKK', '$idKpKeluarga', '$alamatKK', '$dkKeluarga', '$kecamatanKeluarga', '$kkKeluarga', '$provinsiKeluarga', '$negaraKeluarga', '$rtKeluarga', '$rwKeluarga', '$kpKeluarga')";
    $queryData        = mysqli_query($conn, $query);

    if ($queryData == true) {
      echo "
        <script LANGUAGE = 'JavaScript'>
          window.alert('Data Sukses Ditambahkan');
          window.location.href = '../../media.php?pages=kdDataKK';
        </script>
      ";
    } else {
      echo mysqli_error($conn);
      var_dump($queryData);
      // mysqli_error()
    }

  }

}

if (isset($_POST['updateDataKK'])) {
  
  $updateData   = "UPDATE kartu_keluarga SET
  id_kepala_keluarga      = '$idKpKeluarga',
  alamat_keluarga         = '$alamatKK',
  desa_kelurahan_keluarga = '$dkKeluarga',
  kecamatan_keluarga      = '$kecamatanKeluarga',
  kabupaten_kota_keluarga = '$kkKeluarga',
  provinsi_keluarga       = '$provinsiKeluarga',
  negara_keluarga         = '$negaraKeluarga',
  rt_keluarga             = '$rtKeluarga',
  rw_keluarga             = '$rwKeluarga',
  kode_pos_keluarga       = '$kpKeluarga'
  WHERE nomor_keluarga    = '$nomorKK'
  ";
  $queryUpdate  = mysqli_query($conn, $updateData);

  if ($queryUpdate == true) {
    
    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Data Sukses Terupdate');
        window.location.href = '../../media.php?pages=kdDataKK';
      </script>
    ";

  } else {
    
    echo mysqli_error($conn);

  }

}

if (isset($_GET['delete'])) {
  
  $idKK         = $_GET['delete'];

  $deleteData   = "DELETE FROM kartu_keluarga WHERE nomor_keluarga = '$idKK'";
  $queryDelete  = mysqli_query($conn, $deleteData);

  if ($queryDelete == true) {
    
    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Data Berhasil Dihapus');
        window.location.href = '../../media.php?pages=dkDataKK';
      </script>
    ";

  } else {
    
    echo mysqli_error($conn);

  }

}