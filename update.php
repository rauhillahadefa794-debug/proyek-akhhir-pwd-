<?php
session_start();
require 'db.php';

if (!isset($_SESSION['order_id'])) {
    header("Location: index.php");
    exit();
}

// Ambil data saat ini
$stmt = $pdo->prepare("SELECT * FROM orders WHERE id = ?");
$stmt->execute([$_SESSION['order_id']]);
$order = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_lengkap'];
    $lokasi = $_POST['lokasi'];
    $telepon = $_POST['telepon'];
    $pembayaran = $_POST['pembayaran'];

    $updateStmt = $pdo->prepare("UPDATE orders SET nama_lengkap=?, lokasi=?, telepon=?, pembayaran=? WHERE id=?");
    if ($updateStmt->execute([$nama, $lokasi, $telepon, $pembayaran, $_SESSION['order_id']])) {
        header("Location: landing.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Update Data - Eversol</title>
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
            <h2 style="color: var(--navbar-color);">PERBARUI DATA</h2>
            <form method="POST">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" value="<?= htmlspecialchars($order['nama_lengkap']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Lokasi Pengiriman</label>
                    <input type="text" name="lokasi" value="<?= htmlspecialchars($order['lokasi']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="number" name="telepon" value="<?= htmlspecialchars($order['telepon']) ?>" required>
                </div>
                <div class="form-group">
                    <label>Pilihan Pembayaran</label>
                    <select name="pembayaran" required>
                        <option value="Debit" <?= ($order['pembayaran'] == 'Debit') ? 'selected' : '' ?>>Transfer Debit</option>
                        <option value="E-Wallet" <?= ($order['pembayaran'] == 'E-Wallet') ? 'selected' : '' ?>>E-Wallet</option>
                    </select>
                </div>
                <button type="submit" class="btn" style="width: 100%;">SIMPAN PERUBAHAN</button>
            </form>
        </div>
    </div>
</body>
</html>