<?php
    include "database.php";

    if(isset($_POST['send'])) {
        $username = $_POST['username'];
        $ulasan = $_POST['ulasan'];

        $sql = "INSERT INTO ulasan (username, ulasan) VALUES 
        ('$username', '$ulasan')";

        if($db->query($sql)) {
                echo "Thank For The Review :)"; 
        }else {
            echo "Ooops Something Worng, We Can't Get Your Review :(";
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="style.css">

        <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    </head>
    <body>

        <div class="home">
            <nav>
                <h2 class="logo">Portofo<span>lio</span></h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="gallery.html">Gallery</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
                <a href="https://www.youtube.com/@rikymengko1349" class="btn">Subscribe</a>
            </nav>
            <div class="image">
                <img src="33.png">
            </div>
            <div class="content">
                <h4>Hello, My Name Is</h4>
                <h1>Riky Martien<span> Mengko</span></h1>z
                <h3>I'm a <span class="text"></span></h3>
                <a href="#"><i class="far fa-user"></i>More About Me</a>
            </div>
        </div>

        <section class="about">
            <div class="about-me">
                <img src="2.jpg">
                <div class="about-text">
                    <h2>About <span>Me</span></h2>
                    <h5>Student <span>& Content Creator</span></h5>
                    <p>Halo, saya Riky Mengko, seorang mahasiswa Teknik Informatika di Universitas Sam Ratulangi. Saya memiliki semangat besar untuk menjelajahi dunia teknologi dan komputer, serta senang belajar hal-hal baru dalam bidang ini. Selain itu, saya juga menikmati bermain game online dan menonton film.</p>
                    <p>Saya percaya bahwa teknologi memainkan peran penting dalam mendorong inovasi dan memperluas wawasan kita. Sebagai seorang mahasiswa, saya selalu bersemangat untuk terlibat dalam berbagai proyek dan diskusi yang memungkinkan saya untuk memperluas pemahaman saya tentang teknologi.</p>
                    <p>Selain dari itu, saya juga aktif dalam organisasi paduan suara di kampus. Saya menemukan kebahagiaan dan kedamaian dalam menyanyikan lagu-lagu yang indah bersama teman-teman seperjuangan saya. Aktivitas ini juga membantu saya untuk menjaga keseimbangan dalam hidup, karena saya percaya bahwa pengembangan diri tidak hanya terjadi melalui studi teknis, tetapi juga melalui pengalaman sosial dan seni.</p>
                    <p>Saya berharap dapat terus belajar dan tumbuh di semua bidang minat saya, dan saya sangat bersemangat untuk melihat apa yang masa depan bawa. Terima kasih atas kesempatan ini untuk berbagi sedikit tentang diri saya.</p>
                    <a href="#" class="button">Contact Me</a>
                </div>
            </div>
            <h3 id="review">DIRECT REVIEW</h3>
                <form class="review-form" action="index.php" method="POST">
                    <input type="text" placeholder="Name" name="username"/>
                    <textarea placeholder="Your review..." name="ulasan"></textarea>
                    <button type="submit" name="send">Send</button>
                </form>
        <section>
            <footer>
                <p>&copy; 2024 Riky Mengko Website. All rights reserved.</p>
                <div class="sosial">
                    <a href="https://www.youtube.com/channel/UCiY-FWHodzOsgCmYyZ7MYhA"><i class="fab fa-youtube"></i></a>
                    <a href="https://www.facebook.com/riky.mengko"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/rikymngko/"><i class="fab fa-instagram"></i></a>
                    <a href="https://discord.com/channels/@ky"><i class="fab fa-discord"></i></a>
                    <a href="https://www.tiktok.com/@kokonuttch"><i class="fab fa-tiktok"></i></a>
                </div>
                <p class="end">CopyRight By Riky Martien Mengko</p>
            </footer>
        <script src="script.js"></script>
    </body>
</html>

