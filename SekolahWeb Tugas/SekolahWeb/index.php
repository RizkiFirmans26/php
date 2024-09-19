<?php
require_once("koneksion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $judul ?>
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">
            <img src="images/dUtQpKlw_200x200.png" alt="">
            <h4>SMPN 6 Sidoarjo</h4>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="./Feedback.php">Feedback</a></li>
                <li><a href="#">Profil</a>
                    <ul>

                        <li><a href="./profile/profile/Profile.html">Profile</a></li>
                    </ul>
                </li>
                <li><a href="#">Kegiatan Sekolah</a>
                    <ul>
                        <li><a href="blogliterasi.php">Update Praktik Baik</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="home">
        <h1 class="merah">SEKOLAH PENGGERAK</h1>
        <br>
        <h4>BERIMTAQ, BERPRESTASI, PEDULI LINGKUNGAN, DAN BERWAWASAN</h4>
        <h2>SMPN 6 SIDOARJO</h2>
        <br>
        <h2>2024</h2>
    </div>
    <div class="isi">
        <a href="#">Komunitas</a>
        <a href="#">Prestasi</a>
        <a href="#">Aktifitas</a>
    </div>
    <div class="gambarisi">
        <img class="kanan" src="images/logo.png" alt="">
        <img class="kecilkan kiri" src="images/medal.png" alt="">
        <img class="kecilkan" src="images/working.png" alt="">
    </div>

    <hr>
    <br>

    <div class="bawah menu">
        <div class="min">
            <div class="Deskripsi">
                <img class="gambardes" src="images/<?= $gambar; ?>" alt="">
                <img class="gambardes" src="images/kurikulum.jpg" alt="">
                <img class="gambardes" src="images/ANBK 2022.jpg" alt="">
            </div>
            <div class="kanann">
                <p><u>SEKOLAH PENGGERAK</u></p>
                <p class="teksisi">Program Sekolah Penggerak

                    Program Sekolah Penggerak adalah upaya untuk mewujudkan
                    visi Pendidikan Indonesia dalam mewujudkan Indonesia maju
                    yang berdaulat, mandiri, dan berkepribadian melalui terciptanya
                    Pelajar Pancasila.</p>

                <p><u>KURIKULUM MERDEKA</u></p>
                <p class="teksis">Menurut BSNP atau Badan Standar Nasional Pendidikan, pengertian
                    kurikulum merdeka belajar adalah suatu kurikulum pembelajaran
                    yang mengacu pada pendekatan bakat dan minat. Di sini, para
                    pelajar (baik siswa maupun mahasiswa) dapat memilih pelajaran
                    apa saja yang ingin dipelajari sesuai dengan bakat dan minatnya.</p>

                <p><u>ANBK</u></p>
                <p class="teksisi">Asesmen Nasional adalah program evaluasi yang diselenggarakan oleh Kemdikbud
                    untuk meningkatkan mutu pendidikan dengan memotret input, proses dan output
                    pembelajaran di seluruh satuan pendidikan. Asesmen Nasional dilaksanakan dengan 3 (tiga)
                    instrumen yaitu Asesmen Kompetensi Minimum (AKM Literasi, Numerasi), Survey Karakter dan
                    Survey Lingkungan Belajar.</p>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="index.js"></script>
</body>

</html>