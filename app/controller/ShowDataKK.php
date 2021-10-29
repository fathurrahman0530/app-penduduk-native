<?php 

if (!isset($_GET['id'])) {
  
  $query      = "SELECT * FROM kartu_keluarga";

  $queryData  = mysqli_query($conn, $query);

  $showData   =  array();

  while ($result = mysqli_fetch_assoc($queryData)) {
    $showData[] = $result;
  }

} else {
  
  $nomorKK          = $_GET['id'];

  $query            = "SELECT * FROM kartu_keluarga WHERE nomor_keluarga = '$nomorKK'";

  $queryAnggota     = "SELECT * FROM warga WHERE nomor_kk = '$nomorKK'";

  $dataAnggota      = mysqli_query($conn, $queryAnggota);

  $queryData        = mysqli_query($conn, $query);

  $result           = mysqli_fetch_assoc($queryData);

}