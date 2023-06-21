<body>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>/assets/assets_shop/images/002.png');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Barang <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Pilih Barang</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section bg-light">
        <div class="container">
            <?php echo $this->session->flashdata('pesan') ?>
            <div class="row">

                <?php foreach ($kamera as $km) : ?>

                    <div class="col-md-4">
                        <div class="car-wrap rounded ftco-animate">

                            <a href=""><img src="<?php echo base_url('assets/upload/' . $km->gambar) ?>" class="img rounded d-flex align-items-end"></a>
                            <div class="text">
                                <h2 class="mb-0"><a href="car-single.html"><?php echo $km->merk ?></a></h2>


                                <div class="d-flex mb-3">
                                    <span class="cat"><?php echo $km->kode_type ?></span>
                                    <p class="price ml-auto">Rp.<?php echo number_format($km->harga, 0, ',', '.')  ?> <span>/hari</span></p>
                                </div>


                                <?php
                                if ($km->status == "1") {
                                    echo anchor('customer/rental/tambah_rental/' . $km->id_kamera, '<p class="d-flex mb-0 d-block"><button class="btn btn-primary py-2 ml-4">Sewa</button>');
                                } else {
                                    echo "<p class='d-flex mb-0 d-block'><button class='btn btn-danger py-2 mr-1 disable'>Telah disewa</button>";
                                }
                                ?>
                                <a href="<?php echo base_url('customer/data_kamera/detail_kamera/') . $km->id_kamera ?>" class="btn btn-secondary py-2 ml-1">Details</a></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
    </section>