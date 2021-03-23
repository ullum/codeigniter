<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Data Mahasiswa</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>
            <center>Edit Data Mahasiswa</center>
        </h1>
        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('mahasiswa/update'); ?>" method="post">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="Nama" value="<?php echo $nama; ?>">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" class="form-control" name="Jenis_Kelamin" value="<?php echo $jenis_kelamin; ?>">
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <input type="text" class="form-control" name="Agama" value="<?php echo $agama; ?>">
                </div>


                <div class="form-group">
                    <label>Telepon</label>
                    <input type="text" class="form-control" name="Telepon" value="<?php echo $telepon; ?>">
                </div>


                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="Email" value="<?php echo $email; ?>">
                </div>


                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="Alamat" value="<?php echo $alamat; ?>">
                </div>


                

                <input type="hidden" name="nim" value="<?php echo $no ?>">
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