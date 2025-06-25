<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Data</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        STUDENT DATA
                    </div>
                    <div class="card-body">
                        <a href="add-student.php" class="btn btn-md btn-success" style="margin-bottom: 10px;">ADD DATA</a>
                        
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">NO.</th>
                                    <th scope="col">NISN</th>
                                    <th scope="col">FULL NAME</th>
                                    <th scope="col">ADDRESS</th>
                                    <th scope="col">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    // Sertakan file koneksi
                                    include('connection.php');
                                    
                                    $no = 1;
                                    
                                    // Query untuk mengambil data siswa
                                    // Perbaikan: Nama tabel disesuaikan menjadi tbl_siswa agar konsisten
                                    $query = mysqli_query($connection, "SELECT * FROM tbl_siswa");
                                    
                                    // Loop untuk menampilkan data
                                    while ($row = mysqli_fetch_array($query)) {
                                ?>

                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['nisn']; ?></td>
                                    <td><?php echo $row['full_name']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td class="text-center">
                                        <a href="edit-siswa.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="hapus-siswa.php?id=<?php echo $row['id_siswa']; ?>" class="btn btn-sm btn-danger">DELETE</a>
                                    </td>
                                </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>
</html>