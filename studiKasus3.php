<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="kasus3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>News</title>
</head>
<body>
    <form action="proses3.php" method="POST" >
        <div class="wrap">
            <table>
                <tr>
                    <th>Nama</th>
                    <th>:</th>
                    <th><input type="text" name="nama"></th>
                    <th> </th>
                </tr>
                <tr>
                    <th>Tanggal</th>
                    <th>:</th>
                    <th>
                        <?php 
                        echo date('m/j/Y H:i');
                        ?>
                    </th>
                    <th> </th>
                </tr>
                <tr>
                    <th>Judul</th>
                    <th>:</th>
                    <th><input type="text" name="judul"></th>
                    <th> </th>
                </tr>
                <tr>
                    <th> </th>
                    <th>:</th>
                    <th><textarea name="isi" cols="100" rows="10"></textarea></th>
                    <th> </th>
                </tr>
                <tr>
                    <th> </th>
                    <th> </th>
                    <th> </th>
                    <th><input type="submit" value="Kirim" class="btn"></th>
                </tr>
            </table>
        </div>
    </form>
</body>
</html>