<?php 
include 'koneksi.php';

$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);

?>

<!DOCTYPE  html>
<html lang="en">
    <link rel="stylesheet" href="styles.css">


<head>
    <meta charset="UTF-8">
    <title >Data Mahasiswa</title>
</head>

<body>
    <div class="awal">
    <h2>Data Mahasiswa</h2>
   <a href="tambah_mahasiswa.php"><button>Tambah Data</button></a>
    </div>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Nomor</th>
            <th>Jurusan</th>
            <th>Aksi</th>
</tr>

<?php while ($row = $result->fetch_assoc()) { ?>
    <tr>

    <td><?php echo $row[ 'nama']; ?></td>
    <td><?php echo $row[ 'nim']; ?></td>
    <td><?php echo $row[ 'email']; ?></td>
    <td><?php echo $row[ 'nomor']; ?></td>
    <td><?php echo $row[ 'jurusan']; ?></td>
    <td>
    <a href="edit_mahasiswa.php?id=<?php echo $row['id']; ?>"><button>Edit</button></a> |
    <a href="hapus_kampus.php?id=<?php echo  $row['id']; ?>"><button>Hapus</button></a> 
    </td>
    </tr>
    <?php } ?>
    </table>


</body>
</html>

<?php $conn->close(); ?>
    

