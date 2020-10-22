<?php 
$conn = mysqli_connect('localhost','root', '', 'db_mahasiswa');
$result = mysqli_query($conn, "SELECT * FROM jurusan");
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
        <input type="text" id="nim" name="nim" required> <br>
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
        <input type="text" id="no_telepon" name="no_telepon" required><br>
         <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <br><br><button type ="submit" name="submit">Simpan</button>
    </form>
    
</body>
</html>
<?php 
if (isset($_POST['submit'])) {
    $nim  =$_POST['nim'];
    $nama =$_POST['nama'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $jurusan =$_POST['jurusan'];
    $alamat  =$_POST['alamat'];
    $telepon =$_POST['telepon'];
    $email   =$_POST['email'];

    $sql = "INSERT into mahasiswa VALUES ('', '$nim', '$nama', '$jenis_kelamin', '$jurusan', '$alamat','$telepon', '$email','','')";

    $query = mysqli_query($conn, $sql);

    if ($query){
        echo "data berhasil disimpan";
        header('location: mahasiswa.php');
    }
    else{
        echo "data gagal disimpan";
    }



}
    

    ?>
