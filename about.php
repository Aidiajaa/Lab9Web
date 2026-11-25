<?php
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/header.php';
?>
<section class="content">
    <h2>Tentang Aplikasi</h2>
    <p>30&deg;C = <?= konversiCelciusKeFahrenheit(30); ?>&deg;F</p>
    <p>Nilai 85 = Predikat <?= tentukanStatusNilai(85); ?></p>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>