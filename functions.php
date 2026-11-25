<?php
function tampilkanSalam() {
    echo "Selamat belajar PHP modular!";
}
tampilkanSalam();
?>

<?php
function sapaPengguna($nama) {
    echo "Halo, " . htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
}
sapaPengguna("Rina");
?>

<?php
function hitungLuasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}
$luas = hitungLuasPersegiPanjang(8, 5);
echo "Luas: " . $luas;
?>

<?php
function hitungDiskon(float $harga, float $persen = 10): float {
    return $harga * ($persen / 100);
}
echo hitungDiskon(200000); // diskon 10%
echo hitungDiskon(200000, 15); // diskon 15%
?>