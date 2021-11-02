<?php

    $landing = isset($_GET['lp']) ? $_GET['lp'] : '';

    switch ($landing)
    {

        case 'home' :
            include "views/landing-page/home.php";
            break;

        case 'artikel' :
            include "views/landing-page/artikel.php";
            break;

        case 'wilayah-administratif' :
            include "views/landing-page/wilayah-administratif.php";
            break;

        case 'pendidikan' :
            include "views/landing-page/pendidikan.php";
            break;

        case 'pekerjaan' :
            include "views/landing-page/pekerjaan.php";
            break;

        case 'jenis-kelamin' :
            include "views/landing-page/jenis-kelamin.php";
            break;

        default :
            include "views/landing-page/home.php";
            break;

    }