# ☀️ Eversol - Platform Transisi & Kemandirian Energi Berkelanjutan

**Eversol** adalah platform digital berbasis web yang berfungsi sebagai penyedia layanan energi terbarukan integratif (*one-stop solution*). Platform ini dirancang untuk memfasilitasi dan mempercepat transisi masyarakat—mulai dari skala rumah tangga hingga UMKM—menuju kemandirian energi bersih melalui integrasi jasa konsultasi ahli, paket instalasi panel surya terstandardisasi, serta pemantauan penghematan biaya dan reduksi emisi secara berkala.

---

## 🚀 Fitur Utama

Eversol mengintegrasikan layanan fisik di lapangan dengan pembuktian digital melalui fitur-fitur utama berikut:

* **👨‍💻 Landing Page & Layanan Edukasi (`landing.php`):** Halaman awal yang interaktif untuk mengenalkan solusi energi surya, manfaat lingkungan, dan profil singkat Eversol kepada calon konsumen.
* **📦 Manajemen Paket Layanan (`packages.php` & `order.php`):** Menyediakan transparansi informasi mengenai variasi paket pemasangan panel surya beserta fitur formulir pemesanan jasa secara langsung.
* **📊 Dashboard Statistik & CRUD Sistem (`index.php`, `update.php`, `delete.php`):** Pusat data data statistik yang akurat untuk melacak hasil penghematan biaya listrik (Rupiah) dan kalkulasi reduksi emisi karbon (Ton $CO_2$) secara berkala, dilengkapi sistem manajemen data (CRUD) yang terintegrasi.

---

## 🛠️ Arsitektur & Teknologi

Proyek ini dibangun menggunakan *stack* teknologi yang efisien untuk memastikan performa yang responsif dan pengelolaan data yang dinamis:

* **Front-end:** HTML5, CSS3 (Responsive Layout), dan JavaScript.
* **Back-end:** PHP (Prosedural & Session Handling).
* **Database:** MySQL (Relational Database Management System).

---

## 📂 Struktur Repositori

Berdasarkan arsitektur sistem, berikut adalah peta struktur file dari proyek Eversol:

```text
eversol/
├── assets/             # Menyimpan aset gambar, logo, dan kebutuhan UI
├── css/                # Berisi file stylesheet (CSS) untuk dekorasi tampilan web
├── db.php              # File konfigurasi koneksi ke database MySQL
├── delete.php          # Logika backend untuk menghapus data pemesanan/pengguna (CRUD)
├── eversol_db.sql      # Dump file database MySQL yang siap di-import
├── index.php           # Halaman utama / dashboard statistik pasca-login
├── landing.php         # Halaman Landing Page (informasi produk & edukasi awal)
├── logout.php          # Logika untuk menghapus session dan keluar dari sistem
├── order.php           # Halaman pemesanan paket pemasangan panel surya
├── packages.php        # Halaman informasi katalog paket komponen & spesifikasi teknik
└── update.php          # Logika backend untuk memperbarui data transaksi/profil (CRUD)
