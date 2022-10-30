<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE 3 | Starter</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700
    &display=fallback">
    <!-- Font Awesome Icons -->

    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome-
    free/css/all.min.css') ?>" />

    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('dist/css/adminlte.min.css') ?>" />
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <?= $this->include('layout/nav_bar') ?>
    <?= $this->include('layout/header') ?>
    <?= $this->include('layout/content') ?>
    <?= $this->include('layout/footer') ?>
    <!-- ./wrapper -->
    </div>
    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="<?= base_url('plugins/jquery/jquery.min.js') ?> "></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')
    ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('dist/js/adminlte.min.js') ?>"></script>
</body>
</html>