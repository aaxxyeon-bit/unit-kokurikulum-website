<?php
// include dbconn.php
include 'dbconn.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $Nama = mysqli_real_escape_string($conn, $_POST['name']); // Corrected to match form input name
    $Email = mysqli_real_escape_string($conn, $_POST['email']); // Corrected to match form input name
    $Maklum_balas = mysqli_real_escape_string($conn, $_POST['feedback']); // Corrected to match form input name

//insert data into feedback table
$sql = "INSERT INTO feedbacks (Nama, Email, MaklumBalas) VALUES ('$Nama', '$Email', '$Maklum_balas')";

 if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Maklum balas anda telah berjaya dihantar. Terima kasih!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Ralat semasa menghantar maklum balas: " . mysqli_error($conn) . "'); window.location.href = 'index.html';</script>";
    }

    // Close the connection
    mysqli_close($conn);
}
?>