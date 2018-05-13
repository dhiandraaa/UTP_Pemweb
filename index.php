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
    <link rel="shortcut icon" href="favicon.ico">
    <link href="css/style.css" rel="stylesheet">
<body>
    <center>
        <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="https://cdn1-a.production.images.static6.com/lSFmGQoO60UfhEt23HddiT2hpHQ=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/liputan6-media-production/medias/1609241/original/061366600_1496138310-02_Ilustrasi_Zakat.jpg" alt="First slide" width="650px" height="500px">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="http://superiorpappers.com/wp-content/uploads/2017/07/Zakat-Fitrah.png" alt="Second slide" width="650px" height="500px">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="https://4.bp.blogspot.com/-G90qcyMesjw/VyYWn0nltlI/AAAAAAAAC4M/1OAbRJqqkMQWAWTFuzHKRRIqNvyR4uDOQCLcB/s1600/download-ceramah-agama-islam-untukmu-yang-belum-membayar-zakat-ustadz-ahmad-zainuddin-627x376.jpg" alt="Third slide" width="650px" height="500px">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
        <marquee>Hadis Tetang Zakat</marquee>
        <hr>
        <h4> فَرَضَ رَسُولُ اللهِ صَلَّى اللهُ عَلَيْهِ وَسَلَّمَ زَكَاةَ الْفِطْرِ طُهْرَةَ لِلصَّائِمِ مِنْ الَّغْوِ وَالرَّفَثِ وَطُعْمَةَ لِلْمَسَاكِيْنَ </h4>
        <p> Rasulullah Saw mewajibkan zakat fitrah untuk mensucikan diri orang puasa dari perbuatan sia-sia
             (al-laghw) dan perkataan kotor (ar-rafats), sekaligus untuk memberi makan orang-orang miskin.</p>

        <a href="https://www.fiqihmuslim.com/2017/08/hadits-tentang-zakat.html">Source by : Fiqih Muslim</a>
    </center>
</body>
</html>

<?php
    require("footer.php");
?>
