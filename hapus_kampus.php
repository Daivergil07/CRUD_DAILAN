<?php
include 'koneksi.php';


if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']); 


    $stmt = $conn->prepare("DELETE FROM mahasiswa WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close(); 
} else {
    echo "ID tidak valid.";
}

$conn->close(); 
?>
