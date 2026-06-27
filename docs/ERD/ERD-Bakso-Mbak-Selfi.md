# ENTITY RELATIONSHIP DESIGN (ERD)

# Smart UMKM WebApp

## Pilot Project

# Bakso Mbak Selfi

---

# Informasi Dokumen

| Item          | Keterangan                 |
| ------------- | -------------------------- |
| Nama Dokumen  | Entity Relationship Design |
| Kode Dokumen  | ERD-001                    |
| Versi         | 1.0                        |
| Status        | Draft                      |
| Project       | Smart UMKM WebApp          |
| Pilot Project | Bakso Mbak Selfi           |

---

# 1. Tujuan

Dokumen ini menjelaskan struktur data utama yang akan digunakan pada Smart UMKM WebApp.

---

# 2. Daftar Entitas

Sistem menggunakan entitas berikut:

1. Pengguna
2. Menu
3. Kategori Menu
4. Promo
5. Pelanggan
6. Transaksi
7. Detail Transaksi
8. Pembayaran
9. Website
10. Galeri

---

# 3. Relasi Antar Entitas

## Pengguna

* Satu pengguna dapat membuat banyak transaksi.

---

## Kategori Menu

* Satu kategori memiliki banyak menu.

---

## Menu

* Satu menu dapat muncul pada banyak detail transaksi.

---

## Transaksi

* Satu transaksi memiliki banyak detail transaksi.
* Satu transaksi memiliki satu pembayaran.
* Satu transaksi dapat dikaitkan dengan satu pelanggan.

---

## Pelanggan

* Satu pelanggan dapat memiliki banyak transaksi.

---

## Promo

* Promo berdiri sendiri dan ditampilkan pada website.

---

## Website

* Menyimpan informasi profil usaha.

---

## Galeri

* Menyimpan foto yang ditampilkan pada website.

---

# 4. Struktur Relasi

Pengguna

↓

Transaksi

↓

Detail Transaksi

↓

Menu

↓

Kategori Menu

---

Pelanggan

↓

Transaksi

↓

Pembayaran

---

Website

↓

Promo

↓

Galeri

---

# 5. Daftar Tabel

| No | Nama Tabel       |
| -- | ---------------- |
| 1  | pengguna         |
| 2  | kategori_menu    |
| 3  | menu             |
| 4  | promo            |
| 5  | pelanggan        |
| 6  | transaksi        |
| 7  | detail_transaksi |
| 8  | pembayaran       |
| 9  | website          |
| 10 | galeri           |

---

# 6. Kesimpulan

ERD menjadi dasar dalam penyusunan struktur database, migration Laravel, dan relasi antar tabel pada tahap implementasi.
