<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Menambahkan gaya bold dan underline pada teks */
        .bold-underline {
            font-weight: bold;
            text-decoration: underline;
            font-size: 24px;
            color: black;
        }

        p, td {
            text-align: justify;
            font-size: 15px;
            color: black;
            margin: 0; /* Menghapus margin bawaan pada p dan div */
        }

        /* Menggunakan font Arial Narrow dan mengatur teks ke tengah */
        body {
            font-family: 'Arial Narrow', sans-serif;
            margin: 0px 30px 30px 30px; /* Menambahkan margin pada body */
        }

        /* Gaya khusus untuk tabel */
        table {
            width: 100%;
            text-align: left;
        }

        /* Menambahkan class untuk kolom tanda tangan */
        .signature-column {
            display: inline-block;
            vertical-align: top; /* Menjaga konten tetap di atas */
        }

        /* Mengatur ukuran kolom kiri */
        .left-column {
            width: 60%;
        }

        /* Mengatur ukuran kolom kanan */
        .right-column {
            width: 38%;
        }

        .underline-text {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <img src="<?= base_url('images/header.png'); ?>" alt="Header Image" width="645" height="111">
    <p class="bold-underline" style="text-align:center">PERJANJIAN KERJA KARYAWAN TIDAK TETAP<br>MASA PERCOBAAN</p>
    <p style="text-align:center">
        Nomor : ______/SR/HRD-KLJ/___/____
    </p><br>
    <p>Bersama dengan surat ini menerangkan bahwa :</p>
    <table>
        <tr>
            <td>Nama</td>
            <td>: Nadya Safira Utari, BIBM</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: Wakil Direktur</td>
        </tr>
    </table><br>
    <p>Dalam hal ini mewakili PT KOPI LOER JAYA, untuk selanjutnya disebut sebagai <b>PERUSAHAAN.</b></p>
    <table>
        <tr>
            <td>NIK</td>
            <td>: 123123</td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>: </td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: </td>
        </tr>
        <tr>
            <td>Divisi</td>
            <td>: </td>
        </tr>
    </table>
    <p>Untuk selanjutnya disebut <b>KARYAWAN</b></p><br>
    <p>
        Dalam kedudukannya seperti diatas <b>PERUSAHAAN</b> memperkerjakan <b>KARYAWAN</b> sebagai pekerja dalam masa percobaan (probation) di PT KOPI LOER JAYA selama tiga (3) bulan di mulai dari tanggal <b>15 Juni 2023</b> sampai dengan <b>15 Agustus 2022.</b> Dalam hubungan kerja ini <b>KARYAWAN</b> akan menerima kompensasi yang dibayarkan setiap tanggal 28 setiap akhir bulan sebesar Rp 900.000-, (sembilan ratus ribu rupiah) dan tunjangan transport & meal sebesar Rp 300.000-, (tiga ratus ribu rupiah) dengan total kompensasi sebesar Rp 1.200.000-, (satu juta dua ratus ribu rupiah) dan atas kompensasi yang diterima karyawan wajib melaksanakan tugas dan tanggung jawab pekerjaan yang diberikan dengan penuh tanggung jawab.<br><br>
        Setelah masa percobaan dengan periode yang sudah ditentukan, KARYAWAN akan menjalani evaluasi untuk menentukan jenjang perpanjangan kontrak kerja dan posisi kerja yang diterima.
    </p><br>

    <div class="signature-column left-column"><br>
        <p>Menyetujui,</p>
        <p style="margin-top: 60px;">_______________</p>
    </div>

    <div class="signature-column right-column">
        <p>Palembang, _______________</p>
        <p>Mengetahui,</p>
        <p class="underline-text" style="margin-top: 60px;"><b>Nadya Safira Utari, BIBM</b></p>
        <p>Wakil Direktur</p>
    </div>
</body>
</html>