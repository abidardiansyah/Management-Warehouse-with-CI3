<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="<?= base_url(); ?>gudang/tambah" type="button" class="btn btn-outline-success me-2">Tambah Barang</a>

        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6" style="float: none; margin: 0 auto;">
                <div class="card">
                    <div class="card-header">
                        Form Tambah Data Barang
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="form-group">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                                <small class="form-text text-danger"><?= form_error('nama') ?></small>
                            </div>
                            <div class="mb-3">
                                <label for="kode" class="form-label">kode</label>
                                <input type="text" class="form-control" id="kode" name=" kode">
                                <small class="form-text text-danger"><?= form_error('kode') ?></small>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat">
                                <small class="form-text text-danger"><?= form_error('alamat') ?></small>
                            </div>
                            <div class=" mb-3">
                                <label for="jenis" class="form-label">jenis</label>
                                <input type="text" class="form-control" id="jenis" name="jenis">
                                <small class="form-text text-danger"><?= form_error('jenis') ?></small>
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="form-label">stock</label>
                                <input type="number" class="form-control" id="stock" name="stock">
                                <small class="form-text text-danger"><?= form_error('stock') ?></small>
                            </div>
                            <div class="mb-3">
                                <label for="merek" class="form-label">merek</label>
                                <input type="text" class="form-control" id="merek" name="merek">
                                <small class="form-text text-danger"><?= form_error('merek') ?></small>
                            </div>
                            <label for="lokasi" class="form-label">Lokasi Gudang</label>
                            <select class="form-select" id="lokasi" name="lokasi" aria-label="Default select example">

                                <option value="Gudang A">Gudang A</option>
                                <option value="Gudang B">Gudang B</option>
                                <option value="Gudang C">Gudang C</option>
                            </select>
                            <div class="modal-footer">
                                <a href="<?= base_url(); ?>" type="button" class="btn btn-outline-danger me-2">Cancel</a>
                                <button type="submit" name="tambah" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    </div>