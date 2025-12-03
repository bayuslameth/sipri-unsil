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
    <div class="row">
        <!-- Card Selamat Datang -->
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Selamat Datang kembali,
                                <?= $this->session->get('nama'); ?>!</h5>
                            <p class="mb-4">
                                Kelola peminjaman ruang & fasilitas Universitas Siliwangi dengan mudah dan cepat.
                            </p>
                            <a href="/pengajuan-peminjaman" class="btn btn-sm btn-primary">Tinjau Peminjaman</a>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="/assets/img/illustrations/man-with-laptop-light.png" height="140" alt="Welcome"
                                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- STATISTIK -->
    <div class="row">

        <!-- Total Peminjaman -->
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="d-block fw-semibold mb-1">Total Peminjaman</span>
                        <h3 class="card-title mb-1"><?= $total_peminjaman ?? '0';?></h3>
                    </div>
                    <div class="avatar bg-label-primary rounded-circle p-2">
                        <i class="bx bx-book-open fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total User -->
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="d-block fw-semibold mb-1">Total User</span>
                        <h3 class="card-title mb-1"><?php echo $total_user ?? '0';?></h3>
                    </div>
                    <div class="avatar bg-label-success rounded-circle p-2">
                        <i class="bx bx-user fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Fasilitas -->
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="d-block fw-semibold mb-1">Total Fasilitas</span>
                        <h3 class="card-title mb-1"><?php echo $total_fasilitas ?? '0';?></h3>
                    </div>
                    <div class="avatar bg-label-warning rounded-circle p-2">
                        <i class="bx bx-building fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Barang -->
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="d-block fw-semibold mb-1">Total Barang</span>
                        <h3 class="card-title mb-1"><?php echo $total_barang ?? '0';?></h3>
                    </div>
                    <div class="avatar bg-label-info rounded-circle p-2">
                        <i class="bx bx-box fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Kerusakan Barang -->
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="d-block fw-semibold mb-1">Kerusakan Barang</span>
                        <h3 class="card-title mb-1"><?php echo $total_kerusakan ?? '0';?></h3>
                    </div>
                    <div class="avatar bg-label-danger rounded-circle p-2">
                        <i class="bx bx-error-alt fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total Ruangan -->
        <div class="col-lg-4 col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <span class="d-block fw-semibold mb-1">Total Ruangan</span>
                        <h3 class="card-title mb-1"><?php echo $total_ruangan ?? '0';?></h3>
                    </div>
                    <div class="avatar bg-label-secondary rounded-circle p-2">
                        <i class="bx bx-home fs-3"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('js'); ?>



<?= $this->endSection(); ?>