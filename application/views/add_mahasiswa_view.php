<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tambahkan Data Mahasiswa</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>
            <center>Add Siswa</center>
        </h1>

        <div class="col-md-6 offset-md-3">
            <form action="<?php echo site_url('mahasiswa/save'); ?>" method="post">
               
                <div class="form-group">
                    <label>Nama</label>
                    <?php echo form_error('Nama'); ?>
                    <input type="text" class="form-control" name="Nama">
                </div>


                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <?php echo form_error('Jenis_Kelamin'); ?>
                    <input type="text" class="form-control" name="Jenis_Kelamin">
                </div>

                <div class="form-group">
                    <label>Agama</label>
                    <?php echo form_error('Agama'); ?>
                    <input type="text" class="form-control" name="Agama">
                </div>

                <div class="form-group">
                    <label>Telepon</label>
                    <?php echo form_error('Telepon'); ?>
                    <input type="text" class="form-control" name="Telepon">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <?php echo form_error('Email'); ?>
                    <input type="text" class="form-control" name="Email">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <?php echo form_error('Alamat'); ?>
                    <input type="text" class="form-control" name="Alamat">
                </div>



                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
    <!-- Load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>
</html>