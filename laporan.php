<?php
require ('header.php');
include ('db.php');
$result = mysqli_query($kon, "SELECT * FROM laporan");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laporan Zakat</title>
  </head>
  <body>
    <h3>Laporan Zakat</h3>

    <table border="1px" class="table">
    <center>
      <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>jumlah zakat</th>
        <th>jenis zakat</th>
        <th>Kelola Laporan</th>
      </tr>
      <tr>
        <?php
        while($user_data = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['jml_zakat']."</td>";
        echo "<td>".$user_data['jenis_zakat']."</td>";
        echo "<td> <a href='edit.php?id=".$user_data['id']."' class='btn btn-danger'>Edit</a> | 
        <a href='hapus.php?id=".$user_data['id']."' class='btn btn-danger'>Hapus</a> </td>";
        echo "</tr>";
      }
    ?>
      </tr>
      </center>
    </table>

  </body>
</html>