<?php
include ('db.php');

if(isset($_GET['jml_fitrah'])){
    $orang = $_GET['jml_orang'];
    $hasil = $orang * 2.5;
    header ('Location:kalkulator.php');
}
?>