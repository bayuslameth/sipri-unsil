<?php

use Config\Database;
use Config\Services;

$this->db = Database::connect();
$this->session    = Services::session();
?>

<?= $this->extend('layout/template'); ?>
<?= $this->section('css'); ?>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">User Profile /</span> Profile</h4>

    <!-- Header -->
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                    <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                        <img src="https://cdn-icons-png.flaticon.com/512/9187/9187532.png" width="40px" alt="user image"
                            class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img" style="margin-top:60px;" />
                    </div>
                    <div class="flex-grow-1 mt-3 mt-sm-5">
                        <div
                            class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                            <div class="user-profile-info">
                                <h4>John Doe</h4>
                                <ul
                                    class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                    <li class="list-inline-item fw-semibold"><i class="bx bx-user mb-1"></i> Admin</li>
                                    <li class="list-inline-item fw-semibold">
                                        <i class="bx bx-calendar-alt"></i> Bergabung pada 2025
                                    </li>
                                </ul>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-primary text-nowrap">
                                <i class="bx bx-user-check me-1"></i>Terverifikasi
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ Header -->

    <!-- Navbar pills -->
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)"><i class="bx bx-bell me-1"></i> Notifikasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)"><i class="bx bx-link-alt me-1"></i>
                        History</a>
                </li>
            </ul>
        </div>
    </div>
    <!--/ Navbar pills -->

    <!-- User Profile Content -->
    <div class="row">
        <div class="col-xl-4 col-lg-5 col-md-5">
            <!-- About User -->
            <div class="card mb-4">
                <div class="card-body">
                    <small class="text-muted text-uppercase">Profile</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="bx bx-user"></i><span class="fw-semibold mx-2">Nama:</span>
                            <span><?php echo $users->nama;?></span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bx bx-check"></i><span class="fw-semibold mx-2">Status:</span> <span>Active</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bx bx-star"></i><span class="fw-semibold mx-2">Role:</span> <span>Admin</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bx bx-flag"></i><span class="fw-semibold mx-2">Negara:</span>
                            <span>Indonesia</span>
                        </li>
                        <li class="d-flex align-items-center mb-3">
                            <i class="bx bx-detail"></i><span class="fw-semibold mx-2">Bahasa:</span>
                            <span>Indonesia</span>
                        </li>
                    </ul>
                    <small class="text-muted text-uppercase">Contacts</small>
                    <ul class="list-unstyled mb-4 mt-3">
                        <li class="d-flex align-items-center mb-3">
                            <i class="bx bx-phone"></i><span class="fw-semibold mx-2">Contact:</span>
                            <span><?php echo $users->no_telepon;?></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!--/ About User -->
        </div>
        <div class="col-xl-8 col-lg-7 col-md-7">
            <!-- Activity Timeline -->
            <div class="card card-action mb-4">
                <div class="card-header align-items-center">
                    <h5 class="card-action-title mb-0">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form action="javascript:void(0)" id="form" method="post">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama"
                                value="<?php echo $users->nama;?>">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username"
                                value="<?php echo $users->username;?>">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">password</label>
                            <input type="password" class="form-control" name="password" id="password" disabled>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <label for="no_telepon" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" name="no_telepon" id="no_telepon"
                                value="<?php echo $users->no_telepon;?>">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit" id="save">
                                <i class="bx bx-save"></i>&nbsp; Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--/ Activity Timeline -->
        </div>
    </div>
    <!--/ User Profile Content -->
</div>
<!-- / Content -->


<?= $this->endSection(); ?>
<?= $this->section('js'); ?>



<?= $this->endSection(); ?>