<?php 
$conn = mysqli_connect('localhost','root', '' , 'uts1-no-urut-221.mik.b.004');
$result = mysqli_query ($conn, "SELECT*FROM registrasi");
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
            <div class="col-8">
                <div class="row mt-2">
                    <div class="col-6"> <h3>FORM PENDAFTARAN</h3></div>
                    <form action="act-pendaftaran.php" method="POST">
                        <div class="form-control">
                            <label for="reg">Nomor Registrasi</label>
                            <input type="text" id="reg" class="form-control" name="no_registrasi">
                        </div>
                        <div class="form-control">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" id="nama_lengkap" class="form-control" name="nama_lengkap">
                        </div>
                        <div class="form-control">
                            <label for="jurusan">jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="mik">Manajemen Informatika & Komuter</option>
                                <option value="adp">Administrasi Kantor</option>
                                <option value="akp">Akuntasi Perkantoran</option>
                                <option value="ITS">IT Suport</option>
                            </select>
                        </div>
                        <div class="from-group">
                            <label for="jenis_kelamin">jenis_kelamin</label>
                            <select class="form-control" name="jenis_kelamin" id="jk">
                                <option value="l">laki-laki</option>
                                <option value="p">perempuan</option>
                            </select>
                        </div>
                        <br><div class="form-group">
                          <label for="alamat">alamat</label>
                          <textarea class="from-control" name="alamat" id="alamat"></textarea>
                      </div>
                      <div class="from-group">
                          <label for="no_telepon">no_telpon</label>
                          <input class="form-control" type="text" id="no_telepon" name="no_telpon">
                      </div>
                      <br>
                      <label for="e_mail">e_mail</label>
                      <input class="form-control" type="text" id="e_mail" name="e_mail">
                      <br>
                      <button type= "submit" name="submit">Simpan</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php 
if (isset($_POST['Submit'])){
    $no_registrasi = $_POST['no_registrasi'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telepon = $_POST['no_telepon'];
    $e_mail= $_POST['e_mail'];



    $result = "INSERT INTO registrasi VALUES ('', '$no_registrasi', '$nama_lengkap', '$jurusan', '$jenis_kelamin', '$alamat','$no_telepon', '$e_mail')";

    $sql = mysqli_query($conn, $sql);

    if ($query){
        header('location: registrasi.php');
    }
    echo "data gagal disimpan";
}


?>