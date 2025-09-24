<?php
// Data (ubah sesuai kebutuhan)
$nama      = "Fazra Fatimah Azahra";
$jabatan   = "Mahasiswa";
$email     = "fazrafatimah5@gmail.com";
$telepon   = "+62 821-2159-8276";
$alamat    = "Jl. Banjarsari-Pangandaran Kec. Banjarsari Kab. Ciamis";
$deskripsi = "Saya adalah seorang individu yang memiliki semangat tinggi dalam bekerja di bidang layanan makanan. Dengan kemampuan manajemen waktu yang baik, saya terbiasa bekerja dalam tekanan dan menangani banyak tugas sekaligus.";

$pendidikan = [
  "2012 - 2017: SDN 3 Kawasen",
  "2018 - 2020: MTsS Adawiyah",
  "2021 - 2023: SMAN 1 Banjarsari"
];

$pengalaman = [
  "2022 - 2024: Catering Alalis - di Banjar"
];

$skills = [
  "Manajemen Waktu" => 90,
  "Pengolahan Makanan" => 85,
  "Perencanaan Menu" => 88,
  "Kebersihan dan Keamanan Makanan" => 92,
  "Kerja Tim" => 80,
  "Pelayanan Pelanggan" => 84,
  "Dekorasi dan Penyajian" => 75,
  "Logistik dan Koordinasi Acara" => 78,
  "Manajemen Stok Bahan Baku" => 80,
  "Adaptasi dan Multitasking" => 87
];
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CV - <?= htmlspecialchars($nama); ?></title>

  <style>
  /* ===== Gabungan CSS (dari kedua bagian) ===== */
  :root {
    --accent: #d4af37;
    --accent-2: #c29f3c;
    --muted: #7b6f5c;
    --bg1: #fbeee6;
    --bg2: #f9e3d9;
  }

  * { box-sizing: border-box; }

  body {
    font-family: 'Nunito', sans-serif;
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom right, var(--bg1), var(--bg2));
    color: #3d3d3d;
    -webkit-font-smoothing: antialiased;
  }

  .container {
    max-width: 900px;
    margin: 40px auto 30px;
    background: #ffffff;
    padding: 36px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-radius: 12px;
  }

  /* header */
  .header, header.header {
    text-align: center;
    margin-bottom: 30px;
  }

  .header img, header.header img {
    width: 130px;
    height: 130px;
    object-fit: cover;
    border-radius: 50%;
    border: 4px solid var(--accent);
    margin-bottom: 10px;
  }

  .header h1, header.header h1 {
    margin: 10px 0 5px;
    font-size: 2.2em;
    color: var(--accent);
  }

  .he
