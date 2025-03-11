<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muat Naik Iklan</title>
    <link rel="icon" type="image/png" href="uitmlogo(1).png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
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
        }

        .contact-info {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 16px;
        }

        .contact-info img {
            height: 19px;
        }

        /* Log Out Button Styling */
        .btn-logout {

            position: absolute;
            top: 620px;
            left: 20px;
            background-color: #ccc;
            color: #32004b;
            padding: 10px 18px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .btn-logout:hover {
            background-color: #bbb;
        }

        .icon {
            height: 18px;
        }

        /* Smaller Form Container */
        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
            text-align: center;
            margin: auto;
            flex-grow: 1;
        }

        h1 {
            color: #32004b;
            margin-bottom: 20px;
            font-size: 20px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
            color: #32004b;
            text-align: left;
            font-size: 14px;
        }

        input[type="file"],
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        .btn {
            background-color: #3D0066;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: bold;
            transition: 0.3s;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn:hover {
            background-color: #4b1664;
        }

        .footer {
            background-color: #3D0066;
            color: white;
            text-align: center;
            padding: 10px 20px;
            font-size: 12px;
            margin-top: auto;
        }

        @media (max-width: 600px) {
            .header {
                flex-direction: column;
                text-align: center;
            }

            .btn-logout {
                position: static;
                margin: 10px auto;
                text-align: center;
            }
        }
    </style>
    <script>
        function uploadSuccess() {
            alert('Poster berjaya dimuat naik!');
            window.location.href = 'upload_poster.php';
        }
    </script>
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

    <!-- Log Out Button -->
    <a href="adminDashboard.html" class="btn-logout">
        <img src="kembaliIcon.png" class="icon" alt="Logout Icon"> Kembali
    </a>

    <div class="container">
        <h1>Muat Naik Iklan</h1>
        <form action="upload_poster_process.php" method="post" enctype="multipart/form-data">
            <label for="poster">Pilih Poster:</label>
            <input type="file" id="poster" name="poster" accept="image/*" required>

            <label for="title">Tajuk Iklan:</label>
            <input type="text" id="title" name="title" required>

            <button type="submit" class="btn">
                Muat Naik
            </button>
        </form>
    </div>

    <footer class="footer">
        Contact us at: unitkokurikulum@uitm.edu.my | +605 - 406 7027 <br>
        © 2024 Universiti Teknologi MARA. All Rights Reserved.
    </footer>

</body>
</html>
