<?php

function isChecked($status)
{
    return ($status) ? "checked" : "";
}

function cek($data)
{
    echo "<pre>";
    return var_dump($data);
}

function isLabelChecked($label)
{
    return ($label) ? "Aktif" : "Nonaktif";
}

function isLabelAvailable($label)
{
    return ($label) ? "Available" : "Not Available";
}

function getAmount($money)
{
    // Cek apakah format accounting (nilai dalam tanda kurung)
    $isNegative = false;
    if (preg_match('/^\(.*\)$/', trim($money))) {
        $isNegative = true;
        $money = trim($money, '()'); // Hilangkan tanda kurung
    } elseif (strpos($money, '-') !== false) {
        $isNegative = true;
    }

    // Bersihkan karakter non-angka kecuali koma dan titik
    $cleanString = preg_replace('/([^0-9\.,])/i', '', $money);
    $onlyNumbersString = preg_replace('/([^0-9])/i', '', $money);

    // Hitung jumlah pemisah desimal yang harus dihapus
    $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

    // Hapus pemisah ribuan dengan jumlah yang sesuai
    $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
    $removedThousandSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '', $stringWithCommaOrDot);

    // Ubah ke format float
    $amount = (float) str_replace(',', '.', $removedThousandSeparator);

    return $isNegative ? -$amount : $amount;
}

function encrypt_url($string)
{

    $output = false;
    $security       = parse_ini_file("security.ini");
    $secret_key     = $security["encryption_key"];
    $secret_iv      = $security["iv"];
    $encrypt_method = $security["encryption_mechanism"];

    $key    = hash("sha256", $secret_key);

    $iv     = substr(hash("sha256", $secret_iv), 0, 16);

    $result = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
    $output = base64_encode($result);
    return $output;
}

function decrypt_url($string)
{

    $output = false;

    $security       = parse_ini_file("security.ini");
    $secret_key     = $security["encryption_key"];
    $secret_iv      = $security["iv"];
    $encrypt_method = $security["encryption_mechanism"];

    $key    = hash("sha256", $secret_key);

    $iv = substr(hash("sha256", $secret_iv), 0, 16);

    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    return $output;
}

function createSlug($text)
{
    $text = preg_replace('/[^a-zA-Z0-9\s]/', '', $text);

    $text = str_replace(' ', '-', $text);

    $text = strtolower($text);

    return $text;
}

function slugify($text, string $divider = '-')
{
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    $text = preg_replace('~[^-\w]+~', '', $text);

    $text = trim($text, $divider);

    $text = preg_replace('~-+~', $divider, $text);

    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}

function dateTimeToIndo($tanggal)
{
    $bulan_indo = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    ];

    $date = new DateTime($tanggal);

    $bulan_inggris = $date->format('F');

    $bulan = $bulan_indo[$bulan_inggris];

    $formatted_date = $date->format('d') . ' ' . $bulan . ' ' . $date->format('Y') . ', ' . $date->format('H:i:s');

    return $formatted_date;
}

function dateToIndo($tanggal)
{
    $bulan_indo = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    ];

    $date = new DateTime($tanggal);

    $bulan_inggris = $date->format('F');

    $bulan = $bulan_indo[$bulan_inggris];

    $formatted_date = $date->format('d') . ' ' . $bulan . ' ' . $date->format('Y');

    return $formatted_date;
}

function monthYearToIndo($tanggal)
{
    $bulan_indo = [
        'January' => 'Januari',
        'February' => 'Februari',
        'March' => 'Maret',
        'April' => 'April',
        'May' => 'Mei',
        'June' => 'Juni',
        'July' => 'Juli',
        'August' => 'Agustus',
        'September' => 'September',
        'October' => 'Oktober',
        'November' => 'November',
        'December' => 'Desember'
    ];

    $date = new DateTime($tanggal);

    $bulan_inggris = $date->format('F');

    $bulan = $bulan_indo[$bulan_inggris];

    $formatted_date = $bulan . ' ' . $date->format('Y');

    return $formatted_date;
}

function flatpickrToNormal($date)
{
    $bulan_indo_to_eng = [
        'Januari' => 'January',
        'Februari' => 'February',
        'Maret' => 'March',
        'April' => 'April',
        'Mei' => 'May',
        'Juni' => 'June',
        'Juli' => 'July',
        'Agustus' => 'August',
        'September' => 'September',
        'Oktober' => 'October',
        'November' => 'November',
        'Desember' => 'December'
    ];

    foreach ($bulan_indo_to_eng as $indo => $eng) {
        if (strpos($date, $indo) !== false) {
            $date = str_replace($indo, $eng, $date);
            break;
        }
    }
    $tgl = DateTime::createFromFormat('d F Y', $date);

    return $tgl->format('Y-m-d');
}

function monthYearFlatpickrToNormal($date)
{
    $bulan_indo_to_eng = [
        'Januari' => 'January',
        'Februari' => 'February',
        'Maret' => 'March',
        'April' => 'April',
        'Mei' => 'May',
        'Juni' => 'June',
        'Juli' => 'July',
        'Agustus' => 'August',
        'September' => 'September',
        'Oktober' => 'October',
        'November' => 'November',
        'Desember' => 'December'
    ];

    foreach ($bulan_indo_to_eng as $indo => $eng) {
        if (strpos($date, $indo) !== false) {
            $date = str_replace($indo, $eng, $date);
            break;
        }
    }

    $tgl = DateTime::createFromFormat('F Y', $date);

    return $tgl ? $tgl->format('Y-m') : null;
}

function mainDomain()
{
    echo 'https://sipri-unsil.com/';
}
