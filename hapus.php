<?php

$id = $_GET['id.php'];

$hapus = mysqli_query($kon, "DELETE FROM laporan WHERE id='$id'") or die (mysql_error());
if(hapus) {
  header("location:laporan.php?pesan=hapus");
}
?>
