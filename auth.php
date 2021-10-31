<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mazer Admin Dashboard</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/backend/assets/css/bootstrap.css">
    <link rel="stylesheet" href="public/backend/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="public/backend/assets/css/app.css">
    <link rel="stylesheet" href="public/backend/assets/css/pages/auth.css">
    <link rel="stylesheet" href="public/backend/assets/css/style.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="#"><h2>Nama Desa</h2></a>
                    </div>
                    <h1 class="auth-title">Log in.</h1>

                    <form action="verify.php" method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" class="form-control form-control-xl" placeholder="Username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button name="login" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                        <a href="landing.php" class="btn btn-default btn-block btn-lg shadow-lg mt-2">Close</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">
                  <img src="public/backend/images/Logo-STMIK.png" alt="Logo Desa" id="content-login">
                </div>
            </div>
        </div>

    </div>
</body>

</html>