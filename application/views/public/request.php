<section class="home" id="home">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">REQUEST PROJEK YANG ANDA INGINKAN</h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
        <div class="row">

            <div class="col-sm-12">
                <form action="" method="post">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('message')) : ?>
                        <div class="alert alert-success " role="alert">
                            <?= $this->session->flashdata('message'); ?>

                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label for="subjek">Pilih Subjek</label>
                        <select class="form-control" id="subjek" name="subjek">
                            <option>Asking</option>
                            <option>Request</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea class="form-control" rows="10" id="pesan" name="pesan" placeholder="Masukan Pesan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- fitur -->
<section class="fitur">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center">SEGERA GABUNG </h2>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</section>