<?php
include 'config.php'
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Tobaku | Login</title>
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="admin/css/animate.css" rel="stylesheet">
    <link href="admin/css/style.css" rel="stylesheet">
</head>

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>
                <h1 class="logo-name">QT</h1>
            </div>
            <h3>Selamat datang Admin+</h3>
            <p>Silahkan login dengan Username Password anda</p>
            <form class="m-t" role="form" action="action/login.php" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="">
                </div>
                <button type="submit" name="submit" class="btn btn-primary block full-width m-b">Login</button>
            </form>
            <p class="m-t"> <small>Quin Tobaku &copy; 2024</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="admin/js/jquery-3.1.1.min.js"></script>
    <script src="admin/js/popper.min.js"></script>
    <script src="admin/js/bootstrap.js"></script>
</body>

</html>