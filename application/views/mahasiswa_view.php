<html>
<head>
    <title>Data Mahasiswa</title>

    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <h1>Data Mahasiswa</h1>

                <!-- MENAMPILKAN JUMLAH DATA -->
                <?php echo "Jumlah record : " . $mahasiswa->num_rows(); ?>

                <br><br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Email</th>
                            <th scope="col">Alamat</th>
                        </tr>
                    </thead>
                    <?php
                    $count = 0;
                    foreach ($mahasiswa->result() as $row) :
                        $count++;
                    ?>
                        <tbody>
                            <tr>
                                <th scope="row"><?php echo $count; ?></th>
                                <td><?php echo $row->Nama; ?></td>
                                <td><?php echo $row->Jenis_Kelamin; ?></td>
                                <td><?php echo $row->Agama; ?></td>
                                <td><?php echo $row->Telepon; ?></td>
                                <td><?php echo $row->Email; ?></td>
                                <td><?php echo $row->Alamat; ?></td>
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