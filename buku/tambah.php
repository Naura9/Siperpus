<?php
include '../koneksi.php';
include '../asset/header.php';
$query = mysqli_query($kon, "SELECT * FROM kategori");
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
                  <h2 class="card-title"><i class="fas fa-plus-square"></i> Tambah Data </h2>
                </div>
                <div class="card-body">

                <form action="proses-tambah.php" method="post">

                <table class="table">
                  <tr>
                      <td>Judul Buku</td>
                      <td><input type="text" name="judul"></td>
                  </tr>
                  <tr>
                      <td>Penerbit</td>
                      <td><input type="text" name="penerbit"></td>
                  </tr>
                  <tr>
                      <td>Pengarang</td>
                      <td><input type="text" name="pengarang"></td>
                  </tr>
                  <tr>
                      <td>Ringkasan</td>
                      <td>
                          <textarea name="ringkasan">

                          </textarea>
                      </td>
                  </tr>
                  <tr>
                      <td>Cover</td>
                      <td><input type="file" name="cover"></td>
                  </tr>
                  <tr>
                      <td>Stok</td>
                      <td><input type="number" name="stok"></td>
                  </tr>
                  <tr>
                      <td>Kategori</td>
                      <td>
                          <select style="width: 200px" name="id_kategori">

                            <option value="">-- Pilih Kategori --</option>

                            <?php
                              while ($kategori = mysqli_fetch_assoc($query)):
                            ?>

                            <option value="<?php echo $kategori['id_kategori']; ?>"><?php echo $kategori['kategori']; ?></option>

                            <?php
                              endwhile;
                            ?>

                          </select>
                      </td>
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