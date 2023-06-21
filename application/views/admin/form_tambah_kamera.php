<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Form Input Data Barang</h1>
        </div>

        <div class="card">
            <div class="card-body">

                <form method="POST" action="<?php echo base_url('admin/data_kamera/tambah_kamera_aksi') ?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type Barang</label>
                                <select name="kode_type" class="form-control">
                                    <option value="">--Pilih Type Barang--</option>
                                    <?php foreach ($type as $tp) : ?>
                                        <option value="<?php echo $tp->kode_type ?>">
                                            <?php echo $tp->nama_type ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kode_type', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Warna</label>
                                <input type="text" name="warna" class="form-control">
                                <?php echo form_error('warna', '<div class="text-small text-danger">', '</div>') ?>
                            <!-- </div>
                            <div class="form-group">
                                <label>Resolusi</label>
                                <input type="text" name="resolusi" class="form-control">
                                <?php echo form_error('resolusi', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Fitur</label>
                                <input type="text" name="fitur" class="form-control">
                                <?php echo form_error('fitur', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Range Aperture</label>
                                <input type="text" name="range_aperture" class="form-control">
                                <?php echo form_error('range_aperture', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Iso</label>
                                <input type="text" name="iso" class="form-control">
                                <?php echo form_error('iso', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Tipe Memo</label>
                                <input type="text" name="tipe_memo" class="form-control">
                                <?php echo form_error('tipe_memo', '<div class="text-small text-danger">', '</div>') ?>
                            </div> -->
                            <div class="form-group">
                                <label>Input</label>
                                <input type="text" name="input" class="form-control">
                                <?php echo form_error('input', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Output</label>
                                <input type="text" name="output" class="form-control">
                                <?php echo form_error('output', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Harga Sewa/Hari</label>
                                <input type="number" name="harga" class="form-control">
                                <?php echo form_error('harga', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Denda</label>
                                <input type="text" name="denda" class="form-control">
                                <?php echo form_error('denda', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Merk</label>
                                <input type="text" name="merk" class="form-control">
                                <?php echo form_error('merk', '<div class="text-small text-danger">', '</div>') ?>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="">--Pilih Status--</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                                <?php echo form_error('status', '<div class="text-small text-danger">', '</div>') ?>
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
    </section>
</div>