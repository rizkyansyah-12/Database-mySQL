<?php 
$conn = mysqli_connect('localhost','root', '', 'db_mahasiswa');
$result = mysqli_query($conn, "SELECT * FROM jurusan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    <a href="add-mahasiswa.php">add data</a>
    <table border="1" cellpadding="7" cellspacing="0">
        <tr>
             <th>ID</th> 
             <th>Nim</th>
             <th>Nama</th>
             <th>jenis kelamin</th>
             <th>jurusan</th>
             <th>alamat</th>
             <th>no telepon</th>
             <th>e-mail</th>
             <th>aksi</th>

         </tr>
         <?php $no = 1; ?>
         <?php foreach ($result as $row): ?>
          <tr>
            <td><?php echo $row ['id']; ?></td>
            <td><?php echo $row ['nim']; ?></td>
            <td><?php echo $row ['nama']; ?></td>
            <td><?php if ($row ['jk'] == 'l') {
                    echo "laki-laki";
                }else {
                    echo "perempuan";
             }?>
                 
             </td>
            <td> <?php echo $row ['jurusan_id']; ?></td>
            <td> <?php echo $row ['alamat']; ?></td>
            <td> <?php echo $row ['no_telpon']; ?></td>
            <td> <?php echo $row ['email']; ?></td>
            <td><a href=""../edit.php?id=<?= $row['id']; ?>><button> Edit </button></a> | <a href="../hapus.php?id=<?= $row['id']; ?>"><button>Hapus </button></a></td>
          </tr>
         <?php endforeach  ?>
     </table>
 </body>
</html>