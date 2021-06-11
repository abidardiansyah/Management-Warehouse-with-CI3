<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a href="<?= base_url(); ?>gudang/tambah" type="button" class="btn btn-outline-success me-2">Tambah Barang</a>
            <form class="d-flex" action="" method="post">
                <input class="form-control me-2" type="text" name="keyword" placeholder="Code/Nama Barang" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
        </div>
    </nav>
    <div class="container">
        <br>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row-mt3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Barang<strong> Berhasil!</strong> <?= $this->session->flashdata('flash'); ?>
                        <a href="<?= base_url(); ?>" type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></a>
                    </div>
                </div>
            </div>

        <?php endif; ?>
        <div class="container-fluid">








            <div class="row">
                <div class="span6" style="float: none; margin: 0 auto;">
                    <?php if (empty($gudang)) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data tidak ada di Gudang
                            <a href="<?= base_url(); ?>" type="button" class="btn-close"></a>
                        </div>

                    <?php endif; ?>
                    <h3 class="mt-3">Daftar Barang di Gudang</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>no</th>
                                <th>nama</th>
                                <th>kode</th>
                                <th>alamat supplier</th>
                                <th>jenis</th>
                                <th>stock </th>
                                <th>merek</th>
                                <th>lokasi</th>

                                <th class="text-center">aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($gudang as $gudang) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $gudang['nama'] ?></td>
                                    <td><?= $gudang['kode'] ?></td>
                                    <td><?= $gudang['alamat'] ?></td>
                                    <td><?= $gudang['jenis'] ?></td>
                                    <td><?= $gudang['stock'] ?> </td>
                                    <td><?= $gudang['merek'] ?></td>
                                    <td><?= $gudang['lokasi'] ?></td>
                                    <td align="center"><a href="<?= base_url(); ?>gudang/hapus/<?= $gudang['id']; ?>" class="btn btn-danger btn-sm  " onclick="return confirm('yakin?');">Hapus</a>
                                        <a href="<?= base_url(); ?>gudang/ubah/<?= $gudang['id']; ?>" class="center btn btn-warning btn-sm float-center me-2">Ubah</a>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>




            </div>
        </div>
    </div>