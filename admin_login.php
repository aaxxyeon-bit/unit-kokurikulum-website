<?php
// Mulakan sesi
session_start();

// Sambungan ke pangkalan data
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

$conn = new mysqli($servername, $username, $password, $dbname);

// Semak sambungan
if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}

// Semak jika borang dihantar
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Sediakan pertanyaan SQL
    $stmt = $conn->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Semak kata laluan menggunakan password_verify
        if (password_verify($password, $row['password'])) { // BETUL, guna hash verification
            // Simpan maklumat admin dalam sesi
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_username'] = $row['username'];
            $_SESSION['role'] = $row['role']; // Simpan role dalam sesi

            echo "<script>
                    alert('Log masuk berjaya! Anda akan diarahkan ke papan pemuka admin.');
                    window.location.href = 'adminDashboard.html';
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Log masuk gagal! Kata laluan salah.');
                    window.location.href = 'adminLOGIN.html';
                  </script>";
            exit();
        }
    } else {
        echo "<script>
                alert('Log masuk gagal! Nama pengguna tidak wujud.');
                window.location.href = 'adminLogin.html';
              </script>";
        exit();
    }

    // Tutup statement
    $stmt->close();
}

// Tutup sambungan ke pangkalan data
$conn->close();
?>
