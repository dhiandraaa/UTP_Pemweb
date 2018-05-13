<?php
include ('db.php');

$hasil = $_POST['jml'];
$nama = $_POST['nama'];
$jenis = $_POST['jenis_zakat'];

if(isset($_POST['Submit'])){
    $insert = mysqli_query($kon, "INSERT INTO laporan(nama,jenis_zakat,jml_zakat) VALUES ('$nama','$jenis',$hasil)");
    if($insert){
        echo "Data Berhasil Ditambahkan ke Database";
    }
    else{
        echo"Data Gagal Ditambahkan ke Database";
    }
}
?>
