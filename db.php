<?php
$local = 'localhost';
$user = 'root';
$pass = '';
$db = 'pemweb';

$kon = mysqli_connect($local, $user, $pass, $db);

if(!$kon){
	die ('Koneksi berhasil');
}else{

}
?>