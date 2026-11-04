# AI Usage Log - Pertemuan 7 (Laravel)

| Masalah/Tujuan | Saran AI | Keputusan Saya | Hasil Uji |
|----------------|----------|----------------|-----------|
| Bingung urutan langkah praktikum minggu 7 dari panduan PDF | Kerjakan berurutan: buat project, route, controller, Blade, aset, Git, README | Diterima | Alur Route -> Controller -> Blade berjalan di browser |
| Tidak tahu file mana yang diedit pada langkah route | Ketik di `routes/web.php`, lalu cek di browser | Diterima | Tulisan "KursusKu berjalan!" muncul |
| Mengubah route agar memakai controller | Buat `HomeController` dengan `php artisan make:controller`, lalu arahkan route ke `[HomeController::class, 'index']` | Diterima | Tulisan "Response dari HomeController" muncul |
| Gambar hero tidak tampil (ikon broken image) | Cek nama dan ekstensi file, karena file `hero-kursus.png` tetapi Blade memanggil `.jpg`. Ubah menjadi `.png` di Blade | Diterima | Gambar hero tampil. Buktinya `/images/hero-kursus.jpg` 404, `/images/hero-kursus.png` tampil |
| Tampilan Laravel berbeda dari contoh desain | Ganti `style.css` dan `home.blade.php` dengan versi header dua lapis, hero, dan alur MVC | Diterima | Tampilan menjadi rapi dan sesuai contoh |
| `git status` menampilkan "not a git repository" | Jalankan `git init`, atur nama dan email, lalu `git add .` dan `git commit` | Diterima | `git log --oneline -5` menampilkan commit pertama |
| Gambar "Route verification" ternyata bukan hasil `route:list` asli | Jangan dipakai sebagai evidence, jalankan `php artisan route:list` sendiri | Diterima | Screenshot `route:list` saya ambil sendiri dari terminal |
| Membuat diagram request lifecycle | AI membuatkan gambar dasar `request-lifecycle.png` | Diterima | Diagram saya pakai sebagai evidence dan saya latih menjelaskannya |

**Catatan Tambahan:**
Saya menggunakan AI (Claude) sebagai pemandu saat mengalami kebingungan langkah dan error teknis (gambar hero, Git, dan tampilan). Saya tetap mengetik kode sendiri di VS Code, menjalankannya, dan memastikan saya bisa menjelaskan alur Route -> Controller -> View.