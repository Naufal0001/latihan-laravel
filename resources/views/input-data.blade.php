<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">
        @csrf
        <input type="text" name="nama">
        <input type="text" name="kelas">
        <input type="text" name="nis">
        <input type="submit" value="kirim">
    </form><br>

    <a href="/index"><button>Lihat Data</button></a>

</body>
</html>