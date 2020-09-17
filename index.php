<?php 

$con = mysqli_connect('localhost','root', '' , 'db_mahasiswa');
$result = mysqli_master_query($conn, "SELECT * FROM jurusan");
 ?>
 <table>
     <tr>
         <td>iD</td>
         <td>Nama Jurusan</td> 
     </tr>
     <?php foreach ($result as $row) ?>
     <tr>
         <td> <?php echo $row ['id']; ?> </td>
         <td> <?php echo $row ['nama']; ?> </td>
     </tr>
     <?php endforeach ?>
 </table>