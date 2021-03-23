<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Daftar Siswa</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <h1>Data Mahasiswa</h1>


                <br>
                <!-- Membuat tombol add -->
                <a href="<?php echo site_url('mahasiswa/add'); ?>" class="btn btn-primary">Add </a>
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
                    $count = $this->uri->segment('3');
                    foreach ($result->result() as $row) :
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
                                <td><a href="<?php echo site_url('mahasiswa/delete/' . $row->No); ?>" onclick="return deletechecked();" class="btn btn-sm btn-danger">Delete</a>
                                <a href="<?php echo site_url('mahasiswa/edit/'.$row->No);?>" class="btn btn-sm btn-info">Update</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                </table>
                <?php echo $pagination; ?>
            </div>
        </div>
    </div>

    <script>
        // fungsi javascript untuk memunculkan peringatan sebelum data
        dihapus

        function deletechecked() {
            if (confirm("Apakah yakin akan menghapus data?")) 
            {
                return true;
            }
            else 
            {
                return false;
            }
        }
    </script>
    <!-- Load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</body>

</html>