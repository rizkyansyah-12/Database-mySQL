<?php 
include 'layouts/header.php';
include 'layouts/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Tambah Data</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col md-12">
          <form role="form" action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="noreg">No Registrasi</label>
                <input type="text" name="no_reg" class="form-control" id="noreg" placeholder="Masukan Nomor Registrasi">
              </div>
              <div class="form-group">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Masukan Nama Lengkap">
              </div>
              <div class="form-group">
                <label for="jur">Jurusan</label>
                <select name="jurusan" id="jurusan" class="form-control">
                  <option disabled selected> Pilih Jurusan</option>
                  <option value="mik">Manajemen Informatika dan Komputer</option>
                  <option value="adp">Administrasi Perkantoran</option>
                  <option value="its">IT Suport</option>
                  <option value="akp">Administrasi Perkantoran</option>
                </select>
                <div class="form-group">
                  <label for="jk">Jenis Kelamin</label>
                  <select name="jenis_kelamin" id="jk" class="form-control">
                    <option disabled selected> Pilih jenis kelamin</option>
                    <option value="l">Laki-Laki</option>
                    <option value="p">Perempuan</option>
                  </select>
                  <div class="form-group">
                    <label for="noreg">No Telepon</label>
                    <input type="number" name="no_reg" class="form-control" id="notelp" placeholder="Masukan Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label for="text">Email</label>
                    <input type="textl" name="Email" class="form-control" id="Email" placeholder="Masukan Nomor Email">
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- Small boxes (Stat box) -->

            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <?php 
      include 'layouts/footer.php';
      ?>