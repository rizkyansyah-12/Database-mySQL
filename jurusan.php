<?php 
$conn = mysqli_connect('localhost','root', '' , 'db_mahasiswa');
$result = mysqli_query ($conn, "SELECT*FROM jurusan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data Jurusan</h3>
    <a href="add-jurusan.php">add data</a>
    <table border="1" cellpadding="7" cellspacing="0">
        <tr>
             <td>ID</td> 
             <td>Nama</td>
             <td>aksi</td>

         </tr>
         <?php foreach ($result as $row): ?>
          <tr>
             <td><?php echo $row ['id']; ?></td>
             <td><?php echo $row ['nama']; ?></td>
             <td><button> edit </button> | <button>hapus </button></td>
          </tr>
         <?php endforeach  ?>
     </table>
 </body>
</html>