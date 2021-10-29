<?php 
session_start();

include "config/db.php";

// proses login
if (isset($_POST['login'])) {
  $username   = $_POST['username'];
  $password   = $_POST['password'];

  $query      = "SELECT * FROM user WHERE username_user = '$username'";
  $checkData  = mysqli_query($conn, $query);

  if (mysqli_num_rows($checkData) > 0) {
    $result   = mysqli_fetch_assoc($checkData);

    if (password_verify($password, $result['password_user'])) {
      
      $_SESSION['login']          = true;
      $_SESSION['id_pengguna']    = $result['id_user'];
      $_SESSION['nama_pengguna']  = $result['nama_user'];
      $_SESSION['username']       = $result['username_user'];
      $_SESSION['level']          = $result['status_user'];

      header("location: media.php?pages=dashboard");
      exit;

    }

    echo "
      <script LANGUAGE='JavaScript'>
        window.alert('Password yang anda masukkan tidak sesuai..!');
        window.location.href='index.php';
      </script>
    ";

  }


}

// proses register
if (isset($_POST['register'])) {

  // echo "
  //   <script LANGUAGE = 'JavaScript'>
  //     window.alert('Maaf halaman tidak ditemukan');
  //     window.location.href='index.php';
  //   </script>
  // ";

  // $fullname     = $_POST['fullname'];
  // $username     = $_POST['username'];
  // $password     = $_POST['password'];
  // $confpassword = $_POST['confPassword'];
  // $level        = 'Administrator';

  // $query        = "SELECT * FROM user WHERE username_user = '$username'";
  // $checkData    = mysqli_query($conn, $query);

  // if (mysqli_fetch_assoc($checkData)) {
    
  //   echo "
  //     <script LANGUAGE = 'JavaScript'>
  //       window.alert('Username yang anda masukkan telah terdaftar');
  //       window.location.href = 'register.php';
  //     </script>
  //   ";

  // }

  // if ($password !== $confpassword) {
    
  //   echo "
  //     <script LANGUAGE = 'JavaScript'>
  //       window.alert('Password dan Confirm Password tidak sesuai');
  //       window.location.href = 'register.php';
  //     </script>
  //   ";

  // }

  // $hashpassword = password_hash($password, PASSWORD_DEFAULT);

  // $queryregister= "INSERT INTO user VALUES (NULL, '$fullname', '$username', '$hashpassword', '$level')";

  // mysqli_query($conn, $queryregister);

  // header("location : index.php");
  // exit;
  
}

// proses tambah pengguna
if (isset($_POST['tmb_pengguna'])) {
  
}

// proses change password
if (isset($_POST['chg_password'])) {
  
}

// proses delete user
if (isset($_GET['delete'])) {
  
}

// proses logout
if (isset($_GET['logout'])) {
  
  session_start();
  $_SESSION = [];
  session_unset();
  session_destroy();

  header("location: index.php");
  exit;

}