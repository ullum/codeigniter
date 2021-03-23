<html>

<head>
    <title>Daftar Siswa</title>

    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1>Daftar Siswa</h1>

                <!-- MENAMPILKAN JUMLAH DATA -->
                <?php echo "Jumlah record : " . $siswa->num_rows(); ?>

                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">nama</th>
                            <th scope="col">kota</th>
                        </tr>
                    </thead>
                    <?php
                    $count = 0;
                    foreach ($siswa->result() as $row) :
                        $count++;
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $count; ?></th>
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->kota; ?></td>
                            </tr>


                        <?php endforeach; ?>
                        </tbody>
                </table>
                
            </div>
        </div>
    </div>

    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>