<!DOCTYPE html>
<html lang="id">
<head>
    <title>Data Terkirim</title>
</head>
<body>
    <h1>Terima Kasih Telah Mengisi Formulir <Data></Data>!</h1>
    <?php
        var_dump($_POST);
        var_dump(isset($_POST['nama_lengkap'])); 
        echo "<br>";
        var_dump(isset($_POST['alamat_pendaftar']));
        echo "<br>";
        var_dump(isset($_POST['tanggal_lahir']));
        echo "<br>";
        var_dump(isset($_POST['jenis_kelamin']));
        echo "<br>";

        if (
         isset($_POST['nama_lengkap']) && isset($_POST['alamat_pendaftar'])&& isset($_POST['tanggal_lahir']) && isset($_POST['jenis_kelamin'])) {

            $nama = $_POST['nama_lengkap'];
            $alamat = $_POST['alamat_pendaftar'];
            $tanggal = $_POST['tanggal_lahir'];
            $Jeniskelamin =$_POST['jenis_kelamin'];
            
            echo "<p>Halo, <strong>" . htmlspecialchars($nama) . "</strong>!</p>";
            echo "<p>Anda Tinggal di: <strong>" . htmlspecialchars($alamat) . "</strong>.</p>";
            echo "<p>Tanggal Lahir Anda Adalah: <strong>" . htmlspecialchars($tanggal) . "</strong>.</p>";
            echo "<p>Anda Memiliki jenis kelamin: <strong>" . htmlspecialchars($Jeniskelamin) . "</strong>.</p>";
            
        } else {
            echo "<p>Maaf, terjadi kesalahan. Data tidak lengkap.</p>";
        }

    ?>
    <a href="form.html">Kembali ke Formulir</a>
</body>
</html>
    
