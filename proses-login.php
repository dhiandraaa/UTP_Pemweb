<?php
SESSION_START();
include 'db.php';

$user=$_POST['user'];
$pasw=$_POST['pasw'];

if($user!=NULL && $pasw!=NULL){
    $login = mysqli_query($kon, "SELECT * FROM user WHERE nama='$user' AND pass='$pasw'");
    $check = mysqli_num_rows($login);
    if($check){
        $_SESSION['user']=$user;
        header('location:dash.php');
    } 
    else {
        echo "Login gagal";
    }
}
else{
    echo "Username dan Password harus diisi";
}
?>