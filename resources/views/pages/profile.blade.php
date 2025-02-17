<?php
// Data biodata
$biodata = [
    'nama' => 'Salsabilla Putri Ransti',
    'usia' => 25,
    'alamat' => 'Kalijati Barat',
    'email' => 'spranesti07@gmail.com',
    'hobi' => 'Menonton',
    'bio' => 'Saya adalah seorang pengembang web yang menyukai teknologi dan petualangan.'
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e9ecef;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .profile-img {
            display: block;
            margin: 0 auto 20px;
            border-radius: 50%;
            width: 150px;
            height: 150px;
        }
        .info {
            margin: 10px 0;
        }
        .info label {
            font-weight: bold;
        }
        .hobi {
            list-style-type: none;
            padding: 0;
        }
        .hobi li {
            background: #007bff;
            color: white;
            padding: 5px;
            margin: 5px 0;
            border-radius: 5px;
        }
        .bio {
            display: none;
            margin-top: 10px;
            padding: 10px;
            background: #f8f9fa;
            border-left: 5px solid #007bff;
        }
        .show-bio {
            cursor: pointer;
            color: #007bff;
            text-decoration: underline;
        }
    </style>
    <script>
        function toggleBio() {
            var bio = document.getElementById('bio');
            if (bio.style.display === 'none') {
                bio.style.display = 'block';
            } else {
                bio.style.display = 'none';
            }
        }
    </script>
</head>
<body>

<div class="container">
    <h1>Biodata Saya</h1>
    <img src="profile.jpg" alt="Profile Picture" class="profile-img"> <!-- Ganti dengan path gambar Anda -->
    <div class="info">
        <label>Nama:</label>
        <p><?php echo $biodata['nama']; ?></p>
    </div>
    <div class="info">
        <label>Usia:</label>
        <p><?php echo $biodata['usia']; ?> Tahun</p>
    </div>
    <div class="info">
        <label>Alamat:</label>
        <p><?php echo $biodata['alamat']; ?></p>
    </div>
    <div class="info">
        <label>Email:</label>
        <p><?php echo $biodata['email']; ?></p>
    </div>
    <div class="info">
        <label>Hobi:</label>
        <ul class="hobi">
            <?php foreach ($biodata['hobi'] as $hobi): ?>
                <li><?php echo $hobi; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="info">
        <span class="show-bio" onclick="toggleBio()">Tampilkan Bio</span>
        <div id="bio" class="bio">
            <p><?php echo $biodata['bio']; ?></p>
        </div>
    </div>
</div>

</body>
</html>