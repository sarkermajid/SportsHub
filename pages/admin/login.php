<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body style="background-color: #0a3d62 ">
<h1 class="display-4 fw-bold text-center py-3 bg-dark text-info shadow-lg mb-5" style="font-family: cursive">Admin Panel</h1>

<section>
        <div class="container">
            <div class="row">
                <div class="col-md-9 mx-auto pt-5">
                    <div class="card bg-dark fw-semibold text-white shadow-lg">
                        <div class="card-header fw-bold h2 text-center border-info">Login</div>
                        <div class="card-body">
                            <h4 class="text-danger text-center"><?php echo $message; ?></h4>
                            <form action="action.php" method="post">
                                <div class="row mb-3">
                                    <div class="col-md-3">E-mail</div>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3">Password</div>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-info fw-semibold" name="login-btn" value="Login">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/jquery-3.6.1.min.js"></script>
</body>
</html>

<?php include "footer.php"; ?>