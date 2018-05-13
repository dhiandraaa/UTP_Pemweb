<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="wrap">
    <center> 
        <form action="proses-login.php" method="POST">
            <img src="logo.png" width=150px height=150px>
            <table>
            <tr>
            <td>
            Username
            </td>
            <td>
            <input type="text" name="user" placeholder="Username" value="">
            </td>
            </tr>
            <tr>
            <td>
            Password
            </td>
            <td>
            <input type="password" name="pasw" placeholder="Password" value="">
            </td>
            </tr>
            <tr>
            <td colspan="2">
            <button type="button" class="btn btn-success" name="login">Login</button>
            </td>
            </tr>
        </form>
    </center>
    </div>
</body>
</html>