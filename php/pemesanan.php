<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pemesanan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: white;
        }
        .form-container {
            width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-actions button {
            width: 100px;
        }
    </style>
</head>
<body>
<div class="form-container">
        <h2><strong>Form Pemesanan</strong></h2>
        <form method="post" action="save-data.php">
            <div class="form-group mb-3 d-flex">
                <label for="nama_pemesan">Nama Pemesan</label>
                <input type="text" class="form-control ms-4" id="nama_pemesan" name="nama_pemesan" required>
            </div>
            <div class="form-group mb-3 d-flex">
                <label>Jenis Kelamin</label>
                <div class="form-check ms-3">
                    <input type="radio" class="form-check-input" id="laki_laki" name="jenis_kelamin" value="Laki-laki" required>
                    <label class="form-check-label" for="laki_laki">Laki-laki</label>
                </div>
                <div class="form-check ms-4">
                    <input type="radio" class="form-check-input" id="perempuan" name="jenis_kelamin" value="Perempuan" required>
                    <label class="form-check-label" for="perempuan">Perempuan</label>
                </div>
            </div>
            <div class="form-group mb-3 d-flex">
                <label for="nomor_identitas">Nomor Identitas</label>
                <input type="text" class="form-control ms-4" id="nomor_identitas" name="nomor_identitas" required>
            </div>
            <div class="form-group mb-3 d-flex">
                <label for="tipe_kamar">Tipe Kamar</label>
                <select id="tipe_kamar" class="form-select ms-5" name="tipe_kamar" onchange="updateHarga()" required>
                    <option value="STANDARD">STANDARD</option>
                    <option value="FAMILY">FAMILY</option>
                    <option value="DELUXE">DELUXE</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" readonly>
            </div>
            <div class="form-group mb-3 d-flex">
                <label for="tanggal_pesan">Tanggal Pesan</label>
                <input type="date" class="form-control ms-4" id="tanggal_pesan" name="tanggal_pesan" required>
            </div>
            <div class="form-group mb-3">
                <label for="durasi_menginap">Durasi Menginap (Hari)</label>
                <input type="number" class="form-control" id="durasi_menginap" name="durasi_menginap" value="3" required>
            </div>
            <div class="form-group mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="termasuk_breakfast" name="termasuk_breakfast" value="Ya" checked>
                    <label class="form-check-label" for="termasuk_breakfast">Termasuk Breakfast (Rp.80.000)</label>
                </div>
            </div>
            <input type="hidden" id="discount" name="discount" value="">
            <div class="form-group mb-3 d-flex">
                <label for="total_bayar">Total Bayar</label>
                <input type="text" class="form-control ms-5" id="total_bayar" name="total_bayar" readonly>
            </div>
            <div class="form-actions d-flex justify-content-between">
                <button type="button" class="btn btn-primary" onclick="hitungTotalBayar()">Hitung Total Bayar</button>
                <button type="submit" class="btn btn-success">Simpan</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>

    <script>
        function updateHarga() {
            var tipeKamar = document.getElementById('tipe_kamar').value;
            var harga;

            if (tipeKamar == 'STANDARD') {
                harga = 300000;
            } else if (tipeKamar == 'FAMILY') {
                harga = 425000;
            } else if (tipeKamar == 'DELUXE') {
                harga = 550000;
            }

            document.getElementById('harga').value = harga.toLocaleString('id-ID', { minimumFractionDigits: 0 });
        }

        function hitungTotalBayar() {
            var harga = parseFloat(document.getElementById('harga').value.replace(/\./g, ''));
            var durasi = parseInt(document.getElementById('durasi_menginap').value);
            var total = harga * durasi;

            if (durasi > 2) {
                diskon = total * 0.2;
                // total *= 0.1; // Diskon 10% 
                console.log(diskon)
                document.getElementById('discount').value = diskon;
                total -= diskon;
            }

            console.log(total)

            if (document.getElementById('termasuk_breakfast').checked) {
                total += 80000; // Tambahan biaya breakfast
            } 


            document.getElementById('total_bayar').value = total.toLocaleString('id-ID', { minimumFractionDigits: 0 });
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            updateHarga();
        });
    </script>
</body>
</html>
