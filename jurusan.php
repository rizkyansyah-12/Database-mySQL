<?php 

$con = mysqli_connect('localhost','root', '' , 'db_mahasiswa');
$result = mysqli_master_query($conn, "SELECT * FROM jurusan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="7" cellspacing="0">
        <tr>
             <td>iD</td>
             <td>Nama Jurusan</td> 
         </tr>
         <?php foreach ($result as $row) ?>
         <tr>
             <td> <?php echo $row ['id']; ?> </td>
             <td> <?php echo $row ['nama']; ?> </td>
             <td> <button>edit </button> <button>hapus </button></td>
         </tr>
     <?php endforeac  ?>
 </table>
 </body>
</html>