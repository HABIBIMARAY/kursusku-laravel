# AI Usage Log - Pertemuan 9 (Layout, Bootstrap, Form, jQuery Ajax)

| Masalah/Tujuan | Saran AI | Keputusan Saya | Hasil Uji |
|----------------|----------|----------------|-----------|
| Bingung urutan langkah praktikum minggu 9 dari panduan PDF | Kerjakan berurutan: install Bootstrap/jQuery, app.js dan app.css, layout, navbar, home, route, form, Ajax | Diterima | Semua file dibuat sesuai urutan, halaman tampil di browser |
| `npm install` error ERESOLVE | Pakai `npm install --legacy-peer-deps` | Diterima | Instalasi berhasil, 0 vulnerabilities |
| `npm run dev` diblokir Windows ("Application Control policy has blocked this file") | Ganti Rollup dengan versi WASM lewat `overrides`, lepas Tailwind dari package.json, vite.config.js, dan app.css | Diterima | `npm run dev` berjalan (VITE v7.3.7 ready) |
| Contoh package.json dari AI berisi nilai `"..."` sehingga `laravel-vite-plugin` rusak (invalid) | Hapus baris itu, lalu `npm install -D laravel-vite-plugin axios concurrently` | Diterima | Paket terpasang ulang |
| `laravel-vite-plugin` versi 3.x meminta Vite 8, sedangkan project memakai Vite 7 | Turunkan ke `laravel-vite-plugin@^2`, jangan upgrade ke Vite 8 | Diterima | `npm list` bersih tanpa tulisan invalid |
| Panduan memakai Laragon, project saya di XAMPP | Jalankan `php artisan serve`, buka `127.0.0.1:8000` | Diterima | Beranda dan form tampil, route JSON mengembalikan data |
| Tampilan Beranda terlalu polos | Tambah gaya hero dan kartu kursus di `app.css` dan `home.blade.php` | Diterima | Tampilan lebih rapi, struktur layout tetap sesuai panduan |
| Cara mengambil screenshot DevTools Network | Buka F12, tab Network, filter Fetch/XHR, ubah pilihan kursus, klik request `availability` | Diterima | `04-network-json.png` dan `04b-network-response.png`: GET, 200 OK, response JSON |
| Saran memakai CDN atau upgrade ke Vite 8 sebagai cadangan | Hanya jika Vite tidak bisa jalan | Ditolak | Tidak diperlukan, Vite 7 berjalan |

**Catatan Tambahan:**
Saya memakai AI (Claude) sebagai pemandu saat bingung langkah dan saat mengalami error instalasi. Saya mengetik dan menjalankan kode sendiri di VS Code. Yang belum diuji saat log ini ditulis: hamburger terbuka, Laravel Dasar, submit valid, submit tidak valid, dan Console bebas error. Hasilnya dicatat di `test-matrix.md`.