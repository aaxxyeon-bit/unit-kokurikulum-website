<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include 'dbconn.php'; // Sambungkan ke database

    $targetDir = "uploads_jadual/"; // Folder untuk simpan jadual
    $fileName = basename($_FILES["jadual"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    // Jika folder belum wujud, cipta folder
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    // Upload fail
    if (move_uploaded_file($_FILES["jadual"]["tmp_name"], $targetFilePath)) {
        $nama_jadual = mysqli_real_escape_string($conn, $_POST['nama_jadual']);
        $filePath = mysqli_real_escape_string($conn, $targetFilePath);

        // Simpan ke database
        $query = "INSERT INTO jadual_kokurikulum (nama_jadual, file_path) VALUES ('$nama_jadual', '$filePath')";
        if (mysqli_query($conn, $query)) {
            echo "<script>
                    alert('Jadual berjaya dimuat naik!');
                    window.location.href = 'upload_jadual.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Gagal menyimpan jadual ke database: " . mysqli_error($conn) . "');
                    window.location.href = 'upload_jadual.php';
                  </script>";
        }
    } else {
        echo "<script>
                alert('Maaf, terdapat masalah memuat naik fail anda.');
                window.location.href = 'upload_jadual.php';
              </script>";
    }
} else {
    echo "<script>
            alert('Permintaan tidak sah.');
            window.location.href = 'upload_jadual.php';
          </script>";
}
?>
