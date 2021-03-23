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
                <h1>Daftar Siswa</h1>


                <br>
                <!-- Membuat tombol add -->
                <a href="<?php echo site_url('siswa/add'); ?>" class="btn btn-primary">Add </a>
                <br><br>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kota</th>
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
                                <td><?php echo $row->nama; ?></td>
                                <td><?php echo $row->kota; ?></td>
                                <td><?php echo $row->kota; ?></td>
                                <td><a href="<?php echo site_url('siswa/delete/' . $row->nim); ?>" onclick="return deletechecked();" class="btn btn-sm btn-danger">Delete</a>
                                <a href="<?php echo site_url('siswa/edit/'.$row->nim);?>" class="btn btn-sm btn-info">Update</a></td>
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