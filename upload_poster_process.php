<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'dbconn.php';

    $targetDir = "uploads/";
    $fileName = basename($_FILES["poster"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    if (move_uploaded_file($_FILES["poster"]["tmp_name"], $targetFilePath)) {
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $filePath = mysqli_real_escape_string($conn, $targetFilePath);

        $query = "INSERT INTO posters (title, file_path) VALUES ('$title', '$filePath')";
        if (mysqli_query($conn, $query)) {
            echo "<script>
                    alert('Poster berjaya dimuat naik!');
                    window.location.href = 'upload_poster.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Gagal menyimpan iklan ke dalam pangkalan data.');
                    window.location.href = 'upload_poster.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Maaf, terdapat masalah memuat naik fail anda.');
                window.location.href = 'upload_poster.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Permintaan tidak sah.');
            window.location.href = 'upload_poster.php';
          </script>";
}
?>
