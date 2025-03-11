<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'dbconn.php';

    $poster_id = intval($_POST['poster_id']); // Elak SQL injection
    $file_path = $_POST['file_path'];

    // Padam rekod dari database
    $query = "DELETE FROM posters WHERE id = $poster_id";
    if (mysqli_query($conn, $query)) {
        // Padam fail dari folder jika wujud
        if (file_exists($file_path)) {
            unlink($file_path);
        }
        echo "<script>
                alert('Poster berjaya dipadam!');
                window.location.href = 'delete_poster.php';
              </script>";
    } else {
        echo "<script>
                alert('Gagal memadam poster.');
                window.location.href = 'delete_poster.php';
              </script>";
    }

    mysqli_close($conn);
} else {
    header("Location: delete_poster.php");
    exit;
}
?>
