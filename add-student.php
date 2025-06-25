<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Students</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        ADD STUDENTS
                    </div>
                    <div class="card-body">
                        <form action="save-siswa.php" method="POST">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input type="text" id="nisn" name="nisn" placeholder="Enter Student's NISN" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" id="fullname" name="fullname" placeholder="Please enter a student's name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea id="address" class="form-control" name="address" placeholder="Enter a student's address" rows="4"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success">SAVE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://