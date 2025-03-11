<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Kokurikulum</title>
    <link rel="icon" type="image/png" href="uitmlogo(1).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v21.0"></script>


    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }
/* Header Section */
.header-top {
    background-color: #32004b;
    color: white;
    padding: 20px 20px;
    display: flex;
    justify-content: flex-start; 
    align-items: center;
    height: 80px;
}

.header-top .contact-info {
    color: #FFFFFF;
    font-size: 14px;
    display: flex;
    gap: 20px; /* Space between phone and email */
    align-items: center;
}

.header-top .contact-info .contact-item {
    color: #ffffff;
    display: flex;
    align-items: center;
    gap: 5px;
}

.header-top .contact-info img {
    width: 20px;
    height: 20px;
    vertical-align: middle;
}

/* Contact Info Link Styling */
        .header-top .contact-info a {
            color: #ffffff; /* Set the color to white */
            text-decoration: none;
            font-weight: bold;
        }

        .header-top .contact-info a:hover {
            text-decoration: underline;
            color: #f0f0f0; /* Slightly different hover color */
        }


        /* Navigation Bar */
        nav {
            background: linear-gradient(90deg, #ffffff, #f0f0f0);
            display: flex;
            align-items: center;
            padding: 15px 20px;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            margin: 10px 0;
        }

        nav img.logo {
            height: 60px;
            margin-right: 10px;
        }

        nav .nav-links {
            display: flex;
            gap: 30px;
            flex: 1;
        }

        nav .nav-links a {
            color: grey;
            font-size: 14px;
            font-weight: normal;
            position: relative;
            transition: color 0.3s, transform 0.3s;
        }

        nav .nav-links a:hover {
            color: #32004b;
            transform: scale(1.1);
        }

        nav .nav-links a::after {
            content: '';
            display: block;
            height: 2px;
            background: #32004b;
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 0;
            transition: width 0.3s;
        }

        nav .nav-links a:hover::after {
            width: 100%;
        }

        /* Hamburger Menu (For Mobile) */
        .hamburger {
            display: none;
            font-size: 24px;
            cursor: pointer;
        }

        /* Main Content Section */
        .main-content {
            position: relative;
            text-align: center;
            color: white;
            height: 70vh;
            background-image: url('mainSection1.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .animated-text {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%) translateY(-100px);
            font-size: 36px;
            font-weight: bold;
            color: #ffffff;
            opacity: 0;
            animation: slideIn 2s ease-out forwards;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        @keyframes slideIn {
            0% {
                transform: translateX(-50%) translateY(-100px);
                opacity: 0;
            }
            50% {
                transform: translateX(-50%) translateY(20px);
                opacity: 1;
            }
            100% {
                transform: translateX(-50%) translateY(0);
                opacity: 1;
            }
        }

        /* Sections Styling */
        section {
            padding: 50px 20px;
            text-align: center;
        }

        section:nth-of-type(even) {
            background-color: #f5f5f5;
        }

        section:nth-of-type(odd) {
            background-color: #e0e0e0;
        }

        section h2 {
            font-size: 36px;
            color: #32004b;
            margin-bottom: 20px;
        }

        section p {
            font-size: 18px;
            color: grey;
            max-width: 800px;
            margin: 0 auto 20px auto;
        }

        /* Explore Section Specific Styles */
        .explore-grid {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .explore-grid .grid-item {
            background: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s;
        }

        .explore-grid .grid-item:hover {
            transform: scale(1.05);
        }

        .explore-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .explore-grid .grid-item-content {
            padding: 20px;
        }

        .explore-grid h3 {
            font-size: 24px;
            color: #32004b;
            margin-bottom: 10px;
        }

        .explore-grid p {
            font-size: 16px;
            color: #666;
        }

        /* Contact Section (Hubungi Kami) */
        .contact-section {
            background-color: #e0e0e0;
        }

        .contact-info {
            font-size: 18px;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        /* Ensuring Phone Number and Email have the same font and color */
        .contact-info a {
            color: #32004b;
            text-decoration: none;
            font-weight: bold;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        /* Maklum Balas (Feedback) Section */
        .feedback-section {
            background-color: #f5f5f5;
        }

        .feedback-form {
            max-width: 600px;
            margin: 0 auto;
            text-align: left;
        }

        .feedback-form form {
            display: flex;
            flex-direction: column;
        }

        .feedback-form label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #32004b;
        }

        .feedback-form input,
        .feedback-form textarea {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            font-size: 16px;
        }

        .feedback-form button {
            background-color: #32004b;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .feedback-form button:hover {
            background-color: #4b1664;
        }

        /* Footer */
        footer {
            background-color: #32004b;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 14px;
        }

        footer p {
            margin: 5px 0;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            nav .nav-links {
                display: none;
                flex-direction: column;
                gap: 15px;
                width: 100%;
                background-color: #ffffff;
                position: absolute;
                top: 100%;
                left: 0;
                padding: 10px 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                border-radius: 0 0 8px 8px;
            }

            nav .nav-links.active {
                display: flex;
            }

            .hamburger {
                display: block;
                margin-left: auto;
                color: #32004b;
            }
        }
    </style>

    <script>
        // Check the URL for login status and display an alert
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            const loginStatus = urlParams.get('login');
            
            if (loginStatus === 'success') {
                alert('Login successful!');
                window.location.href = 'index.php'; // Redirect to the main page after the alert
            } else if (loginStatus === 'failed') {
                alert('Invalid username or password. Please try again.');
            }
        };
    </script>
    
</head>
<body>

    <!-- Header Section -->
<header class="header-top">
    <div class="contact-info">
        <div class="contact-item">
            <img src="call_icon.png" alt="Call Icon">
            <a href="tel:+6054067027">+605 - 406 7027</a>
        </div>
        <div class="contact-item">
            <img src="mail_icon.png" alt="Email Icon">
            <a href="mailto:unitkokurikulum@uitm.edu.my">unitkokurikulum@uitm.edu.my</a>
        </div>
    </div>
</header>


  <!-- Navigation Bar -->
<nav>
    <img src="unitko_tapahlogo.png" alt="UiTM Logo" class="logo"> 
    <div class="nav-links">
        <a href="#about">TENTANG KAMI</a>
        <a href="#directory">DIREKTORI</a>
        <a href="#iklan">IKLAN</a>

        <!-- PELAJAR with Dropdown -->
        <div class="dropdown">
            <a href="#pelajar">PELAJAR</a>
            <div class="dropdown-content">
                <a href="kemudahanOKU.html">Kemudahan OKU</a>
                <a href="#pelajar">Jadual Kokurikulum</a>
            </div>
        </div>

        <a href="#ikuti-kami">IKUTI KAMI</a>
        <a href="#contact">HUBUNGI KAMI</a>
        <a href="#maklum-balasan">MAKLUM BALAS</a>
    </div>
    <div class="audio-controls">
        <button id="playAudio">
         <i class="fas fa-play"></i> Mainkan Muzik
    </button>
    <button id="pauseAudio">
         <i class="fas fa-pause"></i> Jeda
    </button>
    <button id="stopAudio">
       <i class="fas fa-stop"></i> Berhenti
    </button>
    </div>
    <div class="hamburger" onclick="toggleMenu()">☰</div> <!-- Hamburger Icon for Mobile -->
</nav>

<audio id="myAudio" src="uitmDiHatiku.mp3"></audio> <!-- Hidden Audio Element -->

<style>
    /* General Navigation Bar Styling */
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        background-color: #4a148c; /* UiTM purple */
        color: white;
        font-family: Arial, sans-serif;
    }

    .button-active {
    background-color: #A7FFEB !important; /* Warna highlight untuk butang aktif */
    color: #000000 !important; /* Contoh untuk teks */
}

#pauseAudio.button-active {
    background-color: #FFD180 !important; /* Warna aktif untuk Pause */
}

#stopAudio.button-active {
    background-color: #FF8A80 !important; /* Warna aktif untuk Stop */
}

    .logo {
        height: 50px;
    }

    .nav-links {
        display: flex;
        gap: 20px;
    }

    .nav-links a {
        color: white;
        text-decoration: none;
        font-size: 14px;
    }

    .nav-links a:hover {
        text-decoration: underline;
    }

    .dropdown {
        position: relative;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: white;
        min-width: 160px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 1;
    }

    .dropdown-content a {
        color: #333;
        padding: 8px 12px;
        text-decoration: none;
        display: block;
        font-size: 13px;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .audio-controls {
        display: flex;
        gap: 10px;
    }

    .audio-controls button {
        background-color: white;
        color: #4a148c;
        border: none;
        border-radius: 4px;
        padding: 6px 10px;
        font-size: 14px;
        cursor: pointer;
    }

    .audio-controls button:hover {
        background-color: #f1f1f1;
    }

    .hamburger {
        display: none;
        color: white;
        font-size: 20px;
        cursor: pointer;
    }

    /* Responsive for Mobile */
    @media (max-width: 768px) {
        .nav-links {
            display: none;
            flex-direction: column;
            background-color: #4a148c;
            width: 100%;
        }

        .nav-links.show {
            display: flex;
        }

        .hamburger {
            display: block;
        }

         /* Audio Controls Styling */
    .audio-controls {
        display: flex;
        gap: 10px;
        justify-content: center;
        margin-top: 20px;
    }

    .audio-controls button {
        display: flex;
        align-items: center;
        gap: 8px;
        background-color: #4a148c; /* UiTM purple */
        color: white;
        border: none;
        border-radius: 5px;
        padding: 8px 12px;
        font-size: 14px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .audio-controls button:hover {
        background-color: #6a1b9a; /* Slightly lighter purple */
        transform: scale(1.05);
    }

    .audio-controls button:active {
        transform: scale(0.95);
    }

    .audio-icon {
        width: 16px;
        height: 16px;
    }
    }
</style>

 <script>

    const audio = document.getElementById('myAudio');
    const playButton = document.getElementById('playAudio');
    const pauseButton = document.getElementById('pauseAudio');
    const stopButton = document.getElementById('stopAudio');

playButton.addEventListener('click', function () {
    audio.play();
    playButton.classList.add('button-active'); // Tambah gaya aktif
    pauseButton.classList.remove('button-active');
    stopButton.classList.remove('button-active');
});

pauseButton.addEventListener('click', function () {
    audio.pause();
    playButton.classList.remove('button-active');
    pauseButton.classList.add('button-active'); // Tambah gaya aktif
    stopButton.classList.remove('button-active');
});

stopButton.addEventListener('click', function () {
    audio.pause();
    audio.currentTime = 0; // Set audio kepada permulaan
    playButton.classList.remove('button-active');
    pauseButton.classList.remove('button-active');
    stopButton.classList.add('button-active'); // Tambah gaya aktif
});


    // Mobile menu toggle
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('show');
    }
</script>


    <!-- Main Content Section -->
    <main>
        <section class="main-content">
            <div class="animated-text">
                UiTM Cawangan Perak Kampus Tapah
            </div>
        </section>

 <!-- Visi dan Misi Section -->
<section id="about" style="background-color: #f4f4f4; padding: 60px 20px;">
    <h2 style="font-size: 36px; color: #32004b; text-align: center; margin-bottom: 30px; letter-spacing: 2px;">Tentang Kami</h2>
    <div class="vision-mission-content" style="max-width: 900px; margin: 0 auto; padding: 40px; border-radius: 12px; background-color: #ffffff; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);">
        
        <h3 style="font-size: 26px; color: #32004b; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Pusat Kokurikulum</h3>
        <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
            Pusat Kokurikulum, Bahagian Hal Ehwal Pelajar telah ditubuhkan pada awal tahun 2004 hasil dari penstrukturan semula UiTM dalam usaha melahirkan graduan yang memenuhi 21 Ciri Graduan UiTM yang ditetapkan.Pusat Kokurikulum telah diwujudkan oleh UiTM untuk melaksanakan bidang tugas Pengarah dan staf Pusat Kokurikulum selaras dengan peruntukan Akta 173.
        </p>

         <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
          Pusat Kokurikulum mempunyai empat unit penting iaitu Unit Pembangunan Akademik, Unit Latihan & Kompetensi, Unit Kesukarelawanan & Pencapaian dan Unit Pentadbiran.
        </p>


         <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
         Unit Kesatria merupakan Unit Kokurikulum pertama yang diwujudkan di UiTM berbangkit dari dua insiden demonstrasi oleh pelajar-pelajar di Semua IPTA (termasuk UiTM) pada akhir tahun 1975 dan awal 1976. Bagi mengatasi masalah disiplin dan salah laku pelajar ketika itu, maka kokurikulum Kesatria ditubuhkan dengan objektifnya untuk menerapkan nilai-nilai disiplin yang tinggi dalam kalangan pelajar.
        </p>


         <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
         Bilangan pengambilan pelajar kokurikulum Kesatria dan lain-lain kokurikulum juga telah bertambah sejajar dengan perkembangan UiTM. Didapati 30% daripada pelajar UiTM adalah ahli Kesatria dan bakinya dari komponen kursus kokurikulum yang lain.
        </p>

        <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
        Bilangan pelajar yang mengikuti kursus kokurikulum yang ramai termasuk Kolej Bersekutu UiTM perlu kepada pemantauan yang rapi. Pengstrukturan semula UiTM amnya dan penyusunan semula perkhidmatan-perkhidmatan di Bahagian Hal Ehwal Pelajar khasnya telah mengambil kira fungsi serta peranan dan semua Staf Unit Kesatria untuk memastikan perkhidmatan di Bahagian Hal Ehwal Pelajar memenuhi keperluan para pelajar dan hasrat universiti.
        </p>

         <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
        Penstrukturan semula fungsi organisasi Unit Kesatria dan Staf Skim Kesatria dilihat satu usaha serius Bahagian Hal Ehwal Pelajar dalam memantapkan pelaksanaan kokurikulum di UiTM. Dalam perkara ini mulai Oktober 2007, Unit Kesatria ditukar nama kepada Unit Kokurikulum dan Pegawai Kesatria serta Pembantu Kesatria disebut Pegawai Kokurikulun dan Pembantu Kokurikulum. Dengan ini fungsi mereka bukan sahaja bertaggungjawab kepada Kokurikulum Badan Beruniform sahaja malahan semua kursus kokurikulum di UiTM diletak di bawah pengurusan Pegawai dan staf Kokurikulum. Ini bertujuan untuk memberi lebih ruang kepada organisasi memperluaskan skop tugas, meningkatkan fungsi dan tanggungjawab kepada jawatan sedia ada. Dengan ini diharap pelaksanaan kursus kokurikulum di seluruh sistem UiTM akan berjalan lebih tersusun dan sistematik dalam menghasilkan gradúan yang holistik, seimbang dan berciri keusahawanan.
        </p>

         <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
         Pusat Kokurikulum sehingga kini telah pun melalui pelbagai era perubahan sesuai dengan visi dan misi Universiti dan juga perubahan senario sosio-budaya dan sosio-politik Negara. Isu Ketuanan Melayu/Patriotisme terkini merupakan agenda pertama Universiti dalam penjanaan semula semangat patriotik dalam kalangan pelajar UiTM buat ketika ini. Selain itu, program kesukarelawanan juga mendapat keutamaan untuk dilaksanakan.
        </p>

         <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 20px; text-align: justify;">
         Pada masa kini terdapat 209 kursus kokurikulum berkredit yang diletakkan di bawah lapan teras, iaitu:
         </p>

        <!-- You can continue your paragraphs as above -->

  <!-- Adding the image at the bottom -->
        <div style="text-align: center; margin-top: 40px;">
            <img src="Teras_koko.png" alt="Teras Kokurikulum" style="max-width: 100%; height: auto; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        </div>


        <h3 style="font-size: 26px; color: #32004b; margin-top: 30px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Visi</h3>
        <p style="font-size: 15px; color: #333; line-height: 1.8; margin-bottom: 30px; text-align: justify;">
            Menjadikan UiTM sebuah universiti terkemuka dunia dalam bidang Sains, Teknologi, Kemanusiaan dan Keusahawanan.
        </p>

        <h3 style="font-size: 26px; color: #32004b; margin-top: 30px; margin-bottom: 20px; text-transform: uppercase; letter-spacing: 1px;">Misi</h3>
        <p style="font-size: 15px; color: #333; line-height: 1.8; text-align: justify;">
            Menjuarai pembangunan bumiputera profesional yang tangkas menerusi kurikulum terkehadapan dan penyelidikan berimpak.
        </p>
        
          </div>
</section>


<!-- Direktori Section -->
<section id="directory" style="padding: 60px 20px; background-color: #e0e0e0;">
    <h2 style="font-size: 36px; color: #32004b; text-align: center; margin-bottom: 40px;">Direktori</h2>

    <!-- Organizational Chart -->
    <div class="organizational-chart" style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
        <!-- Top level: Penolong Pendaftar Kokurikulum -->
        <div class="staff-member top-level" style="text-align: center;">
            <div class="staff-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                <img src="tAzri.png" alt="Penolong Pendaftar Kokurikulum" style="width: 100%; height: auto;">
            </div>
            <div class="staff-info" style="margin-top: 10px;">
                <p style="font-size: 20px; color: #32004b; font-weight: bold;">Penolong Pendaftar (Kokurikulum)</p>
                <p style="font-size: 18px; color: #555;">MUHAMMAD AZRI BIN IBRAHIM</p>
            </div>
        </div>

        <!-- Bottom level: Pegawai Eksekutif (in the middle), Kerani Kanan, and Kerani (side by side) -->
        <div class="bottom-level" style="display: flex; justify-content: center; margin-top: 60px;">

            <!-- Kerani Kanan -->
            <div class="staff-member" style="text-align: center; margin-right: 30px;">
                <div class="staff-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                    <img src="pShida.png" alt="Kerani Kanan" style="width: 100%; height: auto;">
                </div>
                <div class="staff-info" style="margin-top: 10px;">
                    <p style="font-size: 20px; color: #32004b; font-weight: bold;">Kerani Kanan</p>
                    <p style="font-size: 18px; color: #555;">SHAIDATUL AZAWIYAH BINTI MOHD SHAHAR</p>
                </div>
            </div>

            <!-- Pegawai Eksekutif -->
            <div class="staff-member" style="text-align: center; margin-right: 30px;">
                <div class="staff-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                    <img src="tMil.png" alt="Pegawai Eksekutif" style="width: 100%; height: auto;">
                </div>
                <div class="staff-info" style="margin-top: 10px;">
                    <p style="font-size: 20px; color: #32004b; font-weight: bold;">Pegawai Eksekutif (Kesatria)</p>
                    <p style="font-size: 18px; color: #555;">MUHAMAD NORAZMIL BIN MOHAMAD MOKHTAR</p>
                </div>
            </div>


            <!-- Kerani -->
            <div class="staff-member" style="text-align: center;">
                <div class="staff-photo" style="width: 150px; height: 150px; border-radius: 50%; overflow: hidden; margin: 0 auto;">
                    <img src="cTaufiq1.png" alt="Kerani" style="width: 100%; height: auto;">
                </div>
                <div class="staff-info" style="margin-top: 10px;">
                    <p style="font-size: 20px; color: #32004b; font-weight: bold;">Kerani</p>
                    <p style="font-size: 18px; color: #555;">MUHAMAD TAUFIQ BIN MOHD HASHIM</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .staff-member {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        transition: transform 0.3s ease-in-out;
    }

  .staff-photo {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    overflow: hidden;
    margin: 0 auto;
    position: relative;
    border: 3px solid #d1d1d1; /* Soft grey border */
    background-color: #e0e0e0; /* Warna latar belakang yang lembut */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Shadow lembut supaya nampak ada depth */
}



    .staff-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: top;
}


    .staff-info {
        margin-top: 10px;
    }

    .staff-info p {
        margin: 5px 0;
    }

    .staff-info p:first-child {
        font-size: 20px;
        color: #32004b;
        font-weight: bold;
    }

    .staff-info p:last-child {
        font-size: 18px;
        color: #555;
    }

    .bottom-level {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .bottom-level .staff-member {
        margin-right: 30px;
    }

    /* Interactive hover effect */
    .staff-member:hover {
        transform: scale(1.05);
    }

    /* Responsive Layout for Smaller Screens */
    @media screen and (max-width: 768px) {
        .bottom-level {
            flex-direction: column;
            align-items: center;
        }

        .bottom-level .staff-member {
            margin-right: 0;
            margin-bottom: 30px;
        }
    }
</style>

<!-- Iklan Section -->
<section id="iklan">
    <h2 style="text-align: center;">Iklan</h2>
    <div class="carousel">
        <div class="carousel-wrapper">
            <?php
            include 'dbconn.php'; // Include the database connection

            // Fetch posters from the database
            $query = "SELECT * FROM posters ORDER BY id DESC";
            $result = mysqli_query($conn, $query);

            // Check if any posters are found
            if (mysqli_num_rows($result) > 0) {
                // Display each poster
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='poster-item'>";
                    echo "<img src='" . htmlspecialchars($row['file_path'], ENT_QUOTES, 'UTF-8') . "' alt='" . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') . "'>";
                    echo "<p>" . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p style='text-align: center;'>Tiada iklan tersedia.</p>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </div>
        <!-- Navigation Arrows -->
        <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
        <button class="next" onclick="moveSlide(1)">&#10095;</button>
    </div>
</section>

<style>
/* Carousel container */
.carousel {
    position: relative;
    max-width: 80%;
    margin: 0 auto;
    overflow: hidden;
}

/* Wrapper for the posters */
.carousel-wrapper {
    display: flex;
    transition: transform 0.5s ease;
    gap: 20px;
}

/* Individual poster items */
.poster-item {
    flex: 0 0 calc(33.333% - 20px); /* 3 posters per row */
    text-align: center;
}

.poster-item img {
    width: 100%;
    border: 2px solid #ccc;
    border-radius: 8px;
    transition: transform 0.3s ease;
}

.poster-item img:hover {
    transform: scale(1.05);
    border-color: #6a1b9a; /* UiTM purple theme */
}

.poster-item p {
    margin-top: 10px;
    font-size: 16px;
}

/* Navigation buttons */
button.prev,
button.next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background-color: #6a1b9a;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 50%;
    z-index: 10;
}

button.prev {
    left: 10px;
}

button.next {
    right: 10px;
}

button.prev:hover,
button.next:hover {
    background-color: #4a148c;
}

@media (max-width: 768px) {
    .poster-item {
        flex: 0 0 calc(50% - 10px); /* 2 posters per row on smaller screens */
    }
}
</style>

<script>
let slideIndex = 0; // Index for current slide
const slideWrapper = document.querySelector('.carousel-wrapper');
const slides = document.querySelectorAll('.poster-item');

// Move slide function
function moveSlide(step) {
    const totalSlides = slides.length;
    const slidesPerView = 3; // Number of posters visible at a time
    const maxIndex = Math.ceil(totalSlides / slidesPerView) - 1;

    // Update slide index
    slideIndex = Math.min(Math.max(slideIndex + step, 0), maxIndex);

    // Move the carousel
    const offset = -slideIndex * slideWrapper.offsetWidth;
    slideWrapper.style.transform = `translateX(${offset}px)`;
}
</script>

 <!-- Pelajar Section -->
<section id="pelajar" style="text-align: center; background-color: #e0e0e0; padding: 50px 0;">
    <h2 style="text-align: center; color: #32004b;">Pelajar</h2>
    <p style="text-align: center; color: #666666; font-size: 18px; margin-bottom: 40px; font-family: 'Arial', sans-serif;">
        Jadual Kokurikulum
    </p>

    <?php
    include 'dbconn.php'; // Sambungkan ke database

    $query = "SELECT * FROM jadual_kokurikulum ORDER BY uploaded_at DESC";
    $result = mysqli_query($conn, $query);
    ?>

    <div style="width: 80%; margin: auto; background: white; padding: 20px; border-radius: 10px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <table style="width: 100%; border-collapse: collapse;">
            <tr style="background-color: #32004b; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">Nama Jadual</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Tarikh Muat Naik</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Fail</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr style="background-color: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo htmlspecialchars($row['nama_jadual']); ?></td>
                <td style="padding: 10px; border: 1px solid #ddd;"><?php echo $row['uploaded_at']; ?></td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <a href="<?php echo $row['file_path']; ?>" target="_blank" style="color: #32004b; font-weight: bold;">📄 Muat Turun</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</section>

   

<!-- Ikuti Kami Section -->
<section id="ikuti-kami" class="ikuti-kami-section" style="background-color: #f5f5f5;" >
    <h2>Ikuti Kami</h2>
    <p>Jangan ketinggalan untuk mengikuti perkembangan kami di media sosial:</p>

    <div class="social-embeds">
        <!-- Instagram Embed -->
        <div class="social-item">
            <h3><img src="instagram_logo.png" alt="Instagram Logo" style="width: 20px; vertical-align: middle;"> Instagram</h3>
           <!-- LightWidget WIDGET --><script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/ef1efe95169355cf98d5ead9d5cb5f22.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
        </div>

        <!-- Facebook Embed -->
        <div class="social-item">
             <h3><img src="facebook_logo.png" alt="Facebook Logo" style="width: 20px; vertical-align: middle;"> Facebook</h3>
            <iframe 
                src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/profile.php?id=61566250823062&tabs=timeline&width=500&height=500" 
                width="500" 
                height="500" 
                style="border:none; overflow:hidden;" 
                scrolling="no" 
                frameborder="0" 
                allow="encrypted-media">
            </iframe>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
.ikuti-kami-section {
    text-align: center;
    padding: 40px;
    background-color: #f9f9f9;
}

.ikuti-kami-section h2 {
    color: #32004b;
    font-size: 36px;
    margin-bottom: 10px;
}

.ikuti-kami-section p {
    color: #666666;
    font-size: 18px;
    margin-bottom: 40px;
}

.social-embeds {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 40px;
}

.social-item {
    width: 500px;
    text-align: center;
}

.social-item h3 {
    font-size: 20px;
    color: #32004b;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

iframe {
    width: 100%;
    height: 500px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
</style>



      <!-- Hubungi Kami (Contact Us) Section -->
<section id="contact" class="staff-section" style="background-color: #e0e0e0;">
    <h2>Hubungi Kami</h2>
    <p>Anda boleh menghubungi staf kami melalui maklumat di bawah</p>

    <div class="staff-list">
        <div class="staff-item">
            <img src="tAzri.png" alt="Staff Photo">
            <div class="staff-details">
                <h3>MUHAMMAD AZRI BIN IBRAHIM</h3>
                <p>Penolong Pendaftar (Kokurikulum)</p>
                <p><strong>Phone:</strong> <a href="tel:+60192603677">019-2603677</a></p>
                <p><strong>Email:</strong> <a href="mailto:azriibrahim@uitm.edu.my">azriibrahim@uitm.edu.my</a></p>
            </div>
        </div>
        <div class="staff-item">
            <img src="tMil.png" alt="Staff Photo">
            <div class="staff-details">
                <h3>MUHAMAD NORAZMIL BIN MOHAMAD MOKHTAR</h3>
                <p>Pegawai Eksekutif (Kesatria)</p>
                <p><strong>Phone:</strong> <a href="tel:+60192603677">017-5871125</a></p>
                <p><strong>Email:</strong> <a href="mailto:norazmil@uitm.edu.my">norazmil@uitm.edu.my</a></p>
            </div>
        </div>
        <div class="staff-item">
            <img src="pShida.png" alt="Staff Photo">
            <div class="staff-details">
                <h3>SHAIDATUL AZAWIYAH BINTI MOHD SHAHAR</h3>
                <p>Kerani Kanan</p>
                <p><strong>Phone:</strong> <a href="tel:+60192603677">018-9455378</a></p>
                <p><strong>Email:</strong> <a href="mailto:shaidatul763@uitm.edu.my">shaidatul763@uitm.edu.my</a></p>
            </div>
        </div>
        <div class="staff-item">
            <img src="cTaufiq1.png" alt="Staff Photo">
            <div class="staff-details">
                <h3>MUHAMAD TAUFIQ BIN MOHD HASHIM</h3>
                <p>Kerani</p>
                <p><strong>Phone:</strong> <a href="tel:+60192603677">017-5735744</a></p>
                <p><strong>Email:</strong> <a href="mailto:taufiq396@uitm.edu.my">taufiq396@uitm.edu.my</a></p>
            </div>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
.staff-section {
    text-align: center;
    padding: 40px;
}

.staff-list {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}

.staff-item {
    background-color: #f9f9f9;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 250px;
    margin: 20px;
    padding: 15px;
    text-align: center;
    transition: transform 0.3s;
}

.staff-item:hover {
    transform: scale(1.05);
}

.staff-item img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-bottom: 10px;
    border: 3px solid #bdbdbd; /* Soft grey border */
    padding: 3px; /* Ruang kecil untuk elak border terlalu rapat */
    background-color: #e0e0e0; /* Kekalkan warna background */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Lembutkan effect supaya nampak clean */
}

.staff-details h3 {
    margin: 10px 0 5px 0;
    color: #333;
}

.staff-details p {
    margin: 5px 0;
    color: #777;
    font-size: 0.9rem;
}

.staff-details strong {
    color: #444;
}

</style>

<!-- Maklum Balas (Feedback) Section -->
<section id="maklum-balasan" class="feedback-section" style="background-color: #f9f9f9; padding: 60px 20px;">
    <h2 style="font-size: 36px; color: #32004b; text-align: center; margin-bottom: 30px; font-family: 'Arial', sans-serif;">
        Maklum Balas
    </h2>

    <!-- Additional message above the form -->
    <p style="text-align: center; color: #666666; font-size: 18px; margin-bottom: 40px; font-family: 'Arial', sans-serif;">
        Sebarang aduan, pertanyaan, cadangan dan penghargaan, sila majukan di bawah:
    </p>

    <div class="feedback-form" style="max-width: 600px; margin: 0 auto; background-color: #FFFFFF; padding: 40px; border: 1px solid #dddddd; border-radius: 10px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);">
        <!-- HTML Form -->
        <form id="feedbackForm" action="maklum_balas.php" method="POST" style="display: flex; flex-direction: column; gap: 20px;" onsubmit="submitFeedback(event)">
            <div style="display: flex; flex-direction: column;">
                <label for="name" style="font-size: 16px; font-weight: bold; color: #32004b;">Nama:</label>
                <input type="text" id="name" name="name" placeholder="Masukkan nama anda" style="padding: 12px; border: 1px solid #dddddd; border-radius: 5px; font-size: 16px;" required>
            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="email" style="font-size: 16px; font-weight: bold; color: #32004b;">Email:</label>
                <input type="email" id="email" name="email" placeholder="Masukkan email anda" style="padding: 12px; border: 1px solid #dddddd; border-radius: 5px; font-size: 16px;" required>
            </div>

            <div style="display: flex; flex-direction: column;">
                <label for="feedback" style="font-size: 16px; font-weight: bold; color: #32004b;">Maklum Balas:</label>
                <textarea id="feedback" name="feedback" rows="4" placeholder="Tulis maklum balas anda di sini" style="padding: 12px; border: 1px solid #dddddd; border-radius: 5px; font-size: 16px;" required></textarea>
            </div>

            <button type="submit" style="padding: 14px; background-color: #32004b; color: white; font-size: 18px; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s ease;">
                Hantar
            </button>
        </form>
    </div>
</section>

<script>
    function submitFeedback(event) {
        // Prevent form from submitting in the usual way
        event.preventDefault();

        // Create a FormData object to send form data via AJAX
        const formData = new FormData(document.getElementById('feedbackForm'));

        // Send form data to the server using fetch
        fetch('maklum_balas.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            // Show success message in a pop-up window
            alert("Maklum balas anda telah dihantar. Terima kasih!");

            // Reset the form
            document.getElementById('feedbackForm').reset();
        })
        .catch(error => {
            console.error('Error:', error);
            alert("Maaf, terdapat masalah menghantar maklum balas. Sila cuba lagi.");
        });
    }
</script>


    </main>

    <!-- Footer -->
    <footer>
        <p>Contact us at: unitkokurikulum@uitm.edu.my | +605 - 406 7027</p>
        <p>&copy; 2024 Universiti Teknologi MARA. All Rights Reserved.</p>
    </footer>


    <!-- JavaScript for Hamburger Menu -->
    <script>
        function toggleMenu() {
            const navLinks = document.querySelector('.nav-links');
            navLinks.classList.toggle('active');
        }
    </script>

</body>
</html>