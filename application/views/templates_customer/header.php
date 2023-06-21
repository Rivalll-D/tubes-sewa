<!DOCTYPE html>
<html lang="en">

<head>
    <title>ABE-Adventure</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/assets_shop/images/logo-01.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/animate.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_shop/') ?>css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('customer/dashboard/index') ?>">
                <img src="<?php echo base_url() ?>/assets/assets_shop/images/logo-01.png" width="120" height="120" alt="A3">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>


            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="<?php echo base_url('customer/dashboard/index') ?>" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('customer/dashboard/about') ?>" class="nav-link">Tentang</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('customer/data_kamera') ?>" class="nav-link">Barang</a></li>
                    <li class="nav-item"><a href="<?php echo base_url('customer/dashboard/kontak') ?>" class="nav-link">Kontak</a></li>
                    <li class="nav-item dropdown">
                        <?php if ($this->session->userdata('nama')) { ?>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $this->session->userdata('nama') ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="<?php echo base_url('auth/logout') ?>">Logout</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('auth/ganti_password') ?>">Ganti Password</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url('customer/transaksi') ?>">Chekout</a></li>
                                <li class="nav-item"><?php } else { ?>
                                    <a href="<?php echo base_url('auth/login') ?>" class="nav-link"><?php echo $this->session->userdata('nama') ?>Login</a>
                                <?php } ?>
                                </li>

                            </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- END nav -->