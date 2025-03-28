<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlockChain2</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="stylee.css">
</head>

<body id="home" class="hero">
    <section>
        <nav class="navbar">

            <h1 class="logo">Block<span>Chain</span></h1>



            <ul class="list">

                <li> <a href="#home">Home</a></li>
                <li> <a href="#Find">Fungsi </a></li>
                <li> <a href="#figure">Explanation </a></li>

            </ul>

            <ul class="icon">
                <li><a href="dashboard.php" id="more"><i data-feather="arrow-left"></i></a></li>
                <li><a onclick="darkmMode()"><i data-feather="moon"></i></a></li>
                <li><a href="#Find" id="search"><i data-feather="search"></i></a></li>
                <li><a href="#figure" id="user"><i data-feather="user"></i></a></li>

                <li><a href="#menu" id="hamburger-menu"><i data-feather="menu"></i></a></li>

            </ul>
        </nav>


        <div class="konten">

            <h3> Blockchain: The Future of Clean Transactions
                "No fraud. No manipulation. Just pure transactions. </h3>
        </div>
    </section>

    <div class="konten1" id="Find">
        <h3>The Future of Clean Transactions</h3>
    </div>


    <section>
        <!--History-->
        <div class="konten2">
            <h1>Fungsi Blockchain</h1>
            <br />
            <p> 1. Keamanan Lanjutan </br> Blockchain menggunakan kriptografi, desentralisasi, dan konsensus untuk menciptakan sistem yang sangat aman dan sulit diubah, sehingga mencegah manipulasi data atau transaksi.</br></br>

                2. Peningkatan Efisiensi </br> Transparansi dan kontrak pintar dalam blockchain mempercepat transaksi bisnis-ke-bisnis dengan mengurangi hambatan operasional dan keterlibatan pihak ketiga.</br></br>

                3. Audit Lebih Cepat </br> Catatan blockchain tersusun secara kronologis dan transparan, memungkinkan proses audit yang lebih mudah dan efisien.

            </p>
        </div>
    </section>
    </br></br></br>
    <div class="vid" id="figure">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Sq3m2Cq5pJw?si=cQ9ndyq_8c8dEZ84"
            title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    </div>
    </br>


    <!--Profil-->

    <style>
        .canva-container {
            z-index: 1003;
            position: absolute;
            width: 100%;
            height: 0;
            padding-top: 23.1481%;
            box-shadow: 0 2px 8px 0 rgba(63, 69, 81, 0.16);
            margin-top: 175vh;
            margin-bottom: 0.9em;
            overflow: hidden;
            border-radius: 8px;
            will-change: transform;
        }

        .canva-container iframe {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            border: none;
            padding: 0;
            margin: 0;
        }

        .canv {
            position: absolute;
            z-index: 1003;
            display: none;
            width: 170%;
            margin-top: 191vh;
        }

        .canv img {
            height: 50%;
            width: 100%;
        }

        /* Menyembunyikan .canva-container dan menampilkan .canv khusus untuk iPhone XR */
        @media (max-width: 414px) and (max-height: 896px) {
            .canva-container {
                display: none !important;
            }

            .canv {
                display: block !important;
            }
        }
    </style>

    <div class="canva-container">
        <iframe loading="lazy"
            src="https://www.canva.com/design/DAGi4-eT7Og/ftr5bjIKNjG1KwbGL0HH4g/view?embed"
            allowfullscreen>
        </iframe>
    </div>

    <div class="canv">
        <img src="konten/xr.png">
    </div>


    <script>
        feather.replace();
    </script>
    <!--Function script-->


    <script src="konten/javascript/java.js"></script>

</body>

</html>
