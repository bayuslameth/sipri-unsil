<?php

use Config\Database;
use Config\Services;

$this->db = Database::connect();
$this->session    = Services::session();
?>
<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="/assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php echo $title; ?> | Sipri Unsil</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon"
        href="data:image/png;base64,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" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/css/demo.css" />
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="/assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-notify/dist/simple-notify.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="/assets/vendor/js/helpers.js"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="/assets/js/config.js"></script>
    <style>
    #template-customizer {
        display: none !important;
    }
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAA1VBMVEUdMWP///////3//v8eMWIbMmL///ogL2gOKFxve40tPF0ZLWMfMl0eMGUcM18TKWawuMdgaokIG1d0fpYPKGAaMGn1+fvV3OCEjqMOJVDCytEBHE7V3OQAFk4AFVEcM1x8hKEJHlSTmqwfL2sAHE0UK1sbNGcAFUgAGEUVI2ATKmE+TXMSK13U4OsvQGjH0tz///ODjqANIlAAH1e3xM/29ftYZIWXpbtse5Vjboecn6nl7PDJ0eENKlaPmrVLWXUbNVaip8WkssM/R27b4vVaZIqwuNbjVtDZAAAG0UlEQVR4nO2dD1faSBDAd5PdYIVZsRgUtBcRgoJIaaz1emq96137/T/SzYY/en22GdOtsLn53evrvT6S2V9msxAyGYRgGIZhGIZhGIZhGIZhGIZhGIZhGIZhmCpRA6WEThQUopPEKKjBfLuhUCKOY90oRg+HWgvcgzBJQxcHUokWCiO5UtRG29jF4BgfbTYUOhUgoF+IMHh0cGuNW+H4aZG01q4EcYdqPN4jsDPaQ0WjFoaT07Ozwdnpb4UcNuyAcaIoqO+NdgiRxuMtbUXdoMXkvEVkNxViISgmu0dz9hf/He3vH/3nf5d/LqaLlIBId2mBXrXOlbMkQn90LIm87djTdb7d3av5vwWFyKmIUdGeYJ0uNdRBz9lpKPqjlpxFhKCzIDcUK8MoioKwGLmd1kS+1KBhMCsOFMxm8mBUc5VDAzstGYXFqcBk3B7ierGYpqk1DEJKDreVNcTVEQZdwusDGaLh3jBxZKj13rEMKYahfNsTuPDOt9tCw4AySdGwLnArowxcdiUhEr4GDV0tNJiU3JAwS0PZ7QG+cT42xOEUs13XjRoaJvCadh7icNAQfjxwOi9sSIrEhmy4VkMKfhtWP4fVN6Tgt2H1c8iG/htS8Nuw+jlkQ/8NKfhtWP0cVt+Qgt+G1c8hG/pvSMFvw+rnsPqGFNwaPvc7b+1fDg31voWU3QzU8s7Msw21mBtSAgXyYEu4NiSMVHY7EC9vXJYwbOR3ZiiBAvluy5kgWEM8cMX3AYPcUJXOITSgh4YEgsixYUsGlFud1rDeF2UNDSRi0CXdUg1mTg0buWFUfHqE8m0W/4ShTmwOKSf8PIfqxwOnk6AhCWtYi7X5CUPqeSjRcOjOcHzcJnHV7mZ1aJQ2NAmM3uNeSBxMhLOCGg2TzmAwOCzmNMXDWnqlMRgJOqRAh2fZ3UNdiwuKC7EWPNqmhOFzIjlbZ8pTztAnyhpuQHKIcA43z1AX8c3SVtpQFUZybAbWzVa2EhS1rYks+8kbr4aUSRJTHKiRaKWUs+UUbAWtMJR1XDw+xM82TBbzhBIH7FWaK0NMCtT6/bgYsEfB/lXS0CiI+6RI/X4ND7yzCloNaZb1OhRSFIxFWUNbfznpZcVhsl6WpUo7M4Txh4v9o30CR9fZw9tZifMQROczJY7l9zG4WnF0vPOxHVEGGshmR/3E51IA3ekGlFrdaCYPLp0ZGms4o3xRE8nm4OED4/NnKR6drCspF6K2gnYE7ipod3bbAe2qrdmrrRbxEteHJr8CJmxgK2hHylklu7GGlJGGsvm633iJb4Sl2+9LN9DQ8TfCL2xIwW/D6uew+oYU/Dasfg7Z0H9DCn4bVj+HbOi/IQW/Daufw+obUvDbsPo5ZEP/DSn4bVj9HLKh/4YU/DbkHHpsqBW5rs1XQ5F8v76UDb0yfLqktEqGxa+3xbrVNvT1/uHCkETgpaGxreFaJ9/nj/ZyZ6G8ua87K/56QUNk7/LJJnuj0ej1m+twUaeBO70egLMq6Jc1/BbVyAvqBEw6x225NIzaHyaxclUxtF5D3Vj0YRwcX8lglcPbSS1211VwrYYCIK6BSO8+WcFgHiZot0a1VWmS74YxCqad+1tpO/gt47xP+2CUq8aJazbEJGbb1ze4o1XlWXD1YdQ3f+q+b4ZPFnEprc5PbuwExT3lz3QFYfskAzCJ9i6HTxpqrf7C+RnOy84CGc0C+TV1pLYhhpPp7TyD+TNfuMvbqcuHZdZuaItq7y+CKH92LrIfud+fp44fyVizoYBhautbcz8UbG7fDeOnX+mpIejh8PCgLecXiVefkjvt+rGadecQ18xa53N+6S8vjhOt3b3Vb4ahfRYi1tu3dk/N+zvMKH5WrZShyJ8znPz9j7x5p/fcqm2MYb63L1/vO8LxErNRhlCHLdvJvrqGeDLa3v5VNtR4TZ9U2TB/g/hFj5duhqHd6eqnMypp+CthQzZkQzZkQzZkQzZkQzZkQzZkQzZkQzZkQzZkQzZkQzZkQzZkQzZkQzb8/xiKvKsgpd29Naytmu2On2WYN4FdEwbQMKL8Rnogv17GsKw6s7/ITjow9rfV46F2Xa32DPLel1Fh88swzHtfLlvQ2lk6C0JbGVqEnOaGaxMU8fhjmzDVLM3swTB9lbexpORwCrFw3uGZDh7baYvIlzqshpp+vDiicTEFsB2S12Vou1g/+SzSEw8n7cSgk4WhTk/Pzs5O3xQzaECs1phDoYwCANMoROSNqJf9vLUeCmMoTbe1wVm6xo7si47lqrjNts67ja/GrezcA1xbC0BDAc4ayjIMwzAMwzAMwzAMwzAMwzAMwzAMwzCMt/wLhDafnpvRTasAAAAASUVORK5CYII="
                            alt="Logo Sipri Unsil" width="50px">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sipri Unsil</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboards -->

                    <!-- Apps & Pages -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Apps</span>
                    </li>
                    <!-- Dashboard -->
                    <li class="menu-item <?= ($menu === 'dashboard') ? 'active' : '' ?>">
                        <a href="/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Dashboards">Dashboards</div>
                        </a>
                    </li>

                    <!-- Peminjaman -->
                    <li class="menu-item <?= ($menu === 'peminjaman') ? 'open' : '' ?>">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Peminjaman">Peminjaman</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item <?= ($submenu === 'pengajuan-peminjaman') ? 'active' : '' ?>">
                                <a href="/pengajuan-peminjaman" class="menu-link">
                                    <div data-i18n="Pengajuan Peminjaman">Pengajuan Peminjaman</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Sarana & Prasarana -->
                    <li class="menu-item <?= ($menu === 'sarpras') ? 'open' : '' ?>">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-carousel"></i>
                            <div data-i18n="Sarana & Prasarana">Sarana & Prasarana</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item <?= ($submenu === 'sarana') ? 'active' : '' ?>">
                                <a href="/sarana" class="menu-link">
                                    <div data-i18n="Sarana & Prasarana">Sarana & Prasarana</div>
                                </a>
                            </li>
                            <li class="menu-item <?= ($submenu === 'ruang-pembelajaran') ? 'active' : '' ?>">
                                <a href="/ruang-pembelajaran" class="menu-link">
                                    <div data-i18n="Ruang Pembelajaran">Ruang Pembelajaran</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Laporan -->
                    <li class="menu-item <?= ($menu === 'laporan') ? 'open' : '' ?>">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Laporan">Laporan</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item <?= ($submenu === 'laporan-kerusakan') ? 'active' : '' ?>">
                                <a href="/laporan-kerusakan" class="menu-link">
                                    <div data-i18n="Laporan Kerusakan">Laporan Kerusakan</div>
                                </a>
                            </li>
                            <li class="menu-item <?= ($submenu === 'laporan-peminjaman') ? 'active' : '' ?>">
                                <a href="/laporan-peminjaman" class="menu-link">
                                    <div data-i18n="Laporan Peminjaman">Laporan Peminjaman</div>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                    <i class="bx bx-search bx-sm"></i>
                                    <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                                </a>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Style Switcher -->
                            <li class="nav-item me-2 me-xl-0">
                                <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                                    <i class="bx bx-sm"></i>
                                </a>
                            </li>
                            <!--/ Style Switcher -->

                            <!-- Notification -->
                            <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                    <i class="bx bx-bell bx-sm"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end py-0">
                                    <li class="dropdown-menu-header border-bottom">
                                        <div class="dropdown-header d-flex align-items-center py-3">
                                            <h5 class="text-body mb-0 me-auto">Notification</h5>
                                            <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                        </div>
                                    </li>
                                    <li class="dropdown-notifications-list scrollable-container">
                                        <ul class="list-group list-group-flush">
                                            <!-- <li
                                                class="list-group-item list-group-item-action dropdown-notifications-item">
                                                <div class="d-flex">
                                                    <div class="flex-shrink-0 me-3">
                                                        <div class="avatar">
                                                            <img src="/assets/img/avatars/1.png" alt
                                                                class="w-px-40 h-auto rounded-circle" />
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="mb-1">Notifications Is Empty</h6>
                                                        <p class="mb-0">Your Notif will display here</p>
                                                    </div>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </li>
                                    <li class="dropdown-menu-footer border-top">
                                        <a href="javascript:void(0);"
                                            class="dropdown-item d-flex justify-content-center p-3">
                                            View all notifications
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ Notification -->
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="https://cdn-icons-png.flaticon.com/512/9187/9187532.png" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="pages-account-settings-account.html">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="https://cdn-icons-png.flaticon.com/512/9187/9187532.png"
                                                            alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span
                                                        class="fw-semibold d-block"><?php echo $this->session->get('nama');?></span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="profile">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/login/logout" target="_blank">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input type="text" class="form-control search-input container-xxl border-0"
                            placeholder="Search..." aria-label="Search..." />
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <?= $this->renderSection('content');?>


                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>

        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="/assets/vendor/libs/popper/popper.js"></script>
    <script src="/assets/vendor/js/bootstrap.js"></script>
    <script src="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="/assets/vendor/libs/hammer/hammer.js"></script>
    <script src="/assets/vendor/libs/i18n/i18n.js"></script>
    <script src="/assets/vendor/libs/typeahead-js/typeahead.js"></script>

    <script src="/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="/assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="/assets/vendor/libs/blockui/jquery.blockui.min.js"></script>
    <script src="/assets/vendor/libs/bootbox/bootbox.min.js"></script>

    <!-- <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script> -->
    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="/assets/js/dashboards-analytics.js"></script>

    <!-- dropzone -->
    <!-- <script src="/assets/js/forms-file-upload.js"></script> -->

    <!-- Simple Notify -->
    <script src="https://cdn.jsdelivr.net/npm/simple-notify/dist/simple-notify.min.js"></script>


    <script>
    function showblockUI() {
        jQuery.blockUI({
            message: '<div class="spinner-border" role="status"></div>',
            baseZ: 9999,
            css: {
                border: 'none',
                padding: '15px',
                backgroundColor: '#000',
                '-webkit-border-radius': '10px',
                '-moz-border-radius': '10px',
                opacity: .5,
                color: '#fff'
            }
        });
    }

    function hideblockUI() {
        $.unblockUI();
    }

    function showNotify({
        status = 'success',
        title = 'Notify Title',
        text = 'Notify text lorem ipsum',
        effect = 'slide',
        speed = 300,
        customClass = '',
        customIcon = '',
        showIcon = true,
        showCloseButton = true,
        autoclose = true,
        autotimeout = 3000,
        notificationsGap = null,
        notificationsPadding = null,
        type = 'outline',
        position = 'x-center',
        customWrapper = '',
    } = {}) {
        new Notify({
            status,
            title,
            text,
            effect,
            speed,
            customClass,
            customIcon,
            showIcon,
            showCloseButton,
            autoclose,
            autotimeout,
            notificationsGap,
            notificationsPadding,
            type,
            position,
            customWrapper,
        });
    }
    </script>
    <?= $this->renderSection('js');?>
</body>

</html>