# AI USAGE LOG – PERTEMUAN 12

Dokumen ini berisi catatan penggunaan AI selama pelaksanaan Praktikum Pemrograman Web III Pertemuan 12 dengan materi Relasi Database pada proyek KursusKu.

| Prompt / Pertanyaan | Saran AI | Dipakai? | Alasan |
| :--- | :--- | :---: | :--- |
| Bagaimana mengatasi error `Table 'courses' already exists` ketika menjalankan migration? | AI menyarankan menjalankan file migration tertentu menggunakan perintah `--path` agar migration yang sudah pernah dijalankan tidak dibuat ulang. | **Ya** | Karena tabel courses sudah tersedia sehingga hanya migration yang belum dijalankan yang perlu diproses. |
| Bagaimana memperbaiki error `View [enrollments.index] not found` pada halaman enrollment? | AI menyarankan menyesuaikan lokasi pemanggilan view dengan struktur folder `admin/enrollments` di dalam controller. | **Ya** | Agar Laravel dapat menemukan file Blade sesuai lokasi penyimpanannya. |
| Mengapa tampilan form enrollment tidak sesuai dengan yang diharapkan? | AI memberikan arahan untuk memperbaiki isi file `create.blade.php` dan membuat form khusus enrollment dengan pilihan Participant dan Course. | **Ya** | Supaya tampilan form lebih sederhana dan sesuai dengan kebutuhan pendaftaran kursus. |
| Bagaimana memastikan fitur Cascade Delete berjalan dengan benar? | AI memberikan contoh pengujian melalui Laravel Tinker dengan membuat data percobaan, kemudian menghapus data Course atau Participant. | **Ya** | Untuk membuktikan bahwa data enrollment yang berhubungan ikut terhapus ketika data induknya dihapus. |

## Catatan Penting

- AI dimanfaatkan untuk membantu mencari solusi ketika terjadi kesalahan pada proses pengerjaan program.
- Setiap kode atau perintah yang diperoleh dari AI diperiksa dan dicoba kembali melalui terminal maupun browser.
- Pemahaman terhadap penggunaan migration, foreign key, relasi database, dan cascade delete tetap dipelajari selama praktikum.
- AI berperan sebagai pendamping dalam proses belajar dan pemecahan masalah, sedangkan proses penerapan dan pengujian dilakukan secara langsung pada proyek KursusKu.

## Kesimpulan

Penggunaan AI selama praktikum Pertemuan 12 membantu mempermudah proses penyelesaian masalah dan memahami penerapan relasi database pada Laravel. Dengan adanya bantuan AI, proses debugging menjadi lebih terarah dan pengerjaan fitur enrollment dapat disesuaikan dengan ketentuan praktikum.