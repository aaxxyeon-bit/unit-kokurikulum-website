<?php
include 'dbconn.php'; // Sambungan ke database

// Jika butang padam ditekan
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $query = "DELETE FROM jadual_kokurikulum WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Jadual berjaya dipadam!'); window.location.href='delete_jadual.php';</script>";
    } else {
        echo "<script>alert('Gagal memadam jadual!');</script>";
    }
}

// Ambil semua jadual dari database
$query = "SELECT * FROM jadual_kokurikulum";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padam Jadual Kokurikulum</title>
    <link rel="icon" type="image/png" href="uitmlogo(1).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; padding: 0; margin: 0; background-color: #f4f4f4; }
        header { background-color: #3D0066; color: white; padding: 15px; display: flex; justify-content: space-between; align-items: center; }
        .header-left { display: flex; align-items: center; }
        .header-left img { height: 50px; margin-right: 10px; }
        .header-right { display: flex; gap: 20px; } /* Ubah supaya contact info sebelah-sebelah */
        .header-right p { margin: 0; }
          h1 {
            color: #3D0066;
            text-align: center;
            margin-bottom: 20px;
        }

        .container { width: 80%; margin: auto; padding: 20px; background: white; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); margin-top: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #3D0066; color: white; }
        tr:nth-child(even) { background-color: #f9f9f9; } /* Warna selang-seli */
        tr:nth-child(odd) { background-color: #e6e6e6; }

        .delete-btn { background-color: red; color: white; padding: 5px 10px; border: none; cursor: pointer; border-radius: 5px; text-decoration: none; } /* Buang underline */
        .delete-btn:hover { background-color: darkred; }
        
        .back-btn { display: inline-block; text-align: center; background-color: #3D0066; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; margin: 20px auto; font-size: 14px; } /* Saiz lebih kecil */
        .back-btn:hover { background-color: #2A004D; }
        .back-btn i { margin-right: 5px; }

        .back-container { text-align: center; margin-top: 20px; } /* Supaya button kembali berada di luar container */

        footer { text-align: center; padding: 10px; background-color: #3D0066; color: white; position: fixed; bottom: 0; width: 100%; font-size: 14px; }
    </style>
</head>
<body>
    <header>
        <div class="header-left">
            <img src="unitko_tapahlogo(1).png" alt="Unit Kokurikulum Logo">
            <img src="kesatria_logo(1).png" alt="Kesatria Logo">
        </div>
        <div class="header-right">
            <p><i class="fas fa-phone"></i> +605 - 406 7027</p>
            <p><i class="fas fa-envelope"></i> unitkokurikulum@uitm.edu.my</p>
        </div>
    </header>

    <div class="container">
        <h1>Padam Jadual Kelas Kokurikulum</h1>
<p style="text-align: center; color: #555; font-size: 16px;">
    Sila pilih dan padam fail jadual kelas kokurikulum yang dikehendaki daripada senarai di bawah.
</p>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama Jadual</th>
                <th>Tarikh</th>
                <th>Tindakan</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama_jadual']; ?></td>
                <td><?php echo $row['uploaded_at']; ?></td>
                <td>
                    <a href="delete_jadual.php?delete_id=<?php echo $row['id']; ?>" 
                       onclick="return confirm('Anda pasti mahu memadam jadual ini?');" 
                       class="delete-btn">
                       <i class="fas fa-trash"></i> Padam
                    </a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>

    <div class="back-container">
        <a href="adminDashboard.html" class="back-btn"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>

    <footer>
        <p>Contact us at: unitkokurikulum@uitm.edu.my | +605 - 406 7027</p>
        <p>&copy; 2024 Universiti Teknologi MARA. All Rights Reserved.</p>
    </footer>
</body>
</html>
