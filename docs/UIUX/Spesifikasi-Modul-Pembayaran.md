# SPESIFIKASI MODUL PEMBAYARAN

# Smart UMKM WebApp

## Pilot Project

# Bakso Mbak Selfi

---

# Informasi Dokumen

| Item         | Keterangan                   |
| ------------ | ---------------------------- |
| Nama Dokumen | Spesifikasi Modul Pembayaran |
| Kode Dokumen | MOD-004                      |
| Versi        | 1.0                          |
| Status       | Draft                        |
| Project      | Smart UMKM WebApp            |
| Modul        | Pembayaran                   |

---

# 1. Tujuan

Modul Pembayaran digunakan untuk mencatat metode pembayaran setiap transaksi secara sederhana dan akurat.

---

# 2. Pengguna

Modul digunakan oleh:

* Kasir
* Owner

---

# 3. Metode Pembayaran

Sistem hanya mendukung metode pembayaran berikut:

* Tunai
* QRIS
* Transfer Bank

---

# 4. Alur Pembayaran

1. Kasir menyelesaikan pemilihan menu.
2. Sistem menghitung total pembayaran.
3. Kasir memilih metode pembayaran.
4. Sistem menyimpan metode pembayaran.
5. Sistem menyimpan transaksi.
6. Dashboard dan laporan diperbarui.

---

# 5. Informasi Pembayaran

Setiap pembayaran memuat:

* Nomor Pembayaran
* Nomor Transaksi
* Tanggal
* Jam
* Metode Pembayaran
* Total Pembayaran
* Status Pembayaran

---

# 6. Status Pembayaran

Status yang digunakan:

* Berhasil

---

# 7. Validasi

Sistem harus memastikan:

* Transaksi telah dibuat.
* Metode pembayaran dipilih.
* Nilai pembayaran sesuai total transaksi.

---

# 8. Hak Akses

## Kasir

* Memilih metode pembayaran.
* Menyimpan pembayaran.

---

## Owner

* Melihat seluruh data pembayaran.

---

# 9. Ketentuan

* Tidak menggunakan payment gateway.
* QRIS menggunakan QRIS milik usaha.
* Transfer Bank menggunakan rekening usaha.
* Seluruh transaksi tersimpan sebagai riwayat pembayaran.

---

# 10. Kriteria Selesai

Modul Pembayaran dinyatakan selesai apabila setiap transaksi memiliki metode pembayaran yang tersimpan dan dapat ditampilkan pada laporan penjualan.
