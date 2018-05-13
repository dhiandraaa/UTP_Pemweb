<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="user" placeholder="Username" value="">
        <input type="password" name="pasw" placeholder="Password" value="">
        <button type="submit" name="login">LOGIN</button>
    </form>
</body>
</html>

<?php
$akun = 'su';
$pas = 'su';
if(isset($_POST['login'])){
    if($akun == $_POST['user'] && $pas==$_POST['pasw']){
        header("location:dash.php");
    }else{
        echo "Login Gagal";
    }
}
?>