<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="proses3.css">
</head>
<body>
    <div class="wrap">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST["nama"];
        $judul = $_POST["judul"];
        $isi = $_POST["isi"];

        echo "Penulis: " . $nama . "<br>";
        echo "Tanggal: " . date('m/j/Y H:i') . "<br>";
        echo "<div class='judul'>" . $judul . "<br></div>";
        echo "<div class='isi'>". $isi . "<br></div>";
    }
    ?>
    </div>
</body>
</html>