<?php
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $nama           = $_POST['nama'];
    $kelas          = $_POST['kelas'];
    $telp           = $_POST['telp'];
    $username       = $_POST['username'];
    $password       = $_POST['password'];

$query=mysqli_query($kon,"INSERT INTO anggota (nama, kelas, telp, username, password)
          VALUES ('$nama', '$kelas', '$telp', '$username', '$password')");
 
 if($query>0){
     echo "
        <script>
            alert('Data Berhasil Ditambahkan!!');
            document.location.href='index.php';
        </script>
    ";
 }
}
?>
