<?php
include 'koneksi.php';
include 'asset/header.php';

$buku = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(stok) AS jb FROM buku"));
$jumlah_buku = $buku["jb"];

$anggota = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS ja FROM anggota"));
$jumlah_anggota = $anggota["ja"];

$pinjam = mysqli_fetch_assoc(mysqli_query($kon, "SELECT COUNT(*) AS jt FROM peminjaman"));
$jumlah_transaksi = $pinjam["jt"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <title>Hello, world!</title>
  </head>
  <body>

          <div class="col-md-10 p-5 pt2">
            <h3><i class="fas fa-tachometer-alt mr-2"></i></i> DASHBOARD</h3><hr>

            <div class="row text-white">
                <div class="card bg-danger ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-book mr-2"></i>                        
                        </div>
                      <h5 class="card-title">JUMLAH BUKU</h5>
                      <div class="display-4"><?= $jumlah_buku; ?></div>
                      <a href="http://localhost/siperpus/buku/index.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>

                <div class="card bg-warning ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-user mr-2"></i>                        
                        </div>
                      <h5 class="card-title">JUMLAH ANGGOTA</h5>
                      <div class="display-4"><?= $jumlah_anggota; ?></div>
                      <a href="http://localhost/siperpus/anggota/index.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>

                <div class="card bg-primary ml-5" style="width: 18rem;">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-tasks mr-2"></i>
                        </div>
                      <h5 class="card-title">JUMLAH TRANSAKSI </h5>
                      <div class="display-4"><?= $jumlah_transaksi; ?></div>
                      <a href="http://localhost/siperpus/transaksi/index.php"><p class="card-text text-white">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></p></a>
                    </div>
                </div>
            </div>

         </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
</body>
</html>