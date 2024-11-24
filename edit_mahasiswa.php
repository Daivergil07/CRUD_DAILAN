<?php
include 'koneksi.php';

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); 

    $sql = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
    } else {
        echo "Data tidak ditemukan.";
        exit;
    }
} else {
    echo "ID tidak valid.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="edit.css">


<head>
    <meta charset="UTF-8">
    <title>Edit Data Mahasiswa</title>
</head>

<body>

<div class="capung">
<form action="proses_edit.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    Nama: <input type="text" name="nama" value="<?php echo $data['nama']; ?>"><br>
    Nim: <input type="text" name="nim" value="<?php echo $data['nim']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $data['email']; ?>"><br>
    Nomor: <input type="text" name="nomor" value="<?php echo $data['nomor']; ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?php echo $data['jurusan']; ?>"><br>
    <input type="submit" value="Simpan">
</form>
</div>
<video autoplay muted loop class="video-background">
    <source src="84574-586228759_medium.mp4" type="video/mp4">
</video>
</body>

</html>
