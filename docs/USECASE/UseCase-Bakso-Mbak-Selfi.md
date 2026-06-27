# USE CASE SPECIFICATION

# Smart UMKM WebApp

## Pilot Project

# Bakso Mbak Selfi

---

# Informasi Dokumen

| Item          | Keterangan             |
| ------------- | ---------------------- |
| Nama Dokumen  | Use Case Specification |
| Kode Dokumen  | UCS-001                |
| Versi         | 1.0                    |
| Status        | Draft                  |
| Project       | Smart UMKM WebApp      |
| Pilot Project | Bakso Mbak Selfi       |

---

# 1. Tujuan

Dokumen ini menjelaskan interaksi antara pengguna dengan sistem Smart UMKM WebApp.

---

# 2. Aktor

## Customer

Hak akses:

* Melihat Beranda
* Melihat Menu
* Melihat Promo
* Melihat Wisata Sekitar
* Melihat Galeri
* Melihat Lokasi
* Menghubungi WhatsApp

---

## Kasir

Hak akses:

* Login
* Membuat Transaksi
* Memilih Metode Pembayaran
* Menyimpan Transaksi

---

## Owner

Hak akses:

* Login
* Mengelola Menu
* Mengelola Promo
* Mengelola Website
* Mengelola Pelanggan
* Melihat Dashboard
* Melihat Laporan
* Mengelola Pengguna

---

# 3. Daftar Use Case

| Kode   | Use Case               | Aktor        |
| ------ | ---------------------- | ------------ |
| UC-001 | Melihat Beranda        | Customer     |
| UC-002 | Melihat Menu           | Customer     |
| UC-003 | Melihat Promo          | Customer     |
| UC-004 | Melihat Wisata Sekitar | Customer     |
| UC-005 | Melihat Galeri         | Customer     |
| UC-006 | Melihat Lokasi         | Customer     |
| UC-007 | Menghubungi WhatsApp   | Customer     |
| UC-008 | Login                  | Kasir, Owner |
| UC-009 | Membuat Transaksi      | Kasir        |
| UC-010 | Memilih Pembayaran     | Kasir        |
| UC-011 | Menyimpan Transaksi    | Kasir        |
| UC-012 | Mengelola Menu         | Owner        |
| UC-013 | Mengelola Promo        | Owner        |
| UC-014 | Mengelola Website      | Owner        |
| UC-015 | Mengelola Pelanggan    | Owner        |
| UC-016 | Melihat Dashboard      | Owner        |
| UC-017 | Melihat Laporan        | Owner        |
| UC-018 | Mengelola Pengguna     | Owner        |

---

# 4. Ringkasan Alur Use Case

## Customer

Customer membuka website tanpa login untuk melihat informasi usaha, menu, promo, lokasi, galeri, dan menghubungi usaha melalui WhatsApp.

---

## Kasir

Kasir melakukan login, membuat transaksi, memilih metode pembayaran (Tunai, QRIS, atau Transfer Bank), kemudian menyimpan transaksi.

---

## Owner

Owner melakukan login untuk mengelola seluruh data operasional, termasuk menu, promo, pelanggan, pengguna, website, serta melihat dashboard dan laporan.

---

# 5. Kesimpulan

Use Case Specification menjadi dasar dalam penyusunan desain database, rancangan antarmuka, dan implementasi modul aplikasi.
