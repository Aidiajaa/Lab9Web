# LAPORAN PRAKTIKUM 9

## PEMROGRAMAN WEB

**Nama** : Aidi Syahdan Firdaus  
**Nim** : 312510089  
**Kelas** : I251A  

## Persiapan praktikum :

Nyalakan apache dan mysql di xampp

![Apache dan MySQL aktif di XAMPP](screenshots/01-persiapan-xampp.png)

Buat folder di xampp/htdocs

![Folder praktikum di htdocs](screenshots/02-buat-folder-htdocs.png)

## Include dan require :

Buat file pesan.php dan uji-include-require

![Kode pesan.php dan uji-include.php](screenshots/03-file-pesan-dan-uji-include.png)

Panggil menggunakan include

![Kode memanggil file dengan include](screenshots/04-panggil-include.png)

Hasil di browser :

![Hasil pemanggilan include di browser](screenshots/05-hasil-di-browser.png)

Ubah nama pesan.php semantara, lalu amati error

![Warning saat pesan.php tidak ditemukan](screenshots/06-warning-include.png)

Ulangi percobaan menggunakan require

![Kode memanggil file dengan require](screenshots/07-ganti-require.png)

Hasilnya

![Fatal error saat pesan.php tidak ditemukan](screenshots/08-fatal-error-require.png)

Kembalikan nama filenya menjadi pesan.php

## Kesimpulan yang saya dapat :

Saat file yang dipanggil tidak ditemukan, include hanya memunculkan Warning dan tetap menjalankan baris kode setelahnya, sedangkan require langsung menghasilkan Fatal error dan menghentikan eksekusi program.

## Membuat template layout dengan php :

Buat header.php

![Kode header.php](screenshots/09-header-php.png)

Buat footer.php

![Kode footer.php](screenshots/10-footer-php.png)

Buat home.php

![Kode home.php](screenshots/11-home-php.png)

Buat about.php

![Kode about.php](screenshots/12-about-php.png)

Buat kontak.php

![Kode kontak.php](screenshots/13-kontak-php.png)

Buat style.css

![Kode style.css](screenshots/14-style-css.png)

Hasil di browser

![Hasil template layout di browser](screenshots/15-hasil-browser-template.png)

![Hasil template layout di browser](screenshots/16-hasil-browser-template-2.png)

## Analisis hasil :

**Bagian mana yang digunakan bersama oleh semua halaman?** Bagian yang digunakan bersama oleh semua halaman adalah kerangka antarmuka pada header.php (awal dokumen HTML, judul, dan navigasi), footer.php (penutup halaman), serta style.css.

**Apa yang terjadi jika teks navigasi diubah pada header.php?** Teks navigasi pada seluruh halaman yang memanggil header.php akan otomatis ikut berubah tanpa perlu mengedit setiap file halaman satu per satu.

**Mengapa konten halaman tidak diletakkan seluruhnya di header.php?** Karena setiap halaman memiliki isi konten khusus yang berbeda-beda, sedangkan template header.php hanya menyimpan bagian antarmuka awal yang digunakan bersama.

**Apa manfaat menggunakan require_once dibanding menyalin kode header ke setiap halaman?** Penggunaan require_once mencegah penulisan kode berulang, memastikan file template wajib hanya dimuat satu kali, serta mempermudah pemeliharaan saat ada perubahan tampilan.

## Function pada PHP :

Function tanpa parameter

![Function tanpa parameter](screenshots/17-function-tanpa-parameter.png)

Function dengan parameter

![Function dengan parameter](screenshots/18-function-dengan-parameter.png)

Function dengan return

![Function dengan return](screenshots/19-function-dengan-return.png)

Type declaration dan nilai default

![Type declaration dan nilai default](screenshots/20-type-declaration-default.png)

Memisahkan function ke file helper

![Function dipisahkan ke file helper](screenshots/21-file-helper.png)

![Pemanggilan function dari file helper](screenshots/22-pemanggilan-helper.png)

## Latihan :

buat function konversi celcius ke farenheit

![Function konversi celcius ke farenheit](screenshots/23-function-celcius-fahrenheit.png)

Buat function tentukan status nilai

![Function tentukan status nilai](screenshots/24-function-status-nilai.png)

Buat function hitung total

![Function hitung total](screenshots/25-function-hitung-total.png)

Pindahkan seluruh function ke file helpers.php dan panggil dari minimal dua halaman berbeda

Semua function sudah di buat dalam helper

Ubah home.php

![home.php setelah memakai helper](screenshots/26-home-php-helper.png)

Ubah about.php

![about.php setelah memakai helper](screenshots/27-about-php-helper.png)

Halaman about

![Halaman about di browser](screenshots/28-halaman-about.png)

Halaman home

![Halaman home di browser](screenshots/29-halaman-home.png)

Buat folder project dan susun struktur seperti di modul

![Struktur folder project](screenshots/30-struktur-folder-project.png)

## Routing sederhana dengan parameter URL

Isi header.php di folder project, untuk footer pakai yang sebelumnya

![Kode header.php di folder project](screenshots/31-project-header-php.png)

Isi dashboard.php

![Kode dashboard.php](screenshots/32-dashboard-php.png)

Isi index.php

![Kode index.php](screenshots/33-project-index-php.png)

Isi list.php

![Kode list.php](screenshots/34-list-php.png)

Isi add.pho

![Kode add.php](screenshots/35-add-php.png)

Buat file 404.php

![Kode 404.php](screenshots/36-404-php.png)

Hasil di browser :

![Hasil routing di browser](screenshots/37-hasil-browser-routing.png)

Bagian data pengguna

![Bagian data pengguna](screenshots/38-data-pengguna.png)

Bagian tambah pengguna

![Bagian tambah pengguna](screenshots/39-tambah-pengguna.png)

Parameter page yang tidak terdaftar

![Parameter page yang tidak terdaftar](screenshots/40-page-tidak-terdaftar.png)

Parameter page kosong

![Parameter page kosong](screenshots/41-page-kosong.png)

## Integrasi aplikasi database project sebelumnya:

Salin folder project sebelumnya ke dalam folder project sekarang

![Folder project sebelumnya disalin](screenshots/42-salin-folder-project.png)

Isi database.php

![Kode database.php](screenshots/43-database-php.png)

Tambahkan fungsi is_select() dari ubah.php lama ke dalam file helper agar bisa dipakai ulang untuk form pilihan kategor

![Fungsi is_select() di file helper](screenshots/44-fungsi-is-select.png)

![Isi file helper](screenshots/45-helper-lengkap.png)

Gabungkan CSS layout dari Modul 9 dengan CSS tabel dan form dari lab8 php database/style.css

![Isi file helper](screenshots/45-helper-lengkap.png)

Ubah heder.php agar navigasinya sesuai

![header.php dengan navigasi baru](screenshots/46-header-navigasi.png)

Ubah nama folder users ke barang

![Folder users diubah menjadi barang](screenshots/47-folder-barang.png)

Ubah list.php

![Kode list.php untuk data barang](screenshots/48-list-php-barang.png)

Ubah add.php

![Kode add.php untuk data barang](screenshots/49-add-php-barang.png)

Isi edit.php

![Kode edit.php](screenshots/50-edit-php.png)

Isi hapus.php

![Kode hapus.php](screenshots/51-hapus-php.png)

Lalu ubah index.php sebagai router utama

![index.php sebagai router utama](screenshots/52-index-php-router.png)

Hasil di browser

![Hasil aplikasi CRUD di browser](screenshots/53-hasil-browser-crud.png)

Uji tambah barang

![Form tambah barang](screenshots/54-uji-tambah-barang-form.png)

![Hasil uji tambah barang](screenshots/55-uji-tambah-barang-hasil.png)

## Pertanyaan pemahaman

1. **Jelaskan pengertian modularisasi program dan minimal tiga manfaatnya.** Modularisasi program adalah teknik memecah kode aplikasi menjadi bagian-bagian kecil yang terpisah berdasarkan fungsi dan tanggung jawabnya masing-masing. Tiga manfaat utamanya adalah mencegah penulisan kode yang berulang, mempermudah pemeliharaan serta penelusuran kode saat aplikasi berkembang, dan meminimalkan konflik pengerjaan dalam tim.

2. **Apa perbedaan include dan require ketika file yang dipanggil tidak ditemukan?** Ketika file tidak ditemukan, include hanya menghasilkan pesan peringatan (Warning) dan tetap melanjutkan eksekusi baris kode berikutnya, sedangkan require langsung memunculkan Fatal error dan menghentikan eksekusi program pada baris tersebut.

3. **Mengapa require_once sesuai digunakan untuk memuat konfigurasi database?** Karena file konfigurasi database bersifat wajib agar aplikasi dapat berjalan, dan penggunaan require_once menjamin file tersebut hanya dimuat satu kali sehingga tidak terjadi pendeklarasian ulang yang memicu error.

4. **Jelaskan perbedaan parameter, argumen, dan nilai return pada function.** Parameter adalah variabel yang didefinisikan pada deklarasi function, argumen adalah nilai nyata yang dikirimkan saat function dipanggil, sedangkan nilai return adalah hasil akhir yang dikembalikan oleh function kepada pemanggilnya agar dapat disimpan atau diolah kembali.

5. **Mengapa header dan footer sebaiknya dipisahkan dari konten halaman?** Agar komponen antarmuka yang seragam di seluruh halaman tidak perlu ditulis ulang secara berulang-ulang, sehingga perubahan desain atau navigasi cukup dilakukan pada satu file template saja.

6. **Apa fungsi index.php pada pola routing yang dipraktikkan?** index.php berperan sebagai pintu masuk tunggal (entry point) dan pengatur rute (router) yang membaca parameter URL, memuat konfigurasi serta template bersama, lalu memanggil file modul halaman yang sesuai.

7. **Mengapa router sebaiknya menggunakan whitelist rute?** Untuk membatasi akses hanya pada daftar halaman yang telah ditentukan dan diizinkan oleh aplikasi, sekaligus mengarahkan permintaan halaman yang tidak dikenal ke halaman 404 secara aman.

8. **Apa risiko jika input page langsung digabungkan menjadi path file yang di-require?** Aplikasi menjadi rentan terhadap celah keamanan path traversal maupun pemanggilan file internal yang tidak semestinya diakses oleh pengguna melalui manipulasi parameter URL.

9. **Apa fungsi aturan RewriteCond dan RewriteRule pada .htaccess?** RewriteCond memeriksa kondisi apakah URL yang diminta bukan merupakan file atau direktori fisik yang tersedia di server, sedangkan RewriteRule meneruskan permintaan URL ringkas tersebut ke index.php?page=... agar diproses oleh router.

10. **Sebutkan bagian aplikasi CRUD yang paling tepat dipindahkan ke config, views, helpers, dan modules.** Pengaturan koneksi database dipindahkan ke config, komponen tampilan bersama seperti header, footer, dashboard, dan halaman 404 ke views, fungsi bantuan umum seperti format mata uang atau validasi ke helpers, serta seluruh file fitur utama CRUD (tampil, tambah, ubah, hapus data) ke modules.
