# Catat Keuangan (Sistem Manajemen Keuangan)

Aplikasi untuk mengelola keuangan pribadi, melacak pemasukan, pengeluaran, hutang, dan anggaran dengan dukungan multi-dompet.

## 🚀 Panduan Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek di komputer lokal Anda:

### Prasyarat

-   PHP >= 8.2
-   Composer
-   Node.js & NPM
-   MySQL

### Langkah-langkah

1.  **Clone Repository**

    ```bash
    git clone https://github.com/Dimascndra/Catat-Keuangan.git
    cd Catat-Keuangan
    ```

2.  **Install Dependensi PHP**

    ```bash
    composer install
    ```

3.  **Setup File Environment**

    ```bash
    cp .env.example .env
    ```

    -   Buka file `.env` dan atur konfigurasi database Anda (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

4.  **Generate Application Key**

    ```bash
    php artisan key:generate
    ```

5.  **Jalankan Migrasi & Seeder**

    ```bash
    php artisan migrate --seed
    ```

6.  **Tautkan Storage (Penyimpanan)**

    ```bash
    php artisan storage:link
    ```

7.  **Install & Build Aset Frontend**

    ```bash
    npm install
    npm run build
    ```

8.  **Install Paket Tambahan (Opsional)**

    Jika paket belum terinstall otomatis, jalankan perintah berikut:

    ```bash
    composer require maatwebsite/excel
    composer require barryvdh/laravel-dompdf
    composer require spatie/laravel-permission
    ```

9.  **Jalankan Server Development**

    ```bash
    php artisan serve
    ```

    Akses aplikasi di `http://127.0.0.1:8000`.

---

## 🔄 Alur Kerja Sistem & Modul

Sistem ini bekerja sebagai ekosistem keuangan yang terintegrasi. Berikut adalah interaksi antar modul:

### 1. **Wallets (Dompet)**

-   **Konsep**: Mewakili sumber dana Anda (misal: Tunai, Bank BCA, Gopay).
-   **Alur Kerja**:
    -   Buat dompet dengan saldo awal.
    -   Saldo akan otomatis diperbarui saat Anda mencatat **Pemasukan**, **Pengeluaran**, **Transfer**, atau **Pembayaran Hutang**.
-   **Global Filter**: Filter data di Dashboard dan daftar transaksi berdasarkan Dompet spesifik atau "All Wallets" melalui navbar atas.

### 2. **Transaksi (Pemasukan & Pengeluaran)**

-   **Income (Pemasukan)**: Saldo dompet yang dipilih akan **bertambah**.
    -   _Fitur_: Pilih Kategori (Gaji, Hadiah, dll), Sumber, Tanggal, Deskripsi.
-   **Expense (Pengeluaran)**: Saldo dompet yang dipilih akan **berkurang**.
    -   _Fitur_: Pilih Kategori (Makanan, Transport, dll), perhitungan Jumlah x Harga, **Upload Bukti** (struk/nota).
    -   **Advanced Filter**: Filter pengeluaran berdasarkan Kategori (Select2), Rentang Tanggal (Start - End Date), dan Pencarian Deskripsi.
-   **Kategori Dinamis**: Anda dapat menambah, mengubah, atau menghapus kategori pemasukan dan pengeluaran sesuai kebutuhan melalui menu **Categories**.

### 2b. **Dashboard & Analisis**

-   **Collapsible Breakdown**: Lihat detail transaksi per kategori pengeluaran langsung di dashboard dengan fitur expand/collapse.
-   **Global Date Filter**: Filter seluruh data dashboard berdasarkan Bulan dan Tahun yang dipilih di navbar.
-   **Wallet Separation**: Data dashboard (Total, Grafik, List) akan menyesuaikan dengan Dompet yang dipilih di Global Filter.

### 3. **Transfers (Transfer Dana)**

-   **Konsep**: Memindahkan uang antar dompet pribadi Anda.
-   **Alur Kerja**:
    -   Pilih Dompet Asal (Saldo -).
    -   Pilih Dompet Tujuan (Saldo +).
    -   Masukkan Jumlah.

### 4. **Budget Management (Anggaran)**

-   **Konsep**: Membatasi pengeluaran Anda untuk kategori tertentu setiap bulan.
-   **Alur Kerja**:
    -   Tetapkan batas (misal: Makanan: Rp 1.000.000).
    -   Dashboard menampilkan progress bar **Realisasi vs Anggaran**.
    -   Saat Anda mencatat pengeluaran di kategori tersebut, bar akan terisi dan berubah warna (Biru -> Kuning -> Merah) jika mendekati batas.

### 5. **Debt & Receivables (Hutang & Piutang)**

-   **Receivable (Piutang)**: Uang yang dipinjam orang lain dari Anda.
-   **Payable (Hutang)**: Uang yang Anda pinjam dari orang lain.
-   **Alur Kerja**:
    -   Buat catatan (Nama, Jumlah, Tanggal Jatuh Tempo).
    -   **Klik Bayar (Pay)**: Pilih dompet yang digunakan untuk menerima/membayar.
    -   **Hasil**: Status Hutang menjadi "Lunas" (Paid), dan saldo Dompet menyesuaikan otomatis.

### 6. **Enhanced Reports (Laporan Lengkap)**

-   **Konsep**: Dashboard analisis keuangan yang komprehensif.
-   **Fitur**:
    -   **Laporan Harian**: Grafik & Tabel pengeluaran per hari.
    -   **Laporan Kategori**: Diagram lingkaran (Pie Chart) pengeluaran per kategori.
    -   **Arus Kas (Cash Flow)**: Ringkasan Saldo Awal, Total Masuk, Total Keluar, dan Saldo Akhir.
    -   **Tren Bulanan**: Grafik garis tren pemasukan vs pengeluaran selama 12 bulan.
    -   **Mutasi Dompet**: Riwayat transaksi detail difilter per dompet.
    -   **Ekspor**: Unduh laporan ke **Excel** atau **PDF**.

### 7. **Teknologi yang Digunakan**

-   **Framework Backend**: Laravel 12.x
-   **Bahasa**: PHP 8.2+
-   **Database**: MySQL
-   **Frontend**: Blade Templates, Bootstrap 4/5, jQuery
-   **Plugins Utama**:
    -   `maatwebsite/excel` (Ekspor Excel)
    -   `barryvdh/laravel-dompdf` (Cetak PDF)
    -   `spatie/laravel-permission` (Manajemen Role/Permission)
    -   **Chart.js** (Visualisasi Grafik)
    -   **Select2** (Dropdown Pencarian yang Lebih Baik)

---

## 🤝 Kontribusi

Aplikasi ini dikembangkan untuk tujuan pembelajaran dan manajemen keuangan pribadi. Silakan kirim _Pull Request_ jika Anda ingin menambahkan fitur baru.

Created with ❤️ by **Dimas Candra Pebriyanto**.
