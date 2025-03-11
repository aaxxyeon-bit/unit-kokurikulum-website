<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muat Naik Jadual Kokurikulum</title>
    <link rel="icon" type="image/png" href="uitmlogo(1).png">
    <style>
        /* Styling umum */
        body {
    display: flex;
    flex-direction: column;
     align-items: center; /* Pastikan semua kandungan di tengah */
    min-height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
}



        /* Header di bahagian atas */
        .header {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #3D0066;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 30px;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .logo-container img {
            height: 50px;
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 16px;
            margin-right: 30px; /* Jarak dari hujung kanan */
        }

        .contact-info img {
            height: 18px;
        }

        .container {
    flex-grow: 1; /* Ini memastikan container memenuhi ruang dan menolak footer ke bawah */
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: white;
    padding: 25px;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
    width: 400px;
    margin-top: 100px;
    transition: transform 0.3s ease-in-out;
}

        .container:hover {
            transform: scale(1.02);
        }

        h2 {
            color: #3D0066;
            font-size: 22px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="file"], input[type="text"] {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 5px;
        }

        /* Button Muat Naik */
        button {
            background-color: #32004b;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 15px;
            transition: 0.3s ease-in-out;
        }

        button:hover {
            background-color: #4b1664;
            transform: scale(1.05);
        }

               .back-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ccc;
            color: #000000;
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
            background-color: #bbb;
        }

       .footer {
    width: 100%;
    background-color: #3D0066;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 13px;
    margin-top: auto; /* Ini memastikan footer sentiasa berada di bawah */
    position: relative; /* Pastikan ia berada dalam aliran dokumen */
}

    </style>
    <script>
        function uploadSuccess() {
            alert('Jadual berjaya dimuat naik!');
            window.location.href = 'upload_jadual.php';
        }
    </script>
</head>
<body>

    <!-- Header di bahagian atas -->
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
    
    <!-- Container Muat Naik -->
    <div class="container">
        <h2>Muat Naik Jadual Kokurikulum</h2>
        <p style="text-align: center; color: #555; font-size: 16px;">
    Sila pilih jadual untuk dimuat naik.
</p>
        <form action="upload_jadual_process.php" method="post" enctype="multipart/form-data" onsubmit="uploadSuccess()">
            <label for="jadual">Pilih Fail Jadual (PDF):</label>
            <input type="file" id="jadual" name="jadual" accept="application/pdf" required>

            <label for="nama_jadual">Nama Jadual:</label>
            <input type="text" id="nama_jadual" name="nama_jadual" required>

            <button type="submit">Muat Naik</button>
        </form>

        <!-- Butang Kembali -->
        <a href="adminDashboard.html" class="back-btn">
            <img src="kembaliIcon.png" alt="Kembali"> Kembali ke Dashboard
        </a>
    </div>

      <!-- Footer -->
    <div class="footer">
        Contact us at: unitkokurikulum@uitm.edu.my | +605 - 406 7027 <br>
        © 2024 Universiti Teknologi MARA. All Rights Reserved.
    </div>

</body>
</html>
