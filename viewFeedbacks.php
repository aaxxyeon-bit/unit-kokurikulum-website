<?php
session_start();
include("dbconn.php");

// Define the number of feedbacks per page
$feedbacksPerPage = 11;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($page < 1) $page = 1;
$offset = ($page - 1) * $feedbacksPerPage;

// Count total feedbacks
$sqlCount = "SELECT COUNT(*) AS total FROM feedbacks";
$resultCount = $conn->query($sqlCount);
$totalFeedbacks = $resultCount->fetch_assoc()['total'];
$totalPages = ceil($totalFeedbacks / $feedbacksPerPage);

// Fetch feedbacks
$sql = "SELECT ID, Nama, Email, MaklumBalas, DateTime FROM feedbacks ORDER BY ID ASC LIMIT $offset, $feedbacksPerPage";
$result = $conn->query($sql);

// Handle deletion with password verification
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_id'], $_POST['delete_password'])) {
    $deleteId = (int)$_POST['delete_id'];
    $deletePassword = $_POST['delete_password'];

    // Get the stored delete password from database
    $sqlPassword = "SELECT delete_password FROM admin WHERE role='superadmin' LIMIT 1";
    $resultPassword = $conn->query($sqlPassword);

    if ($resultPassword->num_rows > 0) {
        $row = $resultPassword->fetch_assoc();
        $hashedPassword = $row['delete_password'];

        if (password_verify($deletePassword, $hashedPassword)) {
            $deleteSql = "DELETE FROM feedbacks WHERE ID = $deleteId";
            if ($conn->query($deleteSql) === TRUE) {
                echo "<script>alert('Maklum balas telah berjaya dipadamkan.'); window.location.href = 'viewFeedbacks.php?page=$page';</script>";
                exit;
            } else {
                echo "<script>alert('Ralat: Gagal memadam maklum balas.'); window.location.href = 'viewFeedbacks.php?page=$page';</script>";
                exit;
            }
        } else {
            echo "<script>alert('Kata laluan khas salah! Maklum balas tidak dipadam.'); window.location.href = 'viewFeedbacks.php?page=$page';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Tiada kata laluan khas dijumpai.'); window.location.href = 'viewFeedbacks.php?page=$page';</script>";
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Maklum Balas</title>
    <link rel="icon" type="image/png" href="uitmlogo(1).png">
    <style>
  /* General Styles */
        body {
    font-family: Arial, sans-serif;
    background: linear-gradient(rgba(255, 255, 255, 0.6), rgba(255, 255, 255, 0.6)), 
                url('gambarPlaza.jpg') no-repeat center center fixed;
    background-size: cover;
    margin: 0;
    padding: 0;
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

main {
    flex: 1; /* Membolehkan main content berkembang dan push footer ke bawah */
}

.footer {
    background-color: #3D0066;
    color: white;
    text-align: center;
    padding: 20px 0;
    font-size: 13px;
    margin-top: auto;
}

 header {
    display: flex;
    justify-content: space-between; /* Letak kiri & kanan */
    align-items: center;
    background-color: #3D0066;
    padding: 10px 20px;
    color: white;
}

.header-left {
    display: flex;
    align-items: center;

}

.header-left img {
    height: 50px;
    margin-right: 15px;
}

.header-right {
    display: flex;
    align-items: center;
    gap: 15px; /* Jarak antara ikon */
    font-size: 14px;
}

.header-right p {
    margin: 0;
    color: white;
    display: flex;
    align-items: center;
    gap: 5px; /* Jarak antara ikon dan teks */
}

.header-right img {
    height: 20px; /* Saiz ikon kecil */
}


        h1 {
            text-align: center;
            color: #3D0066;
            margin: 20px 0;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background-color: #3D0066;
            color: #fff;
            padding: 12px;
        }

        td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .btn-delete {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-delete:hover {
            background-color: #cc0000;
        }

        .pagination {
            text-align: center;
            margin: 20px 0;
        }

        .pagination a {
            display: inline-block;
            padding: 8px 12px;
            margin: 0 5px;
            background-color: #3D0066;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }

        .pagination a:hover {
            background-color: #660066;
        }

        .btn-kembali {
            display: block;
            width: 150px;
            margin: 20px auto;
            padding: 10px;
            text-align: center;
            background-color: #3D0066;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-kembali:hover {
            background-color: #660066;
        }

        @media (max-width: 768px) {
            table {
                font-size: 14px;
            }

            th, td {
                padding: 8px;
            }

            header img {
                height: 50px;
                margin: 0 10px;
            }
        }

    #deleteModal {
    display: none; /* Sembunyikan modal dari awal */
    position: fixed;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    border-radius: 8px;
    text-align: center;
    z-index: 1000;
}

#deleteModal h3 {
    margin-bottom: 10px;
}

#deleteModal input {
    margin-bottom: 10px;
    padding: 8px;
    width: 80%;
}

#deleteModal button {
    margin: 5px;
    padding: 8px 12px;
    border: none;
    background-color: #3D0066;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

#deleteModal button:hover {
    background-color: #660066;
}

/* Background overlay supaya latar belakang gelap */
#overlay {
    display: none; /* Sembunyikan dari awal */
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 999;
}

    </style>
    <script>
        function showDeletePrompt(deleteId) {
            document.getElementById('deleteId').value = deleteId;
            document.getElementById('deleteModal').style.display = 'block';
            document.getElementById('overlay').style.display = 'block'; // Tunjukkan overlay
        }
        function closeModal() {
            document.getElementById('deleteModal').style.display = 'none';
            document.getElementById('overlay').style.display = 'none'; // Sembunyikan overlay
        }
        function confirmDelete() {
            const deleteId = document.getElementById('deleteId').value;
            const deletePassword = document.getElementById('deletePassword').value;
            if (deletePassword.trim() === "") {
                alert("Sila masukkan kata laluan khas.");
                return;
            }
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = 'viewFeedbacks.php';
            
            const idInput = document.createElement('input');
            idInput.type = 'hidden';
            idInput.name = 'delete_id';
            idInput.value = deleteId;
            
            const passInput = document.createElement('input');
            passInput.type = 'hidden';
            passInput.name = 'delete_password';
            passInput.value = deletePassword;

            form.appendChild(idInput);
            form.appendChild(passInput);
            document.body.appendChild(form);
            form.submit();
        }
    </script>
</head>
<body>
     <header>
    <div class="header-left">
        <img src="unitko_tapahlogo(1).png" alt="Logo">
        <img src="kesatria_logo(1).png" alt="Logo 2">
    </div>
    <div class="header-right">
        <p><img src="call_icon.png" alt="Phone Icon"> +605 - 406 7027</p>
        <p><img src="mail_icon.png" alt="Mail Icon"> unitkokurikulum@uitm.edu.my</p>
    </div>
</header>

    <h1>Senarai Maklum Balas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Maklum Balas</th>
                <th>Tarikh & Masa</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['ID'] ?></td>
                    <td><?= htmlspecialchars($row['Nama'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($row['Email'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= htmlspecialchars($row['MaklumBalas'], ENT_QUOTES, 'UTF-8') ?></td>
                    <td><?= $row['DateTime'] ?></td>
                    <td><button class='btn-delete' onclick='showDeletePrompt(<?= $row['ID'] ?>)'>Padam</button></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

 <div class="pagination">
        <?php if ($page > 1): ?>
            <a href="?page=<?php echo $page - 1; ?>">◄</a>
        <?php endif; ?>
        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>">►</a>
        <?php endif; ?>
    </div>

    <a href="adminDashboard.html" class="btn-kembali">
    <img src="kembaliIcon(1).png" alt="Ikon Kembali" style="height: 16px; margin-right: 5px; vertical-align: middle;">
    Kembali
</a>

    <div id="overlay" onclick="closeModal()"></div> <!-- Klik luar modal untuk tutup -->
    <div id="deleteModal">
        <h3>Sila masukkan kata laluan khas:</h3>
        <input type="password" id="deletePassword">
        <input type="hidden" id="deleteId">
        <button onclick="confirmDelete()">Hantar</button>
        <button onclick="closeModal()">Batal</button>
    </div>

 <footer class="footer">
            Contact us at: unitkokurikulum@uitm.edu.my | +605 - 406 7027 <br>
            © 2024 Universiti Teknologi MARA. All Rights Reserved.
        </footer>

</body>
</html>
