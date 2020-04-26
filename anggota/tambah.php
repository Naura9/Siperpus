<?php
include '../koneksi.php';
include '../asset/header.php';
?>
<!DOCTYPE html>
<html>
<head> 
  <title>Tambah Data Anggota</title>
</head>
<body>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <center>
            <div class="card" style="width: 100%;">
                <div class="card-header" style="width: 100%;">
                  <h2 class="card-title"><i class="fas fas fa-book"> </i> Tambah Data Buku </h2>
                </div>
                <div class="card-body">

                <form action="proses-tambah.php" method="post">

                <table class="table">
                  <tr>
                      <td>Nama Lengkap</td>
                      <td><input type="text" name="nama"></td>
                  </tr>
                  <tr>
                      <td>Kelas</td>
                      <td><input type="text" name="kelas">
                          <small class="form-text text-muted">Contoh: XRPL7</small>
                      </td>
                  </tr>
                  <tr>
                      <td>Nomor Telpon</td>
                      <td><input type="text" name="telp">
                          <small class="form-text text-muted">Contoh: 111-222-3333</small>
                      </td>
                  </tr>
                  <tr>
                      <td>Username</td>
                      <td><input type="text" name="username"></td>
                  </tr>
                  <tr>
                      <td>Password</td>
                      <td><input type="password" name="password"></td>
                  </tr>

                  <tr>
                      <th></th>
                      <th><input type="submit" class="btn btn-primary" name="simpan" value="Simpan"></th>
                  </tr>
                </table>
                </form>                        
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<?php
include '../asset/footer.php';
?>