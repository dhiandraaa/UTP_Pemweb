<?php
    SESSION_START();
    if(isset($_SESSION['user'])){

    }
    else{
        die("Anda belum login");
    }
    require("header.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bayar Zakat</title>
</head>
<body>
    <center>
    <form action="bayar-proses.php" method="POST">
        <input type="text" name="jml" Placeholder="Jumlah Zakat"><br>
        <input type="text" name="nama" Placeholder="Nama"> <br>
        <input type="radio" name="jenis_zakat" value="Zakat Fitrah" checked> Zakat Fitrah<br>
        <input type="radio" name="jenis_zakat" value="Zakat Mal">Zakat Mal<br>
        <input type="radio" name="jenis_zakat" value="Zakat Profesi">Zakat Profesi<br>
        <button type="submit" name="Submit">Bayar</button>
    </form>
    </center>    
</body>
</html>

<?php
    require("footer.php");
?>