<?php

// Sertakan file koneksi
include('connection.php');

// 1. Ambil semua data dari form
$id_siswa   = $_POST['id_siswa'];
$nisn       = $_POST['nisn'];
$full_name  = $_POST['full_name'];
$address    = $_POST['address'];

// 2. Buat query UPDATE menggunakan prepared statement untuk keamanan
$query = "UPDATE tbl_siswa SET nisn = ?, full_name = ?, address = ? WHERE id_siswa = ?";

// 3. Siapkan statement
$stmt = mysqli_prepare($connection, $query);

// Periksa jika statement gagal disiapkan
if ($stmt === false) {
    die("Error preparing the query: " . mysqli_error($connection));
}

// 4. Bind parameter ke placeholder
// 'sssi' berarti: String, String, String, Integer
mysqli_stmt_bind_param($stmt, 'sssi', $nisn, $full_name, $address, $id_siswa);

// 5. Eksekusi statement
if (mysqli_stmt_execute($stmt)) {
    // Jika update berhasil, redirect kembali ke halaman utama
    header("location: index.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Data Gagal Diperbarui (Updated)!";
    // Untuk debugging: echo "Error: " . mysqli_error($connection);
}

// 6. Tutup statement
mysqli_stmt_close($stmt);

?>