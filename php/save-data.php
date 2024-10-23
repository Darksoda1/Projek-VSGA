<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Save Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            height : 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        .form-group input[type="radio"] {
            width: auto;
        }
        .form-actions {
            text-align: center;
        }
        .form-actions button {
            padding: 10px 20px;
            margin: 5px;
        }
    </style>
</head>
<body>
<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
// exit;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_pemesan = $_POST['nama_pemesan'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $nomor_identitas = $_POST['nomor_identitas'];
        $tipe_kamar = $_POST['tipe_kamar'];
        $harga = $_POST['harga'];
        $tanggal_pesan = $_POST['tanggal_pesan'];
        $durasi_menginap = $_POST['durasi_menginap'];
        $discount = $_POST['discount'];
        $termasuk_breakfast = isset($_POST['termasuk_breakfast']) ? "Ya" : "Tidak";
        $total_bayar = $_POST['total_bayar'];

        include "koneksi.php";

        $query = "INSERT INTO  data_pemesan (Nama_Pemesan,Nomor_Identitas,Jenis_kelamin,Tipe_Kamar, Durasi_Penginapan,Discount,Total_Bayar) 
                        VALUES ('$nama_pemesan', '$nomor_identitas', '$jenis_kelamin', '$tipe_kamar', '$durasi_menginap', '$discount','$total_bayar' )";

        mysqli_query ($koneksi, $query) or die(mysqli_error($koneksi));

       
        // Here you can write code to save the data to the database or process it as needed

        echo "<div class='form-container' ><h2>Data Pemesanan</h2>";
        echo "<p>Nama Pemesan: $nama_pemesan</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";
        echo "<p>Nomor Identitas: $nomor_identitas</p>";
        echo "<p>Tipe Kamar: $tipe_kamar</p>";
        echo "<p>Harga: $harga</p>";
        echo "<p>Tanggal Pesan: $tanggal_pesan</p>";
        echo "<p>Durasi Menginap: $durasi_menginap</p>";
        if ($durasi_menginap > 2) {
            echo "<p>Discount: 20%</p>";
        }
        
        echo "<p>Termasuk Breakfast: $termasuk_breakfast</p>";
        echo "<p>Total Bayar: $total_bayar</p></div>";
    }
    ?>
</body>
</html>
