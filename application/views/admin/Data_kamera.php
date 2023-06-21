<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Barang</h1>
        </div>

        <a href="<?php echo base_url('admin/data_kamera/tambah_kamera') ?>" class="btn btn-primary mb-3">Tambah Data</a>
        <?php echo $this->session->flashdata('pesan') ?>
        <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Type</th>
                    <th>Merk</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kamera as $mb) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td>
                            <img width="60px" src="<?php echo base_url() . 'assets/upload/' . $mb->gambar ?>">
                        </td>
                        <td><?php echo $mb->kode_type ?></td>
                        <td><?php echo $mb->merk ?></td>
                        <td><?php
                            if ($mb->status == "0") {
                                echo "<span class= 'badge badge-danger'> Tidak Tersedia
                        </span>";
                            } else {
                                echo "<span class= 'badge badge-primary'>  Tersedia
                        </span>";
                            }
                            ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/data_kamera/detail_kamera/') . $mb->id_kamera ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                            <a href="<?php echo base_url('admin/data_kamera/delete_kamera/') . $mb->id_kamera ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                            <a href="<?php echo base_url('admin/data_kamera/update_kamera/') . $mb->id_kamera ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</div>