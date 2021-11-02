<?php
    session_start();

    include "config/db.php";

    if (@$_SESSION["login"] == true)
    {

        $dashboard = "<a class='nav-link text-primary' href='media.php?page=dashboard'>Dashboard</a>";

    } else {

        $dashboard = "<a class='nav-link text-primary' href='auth.php'>Log in</a>";

    }

    include "views/template/frontend/header.php";

?>

<body id="top">

<?php include "views/template/frontend/navbar.php"; ?>

<?php include "app/controller/contentLanding.php"; ?>

<!-- footer Start -->
<footer class="footer section gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mr-auto col-sm-6">
                <div class="widget mb-5 mb-lg-0">
                    <div class="logo mb-4">
                        <h3>Kelurahan PAI</h3>
                    </div>
                    <ul class="list-inline footer-socials mt-4">
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">

            </div>

            <div class="col-lg-2 col-md-6 col-sm-6">

            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="widget widget-contact mb-5 mb-lg-0">
                    <h4 class="text-capitalize mb-3">Get in Touch</h4>
                    <div class="divider mb-4"></div>

                    <div class="footer-contact-block mb-4">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-email mr-3"></i>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                        </div>
                    </div>

                    <div class="footer-contact-block">
                        <div class="icon d-flex align-items-center">
                            <i class="icofont-support mr-3"></i>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm py-4 mt-5">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="copyright">
                        &copy; Copyright <?= date('Y'); ?>
                    </div>
                </div>
                <div class="col-lg-6">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <a class="backtop js-scroll-trigger" href="#top">
                        <i class="icofont-long-arrow-up"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>



<!--
Essential Scripts
=====================================-->


<?php include "views/template/frontend/javascript.php"; ?>

</body>
</html>
