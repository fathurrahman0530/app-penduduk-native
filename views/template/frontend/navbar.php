<header>
    <nav class="navbar navbar-expand-lg navigation" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h3>Keluarahan PAI</h3>
            </a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icofont-navigation-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarmain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="landing.php">Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="landing.php?lp=artikel">Artikel</a></li>
                    <!--                    <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>-->
                    <!---->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Data Keluarahan <i class="icofont-thin-down"></i></a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown02">
                            <li><a class="dropdown-item" href="landing.php?lp=wilayah-administratif">Data Wilayah Administratif</a></li>
                            <li><a class="dropdown-item" href="landing.php?lp=pendidikan">Data Pendidikan Dalam KK</a></li>
                            <li><a class="dropdown-item" href="landing.php?lp=pekerjaan">Data Pekerjaan</a></li>
                            <li><a class="dropdown-item" href="landing.php?lp=jenis-kelamin">Data Jenis Kelamin</a></li>
                        </ul>
                    </li>
                    <!---->
                    <!--                    <li class="nav-item dropdown">-->
                    <!--                        <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>-->
                    <!--                        <ul class="dropdown-menu" aria-labelledby="dropdown03">-->
                    <!--                            <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>-->
                    <!--                            <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>-->
                    <!--                            <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <!---->
                    <!--                    <li class="nav-item dropdown">-->
                    <!--                        <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>-->
                    <!--                        <ul class="dropdown-menu" aria-labelledby="dropdown05">-->
                    <!--                            <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>-->
                    <!---->
                    <!--                            <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>-->
                    <!--                        </ul>-->
                    <!--                    </li>-->
                    <li class="nav-item"><?= $dashboard; ?></li>
                </ul>
            </div>
        </div>
    </nav>
</header>