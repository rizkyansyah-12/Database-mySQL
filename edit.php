<?php 
$conn = mysqli_connect('localhost','root', '', 'db_mahasiswa');
$id = $_GET['id'];

$sql = mysqlli_query($conn, " SELECT * FROM mahasiswa WHERE id = $id");

if ($sql ) {
    $row = mysqli_fetch_assoc($sql);
}else{
    echo "data tidak ditemukan";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input mahsiswa</title>
</head>
<body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <label for="nim">nim</label>
        <input type="text" id="nim" name="nim" required value="<?= $row['nim']; ?>" <br>
        <label for="nama">nama lengkap</label>
        <input type="text" id ="nama" name="nama" required><br>
        <label for="jk">jenis kelamin</label>
        <select name="jenis_kelamin" id="jk">
            <option value="l">laki-laki</option>
            <option value="p">perempuan</option>
        </select><br>
        <label for="jur">jurusan</label>
        <select name="jurusan" id="">
            <?php foreach ($result as $row ):?>
              <option value="<?php echo $row ['id']; ?></option>"><?php echo $row ['nama']; ?></option>
          <?php endforeach ?>
      </select><br>
      <label for="alamat">alamat</label>
      <textarea rowns="3" cols="30" name="alamat" id="alamat"></textarea> <br>
      <label for="telepon">nomor telepon</label>
      <input type="text" id="telepon" name="telepon" required><br>
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>
      <br><br><button type ="submit" name="submit">Simpan</button>
  </form>

</body>
</html>