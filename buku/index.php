<?php
$kon= mysqli_connect("localhost", "root", "", "db_perpus");

$sql = "SELECT * from buku ORDER BY judul";

$res = mysqli_query($kon,$sql);

$buku = array();

while ($data = mysqli_fetch_assoc($res)) {
    $buku[] = $data;
}
include '../asset/header.php';
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
        <div class="col-md-10 p-5">
            <h3><i class="fas fa-book mr-2"></i>DATA BUKU</h3><hr>
        <div class="card-body pt-0">
        <a href="http://localhost/siperpus/buku/tambah.php">
            <button type="button" class="btn btn-outline-info"><i class="fas fa-plus p"> Tambah Data</i></button></a>

<table class="table table-striped table-bordered">

<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Judul</th>
        <th scope="col">Pengarang</th>
        <th scope="col">Stok</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>

<tbody>
<?php
    $no =1;
    foreach ($buku as $b) {?>
        
        <tr>
            <th scope="row"><?=$no?></th>
            <td><?=$b['judul']?></th>
            <td><?=$b['pengarang']?></th>
            <td><?=$b['stok']?></th>
            <td>

                        <a href="detail.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-success">Detail</a>
						<a href="edit.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-warning">Edit</a>
						<a href="hapus.php?id_buku=<?= $b['id_buku'];?>" class="badge badge-danger">Hapus</a>
        </td>
    </tr>

<?php
$no++;

}
?>

</tbody>
</table>    
</div>
</div>

<?php
include '../asset/footer.php';
?>