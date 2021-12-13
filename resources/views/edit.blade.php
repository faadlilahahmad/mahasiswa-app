<html>

<head>
    <title></title>
</head>

<body>
    <h3 align="center">FORM UBAH DATA</h3>

    <form action="/edit" method="POST">
        @csrf
        <table align="center">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input type="text" name="id" value="{{$data['id']}}" readonly>
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="{{$data['nama']}}" readonly>
                </td>
            </tr>
            <tr>
                <td>Tugas Terstruktur</td>
                <td>:</td>
                <td><input type="number" name="tt" value="{{$data['tt']}}" required /></td>
            </tr>
            <tr>
                <td>Tugas Mandiri</td>
                <td>:</td>
                <td><input type="number" name="tm" value="{{$data['tm']}}" required /></td>
            </tr>
            <tr>
                <td>UTS</td>
                <td>:</td>
                <td><input type="number" name="uts" value="{{$data['uts']}}" required /></td>
            </tr>
            <tr>
                <td>UAS</td>
                <td>:</td>
                <td><input type="number" name="uas" value="{{$data['uas']}}" required /></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Tambah" />
                    <input type="reset" name="reset" value="Hapus" />
                    <input type="button" name="back" value="Kembali" onclick="self.history.back()">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>