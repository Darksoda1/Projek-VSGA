<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSGA Hotel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        .hero {
            background-image: url('home.jfif');
            background-size: cover;
            background-position: center;
            height: 100vh;
            color: white;
            text-shadow: 2px 2px 4px #000;
        }

        .hero::after {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 5%;
            bottom: 0;
            background: linear-gradient(0deg, rgba(255, 255, 255, 1) 8px, rgba(255, 255, 255, 0) 25px);
        }

        .tentang-kami {
            background-color: white;
            padding: 50px 0;
        }

        .tentang-kami h2 {
            margin-bottom: 30px;
        }

        .tentang-kami p {
            font-size: 1.1em;
            margin-bottom: 30px;
        }

        .contact-info {
            font-size: 1.1em;
            margin-top: 30px;
        }

        .map-container {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><b>VSGA <span>Hotel</span></b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#kategori">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang-kami">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero d-flex align-items-center justify-content-center text-center">
        <div>
            <h1 class="display-4">Selamat Datang di VSGA Hotel</h1>
            <p class="lead">Nikmati kemewahan dan kenyamanan yang tiada banding.</p>
        </div>
    </div>

    <!-- Kategori Section -->
    <section class="kategori" id="kategori">
        <form action="pemesanan.php" method="post">
            <div class="container my-5">
                <h2 class="text-center mb-4">Kategori Kamar</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="standar.jpg" class="card-img-top" alt="Room 1" height="237px">
                            <div class="card-body">
                                <h5 class="card-title">Kamar Standar</h5>
                                <p class="card-text">Kamar standar dengan fasilitas lengkap dan nyaman.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="Family.jpg" class="card-img-top" alt="Room 2">
                            <div class="card-body">
                                <h5 class="card-title">Kamar Family</h5>
                                <p class="card-text">Kamar family dengan pemandangan indah dan fasilitas mewah.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="deluxe.jpg" class="card-img-top" alt="Room 3" height="237px">
                            <div class="card-body">
                                <h5 class="card-title">Kamar Deluxe</h5>
                                <p class="card-text">Kamar Deluxe dengan fasilitas terbaik dan layanan premium.</p>
                            </div>
                        </div>
                    </div>
                    <table class="table" border="0.5">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Jenis Kamar</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Standar</td>
                                <td>Rp.250.000</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Family</td>
                                <td>Rp.375.000</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Deluxe</td>
                                <td>Rp.500.000</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center bg-blue">
                        <button onclick="pesanKamar()">Pesan Kamar</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!-- Tentang Kami Section -->
    <section class="tentang-kami" id="tentang-kami">
        <div class="container my-5">
            <h2 class="text-center mb-4">Tentang Kami</h2>
            <p class="text-center">VSGA Hotel menawarkan akomodasi mewah dengan fasilitas dan layanan terbaik. Terletak di pusat kota, kami menyediakan tempat yang ideal untuk pelancong bisnis dan liburan. Dengan berbagai tipe kamar yang dilengkapi dengan fasilitas modern, kami memastikan setiap tamu mendapatkan pengalaman menginap yang tak terlupakan. Staf kami yang ramah dan profesional selalu siap melayani kebutuhan Anda 24 jam sehari.</p>
            <div class="contact-info text-center">
                <p><strong>Kontak Kami:</strong></p>
                <div class="d-flex justify-content-evenly">
                <p>No Telepon: +62 242-3423-5675</p>
                <p>Email: info@vsgahotel.com</p>
                </div>
            </div>
            <div class="text-center">
            <p><strong> Lokasi Kami!</strong></p>
            <div class="map-container d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.015992975222!2d144.96163231531443!3d-37.81421797975143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6432f6c8b5b7f%3A0x5a11d1c5e4e6e676!2sVSGA%20Hotel!5e0!3m2!1sen!2sid!4v1616178753645!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center py-4">
        <p>&copy; 2024 VSGA Hotel. All rights reserved.</p>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>
``
