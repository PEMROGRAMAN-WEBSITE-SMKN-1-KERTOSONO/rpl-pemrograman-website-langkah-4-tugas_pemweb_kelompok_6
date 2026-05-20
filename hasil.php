<!DOCTYPE html>
<html>
<head>
    <title>Hasil CV</title>
    <style>
        body{font-family:Arial; background:#eef;}
        .cv{
            width:500px;
            margin:auto;
            background:white;
            padding:20px;
            margin-top:30px;
            border-radius:10px;
        }
    </style>
</head>
<body>
<div class="cv">
    <h2>CV Data Diri</h2>
    <p>Nama: <?php echo $nama; ?></p>
    <p>TTL: <?php echo $ttl; ?></p>
    <p>Jenis Kelamin: <?php echo $jk; ?></p>
    <p>Alamat: <?php echo $alamat; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>No HP: <?php echo $hp; ?></p>
    <p>Jurusan: <?php echo $jurusan; ?></p>
    <p>Skill: <?php echo $skill; ?></p>
</div>
</body>
</html>