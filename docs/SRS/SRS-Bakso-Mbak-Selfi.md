# SOFTWARE REQUIREMENT SPECIFICATION (SRS)

# Smart UMKM WebApp

## Pilot Project

# Bakso Mbak Selfi

---

# Informasi Dokumen

| Item          | Keterangan                         |
| ------------- | ---------------------------------- |
| Nama Dokumen  | Software Requirement Specification |
| Kode Dokumen  | SRS-001                            |
| Versi         | 1.0                                |
| Status        | Draft                              |
| Metodologi    | ISO/IEC/IEEE 12207                 |
| Project       | Smart UMKM WebApp                  |
| Pilot Project | Bakso Mbak Selfi                   |

---

# 1. Pendahuluan

## 1.1 Tujuan

Dokumen ini menjelaskan kebutuhan perangkat lunak yang akan dikembangkan berdasarkan Business Requirement Document (BRD) yang telah disetujui.

Dokumen ini menjadi acuan dalam proses analisis sistem, desain sistem, implementasi, pengujian, dan pemeliharaan aplikasi.

---

## 1.2 Ruang Lingkup Sistem

Sistem yang akan dibangun merupakan aplikasi berbasis web yang terdiri dari dua portal:

* Portal Publik
* Portal Internal

Portal Publik digunakan oleh pelanggan.

Portal Internal digunakan oleh Owner dan Kasir.

---

# 2. Deskripsi Umum Sistem

Sistem dirancang untuk membantu operasional usaha Bakso Mbak Selfi sekaligus menjadi media promosi digital.

Sistem terdiri dari modul-modul berikut:

* Website
* Menu Digital
* Promo
* Wisata Sekitar
* Google Maps
* WhatsApp
* Kasir
* Pembayaran
* Pembukuan
* CRM Sederhana
* Dashboard
* Pengaturan

---

# 3. Hak Akses Pengguna

## Customer

Hak akses:

* Melihat Beranda
* Melihat Menu
* Melihat Promo
* Melihat Galeri
* Melihat Wisata Sekitar
* Melihat Lokasi
* Menghubungi WhatsApp

Customer tidak memerlukan proses login.

---

## Kasir

Hak akses:

* Login
* Melakukan transaksi
* Memilih metode pembayaran
* Melihat transaksi hari berjalan

Kasir tidak memiliki hak untuk mengubah pengaturan website.

---

## Owner

Hak akses:

* Login
* Mengelola Menu
* Mengelola Promo
* Mengelola Website
* Mengelola Pelanggan
* Mengelola Pengguna
* Melihat Dashboard
* Melihat Laporan

---

# 4. Kebutuhan Fungsional

Sistem harus mampu:

* Menampilkan website kepada pelanggan.
* Menampilkan daftar menu.
* Menampilkan promo aktif.
* Menampilkan lokasi usaha.
* Menghubungkan pelanggan ke WhatsApp.
* Melakukan transaksi penjualan.
* Menyimpan data transaksi.
* Menyimpan data pelanggan.
* Menampilkan laporan harian.
* Menampilkan laporan bulanan.

---

# 5. Kebutuhan Nonfungsional

Sistem harus memenuhi kebutuhan berikut:

* Berbasis Web.
* Responsif pada perangkat mobile dan desktop.
* Menggunakan Bahasa Indonesia.
* Mudah digunakan.
* Antarmuka sederhana.
* Waktu akses cepat.
* Data tersimpan secara terstruktur.

---

# 6. Batasan Sistem

Versi pertama sistem tidak mencakup:

* Manajemen stok.
* Supplier.
* Gudang.
* Akuntansi lengkap.
* Multi cabang.
* Kitchen Display.
* Payment Gateway.
* Cetak Struk Otomatis.

---

# 7. Status Dokumen

Dokumen ini merupakan Draft SRS Versi 1.0 dan menjadi dasar penyusunan proses bisnis AS-IS dan TO-BE.
