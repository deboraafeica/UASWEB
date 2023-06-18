<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $targetDir = "berkas/";

    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    if (is_uploaded_file($fileTmp)) {
        $allowedTypes = array('image/jpeg', 'image/png');
        if (!in_array($fileType, $allowedTypes)) {
            echo '<div class="output-container"><div class="output-text">Jenis berkas tidak diizinkan. Harap unggah gambar (JPG, PNG). </div></div>';
        } elseif ($fileSize > 5000000) {
            '<div class="output-container"><div class="output-text">echo Ukuran berkas terlalu besar. Maksimal 5 MB. </div></div>';
        } else {
            $targetPath = $targetDir . $fileName;

            if (move_uploaded_file($fileTmp, $targetPath)) {
                $host = "localhost";
                $username = "id20906912_root";
                $password = "Abic@nt1k";
                $database = "id20906912_pet";

                $connection = mysqli_connect($host, $username, $password, $database);

                if (mysqli_connect_error()) {
                    die("Koneksi database gagal: " . mysqli_connect_error());
                }

                $query = "INSERT INTO gambar VALUES ('$fileName')";
                if (mysqli_query($connection, $query) === TRUE) {
                    echo '<div class="output-container"><div class="output-text">Berkas berhasil diunggah dan disimpan di database. </div></div>';
                } else {
                    echo '<div class="output-container"><div class="output-text">Terjadi kesalahan saat menyimpan berkas di database: </div></div>';
                }

                mysqli_close($connection);
            } else {
            }
        }
    } else {
        echo '<div class="output-container"><div class="output-text">Terjadi kesalahan saat mengunggah berkas. </div></div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unggah Berkas</title>
    <link rel="stylesheet" href="upload.css"/>
</head>
<body>
    <h1>Unggah Berkas</h1>
    <p>Unggah foto anda dengan format "nama_jpg/png"</p>
    <a href="home.html">Home</a>
    <br><br>
    <form method="POST" enctype="multipart/form-data" action="upload.php">
        <input type="file" name="file" required>
        <br><br>
        <input type="submit" value="Unggah">
    </form>
    <div class="output-container"></div>
</body>
</html>