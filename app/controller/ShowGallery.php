<?php 

  if (!isset($_GET['id'])) {
    
    $queryGallery = "SELECT * FROM galeri";
    $query        = mysqli_query($conn, $queryGallery);

    $showData     = array();

    while ($result = mysqli_fetch_assoc($query)) {
      
      $showData[] = $result;

    }

  } else {
    
    $idGallery    = $_GET['id'];
    
    $queryData    = "SELECT * FROM galeri WHERE id_galeri = '$idGallery'";
    $query        = mysqli_query($conn, $queryData);
    $result       = mysqli_fetch_assoc($query);

  }