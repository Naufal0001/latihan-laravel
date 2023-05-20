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
        <input type="text" name="nama" value="{{ $update['nama'] }}">
        <input type="text" name="kelas" value="{{ $update['kelas'] }}">
        <input type="text" name="nis" value="{{ $update['nis'] }}">
        <input type="submit" value="kirim">
    </form>

</body>
</html>