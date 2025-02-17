<?= $this->extend('layouts/admin') ?>


<?= $this->section('style') ?>
<!-- Plugin css for this page -->
<link rel="stylesheet" href="/assets-nobleui/vendors/jquery-steps/jquery.steps.css">
<!-- End plugin css for this page -->
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
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Form Data Dosen</h4>
                <form action="/user/dosen" method="post" id="form" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="row" id="">
                        <div class="col-md-6">
                            <h2>Autentikasi</h2>
                            <!-- <div class="mb-3">
                                <label for="fullname" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control <?= ($validation->hasError('fullname')) ? 'is-invalid' : '' ?>" name="fullname" id="fullname" value="<?= old('fullname') ?>">
                                <div id="fullname_feedback" class="invalid-feedback">
                                    <?= $validation->getError('fullname') ?>
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : '' ?>" name="username" id="username" value="<?= old('username') ?>">
                                <div id="username_feedback" class="invalid-feedback">
                                    <?= $validation->getError('username') ?>
                                </div>
                            </div>
                            <!-- <div class="mb-3">
                                <label class="form-label">Nomor Handphone:</label>
                                <input class="form-control <?= ($validation->hasError('no_ponsel')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" data-inputmask-alias="(+62) 899-9999-99999" name="no_ponsel" id="no_ponsel" value="<?= old('no_ponsel') ?>" />
                                <div id="no_ponsel_feedback" class="invalid-feedback">
                                    <?= $validation->getError('no_ponsel') ?>
                                </div>
                            </div> -->
                            <div class="mb-3">
                                <label class="form-label">Email:</label>
                                <input class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" data-inputmask="'alias': 'email'" name="email" id="email" value="<?= old('email') ?>" />
                                <div id="email_feedback" class="invalid-feedback">
                                    <?= $validation->getError('email') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kata Sandi:</label>
                                <input type="password" class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" name="password" id="password" />
                                <div id="password_feedback" class="invalid-feedback">
                                    <?= $validation->getError('password') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Konfirmasi Kata Sandi:</label>
                                <input type="password" class="form-control <?= ($validation->hasError('pass_confirm')) ? 'is-invalid' : '' ?>" name="pass_confirm" id="pass_confirm" />
                                <div id="pass_confirm_feedback" class="invalid-feedback">
                                    <?= $validation->getError('pass_confirm') ?>
                                </div>
                            </div>

                            <!-- <div class="mb-3">
                                <label class="form-label">Foto Profil:</label>
                                <input type="file" class="form-control <?= ($validation->hasError('user_image')) ? 'is-invalid' : '' ?> mb-4 mb-md-0" name="user_image" id="user_image" value="<?= old('user_image') ?>" />
                                <div id="user_image_feedback" class="invalid-feedback">
                                    <?= $validation->getError('user_image') ?>
                                </div>
                            </div> -->
                        </div>

                        <div class="col-md-6">
                            <h2>Data Dosen</h2>
                            <div class="mb-3">
                                <label for="email_telkom" class="form-label">Email Telkom</label>
                                <input type="text" class="form-control <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?> <?= ($validation->hasError('email_telkom')) ? 'is-invalid' : '' ?>" name="email_telkom" id="email_telkom" value="<?= old('email_telkom') ?>">
                                <div id="email_telkom_feedback" class="invalid-feedback">
                                    <?= $validation->getError('email_telkom') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" name="nama" id="nama" value="<?= old('nama') ?>">
                                <div id="nama_feedback" class="invalid-feedback">
                                    <?= $validation->getError('nama') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nama_gelar" class="form-label">Nama dan Gelar</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama_gelar')) ? 'is-invalid' : '' ?>" name="nama_gelar" id="nama_gelar" value="<?= old('nama_gelar') ?>">
                                <div id="nama_gelar_feedback" class="invalid-feedback">
                                    <?= $validation->getError('nama_gelar') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nip" class="form-label">NIP</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nip')) ? 'is-invalid' : '' ?>" name="nip" id="nip" value="<?= old('nip') ?>">
                                <div id="nip_feedback" class="invalid-feedback">
                                    <?= $validation->getError('nip') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="nidn" class="form-label">NIDN</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nidn')) ? 'is-invalid' : '' ?>" name="nidn" id="nidn" value="<?= old('nidn') ?>">
                                <div id="nidn_feedback" class="invalid-feedback">
                                    <?= $validation->getError('nidn') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="kode" class="form-label">Kode Dosen</label>
                                <input type="text" class="form-control <?= ($validation->hasError('kode')) ? 'is-invalid' : '' ?>" name="kode" id="kode" value="<?= old('kode') ?>">
                                <div id="kode_feedback" class="invalid-feedback">
                                    <?= $validation->getError('kode') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="telepon" class="form-label">Nomor Kantor</label>
                                <input type="text" class="form-control <?= ($validation->hasError('telepon')) ? 'is-invalid' : '' ?>" name="telepon" id="telepon" value="<?= old('telepon') ?>">
                                <div id="telepon_feedback" class="invalid-feedback">
                                    <?= $validation->getError('telepon') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="foto" class="form-label">Foto Formal</label>
                                <input type="file" class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?>" name="foto" id="foto">
                                <div id="foto_feedback" class="invalid-feedback">
                                    <?= $validation->getError('foto') ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea id="maxlength-textarea" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : '' ?>" maxlength="150" rows="8" name="alamat"><?= old('alamat') ?></textarea>
                                <div id="alamat_feedback" class="invalid-feedback">
                                    <?= $validation->getError('alamat') ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- Plugin js for this page -->
<script src="/assets-nobleui/vendors/jquery-steps/jquery.steps.min.js"></script>
<!-- End plugin js for this page -->

<script src="/assets-nobleui/js/wizard.js"></script>
<script>
    var form = $("#example-form");
    form.validate({
        errorPlacement: function errorPlacement(error, element) {
            element.before(error);
        },
        rules: {
            confirm: {
                equalTo: "#password"
            }
        }
    });
    form.children("div").steps({
        headerTag: "h3",
        bodyTag: "section",
        transitionEffect: "slideLeft",
        onStepChanging: function(event, currentIndex, newIndex) {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onFinishing: function(event, currentIndex) {
            form.validate().settings.ignore = ":disabled";
            return form.valid();
        },
        onFinished: function(event, currentIndex) {
            alert("Submitted!");
        }
    });
</script>

</script>
<?= $this->endSection() ?>