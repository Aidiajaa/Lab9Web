<?php
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/header.php';
?>
<section class="content">
    <h2>Halaman Home</h2>
    <p>Total Belanja: <?= formatRupiah(hitungTotal(50000, 3)); ?></p>
</section>
<?php require_once __DIR__ . '/footer.php'; ?>