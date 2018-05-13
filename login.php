<?php
require('header.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body> <center>
    <div class="container">
        <div class="row">
            <div class="col-md">
                <form action="login_press.php" method="POST">
                    <div class="form-group">
                        <label for="user">Username</label>
                        <input type="text" class="form-control" id="user" name="nama" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" name="save" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</center>
</body>
</html>
