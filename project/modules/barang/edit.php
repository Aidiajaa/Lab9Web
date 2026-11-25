<?php
if (isset($_POST['submit'])) {
    $id         = $_POST['id'];
    $nama       = $_POST['nama'];
    $kategori   = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok       = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar     = null;

    if ($file_gambar['error'] == 0) {
        $filename    = str_replace(' ', '_', $file_gambar['name']);
        $destination = __DIR__ . '/../../gambar/' . $filename;
        if (move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $filename;
        }
    }

    $sql = "UPDATE data_barang SET 
            nama = '{$nama}', kategori = '{$kategori}', 
            harga_jual = '{$harga_jual}', harga_beli = '{$harga_beli}', stok = '{$stok}'";
    if (!empty($gambar)) {
        $sql .= ", gambar = '{$gambar}'";
    }
    $sql .= " WHERE id_barang = '{$id}'";
    mysqli_query($conn, $sql);

    header('Location: index.php?page=barang/list');
    exit;
}

$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM data_barang WHERE id_barang = '{$id}'";
$result = mysqli_query($conn, $sql);
if (!$result || mysqli_num_rows($result) == 0) {
    die('Error: Data tidak tersedia');
}
$data = mysqli_fetch_array($result);
?>
<section>
    <h2>Ubah Barang</h2>
    <form method="post" action="index.php?page=barang/edit" enctype="multipart/form-data">
        <div class="input">
            <label>Nama Barang</label>
            <input type="text" name="nama" value="<?= e($data['nama']); ?>" required />
        </div>
        <div class="input">
            <label>Kategori</label>
            <select name="kategori">
                <option <?= is_select('Komputer', $data['kategori']); ?> value="Komputer">Komputer</option>
                <option <?= is_select('Elektronik', $data['kategori']); ?> value="Elektronik">Elektronik</option>
                <option <?= is_select('Hand Phone', $data['kategori']); ?> value="Hand Phone">Hand Phone</option>
            </select>
        </div>
        <div class="input">
            <label>Harga Jual</label>
            <input type="number" name="harga_jual" value="<?= e($data['harga_jual']); ?>" required />
        </div>
        <div class="input">
            <label>Harga Beli</label>
            <input type="number" name="harga_beli" value="<?= e($data['harga_beli']); ?>" required />
        </div>
        <div class="input">
            <label>Stok</label>
            <input type="number" name="stok" value="<?= e($data['stok']); ?>" required />
        </div>
        <div class="input">
            <label>File Gambar</label>
            <input type="file" name="file_gambar" />
        </div>
        <div class="submit">
            <input type="hidden" name="id" value="<?= $data['id_barang']; ?>" />
            <input type="submit" name="submit" value="Simpan" />
        </div>
    </form>
</section>