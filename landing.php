<?php
session_start();
require 'db.php';

if (!isset($_SESSION['order_id'])) {
    header("Location: index.php");
    exit();
}

$stmt = $pdo->prepare("SELECT * FROM orders WHERE id = ?");
$stmt->execute([$_SESSION['order_id']]);
$order = $stmt->fetch();

if (!$order) {
    echo "Data tidak ditemukan.";
    exit();
}

// Logika tanggal proses (contoh: 3 hari dari tanggal input)
$tanggal_input = date('d F Y', strtotime($order['tanggal_input']));
$tanggal_proses = date('d F Y', strtotime($order['tanggal_input'] . ' + 3 days'));
?>
<!DOCTYPE html>
<html lang=\"id\">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Order - Eversol</title>
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
        <div class="info-box">
            <h2>Detail Pesanan Anda</h2>
            <p>Halo selamat datang <strong><?= htmlspecialchars($order['nama_lengkap']) ?></strong>.</p>
            <p>Pemesanan paket <strong><?= htmlspecialchars($order['paket']) ?></strong> seharga <strong>Rp <?= number_format($order['harga'], 0, ',', '.') ?></strong> dengan metode <strong><?= htmlspecialchars($order['pembayaran']) ?></strong>.</p>
            <br>
            <p>Barang akan dikirim dan dipasang di lokasi <strong><?= htmlspecialchars($order['lokasi']) ?></strong>.</p>
            <p>Tanggal input data: <strong><?= $tanggal_input ?></strong>. Akan segera diproses pada tanggal <strong><?= $tanggal_proses ?></strong>.</p>
            
            <?php if ($order['pembayaran'] === 'E-Wallet'): ?>
                <div style="margin: 25px auto; padding: 20px; border: 2px dashed var(--navbar-color); border-radius: 10px; max-width: 280px; background-color: #fff; text-align: center;">
                    <p style="font-weight: bold; margin-bottom: 10px; color: var(--navbar-color);">Silahkan Scan QRIS di Bawah Ini:</p>
                    <img src="assets/QRIS.jpg" alt="QRIS Pembayaran Eversol" style="width: 100%; height: auto; display: block; margin: 0 auto; border-radius: 5px;">
                    <p style="font-size: 12px; margin-top: 10px; color: var(--text-secondary);">Total Tagihan: <strong>Rp <?= number_format($order['harga'], 0, ',', '.') ?></strong></p>
                </div>
            <?php endif; ?>

            <p style="font-weight: bold; color: var(--text-primary); margin-bottom: 30px; margin-top: 20px;">Terima kasih sudah menggunakan jasa kami.</p>
            
            <div style="display: flex; justify-content: center; gap: 15px;">
                <a href="update.php" class="btn">UPDATE DATA</a>
                <a href="delete.php" class="btn btn-danger" onclick="return confirm('Yakin ingin membatalkan pesanan ini?');">CANCEL ORDER</a>
            </div>
            <br><br>
            <a href="index.php" style="color: var(--navbar-color); text-decoration: none; font-weight: bold;"><i class="bi bi-arrow-left"></i> Kembali ke Beranda</a>
        </div>
    </div>
</body>
</html>