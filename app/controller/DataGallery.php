<?php 

  session_start();

  include "../../config/db.php";

  if (isset($_POST['saveGallery'])) {
    
    $judul        = mysqli_real_escape_string($conn, $_POST['judul']);
    $keterangan   = mysqli_real_escape_string($conn, $_POST['keterangan']);

    $nameFile     = $_FILES['image']['name'];
    $fileTemp     = $_FILES['image']['tmp_name'];
    $sizeFile     = $_FILES['image']['size'];
    $ekstenAllow  = ['jpg', 'png'];
    $exploFile    = explode('.', $nameFile);
    $ekstensi     = strtolower(end($exploFile));

    $extFile      = substr($nameFile, strripos($nameFile, '.'));

    $newName      = date("Ymdhis") . $extFile;

    $path         = "../../public/images/upload/" . $newName;

    if (in_array($ekstensi, $ekstenAllow) === true) {
      
      // $test = move_uploaded_file($fileTemp, $path);
      if ($sizeFile <= 5000000) {
        
        move_uploaded_file($fileTemp, $path);

        $insertGallery = "INSERT INTO galeri VALUES (
          NULL,
          '$judul',
          '$newName',
          '$keterangan'
        )";
        $queryGallery = mysqli_query($conn, $insertGallery);

        if ($queryGallery == true) {
          
          echo "
            <script LANGUAGE = 'JavaScript'>
              window.alert('Data Berhasil Diupload');
              window.location.href = '../../media.php?pages=galeri';
            </script>
          ";

        } else {

          $error  = mysqli_error($conn);
          
          echo "
            <script LANGUAGE = 'JavaScript'>
              window.alert('Data Gagal Diupload...!! $error ');
              window.locatio.href = '../../media.php?pages=insertGallery';
            </script>
          ";

        }

      } else {
        
        echo "
          <script LANGUAGE = 'JavaScript'>
            window.alert('Gambar Yang Anda Upload Lebih Besar Dari 5MB');
            window.location.href = '../../media.php?pages=insertGallery';
          </script>
        ";

      }

    } else {
      
      echo "
        <script LANGUAGE = 'JavaScript'>
          window.alert('Extensi Gambar Tidak Diperbolehkan');
          window.location.href = '../../media.php?pages=insertGallery';
        </script>
      ";

    }

    // var_dump($_FILES);

  }

  if (isset($_GET['delete'])) {
    
    $id       = $_GET['delete'];
    $delete   = "DELETE FROM galery WHERE id_galeri = '$id'";
    $query    = mysqli_query($conn, $delete);

    if ($query == true) {
      
      echo "
        <sctipt LANGUAGE = 'JavaScript'>
          window.alert('Data Berhasil Dihapus');
          window.location.href = '../../media.php?pages=galeri';
        </script>
      ";

    } else {
      
      mysqli_error($conn);

    }

  }