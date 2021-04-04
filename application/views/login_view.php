<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <style>
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: auto;
            margin-top: 50px;
        }

        .form-signin h3 {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="form-signin">
        <h3>Login</h3>
        <?php echo form_open('user/ceklogin'); ?>
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" class="form-control" placeholder="Enter password">
        </div>
        <input type="submit" name="login" value="Login" class="btn btn-primary btn-block">
        <?php echo form_close(); ?>
    </div>
    <!-- Load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>