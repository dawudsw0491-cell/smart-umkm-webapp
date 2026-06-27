# SPESIFIKASI MODUL KASIR

# Smart UMKM WebApp

## Pilot Project

# Bakso Mbak Selfi

---

# Informasi Dokumen

| Item         | Keterangan              |
| ------------ | ----------------------- |
| Nama Dokumen | Spesifikasi Modul Kasir |
| Kode Dokumen | MOD-003                 |
| Versi        | 1.0                     |
| Status       | Draft                   |
| Project      | Smart UMKM WebApp       |
| Modul        | Kasir                   |

---

# 1. Tujuan

Modul Kasir digunakan untuk mencatat transaksi penjualan secara sederhana, cepat, dan mudah digunakan oleh kasir.

---

# 2. Pengguna

Modul ini digunakan oleh:

* Kasir
* Owner

---

# 3. Alur Transaksi

1. Kasir login.
2. Kasir memilih menu.
3. Kasir menentukan jumlah pesanan.
4. Sistem menghitung subtotal.
5. Sistem menghitung total pembayaran.
6. Kasir memilih metode pembayaran.
7. Kasir menyimpan transaksi.
8. Sistem memperbarui laporan penjualan.

---

# 4. Informasi Transaksi

Setiap transaksi memuat:

* Nomor Transaksi
* Tanggal
* Jam
* Nama Kasir
* Daftar Menu
* Jumlah
* Harga Satuan
* Subtotal
* Total Pembayaran
* Metode Pembayaran

---

# 5. Metode Pembayaran

Metode pembayaran yang didukung:

* Tunai
* QRIS
* Transfer Bank

---

# 6. Validasi

Sistem harus memastikan:

* Minimal terdapat satu menu dalam transaksi.
* Jumlah pesanan lebih dari nol.
* Metode pembayaran dipilih sebelum transaksi disimpan.

---

# 7. Hasil Transaksi

Setelah transaksi berhasil:

* Data transaksi tersimpan.
* Data pembayaran tersimpan.
* Dashboard diperbarui.
* Laporan harian diperbarui.

---

# 8. Hak Akses

## Kasir

* Membuat transaksi.
* Melihat transaksi hari berjalan.

---

## Owner

* Melihat seluruh transaksi.
* Melihat laporan transaksi.

---

# 9. Ketentuan

* Bahasa Indonesia.
* Antarmuka sederhana.
* Responsif pada desktop dan perangkat mobile.

---

# 10. Kriteria Selesai

Modul Kasir dinyatakan selesai apabila transaksi dapat dibuat, disimpan, dan tercatat pada laporan penjualan sesuai spesifikasi.
