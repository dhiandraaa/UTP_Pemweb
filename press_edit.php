<?php
include ('db.php');
$jml = $_GET['jml'];
$nama = $_GET['nama'];
$jenis = $_GET['jenis_zakat'];
if(isset($_GET['Submit'])){
    $edit = mysqli_query ($kon, "UPDATE laporan set nama = '$nama',jml_zakat=$jml,jenis_zakat='$jenis' WHERE id='$id'");
    if($edit){
        Header('Location:laporan.php');
    }
    else{
        echo "gagal";
        }
}
?>