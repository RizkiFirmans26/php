<?php
require_once("koneksion.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul ?></title>
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="/images/engsel.jpg" width="" alt="">
            <h4>SMPN 6 Sidoarjo</h4>
        </div>
        <div class="search-bar">
            <input type="text" placeholder="search">
            <button type="submit">search</button>
        </div>
        <div class="menu">
            <ul>
                <li><a href="/index.php">Home</a></li>
                <li><a href="Feedback.php">Feedback</a></li>
                <li><a href="blogliterasi2.php">Literasi</a></li>
            </ul>
        </div>
    </div>

    <!-- Feedback -->
    <div class="FeedBack main-content">
        <div class="Judul">
            <h2> FeedBack </h2>
            <div class="about">
                <h3>
                    Bagi Kami FeedBack dari semua User pengguna web ini
                    adalah ulasan ulasan yang mendukung kami untuk, dapat
                    mengembangkan web sekolah ini menjadi lebih baik dan optimal.
                </h3>
            </div>
        </div>
    </div>

    <div class="FeedBack main-content2">

        <div class="bawah menu">
            <div class="min">
                <div class="Deskripsi">
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSddtijbUL1qnlLNjQYwgUiXhwsIIcnNV5xAj07KGIqaJSLudQ/viewform"> <img class="gambardes" src="images/Feed.Png" alt=""></a>
                </div>
                <div class="kanann">
                    <div class="Y">
                        <p><u>FeedBack untuk lebih Baik</u></p>
                    </div>  
                    <p class="teksisi">Program Sekolah Penggerak
                        Program Sekolah Penggerak adalah upaya untuk mewujudkan
                        visi Pendidikan Indonesia dalam mewujudkan Indonesia maju
                        yang berdaulat, mandiri, dan berkepribadian melalui terciptanya
                        Pelajar Pancasila.</p>

                </div>
            </div>
        </div>


    </div>


</body>

</html>