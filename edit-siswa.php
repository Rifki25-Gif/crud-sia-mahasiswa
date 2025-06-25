<?php
    include('connection.php');
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM tbl_siswa WHERE id_siswa = $id");
    $row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student Data</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT STUDENT DATA
                    </div>
                    <div class="card-body">
                        <form action="update-siswa.php" method="POST">
                            <div class="form-group">
                                <label>NISN</label>
                                <input type="text" name="nisn" value="<?php echo $row['nisn']; ?>" placeholder="Enter Student's NISN" class="form-control">
                                <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']; ?>">
                            </div>
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="full_name" value="<?php echo $row['full_name']; ?>" placeholder="Enter Student's Full Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" placeholder="Enter Student's Address" rows="4"><?php echo $row['address']; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">UPDATE</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>