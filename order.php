<?php
session_start();
require 'db.php';

$paket = isset($_GET['paket']) ? $_GET['paket'] : 'Eco Starter';

// Logika penentuan harga
if ($paket == 'Eco Starter') {
    $harga = 300000;
} elseif ($paket == 'Smart Home') {
    $harga = 600000;
} elseif ($paket == 'Independent Power') {
    $harga = 900000;
} else {
    $harga = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_lengkap'];
    $lokasi = $_POST['lokasi'];
    $telepon = $_POST['telepon'];
    $pembayaran = $_POST['pembayaran'];

    $stmt = $pdo->prepare("INSERT INTO orders (nama_lengkap, lokasi, telepon, pembayaran, paket, harga) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$nama, $lokasi, $telepon, $pembayaran, $paket, $harga])) {
        // Set Session
        $_SESSION['order_id'] = $pdo->lastInsertId();
        header("Location: landing.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Isi Data - Eversol</title>
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

    <div class="page-center-wrapper">
        <div class="form-container">
            <h2 style="color: var(--navbar-color); margin-bottom: 10px;">ISI DATA</h2>
            <p style="text-align:center; margin-bottom: 20px;">Paket Terpilih: <strong><?= htmlspecialchars($paket) ?></strong></p>
            
            <form method="POST">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" required placeholder="Masukkan nama lengkap Anda">
                </div>
                <div class="form-group">
                    <label>Lokasi Pengiriman</label>
                    <input type="text" name="lokasi" required placeholder="Alamat lengkap / Kota">
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="number" name="telepon" required placeholder="08xxxxxxxxxx">
                </div>
                <div class="form-group">
                    <label>Pilihan Pembayaran</label>
                    <select name="pembayaran" required>
                        <option value="Debit">Transfer Debit</option>
                        <option value="E-Wallet">E-Wallet (OVO/Dana/GoPay)</option>
                    </select>
                </div>
                <button type="submit" class="btn" style="width: 100%;">SUBMIT PESANAN</button>
            </form>
        </div>
    </div>
</body>
</html>