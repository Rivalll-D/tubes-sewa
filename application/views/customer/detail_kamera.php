    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url() ?>/assets/assets_shop/images/detail.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
                <div class="col-md-9 ftco-animate pb-5">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Car details <i class="ion-ios-arrow-forward"></i></span></p>
                    <h1 class="mb-3 bread">Detail Barang</h1>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section ftco-car-details">
        <div class="container">
            <div class="row justify-content-center">
                <?php foreach ($detail as $dt) : ?>
                    <div class="col-md-12">
                        <div class="car-details">
                            <img src="<?php echo base_url('assets/upload/' . $dt->gambar) ?>" class="img rounded">
                            <div class="text text-center">

                                <h2>Detail</h2>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <table class="table">
                                <tr>
                                    <th>Merk Barang</th>
                                    <td>:</td>
                                    <td><?php echo $dt->merk ?></td>
                                </tr>
                                <tr>
                                    <th>Warna Barang</th>
                                    <td>:</td>
                                    <td><?php echo $dt->warna ?></td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>:</td>
                                    <td>
                                        <?php
                                        if ($dt->status == '1') {
                                            echo "Tersedia";
                                        } else {
                                            echo "Tidak Tersedia";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <?php
                                        if ($dt->status == 0) {
                                            echo "<p class='d-flex mb-0 d-block'><button class='btn btn-danger py-2 mr-1 disable'>Telah disewa</button>";
                                        } else {
                                            echo anchor('customer/rental/tambah_rental/' . $dt->id_kamera, '<p class="d-flex mb-0 d-block"><button class="btn btn-primary py-2 ml-4">Sewa</button>');
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </section>