<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>Kelas</th>
            <th>NIS</th>
            <th colspan="2">Aksi</th>
        </tr>

        @foreach ($data as $datas)
    
        <tr>
            <td>{{ $datas['nama'] }}</td>
            <td>{{ $datas['kelas'] }}</td>
            <td>{{ $datas['nis'] }}</td>
            <td><a href="/update/{{ $datas['id'] }}"><button>Edit</button></a></td>
            <td><a href="/delete/{{ $datas['id'] }}"><button>Hapus</button></a></td>
        </tr>

        @endforeach

    </table>
<br>
    <a href="/index/input"><button>Tambah Data</button></a>

</body>
</html>