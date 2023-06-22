<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="card" style="margin-top: 150px;">
                <div class="card-header alert alert-success">
                    Data Pembayaran Anda
                </div>
                <div class="card-body">
                    <table>
                        <?php foreach ($transaksi as $tr) : ?>
                            <tr>
                                <th class="text-dark">Merk Barang</th>
                                <td>:</td>

                                <td class="text-dark"><?php echo $tr->merk ?></td>
                            </tr>
                            <tr>
                                <th class="text-dark">Tanggal Sewa</th>
                                <td>:</td>

                                <td class="text-dark"><?php echo $tr->tanggal_rental ?></td>
                            </tr>
                            <tr>
                                <th class="text-dark">Tanggal Kembali</th>
                                <td>:</td>

                                <td class="text-dark"><?php echo $tr->tanggal_kembali ?></td>
                            </tr>
                            <tr>
                                <th class="text-dark">Harga Sewa/Hari</th>
                                <td>:</td>

                                <td class="text-dark">Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                            </tr>
                            <tr class="text-dark">
                                <?php
                                $hem = strtotime($tr->tanggal_kembali);
                                $ber = strtotime($tr->tanggal_rental);
                                $jmlhari = abs(($hem - $ber) / (60 * 60 * 24));
                                ?>
                                <th>Jumlah Hari Sewa</th>
                                <td>:</td>

                                <td><?php echo $jmlhari ?> Hari</td>
                            </tr>

                            <tr class="text-success">
                                <th>Jumlah Pembayaran</th>
                                <td>:</td>

                                <td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga * $jmlhari, 0, ',', '.')  ?></button></td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td><a href="<?php echo base_url('customer/transaksi/cetak_data/' . $tr->id_rental) ?>" class="btn btn-sm btn-info">Print Data</a></td>

                            </tr>

                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="margin-top: 150px;">
                <div class="card-header alert alert-primary">
                    Informasi Pembayaran
                </div>
                <div class="card-body">
                    <p class="text-success mb-3">Silahkan Melakukan Pembayaran Melalui Nomor Rekening Dibawah Ini</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-dark">Bank Mandiri 12312312312312</li>
                        <li class="list-group-item text-dark">Bank BCA 45432421342112</li>
                        <li class="list-group-item text-dark">Bank BNI 123123123</li>
                    </ul>

                    <?php

                    if (empty($tr->bukti_pembayaran)) { ?>
                        <button style="width: 100%" type="button" class="btn btn-sm btn-danger mt-3" data-toggle="modal" data-target="#exampleModal">
                            Upload Bukti Pembayaran
                        </button>
                    <?php } elseif ($tr->status_pembayaran == '0') { ?>
                        <button style="width: 100%" class="btn btn-sm btn-warning">Menunggu Konfirmasi</button>
                    <?php } elseif ($tr->status_pembayaran == '1') { ?>
                        <button style="width: 100%" class="btn btn-sm btn-success"> Pembayaran Selesai</button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL UPLOAD BUKTI PEMBAYARAN -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Bukti Pembayaran Anda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-gruop">
                        <label>Upload Bukti Pembayaran</label>
                        <input type="hidden" name="id_rental" class="form-control" value="<?php echo $tr->id_rental ?>">
                        <input type="file" name="bukti_pembayaran" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-sm btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>