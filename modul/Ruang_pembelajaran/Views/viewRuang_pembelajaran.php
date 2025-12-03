<?= $this->extend('layout/template'); ?>
<?= $this->section('css'); ?>
<link rel="stylesheet" href="/assets/vendor/libs/select2/select2.css" />
<link href="/assets/vendor/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
<link href="/assets/vendor/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
<link href="/assets/vendor/libs/select2/dist/css/select2.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/litepicker/dist/css/litepicker.css" />

<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <div class="row card-header flex-column flex-md-row">
            <div class="d-md-flex justify-content-between align-items-center dt-layout-start col-md-auto me-auto mt-0">
                <h5 class="card-title mb-0 text-md-start text-center text-dark">Ruang Pembelajaran</h5>
            </div>
            <div class="d-md-flex justify-content-between align-items-center dt-layout-end col-md-auto ms-auto mt-0">
                <div class="dt-buttons btn-group flex-wrap mb-0">
                    <button class="btn create-new btn-primary" type="button" onclick="add()"><span><span
                                class="d-flex align-items-center gap-2"><i class="icon-base bx bx-plus icon-sm"></i>
                                <span class="d-none d-sm-inline-block">Tambah Ruangan</span></span></span></button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="datatables-basic table border-top" id="table">
                <thead>
                    <th>No</th>
                    <th>Nama Ruangan</th>
                    <th>Lokasi</th>
                    <th>Kapasitas</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true"
    data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-md modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="javascript:void(0)" id="form">
                    <input type="hidden" name="id" id="id">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="nama_ruang" class="form-label">Nama Ruangan</label>
                            <input type="text" id="nama_ruang" name="nama_ruang" class="form-control"
                                placeholder="Contoh: Auditoriom Teknik">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="lokasi" class="form-label">Lokasi</label>
                            <input type="text" id="lokasi" name="lokasi" class="form-control"
                                placeholder="Contoh : Gedung DC Teknik">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="kapasitas" class="form-label">Kapasitas</label>
                            <input type="text" id="kapasitas" name="kapasitas" class="form-control"
                                placeholder="Masukan Jumlah Kapasitas Saja">
                            <div class="invalid-feedback"></div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('js'); ?>

<script src="/assets/vendor/libs/select2/dist/js/select2.min.js"></script>
<script src="/assets/vendor/libs/select2/dist/js/select2.full.min.js"></script>
<script src="/assets/vendor/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/assets/vendor/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="/assets/vendor/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/vendor/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/litepicker.js"></script>
<script>
var table;
var modal = $('#modal');

document.addEventListener("DOMContentLoaded", function() {
    table = $('#table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        autoWidth: false,
        info: true,
        paging: false,
        searching: false,
        stateSave: true,
        bDestroy: true,
        order: [],
        ajax: {
            url: '/ruang-pembelajaran/datatable',
            method: 'POST',
        },
        columns: [{
                data: 'no',
                orderable: false,
                width: 10
            },
            {
                data: 'nama_ruang',
                orderable: false,
            },
            {
                data: 'lokasi',
                orderable: false,
            },
            {
                data: 'kapasitas',
                orderable: false,
            },
            {
                data: 'action',
                orderable: false,
                width: 50
            },
        ],
        language: {
            url: '/assets/vendor/libs/bahasa/id.json',
        },
    });

    $('#table').on('draw.dt', function() {
        let info = table.page.info();
        let keyword = $('input[type="search"]').val();

        if (info.recordsDisplay === 0 && keyword) {
            $('#table tbody').html(`
                <tr>
                    <td colspan="5" style="text-align: center; padding: 20px;">
                        <img src="/assets/img/illustrations/nodata.png" alt="No results" style="width: 100px; margin-bottom: 10px;">
                        <p style="font-size: 16px; font-weight: bold; color: #333;" class="mb-1">Oops... "${keyword}" tidak ditemukan</p>
                        <p style="font-size: 14px; color: #666;">Coba lagi dengan memasukkan kata kunci yang tepat</p>
                    </td>
                </tr>`);
        } else if (info.recordsDisplay === 0) {
            $('#table tbody').html(` <tr>
                    <td colspan="5" style="text-align: center; padding: 20px;">
                        <img src="/assets/img/illustrations/nodata.png" alt="No data" style="width: 100px;">
                        <p style="font-size: 16px; font-weight: bold; color: #333;" class="mb-1">Data tidak tersedia</p>
                        <p style="font-size: 14px; color: #666;">Belum ada data yang dapat ditampilkan di halaman ini</p>
                    </td>
                </tr>`);
        }
    });
});


$(document).ready(function() {
    $("#form input, #form select, #form textarea").on("input change", function() {
        $(this).removeClass("is-invalid");
    });

    modal.on('show.bs.modal', function() {
        clearAllValidationErrors();
    });

    modal.on('hidden.bs.modal', function() {
        clearAllValidationErrors();
    });

    $('#form').submit(function(e) {
        e.preventDefault();

        var form = $('#form')[0];
        var formData = new FormData(form);

        $.ajax({
            type: "POST",
            url: "/ruang-pembelajaran/save",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "JSON",
            beforeSend: function() {
                showblockUI();
            },
            complete: function() {
                hideblockUI();
            },
            success: function(response) {
                if (response.status) {
                    $('#form')[0].reset();
                    clearAllValidationErrors();
                    table.ajax.reload();
                    showNotify({
                        status: 'success',
                        title: 'Berhasil',
                        text: response.notif,
                        type: 'fill'
                    });
                    modal.modal('hide');
                } else {
                    $.each(response.errors, function(key, value) {
                        $('[name="' + key + '"]').addClass('is-invalid');
                        if (key == '') {
                            $('#invalid-item-type').text(value);
                        } else {
                            $('[name="' + key + '"]').next().text(value);
                        }

                        if (value == "") {
                            $('[name="' + key + '"]').removeClass('is-invalid');
                        }
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown, exception) {
                var msg = '';
                if (jqXHR.status === 0) {
                    msg = 'Not connect.\n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.\n' + jqXHR.responseText;
                }
                showNotify({
                    status: 'error',
                    title: 'Error',
                    text: msg,
                    type: 'fill'
                });
            }
        });
    });
});

function clearAllValidationErrors() {
    $('#form input, #form select, #form textarea').removeClass('is-invalid is-valid');
    $(".text-danger, .invalid-feedback").text("");
}

function add() {
    $('#id').val('');
    $('#form')[0].reset();

    clearAllValidationErrors();

    $('#modal .modal-title').text('Buat Informasi Ruangan');
    modal.modal('show');
}

function edit(id) {
    $.ajax({
        type: "POST",
        url: "/ruang-pembelajaran/getData",
        data: {
            id: id
        },
        dataType: "JSON",
        beforeSend: function() {
            showblockUI();
        },
        complete: function() {
            hideblockUI();
        },
        success: function(response) {
            if (response.status) {
                const d = response.data;

                $('#form input, #form select, #form description').removeClass('is-invalid is-valid');
                $('#invalid-item-type').text('');

                $('#id').val(d.id);
                $('#nama_ruang').val(d.nama_ruang);
                $('#lokasi').val(d.lokasi);
                $('#kapasitas').val(d.kapasitas);

                $('#modalLabel').text('Edit Informasi Ruangan');
                modal.modal('show');
            }
        },
        error: function(jqXHR, textStatus, errorThrown, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = 'Not connect.\n Verify Network.';
            } else if (jqXHR.status == 404) {
                msg = 'Requested page not found. [404]';
            } else if (jqXHR.status == 500) {
                msg = 'Internal Server Error [500].';
            } else if (exception === 'parsererror') {
                msg = 'Requested JSON parse failed.';
            } else if (exception === 'timeout') {
                msg = 'Time out error.';
            } else if (exception === 'abort') {
                msg = 'Ajax request aborted.';
            } else {
                msg = 'Uncaught Error.\n' + jqXHR.responseText;
            }
            showNotify({
                status: 'error',
                title: 'Error',
                text: msg,
                position: 'right top',
                type: 'fill'
            });
        }
    });
}

function remove(id, nama_ruang) {
    bootbox.confirm({
        title: "<strong>Hapus Data Ruangan</strong>",
        message: "Yakin akan menghapus data ruangan <strong style='text-decoration: underline;'>" + nama_ruang +
            "</strong> ? Data yang telah dihapus tidak dapat dikembalikan lagi.",
        closeButton: false,
        centerVertical: true,
        size: 'small',
        animate: false,
        buttons: {
            confirm: {
                label: 'Ya,hapus',
                className: 'btn-danger w-100'
            },
            cancel: {
                label: 'Batal',
                className: 'btn-secondary w-100'
            }
        },
        callback: function(result) {
            if (result) {
                $.ajax({
                    url: "/ruang-pembelajaran/remove",
                    type: "POST",
                    dataType: "JSON",
                    data: {
                        id: id,
                        nama_ruang: nama_ruang,
                    },
                    beforeSend: function() {
                        showblockUI();
                    },
                    complete: function() {
                        hideblockUI();
                    },
                    success: function(response) {
                        if (response.status) {
                            showNotify({
                                status: 'success',
                                title: 'Berhasil',
                                text: "Informasi Ruangan '" + response.nama_ruang +
                                    "' telah dihapus",
                                type: 'fill'
                            });

                            table.ajax.reload();
                        } else {
                            showNotify({
                                status: 'warning',
                                title: 'Gagal',
                                text: "Informasi Ruangan '" + response.nama_ruang +
                                    "' telah berelasi dengan data lain.",
                                type: 'fill'
                            });
                        }
                    },
                    error: function(jqXHR, textStatus, errorThrown, exception) {
                        var msg = '';
                        if (jqXHR.status === 0) {
                            msg = 'Not connect.\n Verify Network.';
                        } else if (jqXHR.status == 404) {
                            msg = 'Requested page not found. [404]';
                        } else if (jqXHR.status == 500) {
                            msg = 'Internal Server Error [500].';
                        } else if (exception === 'parsererror') {
                            msg = 'Requested JSON parse failed.';
                        } else if (exception === 'timeout') {
                            msg = 'Time out error.';
                        } else if (exception === 'abort') {
                            msg = 'Ajax request aborted.';
                        } else {
                            msg = 'Uncaught Error.\n' + jqXHR.responseText;
                        }
                        showNotify({
                            status: 'error',
                            title: 'Error',
                            text: msg,
                            type: 'fill'
                        });
                    }
                });
            }
        }
    });
}
</script>
<?= $this->endSection(); ?>