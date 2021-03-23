<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Siswa</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>
            <center>Edit Siswa</center>
        </h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('siswa/update'); ?>" method="post">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>">
                </div>
                <div class="form-group">
                    <label>Kota</label>
                    <input type="text" class="form-control" name="kota" value="<?php echo $kota; ?>">
                </div>
                <input type="hidden" name="nim" value="<?php echo $nim ?>">
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
    <!-- Load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>