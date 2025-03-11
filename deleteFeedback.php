<?php
session_start();
include 'dbconn.php';

if (!isset($_SESSION['admin_id'])) {
    echo "Ralat: Anda tidak dibenarkan.";
    exit;
}

$admin_id = $_SESSION['admin_id'];

// Semak jika admin login adalah superadmin
$queryAdmin = "SELECT role FROM admin WHERE id = ?";
$stmtAdmin = $conn->prepare($queryAdmin);
$stmtAdmin->bind_param("i", $admin_id);
$stmtAdmin->execute();
$resultAdmin = $stmtAdmin->get_result();
$admin = $resultAdmin->fetch_assoc();

if ($admin['role'] !== 'superadmin') {
    echo "Ralat: Anda tidak mempunyai kebenaran untuk memadam maklum balas.";
    exit;
}

// Jika admin adalah superadmin, barulah boleh padam feedback
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    
    $query = "DELETE FROM feedbacks WHERE ID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Maklum balas berjaya dipadam.";
    } else {
        echo "Ralat: Tidak dapat memadam maklum balas.";
    }
} else {
    echo "Ralat: ID tidak sah.";
}
?>
