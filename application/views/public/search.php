<!-- Begin Page Content -->

<div class="container">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Hasil Search</h1>
    </div>
    <?php if (empty($belajar)) : ?>
        <div class="alert alert-danger">Data Tidak Ditemukan</div>
    <?php endif; ?>
    <ul class="list-group">
        <?php foreach ($belajar as $bljr) : ?>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $bljr['nama']; ?></h5>
                                <p class="card-text"> <?= $bljr['deskripsi']; ?></p>
                                <a href="<?= base_url($bljr['alamat']); ?>" class="btn btn-primary">Pilih</a>
                            </div>
                        </div>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<!-- /.container-fluid -->