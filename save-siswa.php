<?php

// Asumsikan ini adalah file save-siswa.php

// 1. Sertakan file koneksi
include('connection.php');

// 2. Ambil data dari form (contoh)
$nisn = $_POST['nisn'];
$nama = $_POST['fullname'];
$alamat = $_POST['address'];

// 3. Buat query SQL (Cara tidak aman, lihat catatan di bawah)
$query = "INSERT INTO tbl_siswa (nisn, full_name, address) VALUES ('$nisn', '$nama', '$alamat')";

// 4. Eksekusi query menggunakan gaya prosedural dan cek hasilnya
if (mysqli_query($connection, $query)) {
    // Jika query berhasil, alihkan (redirect) ke halaman index.php
    header("location: index.php");
    exit(); // Penting: hentikan eksekusi skrip setelah redirect
} else {
    // Jika query gagal, tampilkan pesan error
    echo "Data Gagal Disimpan!";
    // Untuk debugging, Anda bisa menampilkan error SQL-nya:
    // echo "Error: " . mysqli_error($connection);
}

?>