<?php
session_start();
require 'db.php';

if (isset($_SESSION['order_id'])) {
    $stmt = $pdo->prepare("DELETE FROM orders WHERE id = ?");
    $stmt->execute([$_SESSION['order_id']]);
    
    // Hapus sesi setelah order dicancel
    session_destroy();
}

echo "<script>
    alert('Pesanan Anda berhasil dibatalkan/dihapus.');
    window.location.href = 'index.php';
</script>";
?>