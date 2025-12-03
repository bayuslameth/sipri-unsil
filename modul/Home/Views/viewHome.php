<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Bootstrap Css-->
    <link rel="stylesheet" href="/assets_fe/css/bootstrap.min.css">
    <!--Mean menu.css-->
    <link rel="stylesheet" href="/assets_fe/css/meanmenu.css">
    <!--Owl carousel-->
    <link rel="stylesheet" href="/assets_fe/css/owl.carousel.min.css">
    <!--Owl Theme-->
    <link rel="stylesheet" href="/assets_fe/css/owl.theme.default.min.css">
    <!--=== Magnific Popup Min CSS ===-->
    <link rel="stylesheet" href="/assets_fe/css/magnific-popup.min.css">
    <!--Flat icon-->
    <link rel="stylesheet" href="/assets_fe/css/flaticon.css">
    <!--Remix icon-->
    <link rel="stylesheet" href="/assets_fe/css/remixicon.css">
    <!--Odometer-->
    <link rel="stylesheet" href="/assets_fe/css/odometer.min.css">
    <!--Aos css-->
    <link rel="stylesheet" href="/assets_fe/css/aos.css">
    <!--Style css-->
    <link rel="stylesheet" href="/assets_fe/css/style.css">
    <!--Dark css-->
    <link rel="stylesheet" href="/assets_fe/css/dark.css">
    <!--Responsive css-->
    <link rel="stylesheet" href="/assets_fe/css/responsive.css">

    <!--=== Title ===-->
    <title>SIPRI Unsil - Sistem Informasi Peminjaman Ruangan Informatika Unsil</title>
    <!-- <link rel="icon" type="image/png" href="/assets_fe/images/favicon.png"> -->
    <link rel="icon" type="image/png"
        href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAArlBMVEUdMWP///////0bMmIeMGXc3+OrrrhFVXMII1geMl0gL2gOJ11bZ4X5+fro6+/L0Nk4RXNye5YAG14AAEkAI1xcZ31TYILu8fIAGVmAiJ0SK2C7ws4LJ2FNWIC3u8cAAE0qO2oAAEUKIF4AC0oAAD7///aBi5sAHFY4R3CiqroAIlJDUHprdYtlco4AFE9QXHeAiKQkOWCWoLmNm67l6vbX2uartMjByeCWn8FyfKC30bG5AAAFLElEQVR4nO2dfVvaOhiHnzYpNi2CbrxoKZtWeRlzU+bwnPP9v9hJCgXPjuNJaVas/u4/8Lq80jR304S0eUiIAAAAAAAAAAAAAAAA7xtpPhTJvZBQQug0u6OkFGo/gkiYhCT0wVz+aluUajLCnFWXlYN2MkLsL1tRPqHyApoT7GdtXl1GX8K4x5JlcV6oNTe3t9e315/38nGxuU4k4yzj8k97sa7pyjKCrgZtnsE8KWSS+ZeRBZeJzOtTp7c4QX9wJcTegtogs/HqlKczDeXmNktOAs/g78VrJbpdmfsxnHYsThAMeg7aTDYOJhNvP/5kaGSokMlLy9BaRJT3GuF0OGFS+5NJMMgquwiRjgOfucq65MPLmSxus1yGO6SQITmbDtnEnpaJVeX7TMTjFXfLrGWUWFdNbGT4I1oh6QN0N3lxaSHjBYOkepuheBxwd4xmOL34VYa7zUJSkZZRRoZHy1R3EZYyl5B5rTL/azNNlnlTNQMZyNQggw4AMpB5xzLoACADmXcsgw4AMpB5ezK2r5qa0QEkRoZ/CTidFS+2S8mItYzNS8DYmQxbM9NetLEpKSMsa+Y+rS5DyXjFl0zLhNHmgHIyJGYWMr7vSiawkplF8gAZRcq8OGdlJi5lLNrMYTJCzSzajKOaWbcZFiMj1EEylm2mHVefBRD0tdXlGd2F8iAZJbJvI4sTfDpxMaVByfePPNe7jrNkmyEZ3ljk/93Fd6aBnwh/FgJQWsYu/+oTmgdRXuYVA5la4UJNqsqUyL8CeaCO4mJnTByMUgeMzZQki+zzrF30AXpkL7mopjw2SRwy0FTrSmF7sjyaw4ELpVmWMsSJlFF0yPOMvk4Rn79OQcpBUIOk+367z3E/T6LNsLlszSRzPvt2//6KHDSddD4a8qzuwuKAkm1GhpeBxQm6Axej5nTe5Z8AvM55SAeNmiWF0yGbv34EGPQcDDSNDPvcrGVmxZCj5KhZ6OcZ9gnD84NB6kAmOetaPJx1zj8UQZR/6oWGg0cAspYRr//tDGQgAxnIQAYykIEMZCADGchABjKQgQxkINMMGQEZyNQi85vYmedp/cbIWNSMzqwpMhYhWs2oGUUibrc+/YbuLgSxO2+CjObqZUg9bWTyH4K7mNOsQaYIBVr/ofWschTfPpxucvH9YB5LB8ENtcg8Z7NYhrx58Ipc/NOni6gxNfMfTEhBkix/5DOpa5nOOHMSo1W/TBRF4bLf9bzJNpPHm0goB/Em9csQLftfOt7mm9N8rK5SuVRRE2XE/EfH27pMfO9nOzTBOQ5utPo7ADp7Oi1qxfcn3vBhVl3jSDIkk5PR83iJR+UsQPMIbUYm7WDnMl1S9FKqZsjobMK7ogNYfVMulpw6mgwpGc0eT/NUo7a7oMajyJiVwuTCjMuGj8tFbtdcmfVpw7+8bvvCwS+AXoEMxWd/L0N3reW4MhT3YnLaYI4oI3SHLKrHmL4OGRPq6jA++7gyJjPp7NvyyDJbozcj4xrIQAYykIEMZCADGchABjKQgQxkIAMZyEAGMpCBDGQgsyNfqeGl6NZfl534QKVXaxSyXhkh0jObNTR+/rMNCDO77/i8fmshXYTDlUKm867Z5mhvwTy/c/58TcCJjUxyHBmbDajOw0JmswEVKxNHzieTeYTV1mBnSVG0UluD1bugnC5h2mM3VcuyVBbz3MJs2nZ7zS3yt6Aj1Izldnq0nec2+31ZBFSKuvuy4rRWGx3urrL5B3v/CKLaOwAAAAAAAAAAAAAAAECz+RdSbh0KWTnw6gAAAABJRU5ErkJggg==">
</head>

<body>
    <!-- Start Preloader Area -->
    <div class="preloader-area">
        <div class="spinner">
            <div class="inner">
                <div class="disc"></div>
                <div class="disc"></div>
                <div class="disc"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Navbar Area -->
    <div class="navbar-area nav-bg-2">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a href="/home">
                            <!-- <img src="/assets_fe/images/logo.png" class="main-logo" lt="logo">
                                <img src="/assets_fe/images/white-logo.png" class="white-logo" alt="logo"> -->
                            <img src="data:image/png;base64,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"
                                class="main-logo" lt="logo" width="60px">
                            <img src="data:image/png;base64,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"
                                class="white-logo" alt="logo" width="60px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="desktop-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/home">
                        <img src="data:image/png;base64,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"
                            class="main-logo" alt="logo" width="70px">
                        <img src="data:image/png;base64,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"
                            class="white-logo" alt="logo" width="70px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/home" class="nav-link active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/fasilitas" class="nav-link">Fasilitas</a>
                            </li>
                            <li class="nav-item">
                                <a href="/kontak" class="nav-link">Kontak</a>
                            </li>
                        </ul>

                        <div class="others-options">
                            <div class="icon">
                                <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="icon">
                            <i class="ri-menu-3-fill" data-bs-toggle="modal" data-bs-target="#sidebarModal"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Sidebar Modal -->
    <div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>

                <div class="modal-body">
                    <a href="/home">
                        <img src="data:image/png;base64,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"
                            width="60px" class="main-logo" alt="logo">
                        <img src="data:image/png;base64,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"
                            width="60px" class="white-logo" alt="logo">
                    </a>
                    <div class="sidebar-content">
                        <h3>About Us</h3>
                        <p>Sarana web interaktif untuk peminjaman fasilitas kampus di Jurusan Informatika</p>
                    </div>
                    <div class="sidebar-contact-info">
                        <h3>Contact Information</h3>

                        <ul class="info-list">
                            <li><i class="ri-phone-fill"></i> <a href="tel:9901234567">0895354102316</a></li>

                            <li><i class="ri-mail-line"></i><a
                                    href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#48202d242427083b29263d662b2725"><span
                                        class="__cf_email__"
                                        data-cfemail="ee868b828281ae9d8f809bc08d8183">247006111118@&#160;student.unsil.ac.id</span></a>
                            </li>

                            <li><i class="ri-map-pin-line"></i>Kampus 2 Unversitas Siliwangi</li>
                        </ul>
                    </div>
                    <ul class="sidebar-social-list">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank"><i class="flaticon-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://www.twitter.com/" target="_blank"><i class="flaticon-twitter"></i></a>
                        </li>
                        <li>
                            <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                    class="flaticon-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://instagram.com/?lang=en" target="_blank"><i
                                    class="flaticon-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Modal -->

    <!--Start Banner Area-->
    <div class="banner-area">
        <div class="hero-slider2 owl-carousel owl-theme">
            <div class="slider-item banner-bg-4">
                <div class="container-fluid">
                    <div class="slider-content">
                        <h1>Peminjaman Fasilitas Jurusan Informatika</h1>
                        <p>Ruang kelas, ruang lab, ruang sidang, auditorium, kursi, dan meja</p>
                    </div>
                </div>
            </div>
            <div class="slider-item banner-bg-5">
                <div class="container-fluid">
                    <div class="slider-content">
                        <h1>Peminjaman Fasilitas Jurusan Informatika</h1>
                        <p>Ruang kelas, ruang lab, ruang sidang, auditorium, kursi, dan meja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Banner Area-->

    <!--Start Campus Information-->
    <section class="campus-information-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-stretch">

                <!-- LEFT: Campus Information -->
                <div class="col-lg-6 d-flex" data-aos="fade-right" data-aos-easing="ease-in-sine"
                    data-aos-duration="1300" data-aos-once="true">
                    <div class="campus-content my-auto">
                        <div class="campus-title">
                            <h2>Informasi Kampus</h2>
                            <p>Jurusan Informatika Universitas Siliwangi (UNSIL) adalah bagian dari Fakultas Teknik yang
                                didirikan tahun 2003 dan berfokus pada rekayasa perangkat lunak dan sistem komputasi.
                                Jurusan ini telah terakreditasi "Baik Sekali" dan memiliki kurikulum berbasis KKNI
                                (Kurikulum 2021) untuk menghasilkan lulusan yang siap kerja di tingkat lokal, nasional,
                                maupun internasional. </p>
                        </div>

                        <div class="list">
                            <div class="row">
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="ri-check-fill"></i>
                                            <p>Peminjaman kelas</p>
                                        </li>
                                        <li><i class="ri-check-fill"></i>
                                            <p>Peminjaman Ruang Sidang</p>
                                        </li>
                                        <li><i class="ri-check-fill"></i>
                                            <p>Peminjaman Auditorium</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-6">
                                    <ul>
                                        <li><i class="ri-check-fill"></i>
                                            <p>Peminjaman lab</p>
                                        </li>
                                        <li><i class="ri-check-fill"></i>
                                            <p>Peminjaman Kursi</p>
                                        </li>
                                        <li><i class="ri-check-fill"></i>
                                            <p>Peminjaman Meja</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class="default-btn btn">Mulai Peminjaman<i
                                class="flaticon-next"></i></a>
                    </div>
                </div>

                <!-- RIGHT: Form -->
                <div class="col-lg-6 d-flex">
                    <div class="right-column-wrapper d-flex flex-column w-100">

                        <!-- Banner -->
                        <div class="banner-box mb-4">
                            <img src="/mnt/data/Screenshot 2025-11-22 141050.png" alt="Banner"
                                class="img-fluid w-100 banner-fixed" />
                        </div>

                        <!-- Estimate Form -->
                        <div class="estemate-form p-3 bg-white shadow-sm rounded flex-grow-1 d-flex flex-column">
                            <h3>Surat Peminjaman Barang</h3>
                            <form class="mt-2">
                                <div class="row">
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" placeholder="Nama">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="email" class="form-control" placeholder="Email Unsil">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control" placeholder="Mata Kuliah">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input type="text" class="form-control"
                                            placeholder="Peminjaman (Kelas,Lab,Meja, dll)">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <textarea class="form-control" rows="5" placeholder="Tujuan"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="default-btn btn w-100">
                                            Kirim Permintaan <i class="flaticon-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--End Campus Information-->

    <!--Start Academic Area-->
    <div class="academic-area pt-100 pb-70 bg-f4f6f9">
        <div class="container">
            <div class="section-title">
                <h2>Laboratorium Informatika</h2>
                <p>
                </p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200"
                    data-aos-once="true">
                    <div class="single-academics-card2 bg-1">
                        <div class="serial">
                        </div>
                        <div class="academic-content">
                            <div class="academic-top-content">
                                <i class="flaticon-graduation"></i>
                                <a href="javascript:void(0)">
                                    <h3>Laboratorium Teknik 1</h3>
                                </a>
                            </div>
                            <p>Salah satu Lab di Jurusan Informatika yang berisi ruangan praktikum untuk Mahasiswa</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400"
                    data-aos-once="true">
                    <div class="single-academics-card2 bg-2">
                        <div class="serial">
                        </div>
                        <div class="academic-content">
                            <div class="academic-top-content">
                                <i class="flaticon-graduation"></i>
                                <a href="javascript:void(0)">
                                    <h3>Data Center Fakultas Teknik</h3>
                                </a>
                            </div>
                            <p>Administrasi Fakultas Teknik dan Auditorium untuk seminar</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="600"
                    data-aos-once="true">
                    <div class="single-academics-card2 bg-3">
                        <div class="serial">
                        </div>
                        <div class="academic-content">
                            <div class="academic-top-content">
                                <i class="flaticon-graduation"></i>
                                <a href="javascript:void(0)">
                                    <h3>Laboratorium Teknik 2</h3>
                                </a>
                            </div>
                            <p>Gedung Perkuliahan yang digunakan oleh mahasiswa dari Jurusan Informatika</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Academic Area-->

    <!--Start Health Care Area-->
    <div class="health-care-area ptb-100 bg-f4f6f9">
        <div class="container">
            <div class="section-title">
                <h2>Fasilitas</h2>
                <p>Laboratorium dan fasilitas pendukung lainnya untuk mendukung kegiatan akademik dan penelitian
                    mahasiswa.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-6">
                    <div class="single-health-care-card style1">
                        <div class="img">
                            <a href="javascript:void(0)"><img src="/assets_fe/images/academics/academic-1.jpeg"
                                    style="max-height:650px;" alt="Image"></a>
                        </div>
                        <div class="health-care-content">
                            <a href="javascript:void(0)">
                                <h3>Laboratorium Teknik Informatika 1</h3>
                            </a>
                            <p>Ruangan Praktikum dan Penelitian</p>
                            <a href="javascript:void(0)" class="read-more-btn">Mulai Peminjaman<i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="single-health-care-card style2">
                        <div class="img">
                            <a href="javascript:void(0)"><img src="/assets_fe/images/academics/academic-2.jpeg"
                                    style="max-width:600px;" alt="Image"></a>
                        </div>
                        <div class="health-care-content">
                            <a href="javascript:void(0)">
                                <h3>Laboratorium Teknik Informatika 2</h3>
                            </a>
                            <p>Ruangan Pembelajaran Materi</p>
                            <a href="javascript:void(0)" class="read-more-btn">Mulai Peminjaman<i
                                    class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Health Care Area-->

    <!--Start Footer Area-->
    <div class="footer-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-logo-area">
                        <a href="/home"><img
                                src="data:image/png;base64,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"
                                width="80px" alt="Image"></a>
                        <p>Sistem Peminjaman Fasilitas Kampus Universitas Siliwangi merupakan platform layanan digital
                            untuk mempermudah mahasiswa, dosen, dan unit kampus dalam melakukan pemesanan dan manajemen
                            fasilitas kampus secara terintegrasi.</p>
                        <div class="contact-list">
                            <ul>
                                <li><a href="tel:+6281234567890">+62 812-3456-7890</a></li>
                                <li><a href="mailto:fasilitas@unsil.ac.id">fasilitas@unsil.ac.id</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widjet">
                        <h3>Layanan Sistem</h3>
                        <div class="list">
                            <ul>
                                <li><a href="#">Peminjaman Ruangan</a></li>
                                <li><a href="#">Peminjaman Peralatan</a></li>
                                <li><a href="#">Status Peminjaman</a></li>
                                <li><a href="#">Riwayat Peminjaman</a></li>
                                <li><a href="#">Persetujuan & Verifikasi</a></li>
                                <li><a href="#">Panduan Pengguna</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widjet">
                        <h3>Tentang Kampus</h3>
                        <div class="list">
                            <ul>
                                <li><a href="#">Universitas Siliwangi</a></li>
                                <li><a href="#">Fakultas Teknik</a></li>
                                <li><a href="#">Program Studi Informatika</a></li>
                                <li><a href="#">Unit Fasilitas Kampus</a></li>
                                <li><a href="#">Teknologi Informasi & Layanan IT</a></li>
                                <li><a href="#">Organisasi & Kemahasiswaan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widjet">
                        <h3>Link Terkait</h3>
                        <div class="list">
                            <ul>
                                <li><a href="#">Website UNSIL</a></li>
                                <li><a href="#">SIAKAD</a></li>
                                <li><a href="#">Perpustakaan</a></li>
                                <li><a href="#">Kalender Akademik</a></li>
                                <li><a href="#">Beasiswa & Informasi Akademik</a></li>
                                <li><a href="#">Layanan ICT UNSIL</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="shape">
                <img src="/assets_fe/images/shape-1.png" alt="Image">
            </div>
        </div>
    </div>
    <!--End Footer Area-->

    <!--Start Copyright Area-->
    <div class="copyright-area">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="social-content">
                            <ul>
                                <li><span>Follow Us On</span></li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank"><i
                                            class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com/" target="_blank"><i
                                            class="ri-twitter-fill"></i></a>
                                </li>
                                <li>
                                    <a href="https://instagram.com/?lang=en" target="_blank"><i
                                            class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com/?lang=en" target="_blank"><i
                                            class="ri-linkedin-fill"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-8">
                        <div class="copy">
                            <p>©Informatika, Fakultas Teknik, Universitas Siliwangi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Copyright Area-->

    <!-- Start Go Top Area -->
    <div class="go-top">
        <i class="ri-arrow-up-s-line"></i>
        <i class="ri-arrow-up-s-line"></i>
    </div>
    <!-- End Go Top Area -->

    <!--=== Jquery Min js ===-->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="/assets_fe/js/jquery.min.js"></script>
    <!--=== Bootstrap bundle Min js ===-->
    <script src="/assets_fe/js/bootstrap.bundle.min.js"></script>
    <!--=== MeanMenu js ===-->
    <script src="/assets_fe/js/jquery.meanmenu.js"></script>
    <!--=== Owl Carousel Min js ===-->
    <script src="/assets_fe/js/owl.carousel.min.js"></script>
    <!--=== Owl Carousel Thumbs Min js ===-->
    <script src="/assets_fe/js/carousel-thumbs.min.js"></script>
    <!--=== Magnific popup Min js ===-->
    <script src="/assets_fe/js/jquery.magnific-popup.min.js"></script>
    <!-- Aos js -->
    <script src="/assets_fe/js/aos.js"></script>
    <!-- Odometer js -->
    <script src="/assets_fe/js/odometer.min.js"></script>
    <!-- Appear js -->
    <script src="/assets_fe/js/appear.min.js"></script>
    <!-- Form Validator js -->
    <script src="/assets_fe/js/form-validator.min.js"></script>
    <!-- Contact Form Script js -->
    <script src="/assets_fe/js/contact-form-script.js"></script>
    <!--=== AjaxChimp js ===-->
    <script src="/assets_fe/js/ajaxchimp.min.js"></script>
    <!--=== Custom js ===-->
    <script src="/assets_fe/js/custom.js"></script>
</body>

</html>