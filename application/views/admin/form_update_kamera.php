<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Update Data Kamera</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <?php foreach ($kamera as $mb) : ?>


                    <form method="POST" action="<?php echo base_url('admin/data_kamera/update_kamera_aksi') ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Type Kamera</label>
                                    <input type="hidden" name="id_kamera" value="<?php echo $mb->id_kamera ?>">
                                    <select name="kode_type" class="form-control">
                                        <option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
                                        <?php foreach ($type as $tp) : ?>
                                            <option value="<?php echo $tp->kode_type ?>">
                                                <?php echo $tp->nama_type ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Warna</label>
                                    <input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
                                    <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Input</label>
                                    <input type="text" name="input" class="form-control" value="<?php echo $mb->input ?>">
                                    <?php echo form_error('input', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Output</label>
                                    <input type="text" name="output" class="form-control" value="<?php echo $mb->output ?>">
                                    <?php echo form_error('output', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <input type="file" name="gambar" class="form-control">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Harga</label>
                                    <input type="text" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                                    <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Denda</label>
                                    <input type="text" name="denda" class="form-control" value="<?php echo $mb->denda ?>">
                                    <?php echo form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                                </div>
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">
                                    <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                        <option <?php if ($mb->status == "1") {
                                                    echo "selected='selected'";
                                                }
                                                echo $mb->status; ?> value="1">Tersedia</option>
                                        <option <?php if ($mb->status == "0") {
                                                    echo "selected='selected'";
                                                }
                                                echo $mb->status; ?> value="0">Tidak Tersedia</option>
                                    </select>
                                    <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                                </div>

                                <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                                <button type="reset" class="btn btn-danger mt-4">Reset</button>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
    </section>
</div>