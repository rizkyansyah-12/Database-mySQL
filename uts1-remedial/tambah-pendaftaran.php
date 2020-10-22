
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body> 
    <form action="tambah-pendaftaran.php" method="POST">

        <div class="form-group">
            <label for="reg">Nomor Registrasi</label>
            <input type="text" id="reg" name="no_registrasi" class="form-control" required >
        </div>

        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control"required>
        </div>
        <div class="form-group">
            <label for="jurusan">jurusan</label>
            <select id="jurusan" name="jurusan"class="form-control" required="">
                <option value="mik">Manajemen Informatika & Komuter</option>
                <option value="adp">Administrasi Kantor</option>
                <option value="akp">Akuntasi Perkantoran</option>
                <option value="ITS">IT Suport</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">jenis_kelamin</label>
            <select name= "jenis_kelamin" id="jk" class="form-control" required="">
              <option disabled selecte>Pilih Jenis Kelamin</option>
              <option value="l">laki-laki</option>
              <option value="p">perempuan</option>
          </select>
      </div>
      <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea name="alamat" id="alamat" cols="30" rowns="10" class="form-control" required></textarea>
      </div>
      <div class="form-group">
          <label for="no_telepon">No Telpon</label>
          <input type="number" id="no_telepon" name="no_telpon" class="form-control" required>
      </div>
       <div class="form-group">
      <label for="e_mail">Email</label>
      <input type="email" id="e_mail" name="e_mail"  class="form-control" required>
      </div>
      <button type= "submit" name="submit">Simpan</button>
  </form>

  <script src="js/jquery.min.js"></script>
</body>
</html>
