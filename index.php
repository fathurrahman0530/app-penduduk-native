<?php

    if (!isset($_SESSION['login'])){

        header('location: landing.php');
        exit();

    } else {

        header('location: media.php?page=dashboard');
        exit();

    }

?>