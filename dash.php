<?php
    SESSION_START();
    if(isset($_SESSION['user'])){

    }
    else{
        die("Anda belum login");
    }
    require("header.php");
?>
<html>
<body>
    <link rel="shortcut icon" href="favicon.ico">
    <audio>
        <source src="Opick - Ramadhan Tiba  Official Video.mp3" type="audio/mp3" controls autoplay>
        <source src="opick.ogg" type="audio/ogg" controls autoplay>
        Browser anda tidak support
    </audio>
</body>
</html>

<?php
    require("footer.php");
?>