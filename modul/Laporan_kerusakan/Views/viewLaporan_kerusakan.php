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
                <h5 class="card-title mb-0 text-md-start text-center text-dark">Laporan Kerusakan</h5>
            </div>
        </div>
        <div class="card-body">
            <table class="datatables-basic table border-top" id="table">
                <thead>
                    <th>No</th>
                    <th>Nama Fasilitas</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Lapor</th>
                    <th>Peminjam</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalLabel">Detail Kerusakan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">

                    <div class="col-md-6">
                        <label class="form-label">Nama Peminjam</label>
                        <input type="text" class="form-control" id="nama_peminjam" readonly>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Ruang / Fasilitas</label>
                        <input type="text" class="form-control" id="peminjaman" readonly>
                    </div>

                    <div class="col-12">
                        <label class="form-label">Deskripsi Kerusakan</label>
                        <textarea class="form-control" id="deskripsi" rows="3" readonly></textarea>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Tanggal Laporan</label>
                        <input type="text" class="form-control" id="tanggal_lapor" readonly>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option value="1">Diperbaiki</option>
                            <option value="2">Sedang Diperbaiki</option>
                            <option value="0">Laporan Diterima</option>
                        </select>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
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
            url: '/laporan-kerusakan/datatable',
            method: 'POST',
        },
        columns: [{
                data: 'no',
                orderable: false,
                width: 10
            },
            {
                data: 'peminjaman',
                orderable: false,
            },
            {
                data: 'deskripsi',
                orderable: false,
            },
            {
                data: 'tanggal_lapor',
                orderable: false,
            },
            {
                data: 'nama',
                orderable: false,
            },
             {
                data: 'status',
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
                    <td colspan="7" style="text-align: center; padding: 20px;">
                        <img src="/assets/img/illustrations/nodata.png" alt="No results" style="width: 100px; margin-bottom: 10px;">
                        <p style="font-size: 16px; font-weight: bold; color: #333;" class="mb-1">Oops... "${keyword}" tidak ditemukan</p>
                        <p style="font-size: 14px; color: #666;">Coba lagi dengan memasukkan kata kunci yang tepat</p>
                    </td>
                </tr>`);
        } else if (info.recordsDisplay === 0) {
            $('#table tbody').html(` <tr>
                    <td colspan="7" style="text-align: center; padding: 20px;">
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
});

function clearAllValidationErrors() {
    $('#form input, #form select, #form textarea').removeClass('is-invalid is-valid');
    $(".text-danger, .invalid-feedback").text("");
}

function detail(id) {
    $.ajax({
        type: "POST",
        url: "/laporan-kerusakan/getData",
        data: { id: id },
        dataType: "JSON",
        beforeSend: function() {
        },
        success: function(res) {
            if (res.status && res.data) {
                const d = res.data;
                $('#nama_peminjam').val(d.nama_peminjam || '-');

                const peminjaman = d.nama_ruang ? d.nama_ruang : (d.nama_fasilitas || '-');
                $('#peminjaman').val(peminjaman);

                $('#deskripsi').val(d.deskripsi || '-');
                $('#tanggal_lapor').val(formatDate(d.tanggal_lapor));
                $('#status').val(d.status_perbaikan || '0');

                $('#modalLabel').text('Detail Kerusakan - ' + (d.nama_peminjam || 'ID ' + d.id));

                $('#modal').modal('show');
            } else {
                alert('Data tidak ditemukan');
            }
        },
        error: function() {
            alert('Gagal mengambil data');
        }
    });
}

// Format tanggal jadi lebih enak dibaca
function formatDate(dateString) {
    if (!dateString) return '-';
    const options = { year: 'numeric', month: 'long', day: 'numeric' };
    return new Date(dateString).toLocaleDateString('id-ID', options);
}   
</script>
<?= $this->endSection(); ?>