<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eversol - Mandiri dengan Energi Matahari</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <a href="#home" class="navbar-logo">Eversol</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#portofolio">Portofolio</a>
            <a href="packages.php">Order</a>
        </div>

        <div class="navbar-extra">
            <a href="https://wa.me/081325754374" id="contact" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>
            <a href="javascript:void(0)" id="hamburger-menu">
                <i class="bi bi-list"></i>
            </a>
        </div>
    </nav>

    <section id="home" class="hero-section">
        <div class="container">
            <h1>Terangi Masa Depan, <br>Mulai dari Atap Anda.</h1>
            <p>"Wujudkan kemandirian energi dengan solusi panel surya cerdas yang hemat, bersih, dan berkelanjutan."</p>
            <p class="pemanis">Eversol hadir untuk membantu Anda mengubah sinar matahari menjadi tabungan masa depan bagi keluarga dan bumi.</p>
            <a href="packages.php" class="btn">MULAI ORDER</a>
        </div>
    </section>

    <section id="about" class="about-section">
        <div class="container">
            <h2>Tentang Eversol</h2>
            <p style="margin: 20px auto; max-width: 800px;">
                Eversol adalah platform layanan energi terbarukan yang membantu masyarakat beralih menuju kemandirian energi dengan menyediakan konsultasi profesional, pemasangan sistem panel surya terintegrasi, serta pemantauan berkelanjutan.
            </p>

            <h2 style="margin-top: 60px;">KEUNTUNGAN</h2>
            <div class="grid">
                <div class="card">
                    <h3>Hemat Biaya Listrik</h3>
                    <p>Penghematan biaya listrik jangka panjang karena mengurangi ketergantungan pada listrik konvensional.</p>
                </div>
                <div class="card">
                    <h3>Ramah Lingkungan</h3>
                    <p>Menurunkan emisi karbon sehingga berkontribusi pada keberlanjutan dan pengurangan dampak perubahan iklim.</p>
                </div>
                <div class="card">
                    <h3>Monitoring Transparan</h3>
                    <p>Monitoring transparan dan terukur melalui dashboard yang memudahkan memantau efisiensi energi.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portofolio" class="portfolio-section">
        <div class="container">
            <h2>Portofolio Proyek</h2>
            <div class="slider-wrapper">
                <div class="slider">
                    <div class="slide">
                        <img src="assets/portofolio1.jpg" alt="Proyek 1">
                        <div class="slide-info">Proyek Pembuatan Panel Surya di Surabaya</div>
                    </div>
                    <div class="slide">
                        <img src="assets/portofolio2.jpg" alt="Proyek 2">
                        <div class="slide-info">Instalasi Residensial Jakarta</div>
                    </div>
                </div>
                <p style="margin-top: 15px; color: var(--text-secondary);">← Geser untuk melihat proyek lainnya →</p>
            </div>
        </div>
    </section>

    <footer style="padding: 2rem; text-align: center; background: var(--navbar-color); color: white; margin-top: 50px;">
        <p>&copy; 2026 Eversol Energy. Semua Hak Dilindungi.</p>
    </footer>

    <script>
        // Logika Hamburger Menu
        const navbarNav = document.querySelector('.navbar-nav');
        const hamburger = document.querySelector('#hamburger-menu');

        hamburger.onclick = (e) => {
            navbarNav.classList.toggle('active');
            e.preventDefault();
        };

        // Klik di luar sidebar untuk menutup menu
        document.addEventListener('click', function (e) {
            if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
                navbarNav.classList.remove('active');
            }
        });
    </script>
</body>
</html>