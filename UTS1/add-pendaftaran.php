<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card-header">
                    <h4>Form Pendaftaran</h4>
                </div>
                <div class="card-body">
                    <form action="tambah-pendaftaran.php" method="POST">

                        <div class="form-group">
                            <label for="registrasi">No. Registrasi</label>
                            <input type="text" name="no_registrasi" id="registrasi" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" id="jurusan" class="form-control" required>
                                <option disabled selected>Pilih Jurusan</option>
                                <option value="adp">Administrasi Perkantoran</option>
                                <option value="akp">Akuntansi Perkantoran</option>
                                <option value="mik">Manajemen Informatika & Komputer</option>
                                <option value="its">IT Support</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis kelamin" class="form-control" required>
                                <option disabled selected>Pilih Jenis Kelamin</option>
                                <option value="l">Laki-laki</option>
                                <option value="p">Perempuan</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="telepon">No. Telepon</label>
                            <input type="number" name="telepon" id="telepon" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button name="submit" type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>