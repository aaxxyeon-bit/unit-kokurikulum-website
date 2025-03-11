<?php
include("dbconn.php");

$special_password = "passwordPadam123"; // Kata laluan khas
$hashed_password = password_hash($special_password, PASSWORD_BCRYPT);

$sql = "UPDATE admin SET delete_password='$hashed_password' WHERE role='superadmin'";
if ($conn->query($sql) === TRUE) {
    echo "Kata laluan khas berjaya dikemas kini.";
} else {
    echo "Ralat: " . $conn->error;
}
?>