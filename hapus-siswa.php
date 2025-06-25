<?php

include('connection.php');

// Mendapatkan ID siswa dari URL
$id = $_GET['id'];

// Query untuk menghapus data berdasarkan ID
$query = "DELETE FROM tbl_siswa WHERE id_siswa = ?";

// Menyiapkan statement
$stmt = mysqli_prepare($connection, $query);

// Bind parameter ID ke statement
// 'i' berarti parameter adalah tipe integer
mysqli_stmt_bind_param($stmt, 'i', $id);

// Eksekusi statement
if (mysqli_stmt_execute($stmt)) {
    // Jika berhasil, redirect kembali ke halaman utama
    header("location: index.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . mysqli_error($connection);
}

// Tutup statement
mysqli_stmt_close($stmt);

?>