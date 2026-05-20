<?php 
session_start(); 
// Set Cookie terakhir mengunjungi halaman paket
setcookie("last_page", "packages", time() + (86400 * 30), "/"); 
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pilih Paket - Eversol</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar">
        <a href="index.php" class="navbar-logo">Eversol</a>

        <div class="navbar-extra">
            <a href="https://wa.me/081325754374" id="contact" target="_blank">
                <i class="bi bi-whatsapp"></i>
            </a>
        </div>
    </nav>

    <div class="container">
        <h2>SILAHKAN PILIH PAKET KEPERLUAN</h2>
        <div class="grid">
            <div class="card">
                <h3>Eco Starter</h3>
                <p>Komponen Utama:</p>
                <ul>
                    <li>2-4 Panel Surya High Efficiency.</li>
                    <li>Micro Inverter (Ringkas).</li>
                    <li>Sistem On-Grid.</li>
                </ul>
                <p style="margin-bottom:15px; font-weight:bold;">Rp 300.000</p>
                <a href="order.php?paket=Eco Starter" class="btn">PILIH PAKET</a>
            </div>
            <div class="card">
                <h3>Smart Home</h3>
                <p>Komponen Utama:</p>
                <ul>
                    <li>6-10 Panel Surya Monocrystalline.</li>
                    <li>String Inverter dengan Smart Monitoring.</li>
                    <li>Struktur penyangga aluminium.</li>
                </ul>
                <p style="margin-bottom:15px; font-weight:bold;">Rp 600.000</p>
                <a href="order.php?paket=Smart Home" class="btn">PILIH PAKET</a>
            </div>
            <div class="card">
                <h3>Independent Power</h3>
                <p>Komponen Utama:</p>
                <ul>
                    <li>10+ Panel Surya Grade A+.</li>
                    <li>Hybrid Inverter.</li>
                    <li>Lithium Battery Storage.</li>
                </ul>
                <p style="margin-bottom:15px; font-weight:bold;">Rp 900.000</p>
                <a href="order.php?paket=Independent Power" class="btn">PILIH PAKET</a>
            </div>
        </div>
    </div>
</body>
</html>