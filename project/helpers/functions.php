<?php
function formatRupiah(float $angka): string {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

function e(string $nilai): string {
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}

function is_select($var, $val) {
    if ($var == $val) return 'selected="selected"';
    return '';
}

function konversiCelciusKeFahrenheit(float $c): float {
    return ($c * 9 / 5) + 32;
}

function tentukanStatusNilai(float $nilai): string {
    if ($nilai >= 85) {
        return 'A';
    } elseif ($nilai >= 75) {
        return 'B';
    } elseif ($nilai >= 60) {
        return 'C';
    } elseif ($nilai >= 50) {
        return 'D';
    } else {
        return 'E';
    }
}

function hitungTotal(float $harga, int $jumlah): float {
    return $harga * $jumlah;
}
?>