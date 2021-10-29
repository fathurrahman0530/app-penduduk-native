<?php 

if (!isset($_GET['id'])) {
  
  $queryPengguna  = "SELECT * FROM user";
  $query          = mysqli_query($conn, $queryPengguna);

  $showPengguna   = array();

  while ($result = mysqli_fetch_assoc($query)) {
    
    $showPengguna[] = $result;

  }

} else {
  
  $idPengguna   = $_GET['id'];

  $takeData     = "SELECT * FROM user WHERE id_user = '$idPengguna'";
  $queryData    = mysqli_query($conn, $takeData);
  $result       = mysqli_fetch_assoc($queryData);

}