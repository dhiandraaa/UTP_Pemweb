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
    <title>Kalkulator Zakat</title>
</head>
<body>
<section id="tabs">
	<div class="container">
		<h6 class="section-title h1">Kalkulator Zakat</h6>
		<div class="row">
			<div class="col-md-12 ">
				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-fitrah" role="tab" aria-controls="nav-home" aria-selected="true">Zakat Fitrah</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-mal" role="tab" aria-controls="nav-profile" aria-selected="false">Zakat Mal</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-profesi" role="tab" aria-controls="nav-contact" aria-selected="false">Zakat Profesi</a>
					</div>
                </nav>
                
				<div class="tab-content" id="nav-tabContent">
					<div class="tab-pane fade show active" id="nav-fitrah" role="tabpanel" aria-labelledby="nav-home-tab">
                        <h4> Zakat Fitrah </h4>
                        <p>Zakat Fitrah per orang = 2.5Kg x harga beras di pasaran per KG.</p> 
                        <form action="" method="GET">
                            <input type="text" name="jml_orang" Placeholder="Jumlah Orang"> <br>
                            <Button type="submit" name="jml_fitrah">Hitung </Button> <br>
                            <?php
                            if(isset($_GET['jml_fitrah'])){
                                $orang = $_GET['jml_orang'];
                                $hasil = $orang * 2.5;
                            echo "<script>alert('Anda Harus Membayar Zakat Fitrah sebesar ".$hasil." KG Beras');window.location='bayar.php'</script>";
                            }
                            ?>
                        </form>
                    </div>
                    
					<div class="tab-pane fade" id="nav-mal" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <h4> Zakat Mal </h4>
                        <p>Zakat Maal = 2,5% X Jumlah harta yang tersimpan selama 1 tahun</p> 
                        <form action="" method="GET">
                            <input type="text" name="jml_Harta" Placeholder="Jumlah Harta Dalam Rupiah"> <br>
                            <Button type="submit" name="jml_mal">Hitung </Button> <br>
                            <?php
                            if(isset($_GET['jml_mal'])){
                                $harta = $_GET['jml_Harta'];
                                $hasil = $harta * (2.5/100);
                            echo "<script>alert('Anda Harus Membayar Zakat Mal sebesar ".$hasil." Rupiah');window.location='bayar.php'</script>";
                            }
                            ?>
                        </form>
					</div>
                    
                    <div class="tab-pane fade" id="nav-profesi" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <h4> Zakat Profesi </h4>
                        <form action="" method="GET">
                            <input type="text" name="jml_gaji" Placeholder="Jumlah Gaji"> <br>
                            <Button type="submit" name="jml_profesi">Hitung </Button> <br>
                            <?php
                            if(isset($_GET['jml_profesi'])){
                                $prof = $_GET['jml_gaji'];
                                $hasil = $prof * (2.5/100);
                            echo "<script>alert('Anda Harus Membayar Zakat Mal sebesar ".$hasil." Rupiah');window.location='bayar.php'</script>";
                            }
                            ?>
                        </form>
					</div>
				</div>
			
			</div>
		</div>
	</div>
</section>
</body>
</html>

<?php
    require("footer.php");
?>