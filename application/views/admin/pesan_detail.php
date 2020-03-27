<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h6 class="float-right"><?= $request['tanggal']; ?></h6>
            Detail Pesan
        </div>
        <div class="card-body">
            <h5 class="card-title">Form : <?= $request['email']; ?></h5>
            <p>Subjek : <?= $request['subjek']; ?></p>
            <p>Isi : <?= $request['pesan']; ?></p>
        </div>
    </div>
    <br>
    <a href=" <?= base_url('admin/pesan'); ?>" class="btn btn-primary">Kembali</a>

</div>
<!-- /.container-fluid -->