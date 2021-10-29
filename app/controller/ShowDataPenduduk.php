<?php 

if (!isset($_GET['id'])) {
  
  $query      = "SELECT * FROM warga";

  $queryData  = mysqli_query($conn, $query);

  $showData   =  array();

  while ($result = mysqli_fetch_assoc($queryData)) {
    $showData[] = $result;
  }

} else {
  
  $nik        = $_GET['id'];

  $query      = "SELECT * FROM warga WHERE nik_warga = '$nik'";

  $queryData  = mysqli_query($conn, $query);

  $result     = mysqli_fetch_assoc($queryData);

}

