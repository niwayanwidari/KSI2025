<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (nama, email) VALUES ('$nama', '$email')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    <button type="submit" name="submit">Tambah Data</button>
</form>
