<div class="container">
    <div class="card mx-auto" style="margin-top: 200px; margin-bottom: 20px; width:auto">
        <div class="card-header">

            Data Transaksi Anda
        </div>
        <span class="mt-2 p-2"><?php echo $this->session->flashdata('pesan') ?></span>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Merk Barang</th>
                    <th>Harga Sewa</th>
                    <th>Tanggal Sewa</th>
                    <th>Tanggal Kembali</th>
                    <th>Denda/Hari</th>
                    <th>Action</th>
                    <th>Batal</th>
                </tr>

                <?php $no = 1;
                foreach ($transaksi as $tr) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $tr->nama ?></td>
                        <td><?php echo $tr->merk ?></td>
                        <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_rental)) ?></td>
                        <td><?php echo date('d/m/Y', strtotime($tr->tanggal_kembali)) ?></td>
                        <td>Rp. <?php echo number_format($tr->denda, 0, ',', '.') ?></td>
                        <td>

                            <?php if ($tr->status_rental == "Selesai") { ?>
                                <button class="btn btn-sm btn-danger">Sewa Selesai</button>
                            <?php } else { ?>
                                <a href="<?php echo base_url('customer/transaksi/pembayaran/' . $tr->id_rental) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
                            <?php } ?>
                        </td>
                        <td>

                            <?php
                            if ($tr->status_rental == 'Belum Selesai') { ?>
                                <a onclick="return confirm('Yakin Ingin Membatalkan Transaksi?')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/' . $tr->id_rental) ?>">Batal</a>
                            <?php } else { ?>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                    Batal
                                </button>
                            <?php } ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Informasi Batal Transaksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Maaf Transaksi Tidak Bisa Dibatalkan Karena Transaksi Sudah Selesai!
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-success" data-dismiss="modal">Oke</button>

            </div>
        </div>
    </div>
</div>