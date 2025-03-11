<?php
session_start();
include 'dbconn.php'; // Sambungkan ke database

if (!isset($_SESSION['admin_id'])) {
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$admin_id = $_SESSION['admin_id'];

// Dapatkan peranan (role) admin yang login sekarang
$queryAdmin = "SELECT role FROM admin WHERE id = ?";
$stmtAdmin = $conn->prepare($queryAdmin);
$stmtAdmin->bind_param("i", $admin_id);
$stmtAdmin->execute();
$resultAdmin = $stmtAdmin->get_result();
$admin = $resultAdmin->fetch_assoc();
$role = $admin['role']; // Dapatkan role admin yang login

// Dapatkan senarai maklum balas
$query = "SELECT * FROM feedbacks ORDER BY DateTime DESC";
$result = $conn->query($query);

$feedbacks = [];
while ($row = $result->fetch_assoc()) {
    $row['can_delete'] = ($role === 'superadmin'); // Hanya superadmin boleh delete
    $feedbacks[] = $row;
}

echo json_encode($feedbacks);
?>
