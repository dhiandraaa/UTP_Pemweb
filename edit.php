<?php
 require('header.php');
 include ('db.php');

 $id = $_GET['id'];

// buat query untuk ambil data dari database
$query = mysqli_query($kon, "SELECT * FROM laporan WHERE id='$id'")or die(mysql_error());
$user_data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}
 ?>

<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Edit </title>
  </head>
  <body><center>
  <form action="press_edit.php" method="GET"> <br><br> <h3>Edit Data Zakat</h3><br>
        <input type="text" name="jml" Placeholder="Jumlah Zakat" value="<?php echo $user_data['jml_zakat']?>" ><br>
        <input type="text" name="nama" Placeholder="Nama" value="<?php echo $user_data['nama'] ?>"> <br>
        <input type="radio" name="jenis_zakat" value="Zakat Fitrah">Zakat Fitrah<br>
        <input type="radio" name="jenis_zakat" value="Zakat Mal">Zakat Mal<br>
        <input type="radio" name="jenis_zakat" value="Zakat Profesi">Zakat Profesi<br>
        <button type="submit" name="Submit">EDIT</button>
    </form>
    </center>
    </body>
  </html>

<?php
 require('footer.php');
 ?>