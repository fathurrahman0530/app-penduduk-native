<?php 

  $query      = "SELECT * FROM warga WHERE status_warga = 'Mutasi'";

  $queryData  = mysqli_query($conn, $query);

  $showData   =  array();

  while ($result = mysqli_fetch_assoc($queryData)) {
    $showData[] = $result;
  }