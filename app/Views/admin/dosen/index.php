<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0"><?= $title ?></h4>
    </div>
    <div class="d-flex align-items-center flex-wrap text-nowrap">

    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-xl-12 stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Kelola data Dosen</h6>
                    <div class="dropdown mb-2">
                        <button class="btn p-0" type="button" id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton7">
                            <a class="dropdown-item d-flex align-items-center" href="/admin/dosen/create"><i data-feather="plus" class="icon-sm me-2"></i> <span class="">Tambah</span></a>
                            <!-- <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="printer" class="icon-sm me-2"></i> <span class="">Cetak</span></a>
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="download" class="icon-sm me-2"></i> <span class="">Unduh</span></a> -->
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                <th class="pt-0">Kode Dosen</th>
                                <th class="pt-0">Nama dan Gelar</th>
                                <th class="pt-0">NIP</th>
                                <th class="pt-0">NIDN</th>
                                <th class="pt-0">Alamat</th>
                                <th class="pt-0">Telepon</th>
                                <th class="pt-0">Foto</th>
                                <th class="pt-0">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data_dosen as $row) : ?>
                                <tr>
                                    <th></th>
                                    <td><?= $row['kode'] ?></td>
                                    <td><?= $row['nama_gelar'] ?></td>
                                    <td><?= $row['nip'] ?></td>
                                    <td><?= $row['nidn'] ?></td>
                                    <td><?= $row['alamat'] ?></td>
                                    <td><?= $row['telepon'] ?></td>
                                    <td> <img src="/assets/img/<?= $row['foto'] ?>" class="img-fluid"> </td>
                                    <td>
                                        <!-- <a href="/admin/dosen/edit/<?= $row['id'] ?>" class="btn btn-sm btn-primary">Detail</a> -->
                                        <a href="/admin/dosen/edit/<?= $row['id'] ?>" class="btn btn-sm btn-success d-inline">Ubah</a>
                                        <form action="/admin/dosen/delete/<?= $row['id'] ?>" method="POST" class="d-inline">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- row -->


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>