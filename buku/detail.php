<?php  
include '../asset/header.php';
include '../koneksi.php';

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku WHERE id_buku=$id_buku";
$res = mysqli_query($kon, $sql);
$detail = mysqli_fetch_assoc($res);
// var_dump($detail);
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
        <div class="col-md-7 p-1 pl-5">
        <div class="card-body">
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
          <center>
            <div class="card" style="width: 100%;">
                <div class="card-header" style="width: 100%;">
                  <h2 class="card-title"><i class="fas fa-search"></i> Detail Buku </h2>
                </div>
			<table class="table table-bordered">
				<tr>
					<td><strong>Judul</strong></td>
					<td><?=$detail['judul'];?></td>
				</tr>
				<tr>
					<td><strong>Penerbit</strong></td>
					<td><?=$detail['penerbit']?></td>
				</tr>
				<tr>
					<td><strong>Pengarang</strong></td>
					<td><?=$detail['pengarang']?></td>
				</tr>
				<tr>
					<td><strong>Ringkasan</strong></td>
					<td><?=$detail['ringkasan']?></td>
				</tr>
				<tr>
					<td><strong>Cover</strong></td>
					<td><img src="<?=$detail['cover']?>" style="width: 25%"></td>
				</tr>
				<tr>
					<td><strong>Stok</strong></td>
					<td><?=$detail['stok']?></td>
				</tr>
				<tr>
					<td><strong>Kategori</strong></td>
					<td><?=$detail['id_kategori']?></td>
				</tr>
				<tr>
					<td class="text-rigth" colspan="2">
						<a href="index.php" class="btn btn-success"><i class="fas fa-angle-double-left"></i>Kembali</a>

					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>
<?php  
include '../asset/footer.php';
?>