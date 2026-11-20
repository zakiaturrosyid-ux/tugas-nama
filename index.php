<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Penggunaan PHP FORM</title>
</head>
<body>
    <h1>Data Pengguna</h1>

    <form action="" method="get">
        <label for="nama">Masukkan Nama:</label>
        <input type="text" name="nama" id="nama" required>
        <button type="submit">OK</button>
    </form>

    <?php
    if (isset($_GET['nama']) && $_GET['nama'] !== '') {
        $nama = htmlspecialchars($_GET['nama'], ENT_QUOTES, 'UTF-8');
        echo 'Selamat datang - ' . $nama;
    }
    ?>
</body>
</html>
