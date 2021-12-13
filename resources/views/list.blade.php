<html>

<head>
    <title>Data Nilai Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h3 align="center">DATA NILAI MAHASISWA</h3>

    <center>
        <form action="index.php" method="get">
            <label>Cari :</label>
            <input type="text" name="cari">
            <input type="submit" value="Cari">
        </form>
    </center>


    <center>
        <table width="80%" border="1">
            <tr bgcolor="#539CDC" align="center">
                <th>NIM</th>
                <th>Nama</th>
                <th>Tugas Terstruktur</th>
                <th>Tugas Mandiri</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Nilai Akhir</th>
                <th>Input Nilai</th>
            </tr>

            @foreach($mahasiswa as $row)
            <tr style="text-align: center; vertical-align: middle;">
                <td>{{ $row->id }}</td>
                <td>{{ $row->nama }}</td>
                <td>{{ $row->tt }}</td>
                <td>{{ $row->tm }}</td>
                <td>{{ $row->uts }}</td>
                <td>{{ $row->uas }}</td>
                <td>{{ $row->na }}</td>
                <td>
                    <a href="{{'edit/'.$row['id']}}">Tambah</a>
                </td>
            </tr>
            @endforeach
        </table>
    </center>
    <br>
    <br>
</body>

</html>