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
        href="data:image/png;base64,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">
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
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAArlBMVEUdMWP///////0bMmIeMGXc3+OrrrhFVXMII1geMl0gL2gOJ11bZ4X5+fro6+/L0Nk4RXNye5YAG14AAEkAI1xcZ31TYILu8fIAGVmAiJ0SK2C7ws4LJ2FNWIC3u8cAAE0qO2oAAEUKIF4AC0oAAD7///aBi5sAHFY4R3CiqroAIlJDUHprdYtlco4AFE9QXHeAiKQkOWCWoLmNm67l6vbX2uartMjByeCWn8FyfKC30bG5AAAFLElEQVR4nO2dfVvaOhiHnzYpNi2CbrxoKZtWeRlzU+bwnPP9v9hJCgXPjuNJaVas/u4/8Lq80jR304S0eUiIAAAAAAAAAAAAAAAA7xtpPhTJvZBQQug0u6OkFGo/gkiYhCT0wVz+aluUajLCnFWXlYN2MkLsL1tRPqHyApoT7GdtXl1GX8K4x5JlcV6oNTe3t9e315/38nGxuU4k4yzj8k97sa7pyjKCrgZtnsE8KWSS+ZeRBZeJzOtTp7c4QX9wJcTegtogs/HqlKczDeXmNktOAs/g78VrJbpdmfsxnHYsThAMeg7aTDYOJhNvP/5kaGSokMlLy9BaRJT3GuF0OGFS+5NJMMgquwiRjgOfucq65MPLmSxus1yGO6SQITmbDtnEnpaJVeX7TMTjFXfLrGWUWFdNbGT4I1oh6QN0N3lxaSHjBYOkepuheBxwd4xmOL34VYa7zUJSkZZRRoZHy1R3EZYyl5B5rTL/azNNlnlTNQMZyNQggw4AMpB5xzLoACADmXcsgw4AMpB5ezK2r5qa0QEkRoZ/CTidFS+2S8mItYzNS8DYmQxbM9NetLEpKSMsa+Y+rS5DyXjFl0zLhNHmgHIyJGYWMr7vSiawkplF8gAZRcq8OGdlJi5lLNrMYTJCzSzajKOaWbcZFiMj1EEylm2mHVefBRD0tdXlGd2F8iAZJbJvI4sTfDpxMaVByfePPNe7jrNkmyEZ3ljk/93Fd6aBnwh/FgJQWsYu/+oTmgdRXuYVA5la4UJNqsqUyL8CeaCO4mJnTByMUgeMzZQki+zzrF30AXpkL7mopjw2SRwy0FTrSmF7sjyaw4ELpVmWMsSJlFF0yPOMvk4Rn79OQcpBUIOk+367z3E/T6LNsLlszSRzPvt2//6KHDSddD4a8qzuwuKAkm1GhpeBxQm6Axej5nTe5Z8AvM55SAeNmiWF0yGbv34EGPQcDDSNDPvcrGVmxZCj5KhZ6OcZ9gnD84NB6kAmOetaPJx1zj8UQZR/6oWGg0cAspYRr//tDGQgAxnIQAYykIEMZCADGchABjKQgQxkINMMGQEZyNQi85vYmedp/cbIWNSMzqwpMhYhWs2oGUUibrc+/YbuLgSxO2+CjObqZUg9bWTyH4K7mNOsQaYIBVr/ofWschTfPpxucvH9YB5LB8ENtcg8Z7NYhrx58Ipc/NOni6gxNfMfTEhBkix/5DOpa5nOOHMSo1W/TBRF4bLf9bzJNpPHm0goB/Em9csQLftfOt7mm9N8rK5SuVRRE2XE/EfH27pMfO9nOzTBOQ5utPo7ADp7Oi1qxfcn3vBhVl3jSDIkk5PR83iJR+UsQPMIbUYm7WDnMl1S9FKqZsjobMK7ogNYfVMulpw6mgwpGc0eT/NUo7a7oMajyJiVwuTCjMuGj8tFbtdcmfVpw7+8bvvCwS+AXoEMxWd/L0N3reW4MhT3YnLaYI4oI3SHLKrHmL4OGRPq6jA++7gyJjPp7NvyyDJbozcj4xrIQAYykIEMZCADGchABjKQgQxkIAMZyEAGMpCBDGQgsyNfqeGl6NZfl534QKVXaxSyXhkh0jObNTR+/rMNCDO77/i8fmshXYTDlUKm867Z5mhvwTy/c/58TcCJjUxyHBmbDajOw0JmswEVKxNHzieTeYTV1mBnSVG0UluD1bugnC5h2mM3VcuyVBbz3MJs2nZ7zS3yt6Aj1Izldnq0nec2+31ZBFSKuvuy4rRWGx3urrL5B3v/CKLaOwAAAAAAAAAAAAAAAECz+RdSbh0KWTnw6gAAAABJRU5ErkJggg=="
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
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMwAAADACAMAAAB/Pny7AAAArlBMVEUdMWP///////0bMmIeMGXc3+OrrrhFVXMII1geMl0gL2gOJ11bZ4X5+fro6+/L0Nk4RXNye5YAG14AAEkAI1xcZ31TYILu8fIAGVmAiJ0SK2C7ws4LJ2FNWIC3u8cAAE0qO2oAAEUKIF4AC0oAAD7///aBi5sAHFY4R3CiqroAIlJDUHprdYtlco4AFE9QXHeAiKQkOWCWoLmNm67l6vbX2uartMjByeCWn8FyfKC30bG5AAAFLElEQVR4nO2dfVvaOhiHnzYpNi2CbrxoKZtWeRlzU+bwnPP9v9hJCgXPjuNJaVas/u4/8Lq80jR304S0eUiIAAAAAAAAAAAAAAAA7xtpPhTJvZBQQug0u6OkFGo/gkiYhCT0wVz+aluUajLCnFWXlYN2MkLsL1tRPqHyApoT7GdtXl1GX8K4x5JlcV6oNTe3t9e315/38nGxuU4k4yzj8k97sa7pyjKCrgZtnsE8KWSS+ZeRBZeJzOtTp7c4QX9wJcTegtogs/HqlKczDeXmNktOAs/g78VrJbpdmfsxnHYsThAMeg7aTDYOJhNvP/5kaGSokMlLy9BaRJT3GuF0OGFS+5NJMMgquwiRjgOfucq65MPLmSxus1yGO6SQITmbDtnEnpaJVeX7TMTjFXfLrGWUWFdNbGT4I1oh6QN0N3lxaSHjBYOkepuheBxwd4xmOL34VYa7zUJSkZZRRoZHy1R3EZYyl5B5rTL/azNNlnlTNQMZyNQggw4AMpB5xzLoACADmXcsgw4AMpB5ezK2r5qa0QEkRoZ/CTidFS+2S8mItYzNS8DYmQxbM9NetLEpKSMsa+Y+rS5DyXjFl0zLhNHmgHIyJGYWMr7vSiawkplF8gAZRcq8OGdlJi5lLNrMYTJCzSzajKOaWbcZFiMj1EEylm2mHVefBRD0tdXlGd2F8iAZJbJvI4sTfDpxMaVByfePPNe7jrNkmyEZ3ljk/93Fd6aBnwh/FgJQWsYu/+oTmgdRXuYVA5la4UJNqsqUyL8CeaCO4mJnTByMUgeMzZQki+zzrF30AXpkL7mopjw2SRwy0FTrSmF7sjyaw4ELpVmWMsSJlFF0yPOMvk4Rn79OQcpBUIOk+367z3E/T6LNsLlszSRzPvt2//6KHDSddD4a8qzuwuKAkm1GhpeBxQm6Axej5nTe5Z8AvM55SAeNmiWF0yGbv34EGPQcDDSNDPvcrGVmxZCj5KhZ6OcZ9gnD84NB6kAmOetaPJx1zj8UQZR/6oWGg0cAspYRr//tDGQgAxnIQAYykIEMZCADGchABjKQgQxkINMMGQEZyNQi85vYmedp/cbIWNSMzqwpMhYhWs2oGUUibrc+/YbuLgSxO2+CjObqZUg9bWTyH4K7mNOsQaYIBVr/ofWschTfPpxucvH9YB5LB8ENtcg8Z7NYhrx58Ipc/NOni6gxNfMfTEhBkix/5DOpa5nOOHMSo1W/TBRF4bLf9bzJNpPHm0goB/Em9csQLftfOt7mm9N8rK5SuVRRE2XE/EfH27pMfO9nOzTBOQ5utPo7ADp7Oi1qxfcn3vBhVl3jSDIkk5PR83iJR+UsQPMIbUYm7WDnMl1S9FKqZsjobMK7ogNYfVMulpw6mgwpGc0eT/NUo7a7oMajyJiVwuTCjMuGj8tFbtdcmfVpw7+8bvvCwS+AXoEMxWd/L0N3reW4MhT3YnLaYI4oI3SHLKrHmL4OGRPq6jA++7gyJjPp7NvyyDJbozcj4xrIQAYykIEMZCADGchABjKQgQxkIAMZyEAGMpCBDGQgsyNfqeGl6NZfl534QKVXaxSyXhkh0jObNTR+/rMNCDO77/i8fmshXYTDlUKm867Z5mhvwTy/c/58TcCJjUxyHBmbDajOw0JmswEVKxNHzieTeYTV1mBnSVG0UluD1bugnC5h2mM3VcuyVBbz3MJs2nZ7zS3yt6Aj1Izldnq0nec2+31ZBFSKuvuy4rRWGx3urrL5B3v/CKLaOwAAAAAAAAAAAAAAAECz+RdSbh0KWTnw6gAAAABJRU5ErkJggg=="
                            class="main-logo" alt="logo" width="70px">
                        <img src="data:image/png;base64,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"
                            class="white-logo" alt="logo" width="70px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a href="/home" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/fasilitas" class="nav-link active">Fasilitas</a>
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
                        <img src="data:image/png;base64,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" width="60px" class="main-logo" alt="logo">
                        <img src="data:image/png;base64,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" width="60px" class="white-logo" alt="logo">
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

    <section class="py-5 bg-light" id="peminjaman">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold">Peminjaman Fasilitas Kampus</h2>
                    <p class="lead text-muted">
                        Ajukan peminjaman ruang kelas, laboratorium, auditorium, atau fasilitas lainnya dengan mudah dan
                        cepat.
                    </p>
                </div>
            </div>

            <div class="row g-4">
                <!-- Card Peminjaman -->
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title">Ajukan Permohonan</h5>
                            <p class="card-text text-muted">
                                Isi formulir peminjaman secara online dalam hitungan menit.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title">Cek Ketersediaan</h5>
                            <p class="card-text text-muted">
                                Lihat jadwal real-time dan hindari bentrokan jadwal.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <h5 class="card-title">Notifikasi & Persetujuan</h5>
                            <p class="card-text text-muted">
                                Dapatkan notifikasi status pengajuan langsung ke email atau WhatsApp.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="#form-peminjaman" class="btn btn-primary btn-lg px-5">
                    Ajukan Peminjaman Sekarang
                </a>
            </div>
        </div>
    </section>



    <section class="py-5" id="fasilitas">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold">Fasilitas Ruangan Kampus</h2>
                    <p class="lead text-muted">
                        Berbagai fasilitas pembelajaran yang tersedia di Jurusan Informatika.
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Fasilitas Item -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://if.unsil.ac.id/wp-content/uploads/2024/11/IMG_7204.jpg" class="card-img-top" alt="Ruang Kelas">
                        <div class="card-body">
                            <h5 class="card-title">Ruang Kelas</h5>
                            <p class="card-text text-muted">Kapasitas 20–50 orang, dilengkapi LCD projector & AC</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://if.unsil.ac.id/wp-content/uploads/2024/10/IMG_4629-1.jpg" class="card-img-top" alt="Aula">
                        <div class="card-body">
                            <h5 class="card-title">Ruang Auditorium</h5>
                            <p class="card-text text-muted">Kapasitas 100 sampai 250 orang, dilengkapi AC & Big LCD Projector</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://if.unsil.ac.id/wp-content/uploads/2024/11/IMG_7472.jpg" class="card-img-top" alt="Aula">
                        <div class="card-body">
                            <h5 class="card-title">Ruang Sidang</h5>
                            <p class="card-text text-muted">Ruang sidang mahasiswa, dilengkapi AC & LCD Projector</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://if.unsil.ac.id/wp-content/uploads/2024/11/IMG_7424.jpg" class="card-img-top" alt="Lab Komputer">
                        <div class="card-body">
                            <h5 class="card-title">Laboratorium Komputer</h5>
                            <p class="card-text text-muted">50 unit PC high-spec, internet cepat, software lengkap</p>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5" id="fasilitas">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-lg-8 mx-auto">
                    <h2 class="fw-bold">Fasilitas Barang Yang Tersedia</h2>
                    <p class="lead text-muted">
                        Berbagai fasilitas barang penunjang pembelajaran yang tersedia di Jurusan Informatika.
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <!-- Fasilitas Item -->
                <div class="col">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://furniturejogja.com/wp-content/uploads/2024/05/WhatsApp-Image-2024-05-20-at-14.16.22_1387b66c.jpg" class="card-img-top" alt="Studio TV">
                        <div class="card-body">
                            <h5 class="card-title">Kursi Pembelajaran</h5>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://kursikantor.co.id/wp-content/uploads/2024/02/Custom-Meja-Belajar.png" class="card-img-top"
                            alt="Lapangan Olahraga">
                        <div class="card-body">
                            <h5 class="card-title">Meja Pembelajaran</h5>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card h-100 border-0 shadow-sm overflow-hidden">
                        <img src="https://lh3.googleusercontent.com/proxy/Z6BFwLNTk5cORsnevV_8sNBnE6so-7MLn5RXmFKMHFYxG28TuRMyMAUsiu4emLyIgkOZ7-GRpcIkpL05p1GVWiZ0z1xZ6-U58XG9cxbnVfF4fzzn8SsaANrt4tkc8UaeJ0loweljWINiqQmApte2bRBdJSU3ckAWVxRjhNO-WEZML2kJtK71OEMFfZZEa41dL9ItLio" class="card-img-top" alt="Ruang Meeting">
                        <div class="card-body">
                            <h5 class="card-title">Proyektor Pembelajaran</h5>
                            <a href="#" class="btn btn-outline-primary btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



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
