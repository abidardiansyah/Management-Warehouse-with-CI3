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
                        <h5 class="modal-title" id="JudulModal">Ubah Data Barang</h5>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $gudang['id']; ?>">
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $gudang['nama']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="kode" class="form-label">kode</label>
                                <input type="text" class="form-control" id="kode" name=" kode" value="<?= $gudang['kode']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $gudang['alamat']; ?>">
                            </div>
                            <div class=" mb-3">
                                <label for="jenis" class="form-label">jenis</label>
                                <input type="text" class="form-control" id="jenis" name="jenis" value="<?= $gudang['jenis']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="stock" class="form-label">stock</label>
                                <input type="number" class="form-control" id="stock" name="stock" value="<?= $gudang['stock']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="merek" class="form-label">merek</label>
                                <input type="text" class="form-control" id="merek" name="merek" value="<?= $gudang['merek']; ?>">
                            </div>
                            <label for="lokasi" class="form-label">Lokasi Gudang</label>
                            <select class="form-select" id="lokasi" name="lokasi" aria-label="Default select example">
                                <?php foreach ($lokasi as $aks) : ?>
                                    <?php if ($aks == $gudang['lokasi']) : ?>
                                        <option value="<?= $aks; ?>" selected><?= $aks; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $aks; ?>"><?= $aks; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                            <br>
                            <div class="col-md6">
                                <a href="<?= base_url(); ?>" type="button" class="btn btn-outline-danger float-end ">Cancel</a>
                                <button type="submit" name="ubah" class="btn btn-primary float-end  me-2">Ubah</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>