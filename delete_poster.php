<?php
include 'dbconn.php';
?>

<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padam Iklan</title>
    <link rel="icon" type="image/png" href="uitmlogo(1).png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

         .header {
            background-color: #3D0066;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 18px;
        }

       .logo-container img {
    height: 50px;
    width: auto; /* Pastikan nisbah aspek kekal */
    max-width: 150px; /* Hadkan lebar maksimum */
}

.contact-info img {
    height: 18px;
    width: auto;
    max-width: 25px;
}


        .contact-info {
            display: flex;
            align-items: center;
            gap: 15px; /* Jarak antara phone number dan email */
            font-size: 16px;
        }


        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 90%;
            max-width: 800px;
            margin: 30px auto;
            flex: 1;
        }

        h1 {
            color: #3D0066;
            text-align: center;
            margin-bottom: 20px;
        }

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

th {
    background-color: #3D0066;
    color: white;
    padding: 14px;
    font-size: 16px;
}

td {
    padding: 12px;
    text-align: center;
    font-size: 15px;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #ddd;
    transition: 0.3s;
}

img {
    width: 80px;
    height: auto;
    border-radius: 5px;
    transition: transform 0.3s ease-in-out;
}

img:hover {
    transform: scale(1.1);
}


        img {
            width: 100px;
            height: auto;
            border-radius: 5px;
        }

        .delete-btn {
            background-color: #d9534f;
            color: white;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .delete-btn:hover {
            background-color: #c9302c;
        }

        .back-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #3D0066;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            margin-top: 20px;
            transition: 0.3s;
            width: fit-content;
            margin-left: auto;
            margin-right: auto;
        }

        .back-btn img {
            width: 20px;
            margin-right: 8px;
        }

        .back-btn:hover {
            background-color: #4b1664;
        }

       .footer {
            background-color: #3D0066;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 12px;
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="header">
            <div class="logo-container">
                <img src="unitko_tapahlogo(1).png" alt="UiTM Logo">
                <img src="kesatria_logo(1).png" alt="Unit Kokurikulum Logo">
            </div>
            <div class="contact-info">
                <img src="call_icon.png" alt="Phone Icon"> +605 - 406 7027 
                <img src="mail_icon.png" alt="Email Icon"> unitkokurikulum@uitm.edu.my
            </div>
        </div>

    <div class="container">
        <h1>Padam Iklan</h1>
<p style="text-align: center; color: #555; font-size: 16px;">
    Sila pilih dan padam poster yang dikehendaki daripada senarai di bawah.
</p>

        <table>
            <tr>
                <th>Poster</th>
                <th>Tajuk</th>
                <th>Tindakan</th>
            </tr>

            <?php
            $query = "SELECT * FROM posters";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td><img src='" . $row['file_path'] . "'></td>";
                echo "<td>" . htmlspecialchars($row['title']) . "</td>";
                echo "<td>
                        <form action='delete_poster_process.php' method='post'>
                            <input type='hidden' name='poster_id' value='" . $row['id'] . "'>
                            <input type='hidden' name='file_path' value='" . $row['file_path'] . "'>
                           <button type='submit' class='delete-btn' onclick='return confirm(\"Anda pasti ingin padam poster ini?\")'>Padam</button>
                        </form>
                      </td>";
                echo "</tr>";
            }

            mysqli_close($conn);
            ?>
        </table>

        <a href="adminDashboard.html" class="back-btn">
            <img src="kembaliIcon(1).png" alt="Kembali"> Kembali ke Dashboard
        </a>
    </div>

    <div class="footer">
        Contact us at: unitkokurikulum@uitm.edu.my | +605 - 406 7027 <br>
            © 2024 Universiti Teknologi MARA. All Rights Reserved.
    </div>
</body>
</html>
