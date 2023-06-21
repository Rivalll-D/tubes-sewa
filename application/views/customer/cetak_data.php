<table style="width: 60%">
    <img src="<?php echo base_url() ?>/assets/assets_shop/images/logo.png" width="120" height="120" alt="A3">
    <h3>Data Pembayaran Anda</h3>
    <?php foreach ($transaksi as $tr) : ?>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $tr->nama ?></td>
        </tr>
        <tr>
            <td>Merk Kamera</td>
            <td>:</td>

            <td><?php echo $tr->merk ?></td>
        </tr>
        <tr>
            <td>Tanggal Sewa</td>
            <td>:</td>

            <td><?php echo $tr->tanggal_rental ?></td>
        </tr>
        <tr>
            <td>Tanggal Kembali</td>
            <td>:</td>

            <td><?php echo $tr->tanggal_kembali ?></td>
        </tr>
        <tr>
            <td>Harga Sewa/Hari</td>
            <td>:</td>

            <td>Rp. <?php echo number_format($tr->harga, 0, ',', '.') ?></td>
        </tr>
        <tr>
            <?php
            $hem = strtotime($tr->tanggal_kembali);
            $ber = strtotime($tr->tanggal_rental);
            $jmlhari = abs(($hem - $ber) / (60 * 60 * 24));
            ?>
            <td>Jumlah Hari Sewa</td>
            <td>:</td>

            <td><?php echo $jmlhari ?> Hari</td>
        </tr>

        <tr>
            <td>Status Pembayaran</td>
            <td>:</td>
            <td><?php if ($tr->status_pembayaran == '0') {
                    echo " Belum Lunas";
                } else {
                    echo "Lunas";
                } ?>
            </td>
        </tr>
        <tr style="font-weight: bold; color:black;">
            <td>JUMLAH PEMBAYARAN</td>
            <td>:</td>

            <td>Rp. <?php echo number_format($tr->harga * $jmlhari, 0, ',', '.')  ?></td>
        </tr>
        <tr>
            <td>Rekening Pembayaran</td>
            <td>:</td>
            <td>

                <li>Bank Mandiri 123123123</li>
                <li>Bank BCA 123123123</li>
                <li>Bank BNI 123123123</li>

            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script type="text/javascript">
    window.print();
</script>