<?php 
$conn = mysqli_connect('localhost','root', '' , 'uts1-no-urut-221.MIK.B.004');
$sql = mysqli_query ($conn, "SELECT*FROM registrasi");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row mt-2">
                    <div class="col-6"> <h3>DATA PENDAFTARAN</h3></div>
                    <div class="col-6"><a href="Tambah Pendaftaran" class="btn btn-sm btn-primary float-right"> Tambah Data</a></div>
                </div>
                <a href="add-registrasi.php">add data</a>
                <table border="1" cellpadding="7" cellspacing="0">
                    <tr>
                       <th>id</th> 
                       <th>no_registrasi</th>
                       <th>nama_lengkap</th>
                       <th>jurusan</th>
                       <th>jenis_kelamin</th>
                       <th>alamat</th>
                       <th>no_telepon</th>
                       <th>e_mail</th>
                       <th>aksi</th>
                   </tr>
                   <thead>
                      <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($sql as $row) : ?>

                           <tr>
                            <td><?= $no++;?></td> 
                            <td><?= $row['no_registrasi'];?></td>
                            <td><?= $row['nama_lengkap'];?></td>
                            <td><?= $row['jurusan'];?></td>
                            <td><?= $row['jenis_kelamin'];?></td>
                            <td><?= $row['alamat'];?></td>
                            <td><?= $row['no_telepon'];?></td>
                            <td><?= $row['e_mail'];?></td>
                            <td> 
                                <a herft=""class="btn btn-info btn-sm">Detail</a>
                                <a herft=""class="btn btn-warming btn-sm">Edit</a>
                                <a herft=""class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </div>
        </div>
    </div>
</table>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>