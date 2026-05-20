<!DOCTYPE html>
<html>
<head>
    <title>Form CV Data Diri</title>
    <style>
        body{font-family:Arial; background:#f2f2f2;}
        .container{
            width:400px;
            margin:auto;
            background:white;
            padding:20px;
            margin-top:30px;
            border-radius:10px;
        }
        input, textarea, select{
            width:100%;
            padding:8px;
            margin:5px 0 10px;
        }
        button{
            padding:10px;
            width:100%;
            background:green;
            color:white;
            border:none;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Form CV Data Diri</h2>
    <form action="proses.php" method="POST">
        Nama: <input type="text" name="nama">
        Tempat, Tanggal Lahir: <input type="text" name="ttl">
        Jenis Kelamin:
        <select name="jk">
            <option>Laki-laki</option>
            <option>Perempuan</option>
        </select>
        Alamat: <textarea name="alamat"></textarea>
        Email: <input type="email" name="email">
        No HP: <input type="number" name="hp">
        Jurusan: <input type="text" name="jurusan">
        Skill: <input type="text" name="skill">
        
        <button type="submit">Kirim</button>
    </form>
</div>
</body>
</html>