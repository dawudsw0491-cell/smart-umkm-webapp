# SPESIFIKASI MODUL CRM

# Smart UMKM WebApp

## Pilot Project

# Bakso Mbak Selfi

---

# Informasi Dokumen

| Item         | Keterangan            |
| ------------ | --------------------- |
| Nama Dokumen | Spesifikasi Modul CRM |
| Kode Dokumen | MOD-007               |
| Versi        | 1.0                   |
| Status       | Draft                 |
| Project      | Smart UMKM WebApp     |
| Modul        | CRM                   |

---

# 1. Tujuan

Modul CRM digunakan untuk menyimpan data pelanggan yang pernah melakukan transaksi sehingga dapat digunakan sebagai referensi pelayanan dan hubungan pelanggan.

---

# 2. Pengguna

Modul dapat diakses oleh:

* Owner

---

# 3. Data Pelanggan

Setiap data pelanggan memuat:

* Nama Pelanggan
* Nomor WhatsApp (opsional)
* Tanggal Transaksi Terakhir
* Jumlah Transaksi

---

# 4. Informasi CRM

Sistem menampilkan:

* Daftar Pelanggan
* Jumlah Pelanggan
* Riwayat Transaksi Pelanggan

---

# 5. Pencatatan Data

Data pelanggan dibuat berdasarkan transaksi yang berhasil disimpan.

Apabila pelanggan yang sama melakukan transaksi kembali, sistem memperbarui riwayat transaksi tanpa membuat data pelanggan baru.

---

# 6. Hak Akses

## Owner

* Melihat daftar pelanggan
* Melihat riwayat transaksi pelanggan

---

## Kasir

Tidak memiliki akses ke modul CRM.

---

# 7. Ketentuan

* Modul CRM tidak mengirim pesan otomatis.
* Modul CRM tidak melakukan promosi otomatis.
* Data pelanggan hanya digunakan sebagai arsip dan riwayat transaksi.

---

# 8. Kriteria Selesai

Modul CRM dinyatakan selesai apabila sistem dapat menyimpan data pelanggan dan menampilkan riwayat transaksi berdasarkan data yang tersedia.
