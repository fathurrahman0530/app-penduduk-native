<?php
session_start();

include "../../config/db.php";

if (isset($_POST['saveDataPenduduk'])) {
  $idUser             = $_SESSION['id_pengguna'];
  $nikPenduduk        = htmlentities(strip_tags($_POST['nikPenduduk']));
  $nomorKK            = htmlentities(strip_tags($_POST['nomorKK']));
  $namaPenduduk       = htmlentities(strip_tags($_POST['namaPenduduk']));
  $tempatLahir        = htmlentities(strip_tags($_POST['tempatLahir']));
  $tanggalLahir       = $_POST['tanggalLahir'];
  $jenisKelamin       = $_POST['jenisKelamin'];
  $alamatKTP          = htmlentities(strip_tags($_POST['alamatKTPPenduduk']));
  $alamatPenduduk     = htmlentities(strip_tags($_POST['alamatPenduduk']));
  $dkPenduduk         = htmlentities(strip_tags($_POST['dkPenduduk']));
  $kecamatanPenduduk  = htmlentities(strip_tags($_POST['kecamatanPenduduk']));
  $kabupatenPenduduk  = htmlentities(strip_tags($_POST['kabupatenPenduduk']));
  $provinsiPenduduk   = htmlentities(strip_tags($_POST['provinsiPenduduk']));
  $negaraPenduduk     = htmlentities(strip_tags($_POST['negaraPenduduk']));
  $rtPenduduk         = htmlentities(strip_tags($_POST['rtPenduduk']));
  $rwPenduduk         = htmlentities(strip_tags($_POST['rwPenduduk']));
  $agama              = $_POST['agama'];
  $pTerakhirPenduduk  = htmlentities(strip_tags($_POST['pTerakhirPenduduk']));
  $pekerjaanPenduduk  = htmlentities(strip_tags($_POST['pekerjaanPenduduk']));
  $sPerkawinanPenduduk= htmlentities(strip_tags($_POST['sPerkawinanPenduduk']));
  $statusPenduduk     = htmlentities(strip_tags($_POST['statusPenduduk']));

  $checkData          = "SELECT * FROM warga WHERE nik_warga = '$nikPenduduk'";

  $queryData          = mysqli_query($conn, $checkData);
  
  if (mysqli_num_rows($queryData) > 0) {
    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Maaf NIK yang anda masukkan telah terdaftar');
        window.location.href = 'media.php?pages=insertDataPenduduk';
      </script>
    ";
  }

  $insertData         = "INSERT INTO warga VALUES (NULL, '$nikPenduduk', '$nomorKK', '$namaPenduduk', '$tempatLahir', '$tanggalLahir', '$jenisKelamin', '$alamatKTP', '$alamatPenduduk', '$dkPenduduk', '$kecamatanPenduduk', '$kabupatenPenduduk', '$provinsiPenduduk', '$negaraPenduduk', '$rtPenduduk', '$rwPenduduk', '$agama', '$pTerakhirPenduduk', '$pekerjaanPenduduk', '$sPerkawinanPenduduk', '$statusPenduduk', '$idUser')";
  
  $query              = mysqli_query($conn, $insertData);

  if ($query == true) {
    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Data yang diinput telah sukses ditambahkan');
        window.location.href ='../../media.php?pages=kdDataPenduduk';
      </script>
    ";
  }

  // var_dump($insertData, "<br>", $query, "<br>", $queryData);
} 

if (isset($_POST['editDataPenduduk'])) {
  $idUser             = $_SESSION['id_pengguna'];
  $idWarga            = $_POST['idPenduduk'];
  $nikPenduduk        = htmlentities(strip_tags($_POST['nikPenduduk']));
  $nomorKK            = htmlentities(strip_tags($_POST['nomorKK']));
  $namaPenduduk       = htmlentities(strip_tags($_POST['namaPenduduk']));
  $tempatLahir        = htmlentities(strip_tags($_POST['tempatLahir']));
  $tanggalLahir       = $_POST['tanggalLahir'];
  $jenisKelamin       = $_POST['jenisKelamin'];
  $alamatKTP          = htmlentities(strip_tags($_POST['alamatKTPPenduduk']));
  $alamatPenduduk     = htmlentities(strip_tags($_POST['alamatPenduduk']));
  $dkPenduduk         = htmlentities(strip_tags($_POST['dkPenduduk']));
  $kecamatanPenduduk  = htmlentities(strip_tags($_POST['kecamatanPenduduk']));
  $kabupatenPenduduk  = htmlentities(strip_tags($_POST['kabupatenPenduduk']));
  $provinsiPenduduk   = htmlentities(strip_tags($_POST['provinsiPenduduk']));
  $negaraPenduduk     = htmlentities(strip_tags($_POST['negaraPenduduk']));
  $rtPenduduk         = htmlentities(strip_tags($_POST['rtPenduduk']));
  $rwPenduduk         = htmlentities(strip_tags($_POST['rwPenduduk']));
  $agama              = $_POST['agama'];
  $pTerakhirPenduduk  = htmlentities(strip_tags($_POST['pTerakhirPenduduk']));
  $pekerjaanPenduduk  = htmlentities(strip_tags($_POST['pekerjaanPenduduk']));
  $sPerkawinanPenduduk= htmlentities(strip_tags($_POST['sPerkawinanPenduduk']));
  $statusPenduduk     = htmlentities(strip_tags($_POST['statusPenduduk']));

  // $insertData         = "INSERT INTO warga VALUES (NULL, '$nikPenduduk', '$nomorKK', '$namaPenduduk', '$tempatLahir', '$tanggalLahir', '$jenisKelamin', '$alamatKTP', '$alamatPenduduk', '$dkPenduduk', '$kecamatanPenduduk', '$kabupatenPenduduk', '$provinsiPenduduk', '$negaraPenduduk', '$rtPenduduk', '$rwPenduduk', '$agama', '$pTerakhirPenduduk', '$pekerjaanPenduduk', '$sPerkawinanPenduduk', '$statusPenduduk', '$idUser')";
  $updateData         = "UPDATE warga SET 
    nik_warga = '$nikPenduduk', 
    nomor_kk = '$nomorKK', 
    nama_warga = '$namaPenduduk', 
    tempat_lahir_warga = '$tempatLahir', 
    tanggal_lahir_warga = '$tanggalLahir', 
    jenis_kelamin_warga = '$jenisKelamin', 
    alamat_ktp_warga = '$alamatKTP',
    alamat_warga = '$alamatPenduduk',
    desa_kelurahan_warga = '$dkPenduduk',
    kecamatan_warga = '$kecamatanPenduduk',
    kabupaten_kota_warga = '$kabupatenPenduduk',
    provinsi_warga = '$provinsiPenduduk',
    negara_warga = '$negaraPenduduk',
    rt_warga = '$rtPenduduk',
    rw_warga = '$rwPenduduk',
    agama_warga = '$agama',
    pendidikan_terakhir_warga = '$pTerakhirPenduduk',
    pekerjaan_warga = '$pekerjaanPenduduk',
    status_perkawinan_warga = '$sPerkawinanPenduduk',
    status_warga = '$statusPenduduk'
    WHERE id_warga = '$idWarga'
    ";
  
  $query              = mysqli_query($conn, $updateData);

  if ($query == true) {
    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Data telah sukses diupdate');
        window.location.href ='../../media.php?pages=kdDataPenduduk';
      </script>
    ";
  }

  // var_dump($insertData, "<br>", $query, "<br>", $queryData);
}

if (isset($_GET['mutasi'])) {
  
  $warga  = $_GET['id'];

  $updateDataMutasi = "UPDATE warga SET status_warga = 'Mutasi' WHERE nik_warga = '$warga'";

  $queryUMutasi     = mysqli_query($conn, $updateDataMutasi);

  if ($queryUMutasi == true) {
    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Data sukses dimutasi');
        window.location.href ='../../media.php?pages=kdDataPenduduk';
      </script>
    ";
  }

}

if (isset($_GET['deleteData'])) {
  
  $warga        = $_GET['id'];

  $deleteData   = "DELETE FROM warga WHERE nik_warga = '$warga'";

  $queryDelete  = mysqli_query($conn, $deleteData);

  if ($queryDelete == true) {
    echo "
      <script LANGUAGE = 'JavaScript'>
        window.alert('Data sukses dihapus');
        window.location.href ='../../media.php?pages=kdDataPenduduk';
      </script>
    ";
  }

}