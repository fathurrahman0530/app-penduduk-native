<?php 
  session_start();

  include "config/db.php";    

  if (!isset($_SESSION['login'])) {
    
    header("location: index.php");
    exit;

  }

  include "views/template/header.php";
  include "views/template/sidebar.php";
?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3><?php include "app/controller/Titles.php"; ?></h3>
            </div>
<?php
  include "app/controller/Contents.php";
  include "views/template/footer.php";
?>
            </div>
        </div>
<?php 

  include "views/template/javascript.php";

?>