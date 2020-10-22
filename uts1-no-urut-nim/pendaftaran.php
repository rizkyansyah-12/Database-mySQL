<?php 
$conn = mysqli_connect('localhost','root', '' , 'Pendaftaran'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table borger="1">
        <thead>
            <tr>
             <td>id</td> 
             <td>no registrasi</td>
             <td>nama lengkap</td>
             <td>jurusan</td>
             <td>jenis kelamin</td>
             <td>alamat</td>
             <td>no telepon</td>
             <td>e-mail</td>
             <td>aksi</td>
         </tr>
     </thead>
     <tbody>
        <?php $no = 1; ?>
        <?php foreach ($sql as $row) : ?>

         <tr>
            <td><?$no++;?></td> 
          <td><?$row['no_registrasi'];?></td>
          <td><?$row['nama_lengkap'];?></td>
          <td><?$row['jurusan'];?></td>
          <td><?$row['jenis_kelamin'];?></td>
          <td><?$row['alamat'];?></td>
          <td><?$row['no_telepon'];?></td>
          <td><?$row['e_mail'];?></td>
          <td><?$row['aksi'];?></td>
          <td> <a herft="">Edit</a> <a herft="">Hapus</a></td>
      </tr>
  <?php endforeach; ?>
</tbody>
</table>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>