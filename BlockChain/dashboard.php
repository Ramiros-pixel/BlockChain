<?php
session_start();

if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: login.php');
    exit();
    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockChain</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="style.css">
</head>

<body id="home" class="hero">
    <section>
        <nav class="navbar">

            <h1 class="logo">Block<span>Chain</span></h1>



            <ul class="list">

                <li> <a href="#home">Home</a></li>
                <li> <a href="#Find">Explain </a></li>
                <li> <a href="#figure">History </a></li>
                <li>
                    <form action="logout.php" method="POST">
                        <button type="submit" name="logout">Logout</button>
                    </form>
                </li>
            </ul>

            <ul class="icon">

                <li><a onclick="darkmMode()"><i data-feather="moon"></i></a></li>
                <li><a href="#Find" id="search"><i data-feather="search"></i></a></li>
                <li><a href="#figure" id="user"><i data-feather="user"></i></a></li>
                <li><a href="#menu" id="hamburger-menu"><i data-feather="menu"></i></a></li>

            </ul>
        </nav>


        <div class="konten">

            <h3>"Blockchain is the future—secure, transparent, and decentralized."</h3>
        </div>
    </section>

    <div class="konten1" id="Find">
        <h3>The system is completely decentralized, with no trusted third party.</h3>
    </div>
    <section>
        <div class="konten2">
            <h1>Apa itu BlockChain dan Mengapa harus BlockChain?</h1>
            <br />
            <p>
                Teknologi blockchain adalah mekanisme basis data lanjutan yang memungkinkan berbagi informasi secara transparan dalam jaringan bisnis. Basis data blockchain menyimpan data dalam blok yang dihubungkan bersama dalam sebuah rantai. Data bersifat konsisten secara kronologis karena Anda tidak dapat menghapus atau mengubah rantai tanpa konsensus dari jaringan.
                </br> </br>
                Apa si yang membuat Teknologi BlockChain berbeda?</br></br>

                Desentralisasi: Blockchain mendistribusikan kontrol dan pengambilan keputusan ke jaringan, mengurangi ketergantungan pada otoritas tunggal dan meningkatkan transparansi.</br>

                Ketetapan: Transaksi yang dicatat di blockchain tidak dapat diubah. Kesalahan hanya bisa diperbaiki dengan menambahkan transaksi baru yang tetap terlihat oleh jaringan.</br>

                Konsensus: Transaksi baru hanya dapat dicatat jika mayoritas peserta dalam jaringan menyetujuinya, memastikan validitas data.</br>
            </p>
        </div>

        <br /><br /> <br /><br />

    </section>
    <div class="wel">
        <p>
            <span id="figure">History of BlockChain</span>

            <br /><br />

            Menurut *Blockchain for Dummies* oleh Manav Gupta, blockchain dikembangkan untuk menciptakan sistem yang lebih efektif, efisien, hemat biaya, aman, dan andal dalam merekap transaksi keuangan masa depan. </br> </br>

            Konsep blockchain muncul pada 1991, ketika Stuart Haber dan W. Scott Stornetta menerbitkan jurnal *Journal of Cryptography: How to Time Stamp a Digital Document*. </br> </br>

            Blockchain pertama kali digunakan untuk Bitcoin pada 2009 oleh Satoshi Nakamoto. Tidak seperti uang tradisional yang dikendalikan bank sentral, Bitcoin beroperasi tanpa otoritas pusat. Sebagai gantinya, transaksi diverifikasi melalui jaringan *peer-to-peer*.
        </p>
        <div>
            <a href="#">

                <div class="card">
                    <div class="wrapper">
                        <img src="konten/Satoshi_Nakamoto.jpg" class="cover-image" />
                    </div>

                </div>

            </a>
        </div>
    </div>


    <script>
        feather.replace();
    </script>
    <!--Function script-->


    <script src="konten/javascript/java.js"></script>

</body>

</html>