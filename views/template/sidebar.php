<div id="sidebar" class="active">
    <div class="sidebar-wrapper">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="media.php?pages=dashboard"><h4>Nama Kelurahan</h4></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">

                <li class="sidebar-item">
                    <a href="media.php?pages=dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-user-friends"></i>
                        <span>Kelola Data</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="media.php?pages=kdDataPenduduk">Data Penduduk</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="media.php?pages=kdDataKK">Data Kartu Keluarga</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="media.php?pages=mutasi">Mutasi</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item">
                    <a href="media.php?pages=galeri" class='sidebar-link'>
                        <i class="far fa-images"></i>
                        <span>Galeri</span>
                    </a>
                </li>
                <?php if ($_SESSION['level'] == 'Admin') : ?>
                <li class="sidebar-item">
                    <a href="media.php?pages=pengguna-sistem" class='sidebar-link'>
                        <i class="fa fa-users-cog"></i>
                        <span>Pengguna Sistem</span>
                    </a>
                </li>
                <?php endif; ?>

                <li class="sidebar-item">
                    <a href="verify.php?logout=true" class='sidebar-link'>
                        <i class="fa fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>